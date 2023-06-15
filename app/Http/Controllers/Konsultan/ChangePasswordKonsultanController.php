<?php

namespace App\Http\Controllers\Konsultan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;
use App\Rules\ChangePasswordKonsultan;
class ChangePasswordKonsultanController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('konsultan');
    }
      public function index($value='')
   {
      return view('Konsultan.password_konsultan');
   }

    public function  store(Request $request)
   {
       
       $request->validate([
            'password_old' => ['required', new ChangePasswordKonsultan],
            'new_password' => ['required'],
            'confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]); 
        return redirect('/konsultan/password')->with('pesan','Password Berhasil Di Ubah');
    
   }

}
