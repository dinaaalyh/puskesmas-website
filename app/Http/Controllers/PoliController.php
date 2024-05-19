<?php

namespace App\Http\Controllers;

use App\Models\Identitas;
use App\Models\Pasien;
use App\Models\Poli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PoliController extends Controller
{
    public function index()
    {
        $polis = Poli::all();
        return view('poli.index', compact('polis'));
    }

    public function create()
    {
        return view('poli.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'kode' => 'required|unique:poli,kode',
            'nama_poli' => 'required',
        ]);

        $tambah = Poli::create($request->all());
        if ($tambah) {
            return redirect()->route('poli.index')
                ->with('success', 'Data poliklinik berhasil disimpan.');
        } else {
            abort(500);
        }
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

    public function report()
    {
        $polis = Poli::all();
        return view('poli.report', compact('polis'));
    }
}
