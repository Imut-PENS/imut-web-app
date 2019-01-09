<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JWTAuth;
use JWTAuthException; 

use Carbon\Carbon;
use App\User;
use Validator;

class AuthController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name'      => 'required|string|min:3',
            'email'     => 'required|string|email|unique:users',
            'password'  => 'required|string|min:6'
        ]);
        
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        
        $credentials = [
            'email' => $email,
            'password' => $password
        ];
        if($user->save()){

            $token = null;
            try{
                if(!$token = JWTAuth::attempt($credentials)){
                    return response()->json([
                        'msg' => 'Email or Password are incorrect',
                    ], 404);
                }
            }catch(JWTAuthException $e){
                return response()->json([
                    'msg' => 'Failed To Created Token',
                ], 400);
            }
            $user->signin = [
                'href' => 'api/v1/user/signin',
                'method' => 'POST',
                'params' => 'email', 'password'
            ];
            $response = [
                'success' => 1,
                'msg' => 'User Created',
                'user' => $user,
                'token' => $token
            ];
            
            return response()->json($response, 201);
        }
        $response = [
            'msg' => 'An Error occoured'
        ];
        return response()->json($response, 404); 
    }
    public function signin(Request $request){
        $request->validate([
            'email'         => 'required|string|email',
            'password'      => 'required|string',
            'remember_me'   => 'boolean'
        ]);
        
        $email = $request->input('email');
        $password = $request->input('password');

        if($user = User::where('email',$email)->first()){
            $credentials = request(['email', 'password']);

        $token = null;
        try{
            if(!$token = JWTAuth::attempt($credentials)){
                return response()->json([
                    'message' => 'Email or Password are incorrect',
                ], 404);
            }
        }catch(JWTAuthException $e){
            return response()->json([
                'message' => 'Failed To Created Token',
            ], 400);
        }
        $response = [
            'success' => 1,
            'message' => 'User SignIn',
            'id' => auth()->user()->id,
            'email' => $email,
            'user' => $user,
            'token' => $token
        ];
        return response()->json($response, 201);
    }

    $response = [
        'msg' => 'An Error Occoured'
    ];
    return response()->json($response, 404);
    }
    public function logout() {
        $api_token = NULL;
        if (auth()->id()) {
            $user = User::where('id', auth()->id())->update(compact('api_token'));
        }

        return [
            'success' => 1,
            'data'    => '',
            'message' => 'Logged out successfully',
        ];

    }
    

    public function profil($id) {

        $data = User::where('id', $id)->first();

        if($data){
            return response()->json([
                'success' => 1,
                'id' => auth()->user()->id,
                'email' => auth()->user()->email,
                'fullname' => auth()->user()->fullname,
                'photo' => auth()->user()->photo,
                'phone' => auth()->user()->phone,
                'address' => auth()->user()->address,
                'message' => 'Data Found',
            ]);

        } else {

            return response()->json([
                'success' => 0,
                'message' => 'Data not found',
            ]);

        }
    }

    public function update_profil(Request $request, $id) {
        
        if(request('photo') != "photo"){
            $image = request('photo');  // your base64 encoded
            $image = str_replace('data:image/png;base64,', '', $image);
            $image = str_replace(' ', '+', $image);
            $imageName = str_random(10).'.'.'png';

            $user = User::where('id',$id)->update([
                'fullname' => request('fullname'),
                'email' => request('email'),
                'photo' => $imageName,
                'phone' => request('phone'),
                'address' => request('address'),
            ]);

            \File::put(public_path(). '/uploads/' . $imageName, base64_decode($image));
        }else{
            $user = User::where('id',$id)->update([
                'fullname' => request('fullname'),
                'email' => request('email'),
                'phone' => request('phone'),
                'address' => request('address'),
            ]);
        }
        

        if ($user) {
            $data = User::where('id', $id)->first();
            return [
                'success' => 1,
                'data'    => $data,
                'message' => 'Update profil berhasil',
            ];

        } else {

            return [
                'success' => 0,
                'data'    => '',
                'message' => 'Update profil failed',
            ];

        }

    }
}
