<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisteredUserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register.store');
    }

    public function register(Request $request){
        // $request->validate([
        //     'name' => ['required','string','max:255'],
        //     'email' => ['required','string','email','max:255','unique:users'],
        //     'password' => ['required','string','min:8','confirmed'],
        // ]);

        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' =>  password_hash($request->password, PASSWORD_BCRYPT),
        // ]);

        // return redirect()->route('login')->with('success', '登録が完了しました。');

        $this->validator($request->all())->validate();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // ここでログインさせることも可能。
        auth()->login($user);

        return redirect()->route('home')->with('success', 'ユーザー登録が完了しました。');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
}