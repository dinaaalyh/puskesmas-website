<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Kunjungan;

class KunjunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kunjungans = DB::table('kunjungan')
            ->join('identitas', 'kunjungan.id_identitas', '=', 'identitas.id_identitas')
            ->join('poli', 'kunjungan.id_poli', '=', 'poli.id_poli')
            ->get();
        return view('kunjungan.index', compact('kunjungans'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $antrian = DB::table('kunjungan')
            ->select('poli.id_poli', 'poli.kode', 'poli.nama_poli', 'kunjungan.no_antrian', 'kunjungan.created_at', 'kunjungan.id_kunjungan')
            ->join('poli', 'kunjungan.id_poli', '=', 'poli.id_poli')
            ->where('kunjungan.id_kunjungan', '=', $id)
            ->first();

        return view('kunjungan.cetak-antrian', compact('antrian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function report()
    {
        $kunjungans = DB::table('kunjungan')
            ->join('identitas', 'kunjungan.id_identitas', '=', 'identitas.id_identitas')
            ->join('poli', 'kunjungan.id_poli', '=', 'poli.id_poli')
            ->get();
        return view('kunjungan.report', compact('kunjungans'))->with('i');
    }
}
