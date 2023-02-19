<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_rules extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'created_by', 'update_by'];
    public function tbl_users()
    {

        return $this->belongsTo(tbl_users::class);
    }
}
