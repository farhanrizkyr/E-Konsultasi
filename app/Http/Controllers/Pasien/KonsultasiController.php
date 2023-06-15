<?php

namespace App\Http\Controllers\Pasien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konsultasi;
use Auth;
class KonsultasiController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('pasien');
    }

     public function index()
    {
        $datas=Konsultasi::latest()->wherein('status',['belum','konsultasi'])->where('user_id',auth()->user()->id)->get();
       return view('Pasien.konsultasi',compact('datas'));
    }

    public function create($value='')
    {
       return view('Pasien.add_konsul');
    }

    public function store()
    {
        request()->validate([
        'judul'=>'required',
        ],
        [
        'judul.required'=>'Wajib Di Isi'

        ]);

        Konsultasi::create([
        'judul'=>request()->judul,
        'user_id'=>Auth::user()->id,

        ]);
        return redirect('/pasien/konsultasi')->with('pesan','Data Konsultasi Berhasil Di Kirim');
    }

    public function destroy($id)
    {
        $data=Konsultasi::find($id);
        $data->delete();
         return redirect('/pasien/konsultasi')->with('pesan','Data Konsultasi Berhasil Di Hapus');
    }

    public function edit($id)
    {
        $data=Konsultasi::find($id);
         return view('Pasien.edit',compact('data'));
    }

    public function proses_balas($id)
    {
         Konsultasi::find($id)->update([
        'komentar_pasien'=>request()->komentar_pasien, 
        ]);
          return redirect('/pasien/konsultasi')->with('pesan','Berhasil Membalas Komentar ');
    }


     public function history()
    {
        $datas=Konsultasi::latest()->where('status','selesai')->where('user_id',auth()->user()->id)->get();
       return view('Pasien.history',compact('datas'));
    }

      public function try($id)
    {
         Konsultasi::find($id)->update([
        'status'=>'konsultasi', 
        ]);
          return redirect('/pasien/konsultasi')->with('pesan','Anda Akan Konsultasi Ulang ');
    }
}
