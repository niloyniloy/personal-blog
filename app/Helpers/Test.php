<?php

namespace App\Helpers;
use DB;

Class Test {

  static function bob()
    {
        $a = DB::select(DB::raw("SELECT * FROM category"));
		return $a;
		
    }
	
	
	static function tags_list()
    {
        $a = DB::select(DB::raw("SELECT * FROM tag"));
		return $a;
		
    }
	
	static function post_tag_list( $post_id ) {
	
	   $all_post = DB::select("SELECT * FROM post_tag WHERE post_id='$post_id'");
	   $data = array();
	   //var_dump($all_post); exit;
	   foreach ($all_post as $post) {
	     $data[] = $post->tag_id;
	   }
	   
	   return $data;
	   
	}

}

