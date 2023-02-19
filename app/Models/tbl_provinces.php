<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_provinces extends Model
{
    use HasFactory;
    protected $fillable = ['province_name_la', 'province_name_en'];
}
