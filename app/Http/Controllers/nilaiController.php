<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class nilaiController extends Controller
{
    public function indexNilai()
    {

        $nilai = DB::table('nilai')->get();

    	return view('indexNilai',['nilai' => $nilai]);
    }

    public function tambahNilai(){
        // memanggil view tambah
        return view('tambahNilai');
    }

    public function storeNilai(Request $request)
    {
        DB::table('nilai')->insert([
            'nomorinduksiswa' => $request->nomorinduksiswa,
            'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks,
        ]);
        return redirect('/eas');

    }

}
