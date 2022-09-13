<?php

namespace App\Http\Controllers\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


/**
 * @author Allan <allancarhil@gmail.com>
 * 
 */
class ValuateController extends Controller
{
    public function index()
    {
        return view('pages.about');
    }
}