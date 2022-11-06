<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

  protected $fillable = [
        'type',
        'status',
        'companyName',
        'cnpj',
        'cpf',
        'ownerName',
        'ownerMail',
        'price',
        'video',
        'main_image',
        'images',
        'doc',
        'segment_id',
        'occupation',
        'cpf_user',
        'sale_type',
        'trade_mark',
        'state',
        'city',
        'neighborhood',
        'zip_code',
        'number',
        'additional',
        'street',
        'description',
        'area',
        'number_employees',
        'profits',
        'month_profits',
        'working_capital',
        'debts',
        'roi_month',
        'break_even'
    ];
    
    public function segment()
    {
        return $this->hasOne(Segment::class,'id','segment_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

}
