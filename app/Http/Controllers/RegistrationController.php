<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function store(UserRequest $request)
    {
        $user = new User();
        $user->fill($request->except('password'));
        $user->password = bcrypt(\request()->password);
        $user->save();
        Toastr::success('User Created Successfully','Success');
        return redirect()->route('login');
    }

    public function authLogin(LoginRequest $requestFields){
        $attributes = $requestFields->only(['mobile', 'password']);
        if (Auth::attempt($attributes)) {
            if (Auth::user()->user_type == 'admin'){
                return redirect()->route('user-key-generate.index');
            }else{
                return redirect()->route('my.profile');
            }
        }else{
            Toastr::error('Your credential does not match.');
            return redirect()->back();
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
