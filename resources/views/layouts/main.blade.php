@include('layouts.head')

    <body>
    
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
   

    <script src="<?php echo url();?>/asset/js/bootstrap.min.js"></script>
    <script src="<?php echo url();?>/asset/js/jquery.sticky.js"></script>
    <script src="<?php echo url();?>/asset/js/owl.carousel.min.js"></script>
    <script src="<?php echo url();?>/asset/js/jquery.tweet.min.js"></script>
    <script src="<?php echo url();?>/asset/js/instafeed.min.js"></script>
    <script src="<?php echo url();?>/asset/js/masonry.pkgd.min.js"></script>
    <script src="<?php echo url();?>/asset/inc/venobox/venobox.min.js"></script>
    <script src="<?php echo url();?>/asset/js/main.js"></script>
    <script src="<?php echo url();?>/asset/js/color-change-function.js"></script>
	<script > 
	$(document).ready(function() {
    $.ajaxSetup({ cache: true });
    $.getScript('//connect.facebook.net/en_US/sdk.js', function(){
     FB.init({
      appId: '126757904410144',
      version: 'v2.5' // or v2.0, v2.1, v2.2, v2.3
     });     
     $('#loginbutton,#feedbutton').removeAttr('disabled');
         FB.getLoginStatus(updateStatusCallback);
     });
  
    $('.social_link').on('click',function(){
	
	  var attr_href = $(this).attr('data-href');
      window.open(attr_href, '', '_blank');
     
    });
  
});
	</script>
  </body>

<!-- Mirrored from demos.wpexpand.com/html/dinilipi/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jul 2015 18:18:59 GMT -->
</html>