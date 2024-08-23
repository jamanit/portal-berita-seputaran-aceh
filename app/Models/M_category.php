<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
    ];
    protected $table      = 'tb_category';
    public    $timestamps = true;
}
