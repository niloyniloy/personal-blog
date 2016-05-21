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
	
	}

}

