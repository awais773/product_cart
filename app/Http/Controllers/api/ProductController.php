<?php

namespace App\Http\Controllers\api;

use DB;
use App\Models\User;
use App\Models\Api\Store;
use App\Models\Api\Product;
use App\Models\Api\Complain;
use App\Models\Api\Faviourt;
use Illuminate\Http\Request;
use App\Models\Api\Distributer;
use App\Models\Api\ProductImage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\CodeCoverage\Driver\Selector;

class ProductController extends Controller
{

    public function index()
    {
        $data = Product::latest()->with('category', 'distributer', 'fviourtUser','productImage')->where('status','Approved')->get();

                if (is_null($data)) {
                    return response()->json([
                        'success' => false,
                        'message' => 'data not found'
                    ],);
                }
                return response()->json([
                    'success' => 'True',
                    'message' => 'All Data susccessfull',
                    'data' => $data,
        
                ]);
            
           
    }
    public function store(Request $req)
    {
        $validator = Validator::make($req->all(), [
            //   'name' => 'required',
            //  'email' => 'required',
            // 'contact_person' => 'required',
            //  'contact_number' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
       
        $rating = new Product();
        $rating->product_name = $req->product_name;
        $rating->store_name = $req->store_name;
        $rating->kosher_status = $req->kosher_status;
        $rating->barcode = $req->barcode;
        $rating->description = $req->description;
        $rating->manufacturer = $req->manufacturer;
        $rating->distributer_id = $req->distributer_id;
        $rating->category_id = $req->category_id;
        $rating->product_family = $req->product_family;
        $rating->diet = $req->diet;
        $rating->supervisor = $req->supervisor;
        $rating->ingredients = $req->ingredients;
        $rating->packing = $req->packing;
        $rating->note = $req->note;
        $rating->germany_name = $req->germany_name;
        $rating->hebrew_name = $req->hebrew_name;
        $rating->user_id = $req->user_id;
        $rating->status = 'Pending';
        $rating->save();


        if ($files = $req->file('image')) {
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'productImage/';
                $image_url = $upload_path . $image_full_name;
                $file->move($upload_path, $upload_path . $image_full_name);
                $image = $image_url;

                $productImage = new ProductImage();
                $productImage->images = $image;
                $productImage->product_id = $rating->id;
               $productImage->save();
            }
            
                

        }
        if (is_null($rating)) {
            return response()->json([
                'success' => false,
                'message' => 'storage error'
            ],);
        }
        return response()->json([
            'success' => 'True',
            'message' => 'Product created successfully',
            'data' => $rating,
    
        ]);
    }


    public function show($id)
    {
        $program = Product::find($id);
        $program->category;
        $program->distributer;
        $program->fviourtUser;
        $program->productImage;


        if (is_null($program)) {
            return response()->json([
                'success' => 'Falls',
                'message' => 'data not found'
            ], 404);
        }
        return response()->json([
            'success' => 'True',
            'data' => $program,
        ]);
    }




    public function destroy($id)
    {
        $program = Product::find($id);
        if (!empty($program)) {
            $program->delete();
            return response()->json([
                'success' => true,
                'message' => ' delete successfuly',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'something wrong try again ',
            ]);
        }
    }

    public function getStore()
    {
        
        $data = Store::latest()->get();
        if (is_null($data)) {
            return response()->json('data not found',);
        }
        return response()->json([
            'success' => 'True',
            'message' => 'All Data susccessfull',
            'data' => $data,
        ]);
    }

    public function storeimage(Request $request)
    {
        $post = new Store();
        $post->name = $request->get('name');
        $post->lat = $request->get('lat');



        if ($request->hasfile('long')) {
            foreach ($request->get('long') as $file) {
                $image = new Store;
                $name = $file->getClientOriginalName();
                $image->move(public_path() . '/images/', $name);
                $post->photos()->save($image);
            }
        }

        $post->save();
        return response()->json($post, 201);
    }

    public function complainStore(Request $req)
    {

        $validator = Validator::make($req->all(), [
            //   'name' => 'required',
            //  'email' => 'required',
            // 'contact_person' => 'required',
            //  'contact_number' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $rating = new Complain();
        $rating->problem = $req->problem;
        $rating->user_id = $req->user_id;
        $rating->product_id = $req->product_id;
        $rating->save();
        if (is_null($rating)) {
            return response()->json(['success' => false,
            'message' => 'complain created successfully'],200);
        }
        return response()->json([
            'success' => 'True',
            'message' => 'Product created successfully',
            'data' => $rating,
        ]);
    }

    public function barcode(Request $request)
    {
        $serchData = $request->barcode;

        $data = Product::latest()->with('category', 'distributer','fviourtUser','productImage')->where('barcode','LIKE',"%{$serchData}%")->first();
        if (is_null($data)) {
            return response()->json([ 'success'=>false,
            'message'=>' Data not found', ]);        
         } 
        return response()->json([ 
        'success'=>'True',
        'message'=>'All Data susccessfull',
         'data'=>$data
    ]);
    
    }


    public function storeLocation(Request $request )
    {
        $lat=$request->lat;
        $long=$request->long;
        $Store = Store::select(  "id" ,"name","long","lat", \DB::raw("6371 * acos(cos(radians(" . $lat . "))
        * cos(radians(`lat`)) * cos(radians(`long`) - radians(" . $long . "))
        + sin(radians(" .$lat. ")) * sin(radians(lat))) AS distance"))
        ->having('distance', '<', 1000)
        ->orderBy('distance')
        ->get()->toArray();
        if (is_null($Store)) {
            return response()->json([
                'success' => false,
                'message' => 'data not found'
            ],);
        }
        return response()->json([
            'success' => 'True',
            'message' => 'All Data susccessfull',
            'data' => $Store,

        ]);
    
    }


    public function UpdateProductApi()
    {
        $data = Product::latest()->with('category', 'distributer', 'fviourtUser','productImage')->where('update_product', true)->get();

                if (is_null($data)) {
                    return response()->json([
                        'success' => false,
                        'message' => 'data not found'
                    ],);
                }
                return response()->json([
                    'success' => 'True',
                    'message' => 'All Data susccessfull',
                    'data' => $data,
        
                ]);
            
           
    }


}
