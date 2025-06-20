@extends('template')
@section('content')


    <h3>Data Nilai Mahasiswa</h3>

    <a href="/minuman/tambah" class="btn btn-primary mb-3">Tambah Data</a>

    <br />

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilai as $n)
        @php
            $huruf = 'D';
            if ($n->nilaiangka >=81) $huruf = 'A';
            elseif ($n->nilaiangka >=61) $huruf = 'B';
            elseif ($n->nilaiangka >=41) $huruf = 'C';

            $bobot = $n->nilaiangka * $n->sks;
        @endphp
            <tr>
                <td>{{ $n->id }}</td>
                <td>{{ $n->nomorinduksiswa }}</td>
                <td>{{ $n->nilaiangka}}</td>
                <td>{{ $n->sks }}</td>
                <td>{{ $huruf }}</td>
                <td>{{ $bobot }}</td>
            </tr>
        @endforeach
    </table>
@endsection
