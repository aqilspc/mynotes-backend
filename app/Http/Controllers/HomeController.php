<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Auth;
class HomeController extends Controller
{

    public function getNote(Request $request)
    {
        $data = DB::table('notes')->where('user_id',$request->user_id)->get();
        if(!$data->isEmpty())
        {
            return response()->json([
                'status'=>'success',
                'result'=>$data
            ],200);
        }else
        {
            return response()->json([
                'status'=>'error',
                'result'=>'Anda belum memiliki catatan sama sekali!'
            ],200);
        }
    }

    public function getNoteByid(Request $request)
    {
        $data = DB::table('notes')->where('id',$request->note_id)->first();
        if($data)
        {
            return response()->json([
                'status'=>'success',
                'result'=>$data
            ],200);
        }else
        {
            return response()->json([
                'status'=>'error',
                'result'=>'Data yang dicari tidak ditemukan!'
            ],200);
        }
    }

    public function deletNoteById(Request $request)
    {
        $data = DB::table('notes')->where('id',$request->note_id)->delete();
        if($data)
        {
            return response()->json([
                'status'=>'success',
                'result'=>'Berhasil menghapus catatan'
            ],200);
        }else
        {
            return response()->json([
                'status'=>'error',
                'result'=>'Gagal menghapus catatan!'
            ],200);
        }
    }

    public function insertNote(Request $request)
    {
        DB::table('noted')->insert([
            'user_id'=>$request->user_id,
            'date_note'=>Carbon::now()->format('Y-m-d'),
            'title'=>$request->title,
            'note'=>$request->note
        ]);

        return response()->json([
            'status'=>'success',
            'result'=>'Berhasil menambahkan catatan'
        ],200);
    }

    public function updateNote(Request $request)
    {
        DB::table('noted')->where('id',$request->note_id)->update([
            'user_id'=>$request->user_id,
            'date_note'=>Carbon::now()->format('Y-m-d'),
            'title'=>$request->title,
            'note'=>$request->note
        ]);

        return response()->json([
            'status'=>'success',
            'result'=>'Berhasil mengubah catatan'
        ],200);
    }
}
