<?php

namespace App\Http\Controllers;

use App\Models\Identitas;
use App\Models\Kunjungan;
use App\Models\Poli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PendaftaranController extends Controller
{
    public function index()
    {
        return redirect()->to(route('pendaftaran.create'));
    }

    public function create()
    {
        $identitas = Identitas::all();
        $poli = Poli::all();
        return view('pendaftaran.create', compact('poli', 'identitas'));
    }

    public function store(Request $request)
    {

        // dd($request->all());

        $kunj = Kunjungan::where('id_poli', '=', $request->id_poli)->orderBy('created_at', 'DESC')->first();

        if ($kunj) {
            $antrian = $kunj->no_antrian + 1;
        } else {
            $antrian = 1;
        }

// dd($request->all());
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

            // dd($addPasien->id_identitas);
            if ($addPasien and $addKunjungan) {
                if(Auth::check()){
                    return redirect()->route('kunjungan.index')
                    ->with('success', 'Data pendaftaran berhasil disimpan.');
                }else{
                    // dd($addPasien);
                    return redirect()->route('v_pasien.show', $addPasien->id_identitas)
                    ->with('success', 'Data pendaftaran berhasil disimpan.');
                }
            }
        }

        abort(500);
    }

    public function show($id)
    {
        //
    }

    public function edit(Poli $poli)
    {
        return view('poli.edit', compact('poli'));
    }

    public function update(Request $request, Poli $poli)
    {
        $request->validate([
            'kd_poli' => 'required',
            'nm_poli' => 'required',
            'jumlah_maks' => 'required',
        ]);

        $poli->update($request->all());
        return redirect()->route('poli.index')
            ->with('success', 'Data berhasil dirubah');
    }

    public function destroy(Poli $poli)
    {
        $poli->delete();
        return redirect()->route('poli.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
