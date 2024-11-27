<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukus = Buku::all();
        $nav = 'Koleksi Buku';

        return view('buku.index', compact('bukus', 'nav'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nav = 'Tambah Buku';
        return view('buku.create', compact('nav'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBukuRequest $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'pengarang' => 'required|string|max:100',
            'penerbit' => 'required|string|max:100',
            'tahun_terbit' => 'required|integer|digits:4',
            'jumlah_halaman' => 'required|integer|min:1',
        ]);

        Buku::create($validatedData);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        $nav = 'Detail Buku - ' . $buku->judul;
        return view('buku.show', compact('buku', 'nav'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        $nav = 'Edit Buku - ' . $buku->judul;
        return view('buku.edit', compact('buku', 'nav'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBukuRequest $request, Buku $buku)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'pengarang' => 'required|string|max:100',
            'penerbit' => 'required|string|max:100',
            'tahun_terbit' => 'required|integer|digits:4',
            'jumlah_halaman' => 'required|integer|min:1',
        ]);

        $buku->update($validatedData);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus.');
    }
}
