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
    private $success = false;
    private $message = '';

    /**
     * This function is used to return email verification view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $contacts =Contact::with('user')->get();
        return view('admin.main.Messages',compact('contacts'));
    }

   
    
    

    public function show()
    {
        
    } 


  

    public function destroy($id)
    {
        $program = Product::find($id);
        if (!empty($program)) {
            $program->delete();
            return response()->json([
                'success' => true,
                'message' => ' delete successfuly',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'something wrong try again ',
            ]);
        }
    }

}
