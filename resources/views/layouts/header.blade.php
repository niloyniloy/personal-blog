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
                                <li><a href="<?php echo url();?>/">Home</a></li>
                                <li><a href="<?php echo url();?>/about_me">About me</a></li>
                                <li><a href="<?php echo url();?>/contact_me">Contact me</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="social-icon">
                            <a target="_blank" href="<?php echo config('custom.facebook_url');?>"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="<?php echo config('custom.github_url');?>"><i class="fa fa-github"></i></a>
                            <a target="_blank" href="<?php echo config('custom.google_plus_url');?>"><i class="fa fa-google-plus"></i></a>
                            <a target="_blank" href="<?php echo config('custom.linkedin_url');?>"><i class="fa fa-linkedin"></i></a>
                            <a target="_blank" href="<?php echo config('custom.twitter_url');?>"><i class="fa fa-twitter"></i></a>

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
                            <h1><a href="<?php echo url();?>/"><?php echo config('custom.logo_title1'); ?><span><?php echo config('custom.logo_title2'); ?></span></a></h1>
                            
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
                                <li class="active"><a href="<?php echo url();?>/">Home</a></li>
								@foreach ($category_details as $category)
                                <li><a href="<?php echo url();?>/category/{{ $category->name}}">{{  $category->name }}</a></li>
								@endforeach 
								<li class="active"><a href="<?php echo url();?>/contact_me">Contact Me</a></li>
                            </ul>                                                     
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </header>