<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data_siswa = \App\Siswa::all();
        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }
    public function create(Request $request)
    {
        \App\Siswa::create($request->all());
        return redirect('/siswa')->with('success', 'Data Berhasil ditambahkan!, Silahkan check data anda.');
    }
    public function edit($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('siswa/edit', ['siswa' => $siswa]);
    }
    public function update(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('edited', 'Perhatian: Ada perubahan atau perbaikan data , silakah di cek data anda.');
    }
    public function delete($id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa')->with('deleted', '1 data telah dihapus, silahkan di cek data anda.');
    }
}
