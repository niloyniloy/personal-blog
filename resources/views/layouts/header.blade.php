<?php
$category_details = App\Category::get_all_category();
$user_details = App\Personal_info::get_all_info();

?>

<header class="header">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="header-left-menu">
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="about-me.html">About me</a></li>
                                <li><a href="contact-me.html">Contact me</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="social-icon">
                            <a target="_blank" href="http://facebook.com/"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="http://plus.google.com/"><i class="fa fa-google-plus"></i></a>
                            <a target="_blank" href="http://linkedin.com/"><i class="fa fa-linkedin"></i></a>
                            <a target="_blank" href="http://instagram.com/"><i class="fa fa-instagram"></i></a>
                            <a target="_blank" href="http://dribble.com/"><i class="fa fa-dribbble"></i></a>
                            <a target="_blank" href="http://behance.com/"><i class="fa fa-behance"></i></a>
                        </div>
                        
                        <form action="http://demos.wpexpand.com/html/dinilipi/index.html" class="search-form" method="get" role="search">
                            <input type="search" title="Search for:" name="s" value="" placeholder="Search ..." class="search-field">
                            <input type="submit" value="Search" class="search-submit">
                        </form>   
                    </div>
                </div>
            </div>
        </div>
        
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <h1><a href="index-2.html">My<span>Blog</span></a></h1>
                            
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>                             
                        </div>
                        
                        
                    </div>
                                                               
                    <div class="col-md-9">
                        <div class="navbar-collapse collapse"> 
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="index-2.html">Home</a></li>
								@foreach ($category_details as $category)
                                <li><a href="archive.html">{{  $category->name }}</a></li>
								@endforeach 
								<li class="active"><a href="index-2.html">Contact Me</a></li>
                            </ul>                                                     
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </header>