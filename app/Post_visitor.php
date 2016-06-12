<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Post_visitor extends Model
{
   static function insert_post_visitor() {
	
	   $data['ip_address'] = self::get_ip_address();
	   $data['date_time'] = time();
        
	   $my_ip_address = config('custom.my_ip_address');	
	   if ( $data['ip_address'] != $my_ip_address) {
	   
	         DB::table('post_visitor')->insertGetId($tag);	
	   }      
	  
	}
	
	static function get_ip_address () {
	
	if (!empty($_SERVER["HTTP_CLIENT_IP"]))
{
 //check for ip from share internet
 $ip = $_SERVER["HTTP_CLIENT_IP"];
}
elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
{
 // Check for the Proxy User
 $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}
else
{
 $ip = $_SERVER["REMOTE_ADDR"];
}

return $ip;
	
	}
}
