<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_action_log extends Model
{
    use HasFactory;
    protected $fillable = ['log_detail', 'user_id'];
}
