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
        'img',
        'doc',
        'segment_id',
        'occupation',
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
