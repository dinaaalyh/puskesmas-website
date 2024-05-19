<?php

namespace App\Http\Controllers;

use App\Models\Identitas;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pasiens = DB::table('pasien')
        //     ->join('identitas', 'pendaftaran.id_pendaftaran', '=', 'identitas.id_pendaftaran')
        //     ->join('kunjungan', 'identitas.id_identitas', '=', 'kunjungan.id_identitas')
        //     ->get();

        $pasiens = Identitas::all();
        return view('pasien.index', compact('pasiens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'nohp' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'goldar' => 'required',
            'agama' => 'required',
            'status_perkawinan' => 'required',
            'alamat' => 'required',
        ]);

        // dd($request->all());
        $tambah = Identitas::create($request->all());
        if ($tambah) {
            return redirect()->route('pasien.index')
                ->with('success', 'Data pasien berhasil disimpan.');
        } else {
            abort(500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy(Identitas $pasien)
    {
        $hapus = $pasien->delete();
        if ($hapus) {
            return redirect()->route('pasien.index')
                ->with('success', 'Data pasien berhasil dihapus!.');
        } else {
            abort(500);
        }
    }

    public function report()
    {
        // $pasiens = DB::table('pasien')
        //     ->join('identitas', 'pendaftaran.id_pendaftaran', '=', 'identitas.id_pendaftaran')
        //     ->join('kunjungan', 'identitas.id_identitas', '=', 'kunjungan.id_identitas')
        //     ->get();

        $pasiens = Identitas::all();
        return view('pasien.report', compact('pasiens'));
    }
}
