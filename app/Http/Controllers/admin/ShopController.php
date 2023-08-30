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
 
    // public function create($id)
    // {
    //     $dailyBouns = Shop::select('data')->find($id);
    //     // $dailyBouns->data = json_decode($dailyBouns->data); // Decode the JSON-encoded location string
    //     return view('admin.main.Shop',compact('dailyBouns'));

    // }

    public function create($id)
    {
        $dailyBouns = Shop::select('id','data')->find($id);
        if ($dailyBouns) {
            $data = json_decode($dailyBouns->data, true); // Decoding JSON into an associative array
            return view('admin.main.Shop', compact('data', 'dailyBouns'));
        }
        
        return abort(404); // Handle the case when the record is not found
    }
    
    



    public function Shopupdate(Request $request, $id)
    {
        $request->validate([
            'GoldPackName' => 'required|array',
            'Gold' => 'required|array',
            'price_in_diamond' => 'required|array',
            'ItemName' => 'required|array',
            'Quantity' => 'required|array',
            'item_price_in_diamond' => 'required|array',
        ]);
    
        $goldData = [];
        for ($i = 0; $i < count($request->GoldPackName); $i++) {
            $goldData[] = [
                'GoldPackName' => $request->GoldPackName[$i],
                'Gold' => $request->Gold[$i],
                'Price in Diamond' => $request->price_in_diamond[$i],
            ];
        }
    
        $itemData = [];
        for ($i = 0; $i < count($request->ItemName); $i++) {
            $itemData[] = [
                'ItemName' => $request->ItemName[$i],
                'Quantity' => $request->Quantity[$i],
                'Price in Diamond' => $request->item_price_in_diamond[$i],
            ];
        }
    
        $data = [
            'Gold' => $goldData,
            'Items' => $itemData,
        ];
    
        $dailyBonus = Shop::find($id);
    if (!$dailyBonus) {
        return abort(404); // Handle the case when the record is not found
    }
    $dailyBonus->data = json_encode($data);
    $dailyBonus->save();
            return redirect()->back()->with('message', 'Data updated successfully.');
    }
    



    public function destroyProduct($id) 
    {
       $user = Hammer::where('id', $id)->firstorfail()->delete();
       return redirect()->back()->with('message',"Record deleted successfully");
    }


}
