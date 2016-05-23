@extends('layouts.main')
<?php //echo hello_helper(); ?>
                @section('content')
				<div class="col-sm-8">
                    <article class="post">
                        <div class="entry-thumbnail">
                            <a title="Behind Story of Some Amazing Photos" class="post-lightbox" href="<?php echo url();?>uploads/{{ $post_details->image }}"><img src="<?php echo url();?>uploads/{{ $post_details->image }}" alt="Behind Story of Some Amazing Photos"></a>
                        </div>   
                        <header class="entry-header">
                            <h2 class="entry-title"><a rel="bookmark" href="single-post.html">{{ $post_details->title }}</a></h2> <!-- //.entry-title -->
                            <p class="posted-by">by <a href="archive.html">Niloy</a> <i class="fa fa-clock-o"></i> <?php echo date('d M Y', $post_details->date_time); ?>  </p>
                        </header>

                        <div class="entry-summary">
                           <?php echo $post_details->post; ?>
					   </div> 


                    <div class="post-content-bottom">
                        <p class="post-share">Share: <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-pinterest"></i></a></p>

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
                            <ol class="comment-list">
                                <li class="comment even thread-even depth-1">
                                    <article class="comment-body">
                                        <div class="comment-author-img">
                                            <img src="<?php echo url();?>/asset/img/avatar_1.jpg" alt="">
                                        </div>
                                        
                                        <div class="comment-content">
                                            <h3><a href="http://wordpress.org/">Sakib Khan</a> <span><i class="fa fa-clock-o"></i> 3 days ago</span></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                                        </div>

                                        <div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
                                    </article>
                                    <!-- .comment-body -->
                                </li>
                                <li class="comment even thread-even depth-1">
                                    <article class="comment-body">
                                        <div class="comment-author-img">
                                            <img src="<?php echo url();?>/asset/img/avatar_2.jpg" alt="">
                                        </div>
                                        
                                        <div class="comment-content">
                                            <h3><a href="http://wordpress.org/">Sir. Ananta Jalil</a> <span><i class="fa fa-clock-o"></i> 3 days ago</span></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dolore possimus dolorum quas necessitatibus molestias delectus, quibusdam iure nisi placeat quos repellat laborum quae, vel, atque molestiae consequuntur! Nemo, recusandae.</p>
                                        </div>

                                        <div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
                                    </article>
                                    <!-- .comment-body -->
                                    
                                    <ul class="children">
                                        <li class="comment even thread-even depth-1">
                                            <article class="comment-body">
                                                <div class="comment-author-img">
                                                    <img src="<?php echo url();?>/asset/img/avatar_3.jpg" alt="">
                                                </div>

                                                <div class="comment-content">
                                                    <h3><a href="http://wordpress.org/">Borsha Khan</a> <span><i class="fa fa-clock-o"></i> 3 days ago</span></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, adipisci nobis! A corrupti, animi mollitia expedita hic exercitationem temporibus nam perferendis, commodi nobis. Qui excepturi, debitis voluptas cum voluptatibus minima consequuntur tempore ab. Inventore, soluta eveniet quia repudiandae ab maxime quam cum quibusdam necessitatibus dignissimos ullam at praesentium, sed illum.</p>
                                                </div>

                                                <div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
                                            </article>
                                            <!-- .comment-body -->
                                        </li>                                        
                                    </ul>                                    
                                </li>
                                <li class="comment even thread-even depth-1">
                                    <article class="comment-body">
                                        <div class="comment-author-img">
                                            <img src="<?php echo url();?>/asset/img/avatar_4.jpg" alt="">
                                        </div>
                                        
                                        <div class="comment-content">
                                            <h3><a href="http://wordpress.org/">Jems Bond</a> <span><i class="fa fa-clock-o"></i> 3 days ago</span></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, adipisci nobis! A corrupti, animi mollitia expedita hic exercitationem temporibus nam perferendis, commodi nobis. Qui excepturi, debitis voluptas cum voluptatibus minima consequuntur tempore ab. Inventore, soluta eveniet quia repudiandae ab maxime quam cum quibusdam necessitatibus dignissimos ullam at praesentium, sed illum.</p>
                                        </div>

                                        <div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
                                    </article>
                                    <!-- .comment-body -->
                                </li>
                            </ol>
                            <!-- .comment-list -->

                            </div>


                            <div id="respond" class="comment-respond">
                                <h3 id="reply-title" class="comment-reply-title"><i class="fa fa-comment"></i> Leave a Reply</h3>
                                <form action="http://demos.wpexpand.com/html/dinilipi/single-post.html" method="post" id="commentform" class="comment-form" novalidate="">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p class="comment-form-author">
                                                <input placeholder="Name" id="author" name="author" type="text" value="" size="30" aria-required="true">
                                        
                                            </p>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <p class="comment-form-email">
                                                <input placeholder="Email" id="email" name="email" type="email" value="" size="30" aria-required="true">
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="comment-form-url">
                                                <input placeholder="Website" id="url" name="url" type="url" value="" size="30">
                                            </p>                                            
                                        </div>
                                    </div>
                                            <p class="comment-form-comment">
                                                <textarea placeholder="Comment" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                            </p>                                            
                                        
                                    
                                    <p class="form-submit">
                                        <input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
                                    </p>
                                </form>
                            </div>
                            <!-- #respond -->

                        </div>               </div>         
                   
    @endsection