@extends('layouts.app')
@section('content')
    {{-- Back Button --}}
    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
        <a href="{{ route('buku.index') }}" class="btn btn-outline-primary d-flex gap-2">
            <div class="">
                <span class="material-symbols-rounded fs-6">
                    book
                </span>
            </div> Koleksi Buku
        </a>
    </div>

    {{-- Edit Sebuah Buku --}}
    <form action="{{ route('buku.update', $buku->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ $buku->judul }}">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $buku->deskripsi }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="pengarang" class="form-label">Pengarang</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang"
                        value="{{ $buku->pengarang }}">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $buku->penerbit }}">
                </div>
                <div class="mb-3">
                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit"
                        value="{{ $buku->tahun_terbit }}">
                </div>
                <div class="mb-3">
                    <label for="jumlah_halaman" class="form-label">Jumlah Halaman</label>
                    <input type="number" class="form-control" id="jumlah_halaman" name="jumlah_halaman"
                        value="{{ $buku->jumlah_halaman }}">
                </div>
                <a href="{{ route('buku.index') }}" class="btn btn-danger">Batalkan</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
@endsection
