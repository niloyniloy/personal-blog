<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demos.wpexpand.com/html/dinilipi/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jul 2015 18:18:10 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:url"           content="<?php echo url();?>/<?php echo $post_details->name;?>/<?php echo $post_details->slug;?>" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="<?php echo $post_details->title;?>" />
	<meta property="og:description"   content="<?php echo substr($post_details->post, 0, 20); ?>" />
	<meta property="og:image"         content="<?php echo url();?>/uploads/<?php echo $post_details->image;?>" />
    <title><?php echo config('custom.site_title');?></title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,700,600,500,800,900,100' rel='stylesheet' type='text/css'>
   
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="<?php echo url();?>/asset/css/bootstrap.min.css">
    
    <!-- Font awesome css -->
    <link rel="stylesheet" href="<?php echo url();?>/asset/inc/venobox/venobox.css">
    <link rel="stylesheet" href="<?php echo url();?>/asset/css/animate.css">
    <link rel="stylesheet" href="<?php echo url();?>/asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo url();?>/asset/css/owl.carousel.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo url();?>/asset/style.css">
    <link rel="stylesheet" href="<?php echo url();?>/asset/css/responsive.css">
    
    <link rel="stylesheet" href="<?php echo url();?>/asset/css/color-change-function.css">
    
    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo url();?>/asset/img/apple-touch-icon-precomposed.html">
    <link rel="shortcut icon" type="image/png" href="<?php echo url();?>/asset/img/favicon.png"/>  

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  
    <![endif]-->

    </head>