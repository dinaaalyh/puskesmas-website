<?php

namespace App\Http\Controllers;

use App\Models\Identitas;
use App\Models\Kunjungan;
use App\Models\Poli;
use Illuminate\Http\Request;

class RegController extends Controller
{
    //

    public function registrasi(Request $request)
    {
        return view('registrasi', [
            'identitas' => Identitas::all(),
            'poli' => Poli::all(),
        ]);
    }

    public function do_registrasi(Request $request)
    {

        $kunj = Kunjungan::where('id_poli', '=', $request->id_poli)->orderBy('created_at', 'DESC')->first();

        if ($kunj) {
            $antrian = $kunj->no_antrian + 1;
        } else {
            $antrian = 1;
        }

        //pecah data

        // jika pasien lama
        if ($request->status_pasien == 'lama') {
            $kunjungan = [
                'id_identitas'      => $request->id_identitas,
                'id_poli'           => $request->id_poli,
                'no_antrian'   => $antrian,
                'status_pasien' => $request->status_pasien,
                'kondisi_kesehatan' => $request->kondisi_kesehatan,
                'opsi_kunjungan' => $request->opsi_kunjungan,
                'layanan' => $request->layanan,
                'biaya' => $request->biaya,
            ];

            $addKunjungan = Kunjungan::create($kunjungan);
            if ($addKunjungan) {
                return redirect()->route('kunjungan.index')
                    ->with('success', 'Data pendaftaran berhasil disimpan.');
            }
        } else {


            $identitas = [
                'nama' => $request->nama,
                'nohp' => $request->nohp,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'goldar' => $request->goldar,
                'agama' => $request->agama,
                'status_perkawinan' => $request->status_perkawinan,
                'alamat' => $request->alamat,
            ];


            $addPasien = Identitas::create($identitas);

            // dd($identitas);

            $kunjungan = [
                'id_identitas'      => $addPasien->id_identitas,
                'id_poli'           => $request->id_poli,
                'no_antrian'   => $antrian,
                'status_pasien' => $request->status_pasien,
                'kondisi_kesehatan' => $request->kondisi_kesehatan,
                'opsi_kunjungan' => $request->opsi_kunjungan,
                'layanan' => $request->layanan,
                'biaya' => $request->biaya,
            ];

            $addKunjungan = Kunjungan::create($kunjungan);

            if ($addPasien and $addKunjungan) {
                return redirect()->route('kunjungan.index')
                    ->with('success', 'Data pendaftaran berhasil disimpan.');
            }
        }


        abort(500);
    }
}
