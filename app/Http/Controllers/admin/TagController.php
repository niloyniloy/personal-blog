<?php

namespace App\Http\Controllers\admin;

use App\Tag as Tag;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 public function add_tag()
     {
    	return view('admin.add_tag');
     } 
	 
	 public function all_tag()
     {
	    $data['tags'] = Tag::get_all_tags();
    	return view('admin.all_tag',$data);
     }

    public function insert_post(Request $request) {
	
	   echo $post = Admin_post::insert_posts($request);
	
	}

}
