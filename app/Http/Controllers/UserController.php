<?php

namespace App\Http\Controllers;

use App\Models\UserTable;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Session;


class UserController extends Controller
{
    // **************************CREATE SHOW UPDATE DELETE*****************************

    // form and display (User Page)
    public function create_user_form(){
        $UserTable = UserTable::query()
        ->select('*')
        ->get();

        return view('AdminUsers', compact('UserTable'));
    }
    // form and display (User Page)

    // create_user_getter (POST)
    public function create_user_getter(request $request){
        $UserTable = new UserTable;

        $file = $request->file('Image');
        // gathering data

        $filenameextension = time() . "." . $request->Image->extension();

        $filename = $request->getSchemeAndHttpHost() . "/image/" . $filenameextension;
        // generation of image name
        $request->Image->move(public_path('/image/'), $filename);
        // pushing the selected image to ur slected folder

        $UserTable->UserImage = $filenameextension;
        $UserTable->FullName = $request->input('FullName');
        $UserTable->PhoneNumber = $request->input('PhoneNumber');
        $UserTable->Address = $request->input('Address');
        $UserTable->Email = $request->input('Email');
        $UserTable->Password = Hash::make($request->input('Password'));
        $UserTable->UserLevel = $request->input('UserLevel');
        $UserTable->save();

        return redirect('users');
    }
    // create_user_getter (POST)

    // edit_user_getter (PUT)
    public function update_user_getter(request $r, string $id){
        $UserTable = UserTable::where('UserID', '=', $id)
        ->update(
            [
                'FullName' => $r->input('FullName'),
                'PhoneNumber' => $r->input('PhoneNumber'),
                'Address' => $r->input('Address'),
                'Email' => $r->input('Email'),
                'Password' => $r->input('Password'),
                'UserLevel' => $r->input('UserLevel')
            ]
        );
        return redirect('users');
    }
    // edit_user_getter (PUT)

    // delete_user_getter (DELETE)
    public function delete_user_getter(string $id){
        $UserTable = UserTable::where('UserID', '=', $id)
        ->delete();

        return redirect('users');
    }
    // delete_user_getter (DELETE)

    // *******************************ADMIN PROFILE(SHOW AND UPDATE ONLY)********************

    // UPDATE and display (admin profile)
    public function admin_profile(string $id){
        $UserTable = UserTable::query()
        ->select('*')
        ->where('UserID','=', $id)
        ->get()
        ->first();
    
        return view('AdminProfile',compact('UserTable'));
    }
    // UPDATE and display (admin profile)

    // update_profile_getter (PUT)
    public function update_profile_getter(Request $r, string $id)
    {
        $userTable = UserTable::where('UserID', '=', $id)
        ->update(
            [
                'FullName' => $r->input('FullName'),
                'PhoneNumber' => $r->input('PhoneNumber'),
                'Address' => $r->input('Address'),
                'Email' => $r->input('Email'),
                'Password' => Hash::make($r->input('Password')),
                'UserLevel' => $r->input('UserLevel')
            ]
        );

        return redirect('adminprofile/{id}');
    }





    
    // ******************************* USER PROFILE(SHOW AND UPDATE ONLY)********************

        // UPDATE and display (User profile)
        public function user_profile(string $id){
            $UserTable = UserTable::query()
            ->select('*')
            ->where('UserID','=', $id)
            ->get()
            ->first();
        
            return view('UserProfile',compact('UserTable'));
        }
        // UPDATE and display (admin profile)
    
        // user_profile_getter (PUT)
        public function user_profile_getter(Request $r, string $id)
        {
            $userTable = UserTable::where('UserID', '=', $id)
            ->update(
                [
                    'FullName' => $r->input('FullName'),
                    'PhoneNumber' => $r->input('PhoneNumber'),
                    'Address' => $r->input('Address'),
                    'Email' => $r->input('Email'),
                    'Password' => Hash::make($r->input('Password')),
                ]
            );
    
            return redirect('userprofile/{id}');
        }
        // user_profile_getter (PUT)







    // *****************************REGISTER, LOGIN, LOGOUT**********************************

    // register (SIGNUP)
    public function show_signup(){
        return view('UserSignup');
    }
    // register (SIGNUP)

    // register submit data (POST)
    public function signup_getter(request $request){
        $UserTable = new UserTable;

        $file = $request->file('Image');
        // gathering data

        $filenameextension = time() . "." . $request->Image->extension();

        $filename = $request->getSchemeAndHttpHost() . "/image/" . $filenameextension;
        // generation of image name
        $request->Image->move(public_path('/image/'), $filename);
        // pushing the selected image to ur slected folder
        $UserTable->UserImage = $filenameextension;

        $UserTable->FullName = $request->input('FullName');
        $UserTable->PhoneNumber = $request->input('PhoneNumber');
        $UserTable->Address = $request->input('Address');
        $UserTable->Email = $request->input('Email');
        $UserTable->Password = Hash::make($request->input('Password'));
        $UserTable->save();

        return redirect('/login');

    }
    // register submit data (POST)

    // show_login
    public function show_login(){
        return view('/UserLogin');
    }
     // show_login

    //  login submit data
    public function login_getter(request $request){
        $UserTable = UserTable::where('Email','=', $request->Email)->first();
        
        if($UserTable){
            if(Hash::check($request->Password,$UserTable->Password)){
    
                $request->session()->put('UserID',$UserTable->UserID);
                $request->session()->put('UserImage',$UserTable->UserImage);
                $request->session()->put('FullName',$UserTable->FullName);
                $request->session()->put('Email',$UserTable->Email);
                $request->session()->put('PhoneNumber',$UserTable->PhoneNumber);
                $request->session()->put('Address',$UserTable->Address);
                $request->session()->put('UserLevel',$UserTable->UserLevel);

                if ($UserTable->UserLevel === 1) {
                    return redirect('/welcome'); // Redirect to admin dashboard
                } else {
                    return redirect('/'); // Redirect to user dashboard
                }

                return redirect('/');
            }else{
                return "Incorrect Password";
            };
        }else{
            return "no account is registered";
        };

    }
    //  login submit data

    // logout admin
    public function admin_logout(){
        if(Session::has('UserID')){
            Session::pull('UserID');
            Session::pull('UserImage');
            Session::pull('FullName');
            Session::pull('Email');
            Session::pull('PhoneNumber');
            Session::pull('Address');
            Session::pull('UserLevel');

            return redirect('/login');
        }
    }
    // logout admin

    // logout user
    public function user_logout(){
        if(Session::has('UserID')){
            Session::pull('UserID');
            Session::pull('UserImage');
            Session::pull('FullName');
            Session::pull('Email');
            Session::pull('PhoneNumber');
            Session::pull('Address');
            Session::pull('UserLevel');

            return redirect('/');
        }
    }
     // logout user

}
