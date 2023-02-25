<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserAuth extends Controller
{
    //
    function userLogin(Request $request){
        try {
            $validateUser = Validator::make($request->all(), 
            [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            if(!Auth::attempt($request->only(['email', 'password']))){
                return redirect('login');
            }
            
            // save session if authectication match
            $data = $request->input();
            $request->session()->put('email',$data['email']);

            $user = User::where('email', $request->email)->first();
            $request->session()->put('subdomain',$user['subdomain']);
            
            return redirect('/');

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function createUser(Request $request)
    {
        try {
            //Validated
            $validateUser = Validator::make($request->all(), 
            [   
                'email' => 'required|email|unique:users,email',
                'pswd1' => 'required',
                'subdomain' => 'required',
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $user = User::create([
                'name' => $request->email,
                'email' => $request->email,
                'password' => Hash::make($request->pswd1),
                'subdomain' => $request->subdomain,
            ]);

            return redirect('/login');

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
      
}
