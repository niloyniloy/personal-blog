<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Personal_info extends Model
{
   static function get_all_info() {
	
	   $personal_info = DB::table('personal_info')->get(); 
	   return $personal_info;
	}
	
	static function update_personal_info($request) {
	
	   $data['name'] = $request->name;
       $data['description_text'] = $request->description_text;  
       $data['contact_number'] = $request->contact_number;  	   
	   $data['name'] = $request->name;  
	   $data['name'] = $request->name;  
	   $data['name'] = $request->name;  
	   $data['name'] = $request->name;  
	   $id = DB::table('category')->insertGetId($data);
	   
	   return $id;
	   
	   
	}
}
