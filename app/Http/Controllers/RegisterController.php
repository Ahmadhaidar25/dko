<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function ui_login()
    {
        return view('register');
    }

     public function post_register(Request $request)
    {
       $this->validate($request,[
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'level' => 'required'
       ]);

       $data = new User;
       $data->name = $request->name;
       $data->email = $request->email;
       $data->password = Hash::make($request->password);
       $data->level = $request->level;
       $data->save();
       return back()->with('Berhasil', 'Anda Sudah Terdaftar');
      
    }
}
