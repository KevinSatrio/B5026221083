<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangController extends Controller
{
	public function index()
	{
    	// mengambil data dari table keranjangbelanja
        $keranjang = DB::table('keranjangbelanja')->get();

        //mengkalkulasi Total harga
        foreach($keranjang as $n){

        $n->Total = $n->Jumlah * $n->Harga;
        }

    	// mengirim data item ke view index
		return view('KeranjangBelanja/keranjangindex',['keranjang' => $keranjang]);

	}

	// method untuk menampilkan view form tambah keranjang
	public function tambah()
	{

		// memanggil view tambah
		return view('KeranjangBelanja/tambahkeranjang');

	}


	// method untuk insert data ke table keranjangbelanja
	public function store(Request $request)
	{
		// insert data ke table keranjangbelanja
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga
		]);

		// alihkan halaman ke halaman index
		return redirect('/keranjangindex');

	}

    // method untuk menghapus data ke table keranjangbelanja
    public function hapus($ID)
	{
		// menghapus data keranjang berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$ID)->delete();

		// alihkan halaman ke halaman index
		return redirect('/keranjangindex');
	}
}
