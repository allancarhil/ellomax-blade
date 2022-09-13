<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->pass
        ];

        if (Auth::attempt($credentials)) {

            session(["usuario-logado" => User::where("email", "=", $request->email)->first()->id]);
            return redirect(route('dashboard.index'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }



    public function register()
    {
        return view("admin.register");
    }

    public function createAccount(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->pass),
        ];
        if (User::where("email", "=", $request->email)->first()) {
            return redirect(route("auth.form.register"));
        }
        $user = new User($data);

        if ($user->save()) {
            session(["usuario-logado" => $user->id]);
            return redirect(route("dashboard.index"));
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        $request->session()->forget("usuario-logado");
        return redirect(route("home.index"));
    }

    public function recover()
    {
        return view("admin.recover");
    }

    public function sendRecover(Request $request)
    {
        $token=Str::uuid();
        $user=User::where("email", "=", $request->email)->first();
        $user->remember_token=$token;
        $user->save();
        //disparar email com link
        //estrutura do email deve ser:
        //form-recover/cb27767b-143d-42db-bd1f-0bdebb08e158
        //echo route('auth.form.new.password',['token'=>$user->remember_token]);
    }

    public function updatePass(Request $request)
    {
        //dd($request->all());
        $user=User::where('remember_token','=',$request->recoveryToken)->first();
        $user->password=Hash::make($request->pass);
        $user->remember_token=null;
        $user->save();
        session(['recovery-email'=>true]);
        return redirect(route('auth.index'));
    }


    public function formRecover(Request $request)
    {
        return view('admin.recoverPassword',[
            'token'=>$request->token
        ]);
    }

    public static function me()
    {
        return User::find(session("usuario-logado"));
    }
}
