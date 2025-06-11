<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MinumanDBController extends Controller
{
    public function indexMinuman()
    {

        $minuman = DB::table('minuman')->paginate(10);

    	return view('indexMinuman',['minuman' => $minuman]);
    }

    public function tambahMinuman(){
        // memanggil view tambah
        return view('tambahMinuman');
    }

    public function storeMinuman(Request $request)
    {
        DB::table('minuman')->insert([
            'merkminuman' => $request->merk,
            'hargaminuman' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/minuman');

    }

public function editMinuman($id)
{
	$minuman = DB::table('minuman')->where('id',$id)->get();
	return view('editMinuman',['minuman' => $minuman]);

}

public function updateMinuman(Request $request)
{
	DB::table('minuman')->where('id',$request->id)->update([
		'merkminuman' => $request->merk,
        'hargaminuman' => $request->harga,
        'tersedia' => $request->tersedia,
        'berat' => $request->berat
	]);
	return redirect('/minuman');
}

public function hapusMinuman($id)
{
	DB::table('minuman')->where('id',$id)->delete();

	return redirect('/minuman');
}

public function cari(Request $request)
	{
		$cari = $request->cari;

		$minuman = DB::table('minuman')
		->where('merkminuman','like',"%".$cari."%")
		->paginate();

		return view('indexMinuman',['minuman' => $minuman]);

	}
}
