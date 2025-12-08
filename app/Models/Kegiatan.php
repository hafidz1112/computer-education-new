<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kegiatan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [ 
        'judul',
        'dokumentasi',
        'deskripsi',
        'tanggal',
    ];
}
