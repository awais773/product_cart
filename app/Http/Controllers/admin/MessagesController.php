<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Invitation;
use App\Models\Api\Product;
use App\Mail\InvitationMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Api\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MessagesController extends Controller
{
   
    public function index()
    {
        $contacts =Contact::with('user')->get();
        return view('admin.main.Messages',compact('contacts'));
    }

   
    
    

    public function show()
    {
        
    } 



}
