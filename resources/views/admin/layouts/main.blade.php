@include('admin.layouts.head')
@include('admin.layouts.header')

        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
           
          @include('admin.layouts.left_sidebar')
          
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Tables</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Tables</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Tables</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    @yield('content')
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href="http://themifycloud.com">2014 © KAdmin Responsive Multi-Purpose Template</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    
    <script src="<?php echo url();?>/asset/admin_asset/script/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo url();?>/asset/admin_asset/script/jquery-ui.js"></script>
    <script src="<?php echo url();?>/asset/admin_asset/script/bootstrap.min.js"></script>
    <script src="<?php echo url();?>/asset/admin_asset/script/bootstrap-hover-dropdown.js"></script>
    <script src="<?php echo url();?>/asset/admin_asset/script/html5shiv.js"></script>
    <script src="<?php echo url();?>/asset/admin_asset/script/respond.min.js"></script>
    <script src="<?php echo url();?>/asset/admin_asset/script/jquery.metisMenu.js"></script>
    <script src="<?php echo url();?>/asset/admin_asset/script/jquery.slimscroll.js"></script>
    <script src="<?php echo url();?>/asset/admin_asset/script/jquery.cookie.js"></script>
    <script src="<?php echo url();?>/asset/admin_asset/script/icheck.min.js"></script>
    <script src="<?php echo url();?>/asset/admin_asset/script/custom.min.js"></script>
    <script src="<?php echo url();?>/asset/admin_asset/script/jquery.news-ticker.js"></script>
    <script src="<?php echo url();?>/asset/admin_asset/script/jquery.menu.js"></script>
    <script src="<?php echo url();?>/asset/admin_asset/script/pace.min.js"></script>
    <script src="<?php echo url();?>/asset/admin_asset/script/holder.js"></script>
    <script src="<?php echo url();?>/asset/admin_asset/script/responsive-tabs.js"></script>

    <script src="<?php echo url();?>/asset/admin_asset/script/zabuto_calendar.min.js"></script>

    <!--LOADING SCRIPTS FOR CHARTS-->

  
  

    <!--CORE JAVASCRIPT-->
    <script src="<?php echo url();?>/asset/admin_asset/script/main.js"></script>
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>
</body>
</html>
