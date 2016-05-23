@extends('layouts.main')
<?php //echo hello_helper(); ?>
@section('content')
<div class="col-sm-8">
               @foreach ( $all_posts as $post) 
                    <article class="post">
                        <div class="post-featured-content">
                            <a title="Behind Story of Some Amazing Photos" class="post-lightbox" href="<?php echo url();?>/uploads/{{  $post->image }}"><img src="<?php echo url();?>/uploads/{{  $post->image }}" alt="{{  $post->image }}"></a>
                        </div>
                        
                        <div class="post-content">
                            <p class="post-categories"><a href="<?php echo url();?>/category/{{ $post->name}}">{{ $post->name }}</a></p>
                            <h2><a href="single-post.html">{{ $post->title }}</a></h2>
                            <p class="posted-by">by <a href="#">Niloy</a> <i class="fa fa-clock-o"></i> <?php echo date('d M Y',$post->date_time ); ?> <i class="fa fa-heart"></i> 21 <i class="fa fa-comments"></i> 6</p>
                            <div class="post-excerpt">
                                <p>
								<?php
								$character_limit = 100;
								$main_post = $post->post;
								 if (strlen($main_post) > 100) {
								    
									 echo substr($main_post, 0, $character_limit);
								 } else {
								 
								    echo $main_post;
								 }
								?>
								</p>
                            </div>
                            <div class="post-content-bottom">
                                <p class="post-share">Share: <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-pinterest"></i></a></p>

                                <a href="javscript:void(0);" class="readmore">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
					@endforeach
                    
                    
                    <div class="post-navigation">
                        <nav>
                            {!! $all_posts->render() !!}
                        </nav>                        
                    </div>
                </div>
				@endsection