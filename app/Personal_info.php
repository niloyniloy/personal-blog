<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Personal_info extends Model
{
	static function get_all_info() {

		$personal_info = DB::table('personal_info')->get(); 
		return $personal_info[0];
	}
	
	static function update_personal_info($request) {

		$data = array();
		$data['name'] = $request->name;
		$data['description_text'] = $request->description_text;  
		$data['contact_number'] = $request->contact_number;  	   
		$data['email'] = $request->email;  
		$data['fb_link'] = $request->fb_link;  
		$data['google_link'] = $request->google_link;  
		$data['address'] = $request->address; 
		$data['description_long'] = $request->description_long;

		if (strlen ($_FILES['image']['name']) > 0) {
            
			$destinationPath = 'uploads';
			$file_extension = $request->file('image')->getClientOriginalExtension();
			$filename = time().".".$file_extension;
			$request->file('image')->move($destinationPath,$filename);
			$data['profile_pic'] = $filename; 
		} 

		$a = DB::table('personal_info')->where('id',1)->update($data);


	}
}
