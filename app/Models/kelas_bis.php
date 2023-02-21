<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas_bis extends Model
{
    use HasFactory;


    public $table = "kelas_bis";

    protected $primaryKey = 'id_kelas';
    protected $fillable = [
        'nama_kelas',
        'fasilitas',
        'harga',
    ];
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
