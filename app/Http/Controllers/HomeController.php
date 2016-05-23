<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin_post as Admin_post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $data['all_posts'] = Admin_post::get_all_posts();
    	return view('home',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category( $category_name )
    {
       $data['all_posts'] = Admin_post::get_category_posts( $category_name );
       return view('home',$data);
    }
	
	public function post_details( $cat_name, $post_url_slug )
    {
	    $data['post_details'] = Admin_post::get_post_detals( $cat_name, $post_url_slug );
		$data['all_tag'] = Admin_post::get_post_tags( $cat_name, $post_url_slug );
        return view('single_post',$data);
    }
	
	 public function contact_me()
    {
        return view('contact_me');
    }
	
	 public function about_me()
    {
	    $data['user_details'] = App\Personal_info::get_all_info();
		$data['skills'] = App\Personal_info::get_all_skills();
        return view('about_me', $data);
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
