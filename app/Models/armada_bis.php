<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class armada_bis extends Model
{
    use HasFactory;

    public $table = "armada_bis";

    protected $primaryKey = 'id_bis';
    protected $fillable = [
        'nama_bis',
        'tipe_bis',
        'kelas_bis',
        'rute',
        'status',
    ];
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
