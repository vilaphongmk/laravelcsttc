<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_user_foreigns extends Model
{
    use HasFactory;
    protected $fillable = ['user_position_id', 'user_id', 'role_type_id'];
    public function tbl_users()
    {

        return $this->belongsToMany(tbl_users::class);
    }
}
