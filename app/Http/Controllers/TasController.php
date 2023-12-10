<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TasController extends Controller
{
	public function index()
	{
    	// mengambil data dari table tas
        $tas = DB::table('tas')
                    ->orderBy("merktas", "asc")
                    ->paginate(10);

        //mengubah value ketersediaan
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

    	// mengirim data tas ke view index
		return view('Tas/tasindex',['tas' => $tas]);

	}

	// method untuk menampilkan view form tambah tas
	public function tambah()
	{

		// memanggil view tambah
		return view('Tas/tambahdatatas');

	}


	// method untuk insert data ke table tas
	public function store(Request $request)
	{


		// insert data ke table tas
		DB::table('tas')->insert([
			'merktas' => $request->merktas,
			'stocktas' => $request->stocktas,
			'tersedia' => $request->tersedia
		]);

		// alihkan halaman ke halaman tas
		return redirect('/tasindex');

	}

    // method untuk edit data pada table tas
    public function edit($kodetas)
	{
		// mengambil data tas berdasarkan id yang dipilih
		$tas = DB::table('tas')->where('kodetas',$kodetas)->get();
		// passing data tas yang didapat ke view tasedit.blade.php
		return view('Tas/tasedit',['tas' => $tas]);

	}

     // method untuk menghapus data pada table tas
    public function hapus($kodetas)
	{
		// menghapus data tas berdasarkan id yang dipilih
		DB::table('tas')->where('kodetas',$kodetas)->delete();

		// alihkan halaman ke halaman tas
		return redirect('/tasindex');
	}

     // method untuk melihat data pada table tas
    public function view($kodetas)
	{
		// mengambil data tas berdasarkan id yang dipilih
		$tas = DB::table('tas')->where('kodetas',$kodetas)->get();
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
		// passing data tas yang didapat ke view tasview.blade.php
		return view('Tas/tasview',['tas' => $tas]);

	}

     // method untuk mencari data pada table tas
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table tas sesuai pencarian data
		$tas = DB::table('tas')
		->where('merktas','like',"%".$cari."%")
		->paginate();

    		// mengirim data tas ke view index
		return view('Tas/tasindex',['tas' => $tas, 'cari' => $cari]);

	}

}
