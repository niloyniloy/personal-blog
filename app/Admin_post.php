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
	
	static function get_category_posts( $category_name ) {
	
	    $users = DB::table('post')->select('post.*','category.name')
		->leftJoin('category','post.category_id','=','category.id')->where('category.name',$category_name)->simplePaginate(8); 
		return $users;
	}
	
	static function get_post_detals( $cat_name, $post_url_slug ) {
	
	   $post_details = DB::select("SELECT post.*, category.name FROM post INNER JOIN  category ON post.category_id = category.id WHERE post.slug ='$post_url_slug' AND category.name='$cat_name'");
	   return $post_details[0];
	}
	
	static function get_recent_five_post() {
	   
	     $users = DB::select("SELECT post.*,category.name FROM post INNER JOIN category ON post.category_id = category.id ORDER BY post.id DESC LIMIT 5");
	     return  $users;
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
	
	static function get_post_tags( $cat_name, $post_url_slug ) {
	
	    $all_tags = DB::select("SELECT tag.name FROM (SELECT * FROM post where slug='$post_url_slug') AS post INNER JOIN post_tag ON post.id = post_tag.post_id INNER JOIN tag ON post_tag.tag_id = tag.id ");
	     return $all_tags;
	}

	static function post_details ( $id ) {

		return   DB::select("SELECT * FROM post WHERE id='$id'");
		//return $a;
	}
	
	static function insert_category($request) {
	
	       $category = array();
		   $category['name'] = $request->title;
		   
		   DB::table('category')->insertGetId($category);
	}
}
