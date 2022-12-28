<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Invitation;
use App\Models\Api\Product;
use App\Mail\InvitationMail;
use Illuminate\Http\Request;
use App\Models\Api\ProductImage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SuggestionController extends Controller
{
   
    public function index()
    {
        $suggestions = Product::with('users','distributers','productImage')->where('status' ,'Pending')->get();
        return view('admin.main.suggestion',compact('suggestions'));
    }

   

    public function changeStatus(Request $request)
    {
        $user = Product::find($request->product_id);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
}


    public function approveservice($id)
    {

        Product::where('id', $id)->update(['status' => 'Approved']);

        return back()->with('message', 'Request has been Approved successfuly');
    }

    public function disableservice($id)
    {
        Product::where('id', $id)->update(['status' => 'Disabled']);

        return back()->with('message', 'Request has been disabled ');
    }
 
}
