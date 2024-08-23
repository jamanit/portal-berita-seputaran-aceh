<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_about extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'about',
    ];
    protected $table      = 'tb_about';
    public    $timestamps = true;
}
