<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class KegiatanController extends Controller
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

    //helper
    public function uploadFile(Request $request,$oke)
    {
            $result ='';
            $file = $request->file($oke);
            $name = $file->getClientOriginalName();
            // $tmp_name = $file['tmp_name'];

            $extension = explode('.',$name);
            $extension = strtolower(end($extension));

            $key = rand().'-'.$oke;
            $tmp_file_name = "{$key}.{$extension}";
            $tmp_file_path = "admin/images/kegiatan/";
            $file->move($tmp_file_path,$tmp_file_name);
            // if(move_uploaded_file($tmp_name, $tmp_file_path)){
            $result = $tmp_file_name;
            // }
        return url('admin/images/kegiatan').'/'.$result;
    }

    public function index()
    {
        $data = DB::table('md_kegiatan')
        ->get();
        return view('admin.DataKegiatan.index',compact('data'));
    }

    public function createPage()
    {
        return view('admin.DataKegiatan.create');
    }

    public function editPage($id)
    {
        $data = DB::table('md_kegiatan')->where('id_kegiatan',$id)->first();
        return view('admin.DataKegiatan.edit',compact('data'));
    }

    public function create(Request $request)
    {
        DB::table('md_kegiatan')->insert(
            [
                'nama_kegiatan'=>$request->nama_kegiatan,
                'gambar'=>$this->uploadFile($request,'gambar'),
                'tanggal'=>$request->tanggal,
                'keterangan'=>$request->keterangan,
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        return redirect('admin/kegiatan');
    }

    public function update(Request $request,$id)
    {
        if($request->file('gambar') != null)
        {
            $fixGambar = $this->uploadFile($request,'gambar');
        }else
        {
            $fixGambar = $request->old_gambar;
        }
        DB::table('md_kegiatan')->where('id_kegiatan',$id)->update(
            [
                'nama_kegiatan'=>$request->nama_kegiatan,
                'gambar'=>$fixGambar,
                'tanggal'=>$request->tanggal,
                'keterangan'=>$request->keterangan,
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        return redirect('admin/kegiatan');
    }


    public function delete($id)
    {
        DB::table('md_kegiatan')->where('id_kegiatan',$id)->delete();
        return redirect('admin/kegiatan');
    }
}
