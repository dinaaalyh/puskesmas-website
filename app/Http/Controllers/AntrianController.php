<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Poli;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class AntrianController extends Controller
{
    public function cetak()
    {
        $polis = FacadesDB::table('poli')->select('id_poli', 'kode', 'nama_poli')->get();

        $data_antrian = []; //buat array kosongan
        foreach ($polis as $poli) {

            $antrians = FacadesDB::table('kunjungan')
                ->select('poli.id_poli', 'poli.kode', 'poli.nama_poli', 'kunjungan.no_antrian', 'kunjungan.created_at', 'kunjungan.id_kunjungan')
                ->join('poli', 'kunjungan.id_poli', '=', 'poli.id_poli')
                ->where('kunjungan.id_poli', '=', $poli->id_poli)
                ->orderBy('kunjungan.created_at', 'DESC')
                ->first();

            if ($antrians) {
                array_push($data_antrian, $antrians);
            }
        }

        // dd($data_antrian);
        return view('antrian.cetak', compact('data_antrian'));
    }

    public function index()
    {
        $antrians = FacadesDB::table('antrian')
            ->join('poli', 'antrian.id_poli', '=', 'poli.id_poli')
            ->get();
        return view('antrian.index', compact('antrians'));
    }

    public function create()
    {
        $polis = Poli::all();
        return view('antrian.create', compact('polis'));
    }

    public function store(Request $request)
    {
        $poli = Poli::findOrFail($request->id_poli)->first();
        $data = [
            'id_poli' => $request->id_poli,
            'antrian' => $poli->kd_poli . $request->antrian,
        ];

        Antrian::create($data);
        return redirect()->route('antrian.index')
            ->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit(Antrian $antrian)
    {
        return view('antrian.edit', compact('antrian'));
    }

    public function update(Request $request, Antrian $antrian)
    {

        $antrian->update(['antrian' => $antrian->antrian + 1]);
        return response()->json(['success' => 'Post created successfully.']);
    }

    public function destroy(Antrian $antrian)
    {
        $antrian->delete();
        return redirect()->route('antrian.index')
            ->with('success', 'Data berhasil dihapus');
    }


    function next_antrian(Request $request)
    {
        $id = $request->id;
        $antrian = Antrian::where('id', '=', $id)->first();
        $antrian->antrian = $antrian->antrian + 1;
        $antrian->save();
        return response()->json(['success' => 'Action Successfully.']);
    }

    public function reset_antrian()
    {

        //hapus data
        Antrian::truncate();

        $polis = Poli::all();
        foreach ($polis as $p) {
            Antrian::Create([
                'id_poli' => $p->id_poli,
                'antrian' => 1,
            ]);
        }
        return response()->json(['success' => 'Action Successfully.']);
    }
}
