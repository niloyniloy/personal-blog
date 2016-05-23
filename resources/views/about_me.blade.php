@extends('layouts.others')
@section('content')
<section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo url();?>/uploads/{{ $user_details->profile_pic }}" alt="" class="img-responsive">
                </div>
                <div class="col-md-8">
                    <div class="about-text">
                        <h2>About me</h2>
                         <?php echo $user_details->description_long;?> 
                        <p class="social-profiles">Join me: <a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="http://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a> <a href="http://pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></p>                        
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="about-widget">
                        <h3 class="about-title">Personal Info</h3>
                        <p><label class="about-title-cat">Name</label> : {{ $user_details->name }}</p>
                        <p><label class="about-title-cat">Gender</label> : Male</p>
                        <p><label class="about-title-cat">Lives In</label> : Dhaka</p>
                        <p><label class="about-title-cat">Mobile</label> : +8801964405239</p>
                        <p><label class="about-title-cat">Email</label> : info@wpexpand.com</p>
                        <p><label class="about-title-cat">Website</label> : http://niloyniloy.com</p>
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
						@foreach ($all_skills as $skills)
                        <div class="single-skill">
                            <p>{{ $skills->name }}</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skills->percentage }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $skills->percentage }}%;"><span class="skill-counter">{{ $skills->percentage }}%</span></div>
                            </div>                            
                        </div>
						
						@endforeach
                     
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