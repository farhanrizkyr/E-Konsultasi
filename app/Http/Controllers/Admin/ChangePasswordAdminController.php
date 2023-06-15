<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;
use App\Rules\ChangePasswordAdmin;
class ChangePasswordAdminController extends Controller
{

     function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function index($value='')
   {
      return view('Admin.password_admin');
   }

   public function  store(Request $request)
   {
       
       $request->validate([
            'password_old' => ['required', new ChangePasswordAdmin],
            'new_password' => ['required'],
            'confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]); 
        return redirect('/admin/password')->with('pesan','Password Berhasil Di Ubah');
    
   }
}
