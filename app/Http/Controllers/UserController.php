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
use Mockery\Generator\StringManipulation\Pass\Pass;

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
            $council_info = Councils::getCouncilInfo($troop_info[0]->council_id);
            $country_info = Country::getCountryInfo($council_info[0]->country_id);
            $state_info = State::getStateInfo($council_info[0]->state_id);

            session(['user_id' => $user_info[0]->id]);
            session(['troop_id' => $user_info[0]->troop_id]);
            session(['f_name' => $user_info[0]->f_name]);
            session(['l_name' => $user_info[0]->l_name]);
            session(['email' => $user_info[0]->email]);
            session(['troop_number' => $troop_info[0]->troop_number]);
            session(['council_name' => $council_info[0]->council_name]);
            session(['council_id' => $troop_info[0]->council_id]);
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
            'troop_id',
            'phone_id',
            'troop_role_id' => 'required',
            'troop_rank_id' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        $request->validate([
            'invite_code' => 'required',
        ]);
        if (Troops::getInviteCode($request->get('invite_code'))){
            $formFields['troop_id'] = Troops::getInviteCode($request->get('invite_code'));
        } else {
            return redirect('/register')->with('err_msg', 'Invalid Invite Code.');
        }
        $formFields['phone_id'] = 0;
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);
        
        auth()->login($user);

        return redirect('/')->with('message', 'User Created and logged in.');
    }
}
