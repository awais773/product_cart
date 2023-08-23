<?php

namespace App\Http\Controllers\admin;

use App\Models\Api\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use App\Models\Hammer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class HammerController extends Controller
{
   
    public function index()
    {
        // $current_week = Product::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        $Hammers = Hammer::with('user')->get();
        return view('admin.main.Hammerlist',compact('Hammers',));
    }

   
   
    public function HammerBouns(){
        $dailyBouns = Hammer::get();
        return view('admin.main.HammerList', compact('dailyBouns'));
    }

    public function Hammere1($id)
    {
        $dailyBouns = Hammer::find($id);
        return view('admin.main.addHammer',compact('dailyBouns'));

    }
    public function Hammere2($id)
    {
        $dailyBouns = Hammer::find($id);
        return view('admin.main.addHammer2',compact('dailyBouns'));

    }
    public function Hammere3($id)
    {
        $dailyBouns = Hammer::find($id);
        return view('admin.main.addHammer3',compact('dailyBouns'));

    }


    public function Hammerupdate(Request $request,$id)
    {
        $data = Hammer::find($id);
        $data->update($request->all());
        return redirect()->back()->with('message','Hammer been updated successfully.');
    }



    public function destroyProduct($id) 
    {
       $user = Hammer::where('id', $id)->firstorfail()->delete();
       return redirect()->back()->with('message',"Record deleted successfully");
    }


}
