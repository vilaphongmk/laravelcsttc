<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_user_positions extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'position_type_id', 'positions_index'];
    public function tbl_users()
    {

        return $this->belongsTo(tbl_users::class);
    }
}
