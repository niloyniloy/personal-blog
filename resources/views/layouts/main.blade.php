@include('layouts.head')

    <body>
    
    <div id="preloader">
        <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
    </div> <!-- End preloader area -->  
       
    
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
    <script src="<?php echo url();?>/asset/js/jquery.tweet.min.js"></script>
    <script src="<?php echo url();?>/asset/js/instafeed.min.js"></script>
    <script src="<?php echo url();?>/asset/js/masonry.pkgd.min.js"></script>
    <script src="<?php echo url();?>/asset/inc/venobox/venobox.min.js"></script>
    <script src="<?php echo url();?>/asset/js/main.js"></script>
    <script src="<?php echo url();?>/asset/js/color-change-function.js"></script>
  </body>

<!-- Mirrored from demos.wpexpand.com/html/dinilipi/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jul 2015 18:18:59 GMT -->
</html>