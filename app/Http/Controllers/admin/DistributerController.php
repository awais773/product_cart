<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Invitation;
use App\Models\Api\Product;
use App\Mail\InvitationMail;
use Illuminate\Http\Request;
use App\Models\Api\Distributer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class DistributerController extends Controller
{
    
    public function index()
    {
        return view('admin.main.distributionlist');
    }
    public function create()
    {
        return view('admin.main.adddistribution');
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
        ]);
        $rating = new Distributer();
        $rating->name = $req->name;

        if ($image = $req->file('image')) {
            $destinationPath = 'distributorImage/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $rating->image=$profileImage;
        }
        $rating->save();
        return redirect()->back()->with('message','Distributor Create Sucessfull');
    }


    public function show()
    {
        $Distributer= Distributer::latest()->get();
        return view('admin.main.distributionlist', compact('Distributer'));

        
    }

    public function destroyDistributer($id) 
    {
       $user = Distributer::where('id', $id)->firstorfail()->delete();
       return redirect()->back()->with( 'message',"Record deleted successfully");
    }

}
