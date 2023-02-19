<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_user_educations extends Model
{
    use HasFactory;
    protected $fillable = ['education_name', 'education_index'];
    public function tbl_users()
    {

        return $this->belongsTo(tbl_users::class);
    }
}
