<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_position_types extends Model
{
    use HasFactory;
    protected $fillable = [];
    public function tbl_users()
    {

        return $this->belongsTo(tbl_users::class);
    }
}
