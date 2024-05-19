<?php

namespace App\Http\Controllers;

use App\Models\Identitas;
use Illuminate\Http\Request;

class IdentitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $identitass = Identitas::latest()->paginate(20);
        return view('identitas.index', compact('identitass'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.se
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('identitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'goldar' => 'required',
            'agama' => 'required',
            'status_perkawinan' => 'required',
            'alamat' => 'required',
            'poli' => 'required',
            'nohp' => 'required',
        ]);

        // dd($request->all());

        Identitas::create($request->all());

        return redirect()->route('identitas.index')
            ->with('success', 'Data berhasil disimpan.');
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
        return view('identitas.edit', compact('identitas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Identitas $identitas)
    {
        $request->validate([
            'nama' => 'required',
            'tempat' => 'required',
            'tanggal' => 'required',
            'jenis' => 'required',
            'gol' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
        ]);

        $identitas->update($request->all());
        return redirect()->route('identitas.index')
            ->with('success', 'Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Identitas $identitas)
    {
        $identitas->delete();
        return redirect()->route('pendaftaran.index')
            ->with('success', 'Data berhasil dihapus');
    }

    public function report()
    {
        $identitass = Identitas::latest()->paginate(20);
        return view('identitas.report', compact('identitass'))->with('i', (request()->input('page', 1) - 1) * 20);
    }
}
