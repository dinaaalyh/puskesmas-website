<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //conth dapet semua total [pasien baru]
        // $total_baru = DB::select(DB::raw("SELECT count(id_identitas) as total_baru from kunjungan where status_pasien='baru' and date(created_at) = current_date"));
        // $total_lama = DB::select(DB::raw("SELECT count(id_identitas) as total_lama from kunjungan where status_pasien='lama' and date(created_at) = current_date"));

        // $total_online = DB::select(DB::raw("SELECT count(id_kunjungan) as total_online from kunjungan where opsi_kunjungan='online' and date(created_at) = current_date"));
        // $total_offline = DB::select(DB::raw("SELECT count(id_kunjungan) as total_offline from kunjungan where opsi_kunjungan='offline' and date(created_at) = current_date"));

        // $total_laki_laki = DB::select(DB::raw("SELECT count(id_identitas) as total_laki_laki from identitas where jenis_kelamin='L' and date(created_at) = current_date"));
        // $total_perempuan = DB::select(DB::raw("SELECT count(id_identitas) as total_perempuan from identitas where jenis_kelamin='P' and date(created_at) = current_date"));

        // $total_umum = DB::select(DB::raw("SELECT count(id_identitas) as total_umum from identitas where layanan='umum' and date(created_at) = current_date"));
        // $total_bpjs = DB::select(DB::raw("SELECT count(id_identitas) as total_bpjs from identitas where layanan='bpjs' and date(created_at) = current_date"));

        // $total_sakit = DB::select(DB::raw("SELECT count(id_kunjungan) as total_sakit from kunjungan where kondisi_kesehatan='sakit' and date(created_at) = current_date"));
        // $total_sehat = DB::select(DB::raw("SELECT count(id_kunjungan) as total_sehat from kunjungan where kondisi_kesehatan='sehat' and date(created_at) = current_date"));

        // $total_umum = DB::select(DB::raw("SELECT count(id_poli) as total_umum from kunjungan where nama_poli='umum' and date(created_at) = current_date"));
        // $total_anak = DB::select(DB::raw("SELECT count(id_poli) as total_anak from kunjungan where nama_poli='anak' and date(created_at) = current_date"));
        // $total_anak = DB::select(DB::raw("SELECT count(id_poli) as total_gigi from kunjungan where nama_poli='gigi' and date(created_at) = current_date"));
        // $total_kia = DB::select(DB::raw("SELECT count(id_poli) as total_kia from kunjungan where nama_poli='kia' and date(created_at) = current_date"));
        // $total_tb_paru = DB::select(DB::raw("SELECT count(id_poli) as total_tb_paru from kunjungan where nama_poli='tb.paru' and date(created_at) = current_date"));
        // $total_kusta = DB::select(DB::raw("SELECT count(id_poli) as total_kusta from kunjungan where nama_poli='kusta' and date(created_at) = current_date"));
        // $total_konsultasi = DB::select(DB::raw("SELECT count(id_poli) as total_konsultasi from kunjungan where nama_poli='konsultasi' and date(created_at) = current_date"));
        // return view('v_pasien.index');

        $data = [
            "status_pasien" => DB::select(DB::raw("SELECT status_pasien, count(*) as res from kunjungan where date(created_at) = current_date group by status_pasien")),
            "opsi_kunjungan" => DB::select(DB::raw("SELECT opsi_kunjungan, count(*) as res from kunjungan where date(created_at) = current_date group by opsi_kunjungan")),
            "jenis_kelamin" => DB::select(DB::raw("SELECT jenis_kelamin, count(*) as res from identitas where date(created_at) = current_date group by jenis_kelamin")),
            "layanan" => DB::select(DB::raw("SELECT layanan, count(*) as res from identitas where date(created_at) = current_date group by layanan")),
            "kondisi_kesehatan" => DB::select(DB::raw("SELECT kondisi_kesehatan, count(*) as res from kunjungan where date(created_at) = current_date group by kondisi_kesehatan")),
            "nama_poli" => DB::select(DB::raw("SELECT poli.nama_poli, count('kunjungan.*') as res from kunjungan join poli on kunjungan.id_poli=poli.id_poli where date(kunjungan.created_at) = current_date group by poli.nama_poli")),
        ];

        return view('laporan.index', compact('data'));
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
        $kunjungan = DB::table('kunjungan')
            ->join('identitas', 'kunjungan.id_identitas', '=', 'identitas.id_identitas')
            ->join('poli', 'kunjungan.id_poli', '=', 'poli.id_poli')
            ->where('id_kunjungan', '=', $id)->first();
        return view('v_pasien.index', ['antrian' => $kunjungan]);
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

    public function cetak_antrian($id)
    {
        $kunjungan = DB::table('kunjungan')
            ->join('identitas', 'kunjungan.id_identitas', '=', 'identitas.id_identitas')
            ->join('poli', 'kunjungan.id_poli', '=', 'poli.id_poli')
            ->where('id_kunjungan', '=', $id)->first();
        return view('kunjungan.cetak-antrian', ['antrian' => $kunjungan]);
    }
}
