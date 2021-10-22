<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Carbon\Carbon;
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

    //register
    public function registerUser(Request $request)
    {
        $email = DB::table('users')->where('email',$request->email)->first();
        if($email)
        {
            return response()->json([
                'status'=>'error',
                'result'=>'Email Sudah Terdaftar!'
            ],200);
        }else
        {
            DB::table('users')->insert([
                'name'=>$request->nama_lengkap,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'created_at'=>Carbon::now()->toDateTimeString(),
            ]);
            return response()->json([
                'status'=>'success',
                'result'=>'Berhasil mendaftar silahkan login!'
            ],200);
        }
    }
}
