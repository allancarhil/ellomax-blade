<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login()
    {
        return redirect(route("dashboard.index"));
    }
    
    public function logout()
    {
        return redirect(route("auth.index"));
        
    }
    
    public function recover()
    {
        return view("admin.recover");
    }

    public function me()
    {
        echo 'logica de recover';
    }
}
