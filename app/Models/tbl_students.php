<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_students extends Model
{
    use HasFactory;

    public function tbl_users()
    {
        return $this->hasMany(tbl_users::class);
    }
}
