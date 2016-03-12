<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Admin_post extends Model
{
    function get_all_posts() {
	
	   $users = DB::table('post')
	                ->leftJoin('category','post.category_id','=','category.id')->get(); 
	
	   return $users;
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
