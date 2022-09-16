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
        $companies = Company::paginate(10);
        //dd($companies[0]->occupation,$companies[0]->segment);
        $segments = Segment::all();
        return view("home.index", [
            'segments' => $segments,
            'companies' => $companies,
        ]);
    }

    public function showCompanyPage(Request $request)
    {
        $company = Company::find($request->id);
        return view('home.company', [
            'company' => $company
        ]);
    }

    public function simpleSearch(Request $request)
    {
        $tags = explode(',', $request->occupation);
        $companies = Company::select('*');
        foreach ($tags as $tag) {
            $companies = $companies->orWhere("occupation", "like", "%{$tag}%");
        }
        // $companies = $companies->orWhere("segment_id", "like", "%{$request->segmentId}%");
        $companies = $companies->get();
        return view('home.busca', [
            'companies' => $companies
        ]);
    }
/**
 * Undocumented function
 *
 * @param Request $request
 * @return void
 */
    public function advancedSearch(Request $request)
    {
        //Para cada orWhere, verificar se existe o request com $request->has()
        $estado=$this->getEstado($request->estado);
        dd($estado);
        $companies = Company::orWhere("segment_id", "like", "%{$request->segmentId}%");
        if($request->has('lowPrice')){
            $companies=$companies->orWhere();
        }
        
        return view('home.busca', [
            'companies' => $companies->get()
        ]);
    }



    private  function getEstado($id)
    {
        $url = "https://servicodados.ibge.gov.br/api/v1/localidades/estados/" . $id;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response);
        return $response->nome;
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
