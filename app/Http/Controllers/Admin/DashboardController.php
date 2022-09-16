<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;

class DashboardController extends Controller
{
    public function index()
    {
        $user = AuthController::me();
        return view('admin.dashboard', [
            'user' => $user
        ]);
    }
    public function showProfile()
    {
        $user = AuthController::me();
        return view('admin.profile', [
            'user' => $user
        ]);
    }

    public function editProfile(Request $request, int $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        if ($user->save()) {
            session(['profile-edit-success'=> 'deu bom']);
        } else {
            session(['profile-edit-error'=> 'deu ruim']);
        }
        return redirect(route('dashboard.form.perfil'));
    }

    public function showMyCompanies()
    {
        $user=AuthController::me();
        $companies=$user->companies()->get();
        return view('admin.my_companies',[
            'companies'=>$companies,
            'user'=>$user
        ]);
    }
}
