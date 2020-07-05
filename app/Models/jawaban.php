<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class Jawaban{
	public static function get_all($id){
		$items = DB::table('jawaban')
		->join('pertanyaan','jawaban.pertanyaan_id','=','pertanyaan.id')
		->select('jawaban.*','pertanyaan.judul','pertanyaan.isi_pertanyaan')
		->where('pertanyaan_id',$id)
		->get();
		return $items;
	}

	public static function save($data){
		$new_items = DB::table('jawaban')->insert($data);
		return $new_items;
	}

	public static function find_by_pertanyaan_id($id_pertanyaan){
		$items = DB::table('jawaban')
		->where('pertanyaan_id', $id_pertanyaan)
		->get();
		return $items;
	}
}