<?php


namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserRegisterController
{
    public function store(Request $request)
    {
        $credentials = $request->all();

        $validator = Validator::make($credentials, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email',
            'contact_number' => 'required|numeric',
            'password' => 'required',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->contact_number = $request->contact_number;
        $user->password = $request->password;
        $user->save();

        return redirect()->back()->with("success-msg", "Registration Successful!");
    }
}
