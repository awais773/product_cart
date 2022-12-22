<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Invitation;
use App\Models\Api\Product;
use App\Mail\InvitationMail;
use Illuminate\Http\Request;
use App\Models\Api\Advertisement;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AdvertisementController extends Controller
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
        return view('admin.main.AddAdvertisement');
    }

    
    public function store(Request $req)
    {
        if ($file = $req->file('image')) {
            $image_name = md5(rand(1000, 10000));
            $ext = strtolower($file->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'AdvertisementImage/';
            $image_url = $upload_path . $image_full_name;
            $file->move($upload_path, $upload_path . $image_full_name);
            $image = $image_url;

            $rating = new Advertisement();
            $rating->image = $image;
            $rating->name = $req->name;
            $rating->save();

        }
        return redirect()->back()->with('sucess','Advertisement create sucessfull');
    }
    
   

    public function show()
    {
       $advertisements = Advertisement::latest()->get();
        return view('admin.main.AdvertisementList',compact('advertisements'));
    } 


  

    public function destroy($id) 
    {
       $user = Advertisement::where('id', $id)->firstorfail()->delete();
       echo ("User Record deleted successfully.");
       return redirect()->back()->with("delete sucess");
    }

}
