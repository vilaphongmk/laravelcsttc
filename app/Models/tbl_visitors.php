<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_visitors extends Model
{
    use HasFactory;
    protected $fillable = ['ip_address', 'visit_date'];
}
