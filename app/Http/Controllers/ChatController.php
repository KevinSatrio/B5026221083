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
        $emoticons = [':3' => '2.png',
        ':))' => '1.png',
        ':P' => '3.png',
        ':C' => '4.png',
        ';)' => '5.png',];

        foreach($chat as $k){
            $k->pieces = explode(" ", $k->pesan);
            foreach($k->pieces as &$word)
            if (isset($emoticons[$word])) {
                $word = '<img src="emoticons/' . $emoticons[$word] . '">';
            }
            $k->pesan = implode(' ', $k->pieces);
        }

		// passing data pegawai yang didapat ke view edit.blade.php
		return view('EAS/view',['chat' => $chat]);

	}
}
