<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konsultasi;
class ListKonsultasiController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index($value='')
    {
        $datas=Konsultasi::latest()->wherein('status',['belum','konsultasi','selesai'])->get();
       return view('Admin.allkonsultasi',compact('datas'));
    }
    
}
