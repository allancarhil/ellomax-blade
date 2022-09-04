<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Segment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $companies= Company::paginate(3);
        //dd($companies[0]->occupation,$companies[0]->segment);
        return view("home.index",[
            'companies'=>$companies,
        ]);
    }
}
