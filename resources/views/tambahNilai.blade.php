@extends('template')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4">Form Tambah Data Nilai</h3>

    <form action="/minuman/store" method="post">
        {{ csrf_field() }}

        <div class="form-group row mb-3">
            <label for="merk" class="col-sm-2 col-form-label text-end">NRP</label>
            <div class="col-sm-10">
                <input type="textfield" id="nomorinduksiswa" name="nomorinduksiswa" required class="form-control">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="harga" class="col-sm-2 col-form-label text-end">Nilai Angka</label>
            <div class="col-sm-10">
                <input type="textfield" id="nilaiangka" name="nilaiangka" required class="form-control">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="harga" class="col-sm-2 col-form-label text-end">SKS</label>
            <div class="col-sm-10">
                <input type="textfield" id="sks" name="sks" required class="form-control">
            </div>
        </div>

            <button type="submit" class="btn btn-primary">SIMPAN</button>
            <a href="/eas" class="btn btn-danger">BATAL</a>

    </form>
</div>
@endsection
