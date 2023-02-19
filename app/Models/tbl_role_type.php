<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_role_type extends Model
{
    use HasFactory;
    protected $fillable = ['role_type_name'];
}
