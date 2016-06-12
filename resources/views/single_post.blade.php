@extends('layouts.single_post_main')
<?php //echo hello_helper(); ?>
                @section('content')
				<div class="col-sm-8">
                    <article class="post">
                        <div class="entry-thumbnail">
                            <a title="Behind Story of Some Amazing Photos" class="post-lightbox" href="<?php echo url();?>/uploads/{{ $post_details->image }}"><img src="<?php echo url();?>/uploads/{{ $post_details->image }}" alt="Behind Story of Some Amazing Photos"></a>
                        </div>   
                        <header class="entry-header">
                            <h2 class="entry-title"><a rel="bookmark" href="single-post.html">{{ $post_details->title }}</a></h2> <!-- //.entry-title -->
                            <p class="posted-by">by <a href="archive.html">Niloy</a> <i class="fa fa-clock-o"></i> <?php echo date('d M Y', $post_details->date_time); ?>  </p>
                        </header>

                        <div class="entry-summary">
                           <?php echo $post_details->post; ?>
					   </div> 


                    <div class="post-content-bottom">
                        <p class="post-share">
                           <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>&nbsp;&nbsp; <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-mobile-iframe="true"></div> <a href="https://twitter.com/share" class="twitter-share-button" data-lang="it" data-dnt="true">Tweet</a>
                           <div class="g-plus" data-action="share"></div>						   
                        </p>

                        <div class="post-tags-single">
						   @foreach ($all_tag as $tag)
                            <a href="javscript:void(0);"> {{ $tag->name }} </a>
							@endforeach
                        </div>
                    </div>

                    </article>   

                    
                    <div class="related-posts">
                        <h2>You May Also Like</h2>
                        <div class="related-post-list">
                            <div class="row">
                                <div class="col-sm-3 col-xs-6">
                                    <a href="single-post.html">
                                        <img class="img-responsive" src="<?php echo url();?>/asset/img/rel-post-single.jpg" alt="">
                                        <h2>The Light of future</h2>
                                    </a>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <a href="single-post.html">
                                        <img class="img-responsive" src="<?php echo url();?>/asset/img/rel-post-single-1.jpg" alt="">
                                        <h2>We Are Still Alive</h2>
                                    </a>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <a href="single-post.html">
                                        <img class="img-responsive" src="<?php echo url();?>/asset/img/rel-post-single-2.jpg" alt="">
                                        <h2>Top secrets to be a great photographer</h2>
                                    </a>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <a href="single-post.html">
                                        <img class="img-responsive" src="<?php echo url();?>/asset/img/rel-post-single-4.jpg" alt="">
                                        <h2>The Last Train</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                                    
                        <div id="comments" class="comments-area">
                            <div class="comment-area">
                            <h2><i class="fa fa-comments"></i> Comments</h2>
                            <div class="fb-comments" data-href="http://localhost/blog/api/optimize" data-numposts="1"></div>
                            <!-- .comment-list -->

                            </div>

                            <!-- #respond -->

                        </div>               </div>  
<script src="https://apis.google.com/js/platform.js" async defer></script>

          
    @endsection