<?php

namespace App\Http\Controllers\Pasien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;
use Auth;
class JadwalController extends Controller
{
   function __construct()
    {
        $this->middleware('auth');
        $this->middleware('pasien');
    }

    public function index()
    {
        $datas=Jadwal::latest()->wherein('status',['belum','tolak','terima','ulang'])->where('user_id',auth()->user()->id)->get();
       return view('Pasien.jadwal',compact('datas'));
    }

       public function create()
    {
       return view('Pasien.add');
    }

    public function store($value='')
    {
        request()->validate([
        'name'=>'required',
        'waktu_awal'=>'required',
        'waktu_akhir'=>'required',


        ],
        [
        'name.required'=>'Wajib Di Isi',
        'waktu_awal.required'=>'Wajib Di Isi',
        'waktu_akhir.required'=>'Wajib Di Isi',
        ]);
        Jadwal::create([
        'name'=>request()->name,
        'waktu_awal'=>request()->waktu_awal,
        'waktu_akhir'=>request()->waktu_akhir,
        'user_id'=>Auth::user()->id,

        ]);
        return redirect('/pasien/jadwal')->with('pesan','Jadwal Pertemuan Berhasil Di Kirim');
    }

    public function destroy($id)
    {
      $data=Jadwal::find($id);
      $data->delete();
      return redirect('/pasien/jadwal')->with('pesan','Jadwal Pertemuan Berhasil Di Hapus');
    }

    public function edit($id)
    {
    $data=Jadwal::find($id);
    return view('Pasien.edit_jadwal',compact('data'));
    }

    public function proses_jadwal($id)
    {
        request()->validate([
        'name'=>'required',
        'waktu_awal'=>'required',
        'waktu_akhir'=>'required',


        ],
        [
        'name.required'=>'Wajib Di Isi',
        'waktu_awal.required'=>'Wajib Di Isi',
        'waktu_akhir.required'=>'Wajib Di Isi',
        ]);
       Jadwal::find($id)->update([
        'name'=>request()->name,
        'status'=>'ulang',
        'komentar_pasien'=>request()->komentar_pasien,
        'waktu_awal'=>request()->waktu_awal,
        'waktu_akhir'=>request()->waktu_akhir,
        'user_id'=>Auth::user()->id,

        ]);
        return redirect('/pasien/jadwal')->with('pesan','Jadwal Pertemuan Berhasil Di Kirim');

    }
}
