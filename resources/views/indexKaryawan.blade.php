@extends('template')
@section('content')


    <h3>Data Karyawan</h3>

    <a href="/karyawan/tambah" class="btn btn-primary my-3"> + Tambah karyawan Baru</a>


    <table class="table table-striped">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan as $p)
            <tr>
                <td>{{ $p->kodepegawai }}</td>
                <td>{{ strtoupper($p->namalengkap) }}</td>
                <td>{{ $p->divisi }}</td>
                <td>{{ strtolower($p->departemen) }}</td>
                <td>
                    <a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
 {{-- hanya bisa dipakai dengan paginate --}}
 {{
    $karyawan->links('pagination::bootstrap-4')
}}
@endsection
