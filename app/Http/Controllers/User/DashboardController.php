<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konsultasi;
use Auth;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
   
    function __construct()
    {
        $this->middleware('auth');
    }
   public function index()
   {
      $t_k=DB::table('konsultasis')->count();
      $t_u=DB::table('users')->count();
      $b_k=Konsultasi::where('status','belum')->count();
     $s_k=Konsultasi::where('status','selesai')->count();
      $s_s=Konsultasi::where('status','konsultasi')->count();
      $e_k_p=Konsultasi::where('status','selesai')->where('user_id',auth::user()->id)->count();
      $b_k_p=Konsultasi::where('status','belum')->where('user_id',auth::user()->id)->count();
      $s_k_p=Konsultasi::where('status','konsultasi')->where('user_id',auth::user()->id)->count();
return view('Dashboard.dashboard',compact('e_k_p','b_k_p','s_k_p','t_k','b_k','s_k','s_s','t_u'));
   }
}
