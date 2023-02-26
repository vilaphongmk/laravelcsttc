<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_rules extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'created_by',
        'updated_by'
    ];



    public function created_by()
    {
        return $this->belongsTo(tbl_users::class, 'created_by', 'id');
    }

    public function updated_by()
    {
        return $this->belongsTo(tbl_users::class, 'updated_by', 'id');
    }
}
