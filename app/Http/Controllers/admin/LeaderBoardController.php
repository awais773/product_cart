<?php

namespace App\Http\Controllers\admin;

use App\Models\Api\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use App\Models\Api\LeaderBoard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LeaderBoardController extends Controller
{
   
    public function index()
    {
        // $current_week = Product::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        $leaderboards = LeaderBoard::with('user')->get();
        return view('admin.main.leaderboardlist',compact('leaderboards',));
    }

   
   
      
    public function search(Request $request)
    {
        $leaderboards=  LeaderBoard::with('user')->whereDate('created_at', Carbon::today())->get();
        // $leaderboards = LeaderBoard::with('user')->get();
        return view('admin.main.leaderboardlist',compact('leaderboards',));
    }


    public function weekFilter(){
        $leaderboards = LeaderBoard::with('user')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        // $leaderboards = LeaderBoard::with('user')->get();
        return view('admin.main.leaderboardlist',compact('leaderboards',));
    }
    
  
    public function MonthFilter(){
        $leaderboards=  LeaderBoard::with('user')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get();        
        return view('admin.main.leaderboardlist',compact('leaderboards',));
    }


    

  

    public function destroyProduct($id) 
    {
       $user = LeaderBoard::where('id', $id)->firstorfail()->delete();
       return redirect()->back()->with('message',"Record deleted successfully");
    }


}
