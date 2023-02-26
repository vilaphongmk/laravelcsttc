<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_roles extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'news',
        'course',
        'address',
        'slide',
        'computer_room',
        'document',
        'about',
        'faculty',
        'position',
        'teacher',
        'student',
        'admin',
    ];

    public function tbl_users()
    {
        return $this->belongsTo(tbl_users::class, 'user_id', 'id');
    }
}
