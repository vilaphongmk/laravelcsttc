<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_documents extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'pdf_path', 'downloads', 'created_by', 'update_by'];
    public function tbl_users()
    {

        return $this->belongsTo(tbl_users::class);
    }
}
