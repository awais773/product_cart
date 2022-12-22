<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Invitation;
use App\Models\Api\Product;
use App\Mail\InvitationMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Api\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
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
        $category = Category::latest()->get();
        return view('admin.main.index');
    }

    public function create()
    {
        return view('admin.main.addcategory');
    }
    public function listsubCategory()
    {
        return view('admin.main.listsubCategory');
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

        $rating = new Category();
        $rating->name = $req->name;
        $rating->germany_name = $req->germany_name;
        $rating->hebrew_name = $req->hebrew_name;
        $rating->save();
        return view('admin.main.addcategory')->with('success','Category Create sucessfull');
    }
    

    public function show()
    {
        $category= Category::latest()->get();
        return view('admin.main.listcategory', compact('category'));

        
    }


  

    public function destroyCategory($id) 
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
