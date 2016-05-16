<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Personal_info extends Model
{
   static function get_all_info() {
	
	   $category = DB::table('personal_info')->get(); 
	   return $category;
	}
	
	static function update_personal_info($request) {
	
	   
	   $data['name'] = $request->name;
	
	   
	   $id = DB::table('category')->insertGetId($data);
	   
	   return $id;
	   
	   
	}
}
