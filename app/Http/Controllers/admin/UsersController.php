<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Invitation;
use App\Models\Api\Product;
use App\Mail\InvitationMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    
    public function index()
    {
        $Users=User::latest()->get();
        return view('admin.main.Users',compact('Users'));
    }

   

    public function store(Request $req)
    {
        
        return view('admin.main.Users');
    }
    

    public function show()
    {
        

    } 


}
