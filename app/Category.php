<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model
{
	static function get_all_category() {
		
		$category = DB::table('category')->get(); 
		return $category;
	}
	
	static function insert_category($request) {
		
		$data['name'] = $request->name;	   
		$id = DB::table('category')->insertGetId($data);
		
		return $id;
		
	}


	static function get_category_details ( $category_id ) {

		$data = DB::table('category')->where('id', $category_id)->first();
		return $data;
	}

	static function update_category( $id , $name ) {

		$data = DB::raw("UPDATE `category` SET name='$name' WHERE id='$id'");
	}
}
