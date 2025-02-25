<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('pegawai.index', compact('pegawais'));
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'jabatan' => 'required',
        ]);

        Pegawai::create($request->all());
        return redirect('/pegawai')->with('success', 'Pegawai berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'jabatan' => 'required',
        ]);

        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update($request->all());
        return redirect('/pegawai')->with('success', 'Pegawai berhasil diperbarui');
    }

    public function destroy($id)
    {
        Pegawai::destroy($id);
        return redirect('/pegawai')->with('success', 'Pegawai berhasil dihapus');
    }
}
