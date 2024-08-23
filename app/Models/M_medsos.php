<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_medsos extends Model
{
    use HasFactory;
    protected $fillable = [
        'medsos_name',
        'medsos_address',
        'medsos_link',
    ];
    protected $table      = 'tb_medsos';
    public    $timestamps = true;
}
