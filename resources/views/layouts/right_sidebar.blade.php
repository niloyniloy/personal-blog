<?php

$user_details = App\Personal_info::get_all_info();
$category_details = App\Category::get_all_category();
$all_tag = App\Tag::get_all_tags();
$recent_posts = App\Admin_post::get_recent_five_post();

?>

 <div class="right-sidebar">
                    <div class="widget">
                        <img class="about-photo" src="<?php echo url();?>/uploads/<?php echo $user_details->profile_pic; ?>" alt="Profile Pic">
                        <h2 class="widget-title">ABOUT ME</h2>
                        <p><?php echo $user_details->description_text;?></p>
                        <p class="social-profiles">Join me: 
						
						<a href="<?php echo config('custom.facebook_url');?>" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="<?php echo config('custom.twitter_url');?> target="_blank"><i class="fa fa-twitter"></i></a> 
						<a href="<?php echo config('custom.google_plus_url');?>" target="_blank"><i class="fa fa-google-plus"></i></a> 
						<a href="<?php echo config('custom.github_url');?>" target="_blank"><i class="fa fa-github"></i></a>
						
						</p>     
                    </div>
                    
                    <div class="widget">
                        <h2 class="widget-title">Categories</h2>
                        <ul>
						  @foreach($category_details as $category)
                            <li><a href="<?php echo url();?>/category/{{ $category->name}}">{{ $category->name}}</a></li>
             
						@endforeach
                        </ul>
                    </div>
                    
                    <div class="widget">
                        <h2 class="widget-title">Recent Posts</h2>
						@foreach($recent_posts as  $post )
                        <div class="single-wid-post">
                            <a href="single-post.html">
                                <img width='74' src="<?php echo url();?>/uploads/{{ $post->image  }}" alt="" class="alignleft">
                                <h2>{{ $post->title }}</h2>
                            </a>
                            <p><i class="fa fa-clock-o"></i> <?php echo date('d M, Y',$post->date_time)?></p>
                        </div>
						@endforeach
                    </div>
                    
                    <div class="widget">
                        <h2 class="widget-title">Tags</h2>
                        <div class="tag-cloud">
						 @foreach ($all_tag as $tag)
                            <a href="#">{{ $tag->name}}</a>
                         @endforeach
                        </div>
                    </div>
                </div>