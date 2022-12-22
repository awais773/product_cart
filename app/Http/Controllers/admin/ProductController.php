<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Invitation;
use App\Models\Api\Product;
use App\Mail\InvitationMail;
use Illuminate\Http\Request;
use App\Models\Api\ProductImage;
use App\Http\Controllers\Controller;
use App\Models\Api\Category;
use App\Models\Api\Distributer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    private $success = false;
    private $message = '';

    /**
     * This function is used to return email verification view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $products = Product::with('distributer','productImage','category')->get();
        return view('admin.main.productlist',compact('products'));
    }

    public function create(Request $req)
    {
        $distributers = Distributer::all();
        $category = Category::all();
        return view('admin.main.addproduct',compact('distributers','category'));
    }
    
    public function store(Request $req)
    {
       
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
        $rating->status = $req->status;
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

           return redirect()->back()->with('sucess','Product Create Sucessfull');

    }

    public function show()
    {
        // $program = Product::find($id);
        // if (is_null($program)) {
        //     return response()->json('Data not found', 404);
        // }
        return view('admin.main.productlist');

    }


  

    public function destroyProduct($id) 
    {
       $user = Product::where('id', $id)->firstorfail()->delete();
       echo ("User Record deleted successfully.");
       return redirect()->back()->with("delete sucess");
    }


}
