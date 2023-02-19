<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_computer_room extends Model
{
    use HasFactory;
    protected $fillable = ['image_path'];
    public function tbl_users()
    {

        return $this->belongsTo(tbl_users::class);
    }
}
