<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_department_types extends Model
{
    use HasFactory;
    protected $fillable = ['department_type_name'];
    public function tbl_users()
    {

        return $this->belongsTo(tbl_users::class);
    }
}
