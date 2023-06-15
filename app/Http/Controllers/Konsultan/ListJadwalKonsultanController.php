<?php

namespace App\Http\Controllers\Konsultan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;
class ListJadwalKonsultanController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('konsultan');
    }

    public function index($value='')
    {
         $datas=Jadwal::latest()->wherein('status',['belum','tolak','terima','ulang'])->get();
        return view('Konsultan.list_jadwal_pasien',compact('datas'));
    }

    public function edit($id)
    {
          $data=Jadwal::find($id);
    return view('Konsultan.edit_jadwal_pasien',compact('data'));
    }

    public function st($id)
    {
       request()->validate([
        'komentar_konsultan'=>'required',
        


        ],
        [
        'komentar_konsultan.required'=>'Wajib Di Isi',
        ]);
        Jadwal::find($id)->update([
        'komentar_konsultan'=>request()->komentar_konsultan,
        'status'=>request()->status,


        ]);
        return redirect('/konsultan/list-jadwal-konsultasi/')->with('pesan','DataJadwal Pertemuan Berhasil Di Ubah');

    }
}
