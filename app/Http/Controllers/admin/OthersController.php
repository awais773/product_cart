<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Invitation;
use App\Models\Api\Product;
use App\Mail\InvitationMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class OthersController extends Controller
{
    private $success = false;
    private $message = '';

    /**
     * This function is used to return email verification view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.main.index');
    }

    /**
     * This is used to send invitation link
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    // public function sendInvitation(Request $request)
    // {
    //     $email = $request->input('email');
    //     $this->message = 'Enter user email';
    //     $this->success = false;
    //     if (!empty($email)) {
    //         $obj = new Invitation();
    //         $obj->name = $request->input('name');
    //         $obj->email = $request->input('email');
    //         $obj->save();
    //         Mail::to($email)->send(new InvitationMail(Auth::user()));
    //         $this->message = 'Invitation sent successfully';
    //         $this->success = true;
    //     }

    //     return response()->json(['success' => $this->success, 'message' => $this->message]);
    // }

    public function store(Request $req)
    {
        // $validator = Validator::make($req->all(), [
        //     //   'name' => 'required',
        //     //  'email' => 'required',
        //     // 'contact_person' => 'required',
        //     //  'contact_number' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json($validator->errors());
        // }

        // $rating = new Product();
        // $rating->product_name = $req->product_name;
        // $rating->store_name = $req->store_name;
        // $rating->kosher_status = $req->kosher_status;
        // $rating->barcode = $req->barcode;
        // $rating->description = $req->description;
        // $rating->manufacturer = $req->manufacturer;
        // $rating->distributor = $req->distributor;
        // $rating->product_family = $req->product_family;
        // $rating->diet = $req->diet;
        // $rating->supervisor = $req->supervisor;
        // $rating->ingredients = $req->ingredients;

        // if ($image = $req->file('product_image')) {
        //     $destinationPath = 'file/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['image'] = "$profileImage";
        //     $rating->product_image = $profileImage;
        // }
        // $rating->save();
        return view('admin.main.Others');
    }
    

    public function show()
    {
        // // $program = Product::find($id);
        // // if (is_null($program)) {
        // //     return response()->json('Data not found', 404);
        // // }
        // return view('admin.main.productlist');

    } 


  

    public function destroy($id)
    {
        $program = Product::find($id);
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
