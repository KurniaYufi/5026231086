@extends('template')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4">Form Tambah Data Pegawai</h3>

    <a href="/pegawai" class="btn btn-secondary mb-3">Kembali</a>

    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}

        <div class="form-group row mb-3">
            <label for="nama" class="col-sm-2 col-form-label text-end">Nama</label>
            <div class="col-sm-10">
                <input type="text" id="nama" name="nama" required class="form-control">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="jabatan" class="col-sm-2 col-form-label text-end">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" id="jabatan" name="jabatan" required class="form-control">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="umur" class="col-sm-2 col-form-label text-end">Umur</label>
            <div class="col-sm-10">
                <input type="number" id="umur" name="umur" required class="form-control">
            </div>
        </div>

        <div class="form-group row mb-4">
            <label for="alamat" class="col-sm-2 col-form-label text-end">Alamat</label>
            <div class="col-sm-10">
                <textarea id="alamat" name="alamat" required class="form-control" rows="3"></textarea>
            </div>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
    </form>
</div>
@endsection
