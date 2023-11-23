<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    protected $table = "Websites";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'link',
        'kategori',
        'kd_whm',
        'status',
        'tgl_pemantauan',
        'tgl_last_update',
        'berita',
        'logo',
        'cms',
        'keamanan',
        'error',
        'ket_error',
        'submitted'
    ];
}
