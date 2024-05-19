<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    use HasFactory;

    public $table = "identitas";
    public $primaryKey = "id_identitas";

    //tambahkan kode berikut
    protected $fillable = [
        'nama',
        'nohp',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'goldar',
        'agama',
        'status_perkawinan',
        'alamat',
    ];
}
