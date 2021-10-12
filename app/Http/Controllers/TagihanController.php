<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class TagihanController extends Controller
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
        $data = DB::table('bd_tagihan_siswa as bts')
        ->join('bd_siswa as bs','bs.id_siswa','=','bts.id_siswa')
        ->get();
        return view('admin.DataTagihan.index',compact('data'));
    }

     public function createPage()
    {
        $siswa = DB::table('bd_siswa')->select('nama_siswa','id_siswa','nis')->get();
        return view('admin.DataTagihan.create',compact('siswa'));
    }

    public function editPage($id)
    {
        $data = DB::table('bd_tagihan_siswa as bks')
        ->join('bd_siswa as bs','bs.id_siswa','=','bks.id_siswa')
        ->where('bks.id_tagihan',$id)
        ->first();
        return view('admin.DataTagihan.edit',compact('data'));
    }

    public function create(Request $request)
    {
        $siswa = $request->id_siswa;
        foreach($siswa as $sw)
        {
            DB::table('bd_tagihan_siswa')->insert(
                [
                    'id_siswa'=>$sw,
                    'jenis'=>$request->jenis,
                    'jumlah'=>$request->jumlah,
                    'status'=>$request->status,
                    'created_at'=>Carbon::now()->toDateTimeString()
                ]);
        }

        return redirect('admin/tagihan');
    }

    public function update(Request $request,$id)
    {
        DB::table('bd_tagihan_siswa')->where('id_tagihan',$id)->update(
            [
                'id_siswa'=>$request->id_siswa,
                'jenis'=>$request->jenis,
                'jumlah'=>$request->jumlah,
                'status'=>$request->status,
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        return redirect('admin/tagihan');
    }


    public function delete($id)
    {
        DB::table('bd_tagihan_siswa')->where('id_tagihan',$id)->delete();
        return redirect('admin/tagihan');
    }
}
