<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Invitation;
use App\Models\Api\Product;
use App\Mail\InvitationMail;
use App\Models\Api\Category;
use Illuminate\Http\Request;
use App\Models\Api\SubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
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
        $subcategory = SubCategory::latest()->get();
        $category = Category::all();

        return view('admin.main.listsubCategory');
    }

    public function create()
    { 
        // $category = Category::all();
        return view('admin.main.subcategory');
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

        $rating = new SubCategory();
        $rating->name = $req->name;
        $rating->category_name = $req->category_name;
        $rating->save();
        return view('admin.main.subcategory')->with('success','Category Create sucessfull');
    }
    

    public function show()
    {
        $category= Category::latest()->get();
        return view('admin.main.listcategory', compact('category'));

        
    }


  

    public function destroy($id) 
    {
       $user = Category::where('id', $id)->firstorfail()->delete();
       echo ("User Record deleted successfully.");
       return redirect()->back()->with("delete sucess");
    }


    public function subCategory()
    {
        $category = Category::latest()->get();
        return view('admin.main.subcategory');
    }
}
