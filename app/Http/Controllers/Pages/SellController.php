<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use Faker\Core\Uuid;
use PHPUnit\Framework\Constraint\Count;

use function PHPSTORM_META\type;

class SellController extends Controller
{
    public function index()
    {
        return view('home.sell');
    }

    public function saveSell(Request $request)
    {
        //dd($request->main_image);
        $totalimages = count($request->images);
        $name = "";
        if ($totalimages > 0) {
            foreach ($request->images as $image) {
                $name .= $this->uploadFile($image, "images") . ",";

            }
            $name = substr($name, 0, -1);
           
        }
       
        if($totalimages>5){
            return back()->withInput();
        }

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
                'main_image' => $this->uploadFile($request, 'main_image'),
                'images' => $name,
                'doc' => $this->uploadFile($request, 'doc'),
                "segment_id" => 1,
                "occupation" => 'bar',
                "cpf_user" => AuthController::me()->cpf,
                'sale_type'=>$request->sale_type,
                'trade_mark'=>$request->trade_mark,
                'state'=>$request->state,
                'city'=>$request->city,
                'neighborhood'=>$request->neighborhood,
                'zip_code'=>$request->zip_code,
                'number'=>$request->number,
                'additional'=>$request->additional,
                'street'=>$request->street,
                'description'=>$request->description,
                'area'=>$request->area,
                'number_employees'=>$request->number_employees,
                'profits'=>$request->profits,
                'month_profits'=>$request->month_profits,
                'working_capital'=>$request->working_capital,
                'debts'=>$request->working_capital,
                'roi_month'=>$request->roi_month,
                'break_even'=>$request->break_even,
            ];
            $company = new Company($data);
        }

        $company->save();
        echo 'é tois';
    }
    private function uploadFile($request, string $type)
    {
        $filename = '';
        switch ($type) {
            case 'main_image':
                $filename = $request->main_image->store('img');
                break;
            case 'video':
                $filename = $request->video->store('video');
                break;
            case 'doc':
                $filename = $request->doc->store('doc');
                break;
            case 'images':
                $filename = $request->store('img')->resize(200,300);
                break;
            default:
                $filename = null;
        }

        return $filename;
    }
}


