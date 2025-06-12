<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanDBController extends Controller
{
    public function indexKaryawan()
    {

        $karyawan = DB::table('karyawan')->paginate(10);

    	return view('indexKaryawan',['karyawan' => $karyawan]);
    }

    public function tambahKaryawan(){
        // memanggil view tambah
        return view('tambahKaryawan');
    }

    public function storeKaryawan(Request $request)
    {
    // Cek apakah kodepegawai sudah ada di database
    $exists = DB::table('karyawan')->where('kodepegawai', $request->kode)->exists();

    if ($exists) {
        return redirect('/karyawan/tambah')->with('warning', 'Kode Pegawai sudah digunakan. Silakan gunakan kode lain.');
    }

    DB::table('karyawan')->insert([
        'kodepegawai' => $request->kode,
        'namalengkap' => $request->nama,
        'divisi' => $request->divisi,
        'departemen' => $request->departemen
    ]);
    return redirect('/karyawan');
    }


public function hapusKaryawan($kodepegawai)
{
	DB::table('karyawan')->where('kodepegawai',$kodepegawai)->delete();

	return redirect('/karyawan');
}
}
