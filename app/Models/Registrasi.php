<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registrasi extends Model
{
    use HasFactory;

    public $table = "identitas";
    public $primaryKey = "id_identitas";

    //tambahkan kode berikut
    protected $fillable = [
        'nama', 'tempat', 'tanggal', 'jenis', 'goldar', 'agama', 'status', 'alamat', 'nohp', 'id_pendaftaran'
    ];
}
