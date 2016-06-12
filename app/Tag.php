<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tag extends Model
{
   static function get_all_tags() {
	
	   $tags = DB::table('tag')->get(); 
	
	   return $tags;
	}
	
	static function insert_tag($request) {
	   
	   $data = array();
	   $data['name'] = $request->name;
	   
	   DB::table('tag')->insertGetId($data);
	}
	
	static function insert_posts($request) {
	
	   $destinationPath =  "uploads";
	   $file_extension = $request->file('image')->getClientOriginalExtension();
	   $filename = time().".".$file_extension;
	   $request->file('image')->move($destinationPath,$filename);
	   $data['category_id'] = $request->category_id;
       $data['title'] = $request->title;	   
	   $data['post'] = $request->post;
	   $data['image'] = $filename;
	   
	   $id = DB::table('post')->insertGetId($data);
	   
	   return $id;
	    
	}
	
	
}
