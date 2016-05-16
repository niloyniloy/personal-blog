<?php

namespace App\Http\Controllers\admin;

use App\Admin_post as Admin_post;
use App\Category as Category;
use App\Personal_info as Personal_info;
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

    	echo $post = Admin_post::insert_posts($request);
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

    	$name = $request->name;
    	$id = $request->id;

    	$data['category_details']  =  Category::update_category( $id , $name );

    	return redirect('admin/update_category/'.$id)->with('status', 'Profile updated!');

    }

    public function insert_category(Request $request) {

    	echo $post = Admin_post::insert_category($request);

    }

    public function update_post(Request $request) {

    	echo $post = Admin_post::insert_category($request);

    }

    public function personal_info() {

    	$data['personal_info'] = '';
    	return view('admin.all_category',$data);

    }
}
