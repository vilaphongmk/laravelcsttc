<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_cities extends Model
{
    use HasFactory;
    protected $fillable = ['city_name_la', 'city_name_en'];
}
