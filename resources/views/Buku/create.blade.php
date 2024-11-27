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

    {{-- Form Create Buku --}}
    <div class="card">
        <div class="card-body">
            <form action="{{ route('buku.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                        name="judul" placeholder="Masukkan judul buku" value="{{ old('judul') }}">
                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi"
                        placeholder="Masukkan deskripsi buku">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pengarang" class="form-label">Pengarang</label>
                    <input type="text" class="form-control @error('pengarang') is-invalid @enderror" id="pengarang"
                        name="pengarang" placeholder="Masukkan pengarang" value="{{ old('pengarang') }}">
                    @error('pengarang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control @error('penerbit') is-invalid @enderror" id="penerbit"
                        name="penerbit" placeholder="Masukkan penerbit" value="{{ old('penerbit') }}">
                    @error('penerbit')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="number" class="form-control @error('tahun_terbit') is-invalid @enderror" id="tahun_terbit"
                        name="tahun_terbit" placeholder="Masukkan tahun terbit" value="{{ old('tahun_terbit') }}">
                    @error('tahun_terbit')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jumlah_halaman" class="form-label">Jumlah Halaman</label>
                    <input type="number" class="form-control @error('jumlah_halaman') is-invalid @enderror"
                        id="jumlah_halaman" name="jumlah_halaman" placeholder="Masukkan jumlah halaman"
                        value="{{ old('jumlah_halaman') }}">
                    @error('jumlah_halaman')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
