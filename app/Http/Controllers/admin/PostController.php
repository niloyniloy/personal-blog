<?php

namespace App\Http\Controllers\admin;

use App\Admin_post as Admin_post;
use App\Category as Category;
use App\Personal_info as Personal_info;
use App\Post_visitor as Post_visitor;
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
    	$data['post'] = Admin_post::get_all_posts();
    	return view('admin.all_post',$data);
    }

    public function insert_post(Request $request) {

       $post = Admin_post::insert_posts($request);
    	return redirect('admin/add_post');

    }

    public function edit_post ( $id ) {

    	$data = array();
    	$data['post_details'] = Admin_post::post_details ( $id )[0];  
    	
    	return view('admin.edit_post',$data);
    }

    public function update_edit_post (Request $request) {

    	echo $post_id = Admin_post::update_postsupdate_posts($request);
    	redirect('admin/add_post');
    }



    public function add_category()
    {
    	return view('admin.add_category');
    } 

    public function all_category()
    {
    	$data['category'] = Category::get_all_category();
    	return view('admin.all_category',$data);
    }

    public function update_category( $category_id )
    {
    	$data['category_details']  =  Category::get_category_details( $category_id );
    	return view('admin.update_category',$data);
    }

    public function edit_update_category (Request $request) {

    	$name = $request->title;
    	$id = $request->id;

    	$data['category_details']  =  Category::update_category( $id , $name );

    	return redirect('admin/update_category/'.$id)->with('status', 'Profile updated!');

    }

    public function insert_category(Request $request) {

    	$post = Admin_post::insert_category($request);
		return redirect('admin/add_category')->with('status', 'Profile updated!');

    }

    public function update_post(Request $request) {

       $post = Admin_post::update_posts($request);
	   return redirect('admin/edit_post/'.$request->id)->with('status', 'Profile updated!');


    }

    public function personal_info() {

    	$data['personal_info'] = Personal_info::get_all_info ( );
    	return view('admin.personal_info',$data);

    }

    public function delete_table (Request $request) {

    	$table_name = $request->table_name;
    	$id = $request->id;

    	Category::delete_generic_table( $table_name , $id );
    }
	
	public function update_personal_info ( Request $request) {
	
	   Personal_info::update_personal_info ( $request );
	   $url = url();
	   return redirect($url.'/admin/personal_info');
	}
	
	public function get_visitor_info() {
	
	    $data['all_visitor'] = Post_visitor::all_post_visitor_info();
    	return view('admin.all_visitor',$data);
	}
	
	public function generate_slug() {
	
	   Admin_post::generate_slug();
	
	}
}
