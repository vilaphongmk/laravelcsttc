<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_teacher_courses extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'courses_id'];
    public function tbl_users()
    {

        return $this->belongsTo(tbl_users::class);
    }
}
