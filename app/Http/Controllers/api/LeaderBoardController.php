<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Api\DailyBonus;
use App\Models\Api\LeaderBoard;
use App\Models\Api\Configration;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\DailyApiBonus;
use App\Models\Hammer;
use App\Models\Purchasing;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;

class LeaderBoardController extends Controller
{

    public function index()
    {
        $data = LeaderBoard::latest()->get();
        if (is_null($data)) {
            return response()->json([
                'success' => 'Falls',
                'message' =>'data not found',]);
        }
        return response()->json([
            'success' => 'True',
            'message' => 'All Data susccessfull',
            'data' => $data,
        ]);
    }
    public function store(Request $request)
    {
      $LeaderBoard = LeaderBoard::create($request->post());
      $LeaderBoard->save();

        
        if (is_null($LeaderBoard)) {
            return response()->json('storage error',);
        }
        return response()->json([
            'success' => 'True',
            'message' => 'LeaderBoard created successfully',
            'data' => $LeaderBoard,
        ]);
    }
    

    public function show($id)
    {
        $program = LeaderBoard::find($id);
        if (is_null($program)) {
            return response()->json([
                'success' => 'Falls',
                'message' =>'data not found'], 404);
        }
        return response()->json([
            'success' => 'True',
            'data' => $program,
        ]);
    }

    public function destroy($id)
    {
        $program = LeaderBoard::find($id);
        if (!empty($program)) {
            $program->delete();
            return response()->json([
                'success' => True,
                'message' => ' delete successfuly',
            ], 200);
        } else {
            return response()->json([
                'success' => False,
                'message' => 'something wrong try again ',
            ]);
        }
    }

