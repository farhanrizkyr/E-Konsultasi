<?php

namespace App\Http\Controllers\Konsultan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konsultasi;
class ListKonsultasiKonsultanController extends Controller
{
     function __construct()
    {
        $this->middleware('auth');
        $this->middleware('konsultan');
    }


    public function index()
    {
        $datas=Konsultasi::latest()->wherein('status',['belum','konsultasi','selesai'])->get();
        return view('konsultan.list_konsul',compact('datas'));
    }


    public function edit($id)
    {
       $data=Konsultasi::find($id);
       return view('konsultan.edit_konsul',compact('data'));
    }

    public function proses($id)
    {
         request()->validate([
        'komentar_konsultan'=>'required',
        ],
        [
        'komentar_konsultan.required'=>'Wajib Di Isi'

        ]);

        Konsultasi::find($id)->update([
        'komentar_konsultan'=>request()->komentar_konsultan, 
        'status'=>request()->status, 
        ]);

         
          return redirect('konsultan/list-konsultasi/')->with('pesan','Berhasil Mengirim Komentar');
    }
}
