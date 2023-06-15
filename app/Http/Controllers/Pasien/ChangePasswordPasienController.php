<?php

namespace App\Http\Controllers\Pasien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;
use App\Rules\ChangePasswordPasien;
class ChangePasswordPasienController extends Controller
{
      public function index()
   {
      return view('Pasien.password_pasien');
   }


     public function store(Request $request)
     {
         $request->validate([
            'password_old' => ['required', new ChangePasswordPasien],
            'new_password' => ['required'],
            'confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]); 
        return redirect('/pasien/password')->with('pesan','Password Berhasil Di Ubah');
     }


}
