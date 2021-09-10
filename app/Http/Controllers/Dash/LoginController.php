<?php

namespace App\Http\Controllers\dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
// if (Auth::attempt($credentials)) {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            // Authentication passed...

            $user = User::where('email', $request['email'])->firstOrFail();
           
            Auth::login($user, true);
            // return route('admin');
            return redirect('/');
        }
        else {
            echo "no";
        }
    

    }
    }

