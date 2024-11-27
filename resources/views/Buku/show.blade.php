@extends('layouts.app')

@section('content')
    {{-- Back Button --}}
    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
        <a href="{{ route('buku.index') }}" class="btn btn-outline-primary">Koleksi Buku</a>
        <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-outline-primary">Edit</a>
        <form action="{{ route('buku.destroy', $buku->id) }}" method="post" class="d-inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger">Hapus</button>
        </form>

    </div>

    {{-- Show Sebuah Buku --}}
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $buku->judul }}"
                    disabled>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" disabled>{{ $buku->deskripsi }}</textarea>
            </div>
            <div class="mb-3">
                <label for="pengarang" class="form-label">Pengarang</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{ $buku->pengarang }}"
                    disabled>
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $buku->penerbit }}"
                    disabled>
            </div>
            <div class="mb-3">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit"
                    value="{{ $buku->tahun_terbit }}" disabled>
            </div>
            <div class="mb-3">
                <label for="jumlah_halaman" class="form-label">Jumlah Halaman</label>
                <input type="number" class="form-control" id="jumlah_halaman" name="jumlah_halaman"
                    value="{{ $buku->jumlah_halaman }}" disabled>
            </div>
        </div>
    </div>
@endsection
