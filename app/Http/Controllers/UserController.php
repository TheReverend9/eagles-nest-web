<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Troops;
use App\Models\Councils;
use App\Models\Country;
use App\Models\State;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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
            $user_id = Auth::id();
            // Get all info relating to user and then store it in the session
            $user_info = User::getUserInfo($user_id);
            $troop_info = Troops::getTroopInfo($user_info[0]->troop_id);
            $council_info = Councils::getCouncilInfo($user_info[0]->council_id);
            $country_info = Country::getCountryInfo($council_info[0]->country_id);
            $state_info = State::getStateInfo($council_info[0]->state_id);

            session(['user_id' => $user_info[0]->id]);
            session(['troop_id' => $user_info[0]->troop_id]);
            session(['f_name' => $user_info[0]->f_name]);
            session(['l_name' => $user_info[0]->l_name]);
            session(['email' => $user_info[0]->email]);
            session(['troop_name' => $troop_info[0]->troop_number]);
            session(['council_name' => $council_info[0]->council_name]);
            session(['council_id' => $user_info[0]->council_id]);
            session(['state_id' => $state_info[0]->state_id]);
            session(['country_id' => $country_info[0]->country_id]);
            session(['country_name' => $country_info[0]->country_name]);

            $data = $request->session()->all();

            $redirect = '/Troop/' . $user_info[0]->troop_id . '/Feed';
            return redirect($redirect);
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
