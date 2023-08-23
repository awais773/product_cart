<?php

namespace App\Http\Controllers\admin;

use App\Models\Api\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use App\Models\Hammer;
use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{
   
    public function index()
    {
        // $current_week = Product::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        $Hammers = Hammer::with('user')->get();
        return view('admin.main.Hammerlist',compact('Hammers',));
    }

   
   
    public function HammerBouns(){
        $dailyBouns = Hammer::get();
        return view('admin.main.Shop', compact('dailyBouns'));
    }
    // public function create(){
    //     return view('admin.main.Shop', compact('dailyBouns'));
    // }

    public function create($id)
    {
        $dailyBouns = Shop::find($id);
        return view('admin.main.Shop',compact('dailyBouns'));

    }


    public function Shopupdate(Request $request,$id)
    {
        $data = Shop::find($id);
        $data->update($request->all());
        return redirect()->back()->with('message','Shop been updated successfully.');
    }



    public function destroyProduct($id) 
    {
       $user = Hammer::where('id', $id)->firstorfail()->delete();
       return redirect()->back()->with('message',"Record deleted successfully");
    }


}
