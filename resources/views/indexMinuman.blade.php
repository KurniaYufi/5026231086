@extends('template')
@section('content')


    <h3>Data Minuman</h3>

    <a href="/minuman/tambah" class="btn btn-primary"> + Tambah Minuman Baru</a>

	<form action="/minuman/cari" method="GET" class="form-inline mb-2 mt-3">
        <div class="form-group">
          <label for="cari" class="mr-2" style="font-size: 1.75rem; font-weight: 500;">Cari Data Minuman :</label>
          <input type="text" name="cari" id="cari" class="form-control" placeholder="Cari Minuman...">
        </div>
        <button type="submit" class="btn btn-primary">Cari</button>
      </form>

    <br />

    <table class="table table-striped">
        <tr>
            <th>Merk</th>
            <th>Harga</th>
            <th>Ketersediaan</th>
            <th>Berat(kg)</th>
            <th>Opsi</th>
        </tr>
        @foreach ($minuman as $p)
            <tr>
                <td>{{ $p->merkminuman }}</td>
                <td>{{ $p->hargaminuman }}</td>
                <td>{{ $p->tersedia ? 'Tersedia' : 'Kosong' }}</td>
                <td>{{ $p->berat }}</td>
                <td>
                    <a href="/minuman/edit/{{ $p->id }}" class="btn btn-success">Edit</a>
                    |
                    <a href="/minuman/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
 {{-- hanya bisa dipakai dengan paginate --}}
 {{
    $minuman->links('pagination::bootstrap-4')
}}
@endsection
