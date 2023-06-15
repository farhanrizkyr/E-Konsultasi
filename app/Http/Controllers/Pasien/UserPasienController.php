<?php

namespace App\Http\Controllers\Pasien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserPasienController extends Controller
{
   
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('pasien');
    }
   public function index($value='')
   {
      return view('Pasien.user_pasien');
   }

    public function edit($username)
   {
       $data=User::where('username',$username)->first();
       return view('Pasien.user_pasien_edit',compact('data'));
   }


    public function store($id)
   {
      request()->validate([
    'name'=>'required',
    'username'=>'required',
    'email'=>'required',

      ]);

      User::find($id)->update([
    'name'=>request()->name,
    'user'=>request()->username,
    'email'=>request()->email,
      ]);

      return redirect('pasien/setting')->with('pesan','Profile User Berhasil Di Edit');
   }


}
