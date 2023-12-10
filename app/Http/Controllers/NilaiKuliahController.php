<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiKuliahController extends Controller
{
	public function index()
	{
    	// mengambil data dari table nilaikuliah
        $nilai = DB::table('nilaikuliah')->get();

        foreach($nilai as $n){
            switch(true){
                case($n->NilaiAngka >= 81):
                $n->NilaiHuruf = 'A';
                break;
                case($n->NilaiAngka >= 61):
                $n->NilaiHuruf = 'B';
                break;
                case($n->NilaiAngka >= 41):
                $n->NilaiHuruf = 'C';
                break;
                default:
                $n->NilaiHuruf = 'D';
                break;
            }
        $n->Bobot = $n->NilaiAngka * $n->SKS;
        }

    	// mengirim data nilai ke view index
		return view('NilaiKuliah/nilaikuliah',['nilai' => $nilai]);

	}

	// method untuk menampilkan view form tambah nilai
	public function tambah()
	{

		// memanggil view tambah
		return view('NilaiKuliah/tambahdata');

	}


	// method untuk insert data ke table nilaikuliah
	public function store(Request $request)
	{
		// insert data ke table nilaikuliah
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);

		// alihkan halaman ke halaman nilaikuliah
		return redirect('/nilaikuliah');

	}
}
