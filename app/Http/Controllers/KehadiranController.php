<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class KehadiranController extends Controller
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
        $data = DB::table('bd_kehadiran_siswa as bps')
        ->join('bd_siswa as bs','bs.id_siswa','=','bps.id_siswa')
        ->get();
        return view('admin.DataKehadiran.index',compact('data'));
    }

    public function createPage()
    {
        $siswa = DB::table('bd_siswa')->select('nama_siswa','id_siswa','nis')->get();
        return view('admin.DataKehadiran.create',compact('siswa'));
    }

    public function editPage($id)
    {
        $data = DB::table('bd_kehadiran_siswa as bks')
        ->join('bd_siswa as bs','bs.id_siswa','=','bks.id_siswa')
        ->where('bks.id_kehadiran',$id)
        ->first();
        return view('admin.DataKehadiran.edit',compact('data'));
    }

    public function create(Request $request)
    {
        //return $request;
        $siswa = $request->id_siswa;
        foreach($siswa as $sw)
        {
            DB::table('bd_kehadiran_siswa')->insert(
                [
                    'id_siswa'=>$sw,
                    'jam'=>$request->jam,
                    'tanggal'=>$request->tanggal,
                    'status'=>$request->status,
                    'created_at'=>Carbon::now()->toDateTimeString()
                ]);
        }
        return redirect('admin/kehadiran');
    }

    public function update(Request $request,$id)
    {
        
        DB::table('bd_kehadiran_siswa')->where('id_kehadiran',$id)->update(
            [
                'id_siswa'=>$request->id_siswa,
                'jam'=>$request->jam,
                'tanggal'=>$request->tanggal,
                'status'=>$request->status,
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        return redirect('admin/kehadiran');
    }


    public function delete($id)
    {
        DB::table('bd_kehadiran_siswa')->where('id_kehadiran',$id)->delete();
        return redirect('admin/kehadiran');
    }
}
