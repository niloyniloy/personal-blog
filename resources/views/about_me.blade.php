@extends('layouts.others')
@section('content')
<section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo url();?>/asset/img/about-me.jpg" alt="" class="img-responsive">
                </div>
                <div class="col-md-8">
                    <div class="about-text">
                        <h2>About me</h2>
                        <p>Bacon ipsum dolor sit amet strip steak ham hock magna ball tip, leberkas est ut drumstick sed sunt frankfurter. Veniam doner turducken pariatur, enim ham hock bresaola short loin beef ribs. Bacon ipsum dolor sit amet strip steak ham hock magna ball tip, leberkas est ut drumstick sed sunt frankfurter. Bacon ipsum dolor sit amet strip steak. Veniam doner turducken pariatur, enim ham. Bacon ipsum dolor sit amet strip steak ham hock magna ball tip, leberkas est ut drumstick sed sunt frankfurter. Veniam doner turducken pariatur, enim ham hock bresaola short loin beef ribs. Bacon ipsum dolor sit amet strip steak ham hock magna ball tip, leberkas est ut drumstick sed sunt frankfurter. Bacon ipsum dolor sit amet strip steak. Veniam doner turducken pariatur, enim ham.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, fugiat necessitatibus! Autem voluptate consequuntur magnam vel, quo, adipisci consectetur saepe?</p>
                        <p class="social-profiles">Join me: <a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="http://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a> <a href="http://pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></p>                        
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="about-widget">
                        <h3 class="about-title">Personal Info</h3>
                        <p><label class="about-title-cat">Name</label> : Rasel Ahmed</p>
                        <p><label class="about-title-cat">Date of Birth</label> : June 6, 1989</p>
                        <p><label class="about-title-cat">Gender</label> : Male</p>
                        <p><label class="about-title-cat">Lives In</label> : Dhaka</p>
                        <p><label class="about-title-cat">Mobile</label> : 01234-56789</p>
                        <p><label class="about-title-cat">Email</label> : info@wpexpand.com</p>
                        <p><label class="about-title-cat">Website</label> : http://wpexpand.com</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-widget">
                        <h3 class="about-title">Professional Experiences</h3>
                        <div class="single-experience">
                            <h3>Senior Web Developer, IT Ltd.</h3>
                            <p class="ex-date">July 2011 - Nov 2013</p>
                            <p>Veniam doner turducken pariatur, enim ham hock bresaola short loin beef ribs bacon.</p>
                        </div>
                        <div class="single-experience">
                            <h3>Senior Web Developer, IT Ltd.</h3>
                            <p class="ex-date">July 2011 - Nov 2013</p>
                            <p>Veniam doner turducken pariatur, enim ham hock bresaola short loin beef ribs bacon.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-widget">
                        <h3 class="about-title">My Skills</h3>
                        <div class="single-skill">
                            <p>HTML</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"><span class="skill-counter">98%</span></div>
                            </div>                            
                        </div>
                        <div class="single-skill">
                            <p>CSS</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"><span class="skill-counter">90%</span></div>
                            </div>                            
                        </div>
                        <div class="single-skill">
                            <p>Wordpress</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="skill-counter">80%</span></div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="download-cv text-center">
                        <a href="#"><i class="fa fa-download"></i> Download Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
	@endsection