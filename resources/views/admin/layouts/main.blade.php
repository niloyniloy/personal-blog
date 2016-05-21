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
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js'> </script>
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

	<script src='<?php echo url();?>/asset/js/list.js'> </script>
	<script src="<?php echo url();?>/asset/admin_asset/script/zabuto_calendar.min.js"></script>
<script type="text/javascript" src="http://localhost/blog/asset/jquery.tokenize.js"></script>
			    			
			     <script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
				<link rel="stylesheet" type="text/css" href="<?php echo url();?>/asset/jquery.tokenize.css" />
				

	<!--LOADING SCRIPTS FOR CHARTS-->

	
	

	<!--CORE JAVASCRIPT-->

	<script type="text/javascript">
				 
				  $('document').ready(function(){
				   $('#tokenize').tokenize({
				      displayDropdownOnFocus: true
				   });
				      
					  CKEDITOR.replace('editor1');
					  CKEDITOR.replace('editor2');
					  CKEDITOR.replace('editor3');

				  });
                   
                </script>
</body>
</html>
