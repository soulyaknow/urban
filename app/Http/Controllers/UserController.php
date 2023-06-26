<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(){
        return view('urban.index');
    }
    public function login(){
        return view('urban.login');
    }
    public function create(){
        return view('urban.create');
    }
    public function landing(){
        return view('urban.landing');
    }
    public function item(){
        return view('urban.item',[
            'products' => Product::all()
        ]);
    }
    public function users(){
        return view('admin.dashboard',[
            'users' => User::all()
        ]);
    }
    // public function edit(User $user){
    //     return view('admin.edit', ['user' => $user]);        
    // }

    public function store(Request $request){
        $formFields = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => ['required', Rule::unique('users','email')],
            'password' => 'required',
            'gender' => 'required',
            'age' => 'required',
        ]);

        // $formFields['password'] = md5($formFields['password']);
        $formFields['password'] = Hash::make(value: $formFields['password']);

        
        User::create($formFields);

        return redirect('/urban/login')->with('message', 'Registration Complete!');
    }


    public function checkUser(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        // $formFields['password'] = md5($formFields['password']);

        if(auth()->attempt($formFields)){

            $request->session()->regenerate();

            return redirect('/')->with('message', 'Login Complete!');
        }
        // dd($formFields);
        return back()->withErrors(['email' => 'Invalid Email', 'password' => 'Wrong Password' ])->onlyInput('email','password');
    }
    public function logout(Request $request){
        
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logout');

    }
}
