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

class SuggestionController extends Controller
{
   
    public function index()
    {
        $suggestions = Product::with('user','distributer','productImage')->get();
        return view('admin.main.suggestion',compact('suggestions'));
    }

   
   

    public function show()
    {
        // // $program = Product::find($id);
        // // if (is_null($program)) {
        // //     return response()->json('Data not found', 404);
        // // }
        // return view('admin.main.productlist');

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
