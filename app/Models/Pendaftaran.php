<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    public $table = "pendaftaran";
    public $primaryKey = "id_pendaftaran";

    //tambahkan kode berikut
    protected $fillable = [
        'tipe', 'layanan', 'id_pendaftaran'
    ];
}
