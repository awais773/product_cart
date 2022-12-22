<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Api\Distributer;
use App\Models\Api\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DistributerController extends Controller
{

    public function index()
    {
        $data = Distributer::latest()->get();
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
    public function store(Request $req)
    {
        $validator = Validator::make($req->all(), [
            //   'name' => 'required',
            //  'email' => 'required',
            // 'contact_person' => 'required',
            //  'contact_number' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $rating = new Distributer();
        $rating->name = $req->name;

        if ($image = $req->file('image')) {
            $destinationPath = 'files/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $rating->image = $profileImage;
        }
        $rating->save();

        
        if (is_null($rating)) {
            return response()->json('storage error',);
        }
        return response()->json([
            'success' => 'True',
            'message' => 'Product created successfully',
            'data' => $rating,
        ]);
    }
    

    public function show($id)
    {
        $program = Distributer::find($id);
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
        $program = Distributer::find($id);
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
}
