<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_cities extends Model
{
    use HasFactory;
    protected $fillable = [
        'city_name_la',
        'city_name_en',
        'province_id',
    ];

    public function tbl_provinces()
    {
        return $this->belongsTo(tbl_provinces::class);
    }
}
