<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $keranjang = DB::table('keranjangbelanja')->get();

        foreach($keranjang as $n){

        $n->Total = $n->Jumlah * $n->Harga;
        }

    	// mengirim data pegawai ke view index
		return view('keranjangindex',['keranjang' => $keranjang]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahkeranjang');

	}


	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga
		]);

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangindex');

	}

    public function hapus($ID)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$ID)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangindex');
	}
}
