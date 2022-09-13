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
        $companies= Company::paginate(10);
        //dd($companies[0]->occupation,$companies[0]->segment);
        return view("home.index",[
            'companies'=>$companies,
        ]);
    }

    public function showCompanyPage(Request $request)
    {
        $company=Company::find($request->id);
        return view('home.company',[
            'company'=>$company
        ]);
    }

    public function simpleSearch(Request $request)
    {
        dd($request->all());
    }
    public function showAboutUsPage(Request $request)
    {
        return view('about.about');
    }
    public function showContactPage(Request $request)
    {
        return view('home.contact');
    }
    public function showBeOnePage(Request $request)
    {
        return view('home.beoneofus');
    }
}
