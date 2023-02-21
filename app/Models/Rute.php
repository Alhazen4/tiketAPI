<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    use HasFactory;

    public $table = "Rute";

    protected $primaryKey = 'id_rute';
    protected $fillable = [
        'nama_kota',
        'titik_agen',
    ];
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
