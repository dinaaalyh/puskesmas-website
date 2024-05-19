<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    public $table = "poli";
    protected $primaryKey = "id_poli";

    protected $fillable = [
        'kd_poli', 'nm_poli', 'jumlah_maks'
    ];
}