    public function levelConfigration()
    {
        $data = Configration::get()->map(function ($item, $key) {
            $item['animal_length'] = explode(',', $item['animal_length']);
            if (isset($item['probability']) && isset($item['probability']['data'])) {
                $item['probability'] = array_values($item['probability']['data']); // convert to indexed array
            }
            return $item;
        });
    
        if ($data->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Data not found'
            ]);
        }
    
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }
    
    


    // public function levelConfigration()
    // {
    //     // $data = Configration::latest()->get();
    //     $data = DB::table('configrations')
    //         ->select('id', DB::raw('CONCAT("[", REPLACE(animal_length, ",", ","), "]") AS animal_length'), 'hitpoints', 'max_timer', 'animal_visibility', 'animal_shown', 'tba1', 'ap1', 'ap2', 'rlc1', 'rlc2', 'xs1', 'xs2', 'note', 'tba2', 'g1', 'g2', 'e1', 'e2', 'd1', 'd2', 'total_animal', 'level_no', 'level_configation', 'probability', 'created_at', 'updated_at')
    //         ->get();
    //     if (is_null($data)) {
    //         return response()->json([
    //             'success' => 'Falls',
    //             'message' =>'data not found',]);
    //     }
    //     return response()->json([
    //         'success' => 'True',
    //         'message' => 'All Data susccessfull',
    //         'data' => $data,
    //     ]);
    // }

    public function dailyMissions()
    {
        $data = DailyBonus::latest()->get();
        if (is_null($data)) {
            return response()->json([
                'success' => 'Falls',
                'message' =>'data not found',]);
        }
        return response()->json([
            'success' => 'True',
            'message' => 'All Data susccessfull',
            'data' => $data,
        ]);
    }



    public function DailyApiBonusGet()
    {
        $data = DailyApiBonus::latest()->get();
        if (is_null($data)) {
            return response()->json([
                'success' => 'Falls',
                'message' =>'data not found',]);
        }
        return response()->json([
            'success' => 'True',
            'message' => 'All Data susccessfull',
            'data' => $data,
        ]);
    }


    public function DailyApiBonusCreate(Request $request)
    {
    $user = Auth::guard('api')->user();
      $LeaderBoard = DailyApiBonus::create($request->post());
      $LeaderBoard->user_id = $user->id;
      $LeaderBoard->save();

        
        if (is_null($LeaderBoard)) {
            return response()->json('storage error',);
        }
        return response()->json([
            'success' => 'True',
            'message' => 'DailyBonus created successfully',
            'data' => $LeaderBoard,
        ]);
    }


    public function DailyApiBonusShow($id)
    {
        $program = DailyApiBonus::find($id);
        if (is_null($program)) {
            return response()->json([
                'success' => 'Falls',
                'message' =>'data not found'], 404);
        }
        return response()->json([
            'success' => 'True',
            'data' => $program,
        ]);
    }


    
    public function PurchasingGet()
    {
        $data = Purchasing::latest()->select('itempurchased','quantity','price','RealMoney')->get();
        if (is_null($data)) {
            return response()->json([
                'success' => 'Falls',
                'message' =>'data not found',]);
        }
        return response()->json([
            'success' => 'True',
            'message' => 'All Data susccessfull',
            'data' => $data,
        ]);
    }


    public function PurchasingCreate(Request $request)
    {
        $user = Auth::guard('api')->user();
      $LeaderBoard = Purchasing::create($request->post());
      $LeaderBoard->user_id = $user->id;
      $LeaderBoard->save();

        
        if (is_null($LeaderBoard)) {
            return response()->json('storage error',);
        }
        return response()->json([
            'success' => 'True',
            'message' => 'Purchasing created successfully',
            'data' => $LeaderBoard,
        ]);
    }


    public function PurchasingShow($id)
    {
        $program = Purchasing::select('itempurchased','quantity','price','RealMoney')->find($id);
        if (is_null($program)) {
            return response()->json([
                'success' => 'Falls',
                'message' =>'data not found'], 404);
        }
        return response()->json([
            'success' => 'True',
            'data' => $program,
        ]);
    }



    public function shopGet()
    {
        $data = Shop::latest()->select('data')->get();
    
        if ($data->isEmpty()) {
            return response()->json([
                'success' => 'False',
                'message' => 'Data not found',
            ]);
        }
    
        $responseData = [];
        foreach ($data as $item) {
            $decodedData = json_decode($item->data, true);
    
            if ($decodedData && isset($decodedData['Gold'], $decodedData['Items'])) {
                $responseData[] = [
                    'Gold' => $decodedData['Gold'],
                    'Items' => $decodedData['Items'],
                ];
            }
        }
    
        if (empty($responseData)) {
            return response()->json([
                'success' => 'False',
                'message' => 'No valid data found in records',
            ]);
        }
    
        return response()->json([
            'success' => 'True',
            'message' => 'All Data successful',
            'data' => $responseData,
        ]);
    }
    


    
    public function ShopShow($id)
    {
        $program = Shop::find($id);
        if (is_null($program)) {
            return response()->json([
                'success' => 'Falls',
                'message' =>'data not found'], 404);
        }
        return response()->json([
            'success' => 'True',
            'data' => $program,
        ]);
    }



    public function HammerGet()
    {
        $data = Hammer::latest()->get();
    
        if (is_null($data)) {
            return response()->json([
                'success' => 'Falls',
                'message' => 'data not found',
            ]);
        }
    
        // Decode the JSON strings back into arrays
        foreach ($data as $item) {
            $item->Damage = json_decode($item->Damage);
            $item->Gold = json_decode($item->Gold);
            $item->Gem = json_decode($item->Gem);
            $item->Diamond = json_decode($item->Diamond);
        }
    
        return response()->json([
            'success' => 'True',
            'message' => 'All Data successful',
            'data' => $data,
        ]);
    }
    

    public function HammerShow($id)
    {
        $program = Hammer::find($id);
        
        if (is_null($program)) {
            return response()->json([
                'success' => false,
                'message' => 'Data not found'
            ], 404);
        }
        
        $program->Damage = json_decode($program->Damage);
        $program->Gold = json_decode($program->Gold);
        $program->Gem = json_decode($program->Gem);
        $program->Diamond = json_decode($program->Diamond);
    
        return response()->json([
            'success' => true,
            'data' => $program,
        ]);
    }
    



}

