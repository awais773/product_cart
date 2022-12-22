<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Api\Category;
use App\Models\Api\Complain;
use App\Models\Api\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{

    public function index()
    {
        $data = Category::latest()->get();
        if (is_null($data)) {
            return response()->json('data not found',);
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

        $rating = new Category();
        $rating->name = $req->name;
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
        $program = Category::find($id);
        if (is_null($program)) {
            return response()->json('Data not found', 404);
        }
        return response()->json([
            'success' => 'True',
            'data' => $program,
        ]);
    }


  

    public function destroy($id)
    {
        $program = Category::find($id);
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
