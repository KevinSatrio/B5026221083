<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ChatController extends Controller
{
	public function index()
	{
    	// mengambil data dari table nilaikuliah
        $chat = DB::table('chat')->get();


    	// mengirim data nilai ke view index
		return view('EAS/index',['chat' => $chat]);

	}

     // method untuk edit data pegawai
	public function view($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$chat = DB::table('chat')->where('id',$id)->get();
        $pesan = $chat[0]->pesan;
        $kata = explode(" ", $pesan);

		// passing data pegawai yang didapat ke view edit.blade.php
		return view('EAS/view',['kata' => $kata]);

	}
}
