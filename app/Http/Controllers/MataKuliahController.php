<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mataKuliahs = MataKuliah::all();
        return view('mataKuliah.index', compact('mataKuliahs'));
    }

    public function create()
    {
        return view('mataKuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kode' => 'required|unique:mata_kuliahs',
            'dosen' => 'nullable',
        ]);

        MataKuliah::create($request->all());
        return redirect()->route('mataKuliah.index')->with('success', 'Mata kuliah ditambahkan.');
    }

    public function edit(MataKuliah $mata_kuliah)
    {
        return view('mataKuliah.edit', compact('mata_kuliah'));
    }

    public function update(Request $request, MataKuliah $mata_kuliah)
    {
        $request->validate([
            'nama' => 'required',
            'kode' => 'required|unique:mata_kuliahs,kode,' . $mata_kuliah->id,
            'dosen' => 'nullable',
        ]);

        $mata_kuliah->update($request->all());
        return redirect()->route('mataKuliah.index')->with('success', 'Mata kuliah diperbarui.');
    }

    public function destroy(MataKuliah $mata_kuliah)
    {
        $mata_kuliah->delete();
        return redirect()->route('mataKuliah.index')->with('success', 'Mata kuliah dihapus.');
    }
}
