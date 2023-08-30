<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DailyApiBonus;
use App\Models\Purchasing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
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
    

    public function details($id)
    {
        $Users = Purchasing::where('user_id', $id)->get();
        $DailyApiBonus = DailyApiBonus::where('user_id', $id)->get();
        $dailyBouns = User::find($id);
        return view('admin.main.usersDetails',compact('Users','DailyApiBonus','dailyBouns'));
    }


    public function destroyUser($id) 
    {
       $user = User::where('id', $id)->firstorfail()->delete();
       return redirect()->back()->with('message',"Record deleted successfully");
    }


    public function userUpdate(Request $request,$id)
    {
        $data = User::find($id);
        $data->update($request->all());
        return redirect()->back()->with('message','User been updated successfully.');
    }


}
