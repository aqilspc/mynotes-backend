<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function customLoginWali(Request $request)
    {
        $nis = DB::table('bd_siswa')->where('nis',$request->nis)->first();
        if(!$nis)
        {
            return redirect('walihomepage')->with('success','Nis tidak ditemukan!');
        }else
        {
            $kode = DB::table('bd_siswa')->where('kode_unik',$request->kode_unik)->first();
            if(!$kode)
            {
                return redirect('walihomepage')->with('success','Kode unik tidak ditemukan!');
            }else
            {
                $no_telepon = DB::table('bd_siswa')->where('no_telepon',$request->no_telepon)->first();
                if(!$no_telepon)
                {
                    return redirect('walihomepage')->with('success','No telepon tidak ditemukan!');
                }else
                {
                    $wali = DB::table('users')->where('id',$no_telepon->id_user_wali)->first();
                    $user = User::find($wali->id);
                    Auth::login($user);
                    return redirect('homewali');
                }
            }
        }
    }

    public function customLoginUser(Request $request)
    {
        $email = DB::table('users')->where('email',$request->email)->first();
        if(!$email)
        {
            return response()->json([
                'status'=>'error',
                'result'=>'Email Tidak Ditemukan!'
            ],200);
        }else
        {
                    if(!Hash::check($request->password, $email->password))
                    {
                       return response()->json([
                            'status'=>'error',
                            'result'=>'Password salah!'
                        ],200);
                    }else
                    {
                        return response()->json([
                            'status'=>'success',
                            'result'=>$email
                        ],200);
                    }
        }
    }
}
