<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function indexWali()
    {
        $siswa = DB::table('bd_siswa')->where('id_user_wali',Auth::user()->id)->first();
        return view('user.page.HomeAfterLogin',compact('siswa'));
    }

    public function indexKebijakan()
    {
        $data = DB::table('md_kebijakan')
        ->get();
        return view('user.page.DataKebijakan',compact('data'));
    }

    public function indexKegiatan()
    {
        $data = DB::table('md_kegiatan')
        ->get();
        return view('user.page.DataKegiatan',compact('data'));
    }

    public function indexDetailKegiatan($id)
    {
        $data = DB::table('md_kegiatan')
        ->where('id_kegiatan',$id)
        ->first();
        return view('user.page.DetailKegiatan',compact('data'));
    }

    public function indexKehadiran()
    {
        $siswa = DB::table('bd_siswa')->where('id_user_wali',Auth::user()->id)
        ->select('id_siswa','nama_siswa')->first();
        $data = DB::table('bd_kehadiran_siswa')
        ->where('id_siswa',$siswa->id_siswa)
        ->get();
        return view('user.page.DataKehadiran',compact('data','siswa'));
    }

    public function indexTagihan()
    {
        $siswa = DB::table('bd_siswa')->where('id_user_wali',Auth::user()->id)
        ->select('id_siswa','nama_siswa')->first();
        $data = DB::table('bd_tagihan_siswa')
        ->where('id_siswa',$siswa->id_siswa)
        ->get();
        return view('user.page.DataTagihan',compact('data','siswa'));
    }

    public function indexPelanggaran()
    {
        $siswa = DB::table('bd_siswa')->where('id_user_wali',Auth::user()->id)
        ->select('id_siswa','nama_siswa')->first();
        $data = DB::table('bd_pelanggaran_siswa')
        ->where('id_siswa',$siswa->id_siswa)
        ->get();
        return view('user.page.DataPelanggaran',compact('data','siswa'));
    }
}
