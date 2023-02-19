<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_visions extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image_path', 'content', 'vision_index', 'created_by', 'update_by'];
    public function tbl_users()
    {

        return $this->belongsTo(tbl_users::class);
    }
}
