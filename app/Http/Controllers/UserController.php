<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function register() {
        return view('users.register');
    }

    public function login() {
        return view('users.login');
    }

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();
            $user = Auth::user();
            $redirect = '/TroopFeed/' . $user['troop_id'];
            return redirect($redirect)->with('message', 'You are now logged in');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function storeUser(Request $request) {
        $formFields = $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required|confirmed|min:6'
        ]);
        $formFields['password'] = bcrypt($formFields['password']);
        $formFields['troop_id'] = 1;
        $formFields['council_id'] = 1;

        $user = User::create($formFields);
        
        auth()->login($user);

        return redirect('/login')->with('message', 'User Created and logged in.');
    }
}
