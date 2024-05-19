<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use Illuminate\Http\Request;
use DB;

class BerandaController extends Controller
{
    public function index()
    {
        $polis = Poli::select(
            DB::raw('kode'),
            DB::raw('nama_poli'))
            ->pluck('kode', 'nama_poli');

        $tabels = $polis->keys();
        $data = $polis->values();

        return view('welcome', compact('tabels', 'data'));
    }
}
