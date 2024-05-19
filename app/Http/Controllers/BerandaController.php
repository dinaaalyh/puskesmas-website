<?php

namespace App\Http\Controllers;
use App\Models\Kunjungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use DB;

class BerandaController extends Controller
{
    public function index()
    {
        $kunjungans = Kunjungan::select(
            DB::raw("nm_poli"),
            DB::raw("MONTHNAME() as bulan")
            )

            ->pluck('nm_poli', '');

            $labels = $kunjungans->keys();
            $data = $kunjungans->values();
    }


}
