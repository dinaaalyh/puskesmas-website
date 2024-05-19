<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;
    public $table = "kunjungan";
    public $primaryKey = "id_kunjungan";

    //tambahkan kode berikut
    protected $fillable = [
        'id_identitas',
        'id_poli',
        'no_antrian',
        'status_pasien',
        'kondisi_kesehatan',
        'opsi_kunjungan',
        'layanan',
        'biaya',
    ];
}
