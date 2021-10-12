<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
class SiswaController extends Controller
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
        $data = DB::table('bd_siswa as bs')
        ->join('users as us','us.id','=','bs.id_user_wali')
        ->get();
        return view('admin.DataSiswa.index',compact('data'));
    }

    public function createPage()
    {
        
        return view('admin.DataSiswa.create');
    }

    public function editPage($id)
    {
        $data = DB::table('bd_siswa as bs')
        ->join('users as us','us.id','=','bs.id_user_wali')
        ->where('bs.id_siswa',$id)
        ->first();
        return view('admin.DataSiswa.edit',compact('data'));
    }

    public function create(Request $request)
    {
        //Create user for wali
        $nama_wali = str_replace(' ', '_', $request->nama_wali);
        $str = strtoupper(Str::random(5));
        $wali = DB::table('users')->insertGetId(
            [
                'role'=>'wali',
                'name'=>$request->nama_wali,
                'email'=>$nama_wali.'@smss.my.id',
                'password'=>bcrypt($str),
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        DB::table('bd_siswa')->insert(
            [
                'nis'=>$request->nis,
                'nama_siswa'=>$request->nama_siswa,
                'no_telepon'=>$request->no_telepon,
                'id_user_wali'=>$wali,
                'kode_unik'=>$str,
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        return redirect('admin/siswa');
    }

    public function update(Request $request,$id)
    {
        //Create user for wali
        $nama_wali = str_replace(' ', '_', $request->nama_wali);
        $wali = DB::table('users')->where('id',$request->id_user_wali)
        ->update(
            [
                'role'=>'wali',
                'name'=>$request->nama_wali,
                'email'=>$nama_wali.'@smss.my.id',
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        DB::table('bd_siswa')->where('id_siswa',$id)->update(
            [
                'nis'=>$request->nis,
                'nama_siswa'=>$request->nama_siswa,
                'no_telepon'=>$request->no_telepon,
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        return redirect('admin/siswa');
    }


    public function delete($id_user_wali,$id)
    {
        DB::table('users')->where('id',$id_user_wali)->delete();
        DB::table('bd_siswa')->where('id_siswa',$id)->delete();
        return redirect('admin/siswa');
    }
}
