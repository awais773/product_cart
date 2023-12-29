<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ConfigrationController extends Controller
{
   
    // public function index()
    // {
    //     $category = Product::latest()->get();
    //     return view('admin.main.index');
    // }
    public function index()
    {
        $category = Product::latest()->get();
        return view('admin.main.listConfigration',compact('category'));
    }


    public function create()
    {
        return view('admin.main.addConfigration');
    }


    

    public function store(Request $req)
    {
        $validator = Validator::make($req->all(), [
            // 'title' => 'required|unique:products', // Example validation rule for the title field
            // Add more validation rules as needed for other fields
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->toJson(),
            ], 400);
        }
    
        if ($file = $req->file('image')) {
            $image_name = md5(rand(1000, 10000));
            $ext = strtolower($file->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'images/';
            $image_url = $upload_path . $image_full_name;
            $file->move($upload_path, $image_full_name);
    
            $Video = new Product();
            $Video->image = $image_url;
            $Video->price = $req->price;
            $Video->title = $req->title;
            $Video->category = $req->category;
            $Video->save();
        }

        return redirect()->back()->with('message', 'Product has been created successfully.');
    }
    

  
    

    public function show()
    {
        $category= Product::latest()->get();
        return view('admin.main.listConfigration', compact('category'));

        
    }
  

    public function destroyCategory($id) 
    {
       $user = Product::where('id', $id)->firstorfail()->delete();
       return redirect()->back()->with('message',"Record deleted successfully");
    }


    public function edit($id)
    {
        $category = Product::find($id);
        return view('admin.main.editConfigration',compact('category'));

    }


    public function update(Request $request, $id)
    {
        $data = Product::find($id);
    
        // Check if a new image is provided
        if ($file = $request->file('image')) {
            $video_name = md5(rand(1000, 10000));
            $ext = strtolower($file->getClientOriginalExtension());
            $video_full_name = $video_name . '.' . $ext;
            $upload_path = 'images/';
            $video_url = $upload_path . $video_full_name;
            
            // Move the new image to the specified path
            $file->move($upload_path, $video_full_name);
    
            // Update the product's image field
            $data->image = $video_url;
        }
    
        // Update other fields of the product
        $data->update($request->all());
    
        return redirect()->back()->with('message', 'Product has been updated successfully.');
    }
    

   

   

  


}
