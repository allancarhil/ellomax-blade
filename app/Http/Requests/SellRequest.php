<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class SellRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "type"=>'required',
            "status"=>'required',
            "companyName"=>'required',
            "cnpj"=>'required',
            "ownerName"=>'required',
            "ownerMail"=>'required|email',
            "video"=>'required',
            "img"=>'required',
            "doc"=>'required',
            "segment_id"=>'required',
            "occupation_id"=>'required'
        ];
    }

    public function messages()
    {
        return[
            "type.required"=>"campo obrigatório",
            "status.required"=>"campo obrigatório",
            "companyName.required"=>"campo obrigatório",
            "cnpj.required"=>"campo obrigatório",
            "ownerName.required"=>"campo obrigatório",
            "ownerMail.required"=>"campo obrigatório",
            "img.required"=>"campo obrigatório",
            "type.required"=>"campo obrigatório",
            "video.required"=>"campo obrigatório",
            "doc.required"=>"campo obrigatório",
            "segment_id.required"=>"campo obrigatório",
            "occupation_id.required"=>"campo obrigatório"
        ];
    }
}


