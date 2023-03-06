<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Api\DailyBonus;
use App\Models\Api\LeaderBoard;
use App\Models\Api\Configration;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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


}

