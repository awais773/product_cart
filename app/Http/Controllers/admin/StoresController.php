<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Invitation;
use App\Models\Api\Product;
use App\Mail\InvitationMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Api\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class StoresController extends Controller
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
        $stores=Store::latest()->get();
        return view('admin.main.StoresList',compact('stores'));
    }


    public function create(){

        return view('admin.main.AddStores');

    }



    public function store(Request $req)
    {
        $req->validate([
            'lat' => 'required',
            'long' => 'required',
        ]);


        $rating = new Store();
        $rating->name = $req->name;
        $rating->lat = $req->lat;
        $rating->long = $req->long;
        $rating->save();
        return redirect()->back()->with('message','Store Create Sucessfull');
    }
    

    public function show()
    {
        
        return view('admin.main.StoresList');

    } 


  

    public function destroyStore($id) 
    {
       $user = Store::where('id', $id)->firstorfail()->delete();
       return redirect()->back()->with('message',"Record deleted successfully");
    }

}
