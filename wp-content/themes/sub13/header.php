<!doctype html>  

<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8 oldie"> <![endif]-->

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
		<title><?php
		global $page, $paged;
		wp_title( '-', true, 'right' );
		// Add the blog name.
		bloginfo( 'name' );
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' - ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
		?></title>
		
	       <meta name="description" content="Subatomic is an engagement agency. We specialize in providing custom made solutions that will help you not only attract, but also engage and retain your target audiences. ">
	       <meta name="keywords" content="engagement design, gamification">
		
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

		<!-- stylesheets -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/normalize.css">
		
		<!-- Grab Google CDN's jQuery; fall back to local if necessary -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script>window.jQuery || document.write(unescape('%3Cscript src="<?php echo get_template_directory_uri(); ?>/library/js/libs/jquery-1.7.1.min.js"%3E%3C/script%3E'))</script>
		
		<!-- call other scripts-->
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.full.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.carouFredSel.js"></script>

        
        <!-- about us boxes -->
	  <script>
		function showonlyone(thechosenone) {
	   $('div[name|="aboutboxes"]').each(function(index) {
          if ($(this).attr("id") == thechosenone) {
               $(this).fadeIn();
          }
          else {
               $(this).fadeOut();
          }
	  });
	  }
	   </script>
	  
	  <!-- sliders -->
	  <script> $(document).ready(function() {
	       $("#foo1").carouFredSel({
	       width: 750,
	       height: "auto",
	       items: 3,
	       auto : false,
	       prev : "#foo1_prev",
	       next : "#foo1_next"
	       });
	         $("#foo2").carouFredSel({
	       width: 750,
	       height: "auto",
	       items: 4,
	       auto : false,
	       prev : "#foo2_prev",
	       next : "#foo2_next"
	       });
	  });
	  </script>
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!--  head functions -->
		<?php wp_head(); ?>
		<!-- end of  head -->
		
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		
	</head>
	
	<body <?php body_class(); ?>>
	
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
			
			<div id="header">
				<div id="inner-header"> 
				   <div id="logo"><a href="<?php echo home_url(); ?>"><img src='<?php echo get_template_directory_uri(); ?>/library/images/logo.png'/></a></div>
				   <div id="contact"><a href="http://www.subatomic.nl/contact">contact</a></div>
			        </div> <!-- end #inner-header -->
			 </div> <!-- end header -->
			<br clear="all" />
			      <div id="menuline">
		    		     <nav role="navigation">
     					<?php bones_main_nav(); ?>
				     </nav>
			      </div> <!-- end #menuline -->
				
			<br clear="all" />
			
	       <div id="container">