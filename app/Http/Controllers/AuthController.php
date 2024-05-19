<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    function daftar()
    {
        return view('registrasi');
    }

    // * ini buat simpan proses registrasi
    public function register(Request $request)
    {
        $this->validate($request, [
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

        // dd($request->all());

        Auth::create($request->all());

        return redirect()->route('identitas.index')
            ->with('success', 'Data berhasil disimpan.');
    }

    function login(Request $request)
    {
        #
    }

    function logout(Request $request)
    {
        #
    }
}
