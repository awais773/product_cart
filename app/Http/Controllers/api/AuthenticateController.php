<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Mail\OtpVerificationMail;
use App\Models\Api\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthenticateController extends Controller
{
    private $success = false;
    private $message = '';
    private $data = [];

    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $input = $request->all();
        $validations = [
            'password' => 'required',
            'email' => 'required',
        ];
        $validator = \Validator::make($input, $validations);
        if ($validator->fails()) {
            $this->message = formatErrors($validator->errors()->toArray());
        } else {
            $email = $request->input('email');
            $user = User::where('email', $email)->where('otp_verify', 1)->first();
            if (!empty($user)) {
                $this->message = 'Password does not match';
                if (\Hash::check($request->input('password'), $user->password)) {
                    $user = User::find($user->id);
                    $token = $user->createToken('assessment')->accessToken;
                    $user = $user->toArray();
                    $this->data['token'] = 'Bearer ' . $token;
                    $this->data['user'] = $user;
                    $this->success = true;
                    $this->message = 'Login successfully';
                }
            } else {
                $this->message = 'Email not verified. Please Sign up !';
            }
        }
        return response()->json(['success' => $this->success, 'data' => $this->data, 'message' => $this->message]);
    }

    public function updateProfile(Request $request)
    {
        $id = $request->user()->id;
        $obj = User::find($id);
        if ($obj) {

            if ($image = $request->file('image')) {
                $destinationPath = 'profileImage/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";
                $obj->avatar = $profileImage;
            }
            if (!empty($request->input('name'))) {
                $obj->name = $request->input('name');
            }
            if (!empty($request->input('email'))) {
                $obj->email = $request->input('email');
            }
            if (!empty($request->input('password'))) {
                $obj->password = Hash::make($request->input('password'));
            }
            if (!empty($request->input('contact_number'))) {
                $obj->contact_number = $request->input('contact_number');
            }
            if (!empty($request->input('country'))) {
                $obj->country = $request->input('country');
            }
            if ($obj->save()) {
                $this->data = $obj;
                $this->success = True;
                $this->message = 'Profile is updated successfully';
            }
        }

        return response()->json(['success' => $this->success, 'message' => $this->message, 'data' => $this->data,]);
    }

    public function index()
    {
        $data = User::latest()->get();
        if (is_null($data)) {
            return response()->json([
                'success' => 'Falls',
                'message' => 'data not found'
            ],);
        }
        return response()->json([
            'success' => 'True',
            'message' => 'All Data susccessfull',
            'data' => $data,
        ]);
    }


    public function show($id)
    {
        $program = User::find($id);
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

   

        public function updatePassword(Request $request) {
            $this->validate($request, [
                'email' => 'required',
                'password' => 'required|min:6',
                'confirm_password' => 'required|same:password'
            ]);
            $user = User::where('email', $request->email)->where('otp_verify', 1)->first();
            // $user = User::where('email', $email)->where('otp_verify', 1)->first();

            if ($user) {
                // $user['is_verified'] = 0;
                // $user['token'] = '';
                $user['password'] = Hash::make($request->password);
                $user->save();
                return response()->json(['success' => 'True', 'message' => 'Success! password has been changed',]);
            }
            return response()->json(['success' => false, 'message' => 'Failed! something went wrong',]);
        }

    
}
