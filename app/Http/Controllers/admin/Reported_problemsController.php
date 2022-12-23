<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Invitation;
use App\Models\Api\Product;
use App\Mail\InvitationMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Api\Complain;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class Reported_problemsController extends Controller
{
   
    public function index()
    {
        $complains=Complain::latest()->with('user','product')->get();
        return view('admin.main.reported_problems',compact('complains'));
    }

    public function store(Request $req)
    {
        return view('admin.main.Reported_problems');
    }
    


    public function show()
    {
    
    } 


  

    public function destroy($id) 
    {
       $Complain = Complain::where('id', $id)->firstorfail()->delete();

       dd($Complain );
       echo ("User Record deleted successfully.");
       return redirect()->back()->with("delete sucess");
    }


}
