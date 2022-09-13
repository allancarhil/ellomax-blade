<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use Faker\Core\Uuid;

use function PHPSTORM_META\type;

class SellController extends Controller
{
    public function index()
    {
        return view('home.sell');
    }

    public function saveSell(Request $request)
    {
        $company = Company::where('cnpj', '=', $request->cnpj)->first();
        if (!$company) {

            $data = [
                'type' => 1,
                'status' => 0,
                'companyName' => $request->companyName,
                'cnpj' => $request->cnpj,
                'ownerName' => $request->ownerName,
                'ownerMail' => $request->ownerMail,
                'price' => $request->price,
                'video' => $this->uploadFile($request, 'video'),
                'img' => $this->uploadFile($request, 'img'),
                'doc' => $this->uploadFile($request, 'doc'),
                "segment_id" => 1,
                "occupation_id" => 1
            ];
            $company = new Company($data);
        }
        $company->save();
        echo 'é tois';
    }
    private function uploadFile(Request $request, string $type)
    {
        $filename = '';
        switch ($type) {
            case 'img':
                $filename = $request->img->store('img');
                break;
            case 'video':
                $filename = $request->video->store('video');
                break;
            case 'doc':
                $filename = $request->doc->store('doc');
                break;
            default:
                $filename = null;
        }

        return $filename;
    }
}
