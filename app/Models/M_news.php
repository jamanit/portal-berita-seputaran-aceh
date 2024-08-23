<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_news extends Model
{
    use HasFactory;
    protected $fillable = [
        'idf_category',
        'photo',
        'title',
        'content',
        'created_by',
        'updated_by',
    ];
    protected $table      = 'tb_news';
    public    $timestamps = true;
}
