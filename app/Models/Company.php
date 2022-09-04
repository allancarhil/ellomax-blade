<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function occupation()
    {
        return $this->hasOne(Occupation::class,'id','occupation_id');
    }
    public function segment()
    {
        return $this->hasOne(Segment::class,'id','segment_id');
    }

}
