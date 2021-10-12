<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class KebijakanController extends Controller
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
            $tmp_file_path = "admin/file/kebijakan/";
            $file->move($tmp_file_path,$tmp_file_name);
            // if(move_uploaded_file($tmp_name, $tmp_file_path)){
            $result = $tmp_file_name;
            // }
        return url('admin/file/kebijakan').'/'.$result;
    }

    public function index()
    {
        $data = DB::table('md_kebijakan')
        ->get();
        return view('admin.DataKebijakan.index',compact('data'));
    }

    public function createPage()
    {
        return view('admin.DataKebijakan.create');
    }

    public function editPage($id)
    {
        $data = DB::table('md_kebijakan')->where('id_kebijakan',$id)->first();
        return view('admin.DataKebijakan.edit',compact('data'));
    }

    public function create(Request $request)
    {
        DB::table('md_kebijakan')->insert(
            [
                'nama_kebijakan'=>$request->nama_kebijakan,
                'file_kebijakan'=>$this->uploadFile($request,'file_kebijakan'),
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        return redirect('admin/kebijakan');
    }

    public function update(Request $request,$id)
    {
        if($request->file('file_kebijakan') != null)
        {
            $fixGambar = $this->uploadFile($request,'file_kebijakan');
        }else
        {
            $fixGambar = $request->old_file_kebijakan;
        }
        DB::table('md_kebijakan')->where('id_kebijakan',$id)->update(
            [
                'nama_kebijakan'=>$request->nama_kebijakan,
                'file_kebijakan'=>$fixGambar,
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        return redirect('admin/kebijakan');
    }


    public function delete($id)
    {
        DB::table('md_kebijakan')->where('id_kebijakan',$id)->delete();
        return redirect('admin/kebijakan');
    }
}
