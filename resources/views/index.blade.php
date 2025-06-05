@extends('template')
@section('content')


    <h3>Data Pegawai</h3>

    <a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>

	<form action="/pegawai/cari" method="GET" class="form-inline mb-2 mt-3">
        <div class="form-group">
          <label for="cari" class="mr-2" style="font-size: 1.75rem; font-weight: 500;">Cari Data Pegawai :</label>
          <input type="text" name="cari" id="cari" class="form-control" placeholder="Cari Pegawai...">
        </div>
        <button type="submit" class="btn btn-primary">Cari</button>
      </form>

    <br />

    <table class="table table-striped">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-success">Edit</a>
                    |
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
 {{-- hanya bisa dipakai dengan paginate --}}
 {{
    $pegawai->links('pagination::bootstrap-4')
}}
@endsection
