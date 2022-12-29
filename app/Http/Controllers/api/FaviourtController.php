<?php

namespace App\Http\Controllers\api;

use App\Models\Api\Product;
use App\Models\Api\Faviourt;
use Illuminate\Http\Request;
use App\Models\Api\Distributer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FaviourtController extends Controller
{

    public function index()
    {
        $data = Faviourt::latest()->with('product.productImage', 'product.fviourtUser',)->get();
        if (is_null($data)) {
            return response()->json([
                'success' => 'Falls',
                'message' =>'data not found',]);
        }
        return response()->json([
            'success' => 'True',
            'message' => 'All Data susccessfull',
            'data' => $data,
        ]);
    }
    public function store(Request $req )
    {
        $user = Auth::guard('api')->user();
        $addtofavid = Faviourt::where("user_id", $user->id)
            ->where("product_id", $req->product_id)
            ->first();

        if ($addtofavid == null) {
         $user = Auth::guard('api')->user();
            $addtofav = Faviourt::create([
                "user_id" => $user->id,
                "product_id" => $req->product_id,
                "favrt" => '1'  
            ]);
            $addtofav->save();
            $id = $req->product_id;
            $addtofavs=Product::find($id);
            $addtofavs->faviourt_count = 1 + $addtofavs ['faviourt_count'];
            $addtofavs->save();
            return response()->json([

                'success' => 'True',
                'message' => 'Successfuly added to favourite',
                'data' => $addtofav,
                // 'user'=>$addtofavs

            ], 200);
        } else {
            return response()->json([

                'success' => 'True',
                'message' => 'you allready add this post into favourite',
            ], 200);
        }
    }
    
    // public function store(Request $req)
    // {
    //     $validator = Validator::make($req->all(), [
    //         //   'name' => 'required',
    //         //  'email' => 'required',
    //         // 'contact_person' => 'required',
    //         //  'contact_number' => 'required',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json($validator->errors());
    //     }

    //     $rating = new Faviourt();
    //     $rating->product_id = $req->product_id;
    //     $rating->user_id = $req->user_id;
    //     $rating->save();

        
    //     if (is_null($rating)) {
    //         return response()->json('storage error',);
    //     }
    //     return response()->json([
    //         'success' => 'True',
    //         'message' => 'Product created successfully',
    //         'data' => $rating,
    //     ]);
   // }
    

    public function show($id)
    {
        $program = Faviourt::with( 'product.productImage','product.fviourtUser')
            ->whereIn('user_id', [$id])->get();


        if (is_null($program)) {
            return response()->json([
                'success' => false,
                'message' =>'data not found'], 404);
        }
        return response()->json([
            'success' => 'True',
            'data' => $program,
        ]);
    }


  

    public function destroy($id)
    {
        $program = Faviourt::find($id);
        if (!empty($program)) {
            $program->delete();
            return response()->json([
                'success' => True,
                'message' => ' delete successfuly',
            ], 200);
        } else {
            return response()->json([
                'success' => False,
                'message' => 'something wrong try again ',
            ]);
        }
    }

    public function removetofavpost($id)
    {
        $removetofav = Faviourt::where('id', $id)->first();
        if (!empty($removetofav)) {

            $removetofav->delete();
        }
        return response()->json([
            'success' => true,
            'message' => 'remove from favrouts',
        ], 200);
    }
}
