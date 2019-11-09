<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserLoginController
{
    public function authenticate(Request $request) {
        $credentials = $request->only('username', 'password');

        $validator = Validator::make($credentials, [
            'username' => 'required|max:255',
            'password' => 'required',
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Authentication passed...
            return redirect()->intended('userpage');
        }

        return redirect()->back()->withErrors($validator);
    }
}
