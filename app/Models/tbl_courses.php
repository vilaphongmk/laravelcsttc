<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_courses extends Model
{
    use HasFactory;
    protected $fillable = ['subjects', 'units', 'terms', 'faculty_id', 'pdf_path'];
    public function tbl_users()
    {
        return $this->belongsTo(tbl_users::class);
    }
}
