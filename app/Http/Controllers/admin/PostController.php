<?php

namespace App\Http\Controllers\admin;

use App\Admin_post as Admin_post;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view('admin.post_list');
    }
	
	 public function add_post()
     {
    	return view('admin.add_post');
     } 
	 
	 public function all_post()
     {
    	return view('admin.all_post');
     }

    public function insert_post(Request $request) {
	
	   echo $post = Admin_post::insert_posts($request);
	
	}
   
   
    public function single_post()
    {
        return view('single_post');
    }
	
	 public function contact_me()
    {
        return view('contact_me');
    }
	
	 public function about_me()
    {
        return view('about_me');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}