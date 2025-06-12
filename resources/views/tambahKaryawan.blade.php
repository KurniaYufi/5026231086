@extends('template')

@section('content')
<style>
    .alert-pink {
        background-color: #ffc0cb; /* merah muda */
        color: #721c24; /* teks merah gelap */
        border: 1px solid #f5c6cb;
        border-radius: 0.25rem;
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
    }
</style>

<div class="container mt-4">
    <h3 class="mb-4">Form Tambah Data Karyawan</h3>

    @if(session('warning'))
        <div class="alert alert-pink">
            {{ session('warning') }}
        </div>
    @endif

    <form action="/karyawan/store" method="post">
        {{ csrf_field() }}

        <div class="form-group row mb-3">
            <label for="kode" class="col-sm-2 col-form-label text-end">Kode Pegawai</label>
            <div class="col-sm-10">
                <input type="text" id="kode" name="kode" required class="form-control" value="{{ old('kode') }}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="nama" class="col-sm-2 col-form-label text-end">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" id="nama" name="nama" required class="form-control" value="{{ old('nama') }}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="divisi" class="col-sm-2 col-form-label text-end">Divisi</label>
            <div class="col-sm-10">
                <input type="text" id="divisi" name="divisi" required class="form-control" value="{{ old('divisi') }}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="departemen" class="col-sm-2 col-form-label text-end">Departemen</label>
            <div class="col-sm-10">
                <input type="text" id="departemen" name="departemen" required class="form-control" value="{{ old('departemen') }}">
            </div>
        </div>

        <div class="d-flex justify-content-end mt-3">
            <a href="/karyawan" class="btn btn-secondary mr-2">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
    </form>
</div>
@endsection
