<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use App\Models\User;
class DaftarController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
   public function index()
   {
     $users=User::latest()->get();
     return view('Admin.index',compact('users'));
   }

   public function tambah()
   {
       return view('Admin.add');
   }
   
   public function proses_tambah()
   {
       request ()->validate([
        'name'=>'required',
        'username'=>'required',
        'email'=>'required|unique:users|email:dns',
       'password'=>'required',
       'role'=>'required',
       ]);
       
       User::create([
        'name'=>request()->name,
        'username'=>request()->username,
        'role'=>request()->role,
        'email'=>request()->email,
        'password'=>Hash::make(request()->password),
       ]);
       return redirect('/admin/register/')->with('pesan','User Berhasil Di Tambahkan');
   
       
   }

   function destroy($id)
   {
      $data=User::find($id);
      $data->delete();
       return redirect('/admin/register/')->with('pesan','User Berhasil Di Hapus');
   }
}
