<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Admin_post extends Model
{
	static function get_all_posts() {

		$users = DB::table('post')->select('post.*','category.name')
		->leftJoin('category','post.category_id','=','category.id')->simplePaginate(8); 
		//$users = DB::select("SELECT post.*,category.name FROM post INNER JOIN category ON post.category_id = category.id")->simplePaginate(8);
		return $users;
	}
	
	static function insert_posts($request) {

		$destinationPath =  "uploads";
		if (strlen ($_FILES['image']['name']) > 0) {
		
		   $file_extension = $request->file('image')->getClientOriginalExtension();
		   $filename = time().".".$file_extension;
		   $request->file('image')->move($destinationPath,$filename);
		
		} else {
		 
		   $filename = '';
		}
		
		
		$data['category_id'] = $request->category_id;
		$data['title'] = $request->title;	   
		$data['post'] = $request->post;
		$data['image'] = $filename;
        $data['date_time'] = time();
		
		$id = DB::table('post')->insertGetId($data);
		
		
		foreach ( $request->tag as $tags ) {
		
		   $tag = array();
		   $tag['post_id'] = $id;
		   $tag['tag_id'] = $tags;
		   
		   DB::table('post_tag')->insertGetId($tag);
		} 
		return $id;
	}

	static function update_posts($request) {

		$destinationPath =  "uploads";
		if (strlen ($_FILES['image']['name']) > 0) {
		
		   $file_extension = $request->file('image')->getClientOriginalExtension();
		   $filename = time().".".$file_extension;
		   $request->file('image')->move($destinationPath,$filename);
		   $data['image'] = $filename; 
		}
		
		$data['category_id'] = $request->category_id;
		$data['title'] = $request->title;	   
		$data['post'] = $request->post;
		

		$id = DB::table('post')->where('id',$request->id)->update($data);
        $tag = array();
		DB::delete("DELETE FROM post_tag WHERE post_id = ".$request->id);
		foreach ( $request->tag as $tags ) {
		
		   $tag['post_id'] = $request->id;
		   $tag['tag_id'] = $tags;
		   
		   DB::table('post_tag')->insertGetId($tag);
		} 
		return $id;

	}

	static function post_details ( $id ) {

		return   DB::select("SELECT * FROM post WHERE id='$id'");
		//return $a;
	}
}
