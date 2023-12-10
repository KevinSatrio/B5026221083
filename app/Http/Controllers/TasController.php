<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TasController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $tas = DB::table('tas')->get();

        foreach($tas as $n){
            switch(true){
                case($n->tersedia == 'y'):
                $n->tersedia = 'Tersedia';
                break;
                case($n->tersedia == 'n'):
                $n->tersedia = 'Tidak Tersedia';
                break;
            }
        }

    	// mengirim data pegawai ke view index
		return view('tasindex',['tas' => $tas]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahdatatas');

	}


	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{


		// insert data ke table pegawai
		DB::table('tas')->insert([
			'merktas' => $request->merktas,
			'stocktas' => $request->stocktas,
			'tersedia' => $request->tersedia
		]);

		// alihkan halaman ke halaman pegawai
		return redirect('/tasindex');

	}

}
