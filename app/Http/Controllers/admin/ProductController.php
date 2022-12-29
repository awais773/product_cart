<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Invitation;
use App\Models\Api\Product;
use App\Mail\InvitationMail;
use App\Models\Api\Category;
use App\Models\Api\Complain;
use Illuminate\Http\Request;
use App\Models\Api\Distributer;
use App\Models\Api\ProductImage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
   
    public function index()
    {
        $products = Product::with('distributers','productImage','categorys')->get();
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
        $req->validate([
            'category_id' => 'required',
            'distributer_id' => 'required',
            'barcode' => 'required',
            'product_name' => 'required',
            'germany_name' => 'required',
            'hebrew_name' => 'required',
            'ingredients_english' => 'required',
            'ingredients_germany' => 'required',
            'ingredients_hebrew' => 'required',
            'kosher_status' => 'required',
            'category_id' => 'required',

        ]);

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
        $rating->ingredients_english = $req->ingredients_english;
        $rating->ingredients_germany = $req->ingredients_germany;
        $rating->ingredients_hebrew = $req->ingredients_hebrew;
        $rating->note_germany = $req->note_germany;
        $rating->note_hebrew = $req->note_hebrew;
        $rating->status = 'Approved';
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

           return redirect()->back()->with('message','Product Create Sucessfull');

    }

    public function show()
    {
        
        return view('admin.main.productlist');

    }


    public function edit($id)
    {
        $product = Product::find($id);
        $distributers = Distributer::all();
        $category = Category::all();
        $productImage = ProductImage::all();

        return view('admin.main.editProduct',compact('product','distributers','category','productImage'));

    }

    public function update(Request $req ,$id)
    {

        $rating = Product::find($id);
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
        $rating->ingredients_english = $req->ingredients_english;
        $rating->ingredients_germany = $req->ingredients_germany;
        $rating->ingredients_hebrew = $req->ingredients_hebrew;
        $rating->note_germany = $req->note_germany;
        $rating->note_hebrew = $req->note_hebrew;
        $rating->update_product = '1';
        $rating->update();

        if ($files = $req->file('image')) {
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'productImage/';
                $image_url = $upload_path . $image_full_name;
                $file->move($upload_path, $upload_path . $image_full_name);
                $image = $image_url;

                $productImage = ProductImage::find($id);
                $productImage->images = $image;
                $productImage->product_id = $rating->id;
               $productImage->save();
            }
        }

           return redirect()->back()->with('message','Product Update Sucessfull');


    }

  

    public function destroyProduct($id) 
    {
       $user = Product::where('id', $id)->firstorfail()->delete();
       return redirect()->back()->with('message',"Record deleted successfully");
    }


}
