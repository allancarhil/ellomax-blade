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
        'ownerName',
        'ownerMail',
        'price',
        'video',
        'img',
        'doc',
        'segment_id',
        'occupation_id',
    ];
    public function occupation()
    {
        return $this->hasOne(Occupation::class,'id','occupation_id');
    }
    public function segment()
    {
        return $this->hasOne(Segment::class,'id','segment_id');
    }

}
