<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_departments extends Model
{
    use HasFactory;
    protected $fillable = ['department_type_id'];
    public function tbl_users()
    {

        return $this->belongsTo(tbl_users::class);
    }
}
