@include('layouts.single_post_head')

    <body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=126757904410144";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
   <!-- End preloader area -->  
       
    
    @include('layouts.header')
    <div style="clear:both"></div>
    
  
    
    <section class="maincontent">
        <div class="container">
            <div class="row">
                 @yield('content') 
                
                <div class="col-sm-4">
                    @include('layouts.right_sidebar')
                </div>
            </div>
        </div>
    </section>
    
     @include('layouts.footer')
    
    <!-- jQuery & others scripts  -->
    <script src="<?php echo url();?>/asset/js/vendor/jquery.1.11.1.js"></script>

    <script src="<?php echo url();?>/asset/js/bootstrap.min.js"></script>
    <script src="<?php echo url();?>/asset/js/jquery.sticky.js"></script>
    <script src="<?php echo url();?>/asset/js/owl.carousel.min.js"></script>

    <script src="<?php echo url();?>/asset/js/masonry.pkgd.min.js"></script>
    <script src="<?php echo url();?>/asset/inc/venobox/venobox.min.js"></script>
    <script src="<?php echo url();?>/asset/js/main.js"></script>
    <script src="<?php echo url();?>/asset/js/color-change-function.js"></script>
	<script > 

	</script>
  </body>

<!-- Mirrored from demos.wpexpand.com/html/dinilipi/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jul 2015 18:18:59 GMT -->
</html>