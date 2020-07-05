<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class Pertanyaan{
	public static function get_all(){
		$items = DB::table('pertanyaan')->get();
		return $items;
	}

	public static function save($data){
		$new_items = DB::table('pertanyaan')->insert($data);
		return $new_items;
	}

	public static function find_by_id($id){
		$item = DB::table('pertanyaan')
		->where('id',$id)->first();
		return $item;
	}

	public static function update($data){
		$update_items = DB::table('pertanyaan')
		->where('id',$data['id'])
		->update($data);
		return $update_items;
	}

	public static function delete($id){
		$delete = DB::table('pertanyaan')
		->where('id',$id)
		->delete();
	}

}