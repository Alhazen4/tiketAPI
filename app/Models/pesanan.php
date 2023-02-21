<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;

    public $table = "pesanan";

    protected $primaryKey = 'id_pesanan';
    protected $fillable = [
        'nama_pemesan',
        'no_ktp',
        'no_telp',
        'tgl_brkt',
        'wkt_brkt',
        'keberangkatan',
        'tujuan',
        'armada_bis',
    ];
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
