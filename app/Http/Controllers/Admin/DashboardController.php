<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user=AuthController::me();
        return view('admin.dashboard',[
            'user'=>$user
        ]);
    }
    
}
