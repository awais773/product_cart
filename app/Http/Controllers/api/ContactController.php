<?php

namespace App\Http\Controllers\api;

use App\Models\Api\Store;
use App\Models\Api\Contact;
use App\Models\Api\Product;
use App\Models\Api\Complain;
use App\Models\Api\Faviourt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{

    public function index()
    {
        $data = Contact::latest()->get();
        if (is_null($data)) {
            return response()->json([
                'success' => false,
                'message' => 'data not found'
            ],);
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

        if ($file = $req->file('image')) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'reasonImage/';
                $image_url = $upload_path . $image_full_name;
                $file->move($upload_path, $upload_path . $image_full_name);
                $image = $image_url;

                $rating = new Contact();
                $rating->image = $image;
                $rating->reason = $req->reason;
                $rating->message = $req->message;
                $rating->user_id = $req->user_id;
            }

        $rating->save();

        if (is_null($rating)) {
            return response()->json([
                'success' => false,
                'message' => 'storage error'
            ],);
        }
        return response()->json([
            'success' => 'True',
            'message' => 'Product created successfully',
            'data' => $rating,
        ]);
    }


    public function show($id)
    {
        $program = Contact::find($id);
        if (is_null($program)) {
            return response()->json([
                'success' => 'Falls',
                'message' => 'data not found'
            ], 404);
        }
        return response()->json([
            'success' => 'True',
            'data' => $program,
        ]);
    }




    public function destroy($id)
    {
        $program = Contact::find($id);
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
