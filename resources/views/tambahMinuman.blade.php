@extends('template')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4">Form Tambah Data Minuman</h3>

    <a href="/minuman" class="btn btn-secondary mb-3">Kembali</a>

    <form action="/minuman/store" method="post">
        {{ csrf_field() }}

        <div class="form-group row mb-3">
            <label for="merk" class="col-sm-2 col-form-label text-end">Merk</label>
            <div class="col-sm-10">
                <input type="text" id="merk" name="merk" required class="form-control">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="harga" class="col-sm-2 col-form-label text-end">Harga</label>
            <div class="col-sm-10">
                <input type="text" id="harga" name="harga" required class="form-control">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="tersedia" class="col-sm-2 col-form-label text-end">Tersedia</label>
            <div class="col-sm-10">
                <select id="tersedia" name="tersedia" class="form-control" required>
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="harga" class="col-sm-2 col-form-label text-end">Berat(Kg)</label>
            <div class="col-sm-10">
                <input type="text" id="berat" name="berat" required class="form-control">
            </div>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
    </form>
</div>
@endsection
