@extends('template')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4">Edit Minuman</h3>

    <a href="/minuman" class="btn btn-secondary mb-3">Kembali</a>

    @foreach ($minuman as $p)
    <form action="/minuman/update" method="post">
        {{ csrf_field() }}

        <input type="hidden" name="id" value="{{ $p->id }}"> <br />
        <div class="form-group row mb-3">
            <label for="nama" class="col-sm-2 col-form-label text-end">Merk</label>
            <div class="col-sm-10">
                <input type="text" id="merk" name="merk" required value="{{ $p->merkminuman }}" class="form-control">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="harga" class="col-sm-2 col-form-label text-end">Harga</label>
            <div class="col-sm-10">
                <input type="text" id="harga" name="harga" required value="{{ $p->hargaminuman }}" class="form-control">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="tersedia" class="col-sm-2 col-form-label text-end">Tersedia</label>
            <div class="col-sm-10">
                <select id="tersedia" name="tersedia" class="form-control" required>
                    <option value="1" {{ $p->tersedia == 1 ? 'selected' : '' }}>Ya</option>
                    <option value="0" {{ $p->tersedia == 0 ? 'selected' : '' }}>Tidak</option>
                </select>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="harga" class="col-sm-2 col-form-label text-end">Berat(Kg)</label>
            <div class="col-sm-10">
                <input type="text" id="berat" name="berat" required value="{{ $p->berat }}" class="form-control">
            </div>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
    </form>
    @endforeach
</div>
@endsection
