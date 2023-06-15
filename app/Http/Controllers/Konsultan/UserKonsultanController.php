<?php

namespace App\Http\Controllers\Konsultan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserKonsultanController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('konsultan');
    }
   public function index($value='')
   {
      return view('Konsultan.user_konsultan');
   }


    public function edit($username)
   {
       $data=User::where('username',$username)->first();
       return view('Admin.user_edit',compact('data'));
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

     return redirect('konsultan/setting')->with('pesan','Profile User Berhasil Di Edit');

    }
}
