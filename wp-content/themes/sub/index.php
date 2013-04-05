<?php get_header(); ?>
<div id="content" class="clearfix">
    
  <div id="main" class="col940 left first clearfix" role="main">
  
  <?php $recent = new WP_Query("page_id=5"); while($recent->have_posts()) : $recent->the_post(); // include specific page content ?>
			<div id="topphotos"><img src="<?php if ( get_post_meta($post->ID, 'Main Image', true) ) : echo get_post_meta($post->ID, 'Main Image', true) ?><?php endif; ?>" />
					<div class="capt"><?php if ( get_post_meta($post->ID, 'Main Image Caption', true) ) : echo get_post_meta($post->ID, 'Main Image Caption', true) ?><?php endif; ?></div>
				</div><!-- end #topphotos-->	
                <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
                	<section class="post_content clearfix">
			      <?php the_content(); ?>
                	</section>
      				<!-- end article section -->
            
      			</article> <!-- end article -->
                
	<?php endwhile; ?>	            
  </div> <!-- end #main -->
 
</div> <!-- end #content -->
</div> <!-- end #container -->
<br clear="all" />

<div id="dotted">
<div id="container">
  <div id="content" class="clearfix">
    
  <div id="portfoliohome" class="col940 left first clearfix" role="main">
    <div class=portbg><a href="http://www.subatomic.nl/what-we-do/" title="Learn more about what we do" /><img src="<?php echo get_template_directory_uri(); ?>/library/images/transparent.png" width="150" height="115" /></a></div>
<div class="carousel">
	<div id="foo1">
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/LOGO_Seatz.png" alt="Seatz Network" width="225" height="115" />
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo_Whatser.png" alt="Whatser"  width="225" height="115" />
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/LOGO_OpenbaarMinisterie.png" alt="Openbaar Ministerie"  width="225" height="115" />
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/LOGO_Aegon.png" alt="Aegon"  width="225" height="115" />
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/LOGO_Ajax.png" alt="Ajax" width="225" height="115" />
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo_ANWB.jpg" alt="ANWB"  width="225" height="115" />
	</div>
	<div class="clearfix"></div>
	<a class="prev" id="foo1_prev" href="#"><span>prev</span></a>
	<a class="next" id="foo1_next" href="#"><span>next</span></a>
</div>

  </div> <!-- end #portfoliohome -->
</div> <!-- end #content -->
</div> <!-- end #container -->
</div><!-- end #dotted -->
<br clear="all" />
 
<div id="dotted">
<div id="container">
  <div id="content" class="clearfix">
    
  <div id="newshome" class="col940 left first clearfix" role="main">
  <div class=newsbg><a href="http://www.subatomic.nl/category/news/" title="Click to read more news" /><img src="<?php echo get_template_directory_uri(); ?>/library/images/transparent.png" width="150" height="115" /></a></div>
<div class="carousel">
	<div id="foo2"> 
		<?php query_posts( 'cat=5 & posts_per_page=9' );
		while ( have_posts() ) : the_post();
		    echo '<div class="newsfeed"><a href="';
		    the_permalink();
		    echo '" rel="bookmark" title="';
		    the_title();
		    echo '" >';
		    the_title(); 
		    echo '</a> <p>';
		    echo get_excerpt(); 
		    echo '</p><p class="meta">';
		    the_time('M j, Y');
		    echo '</p></div>';
		endwhile;

	      // Reset Query
	    wp_reset_query();
	    ?>
	</div>
	<div class="clearfix"></div>
	<a class="prev" id="foo2_prev" href="#"><span>prev</span></a>
	<a class="next" id="foo2_next" href="#"><span>next</span></a>
</div>
<br clear="all" />
<div id="morenews"><a href="http://www.subatomic.nl/category/news/">More News</a></div>
  </div> <!-- end #newshome -->
</div> <!-- end #content -->
</div> <!-- end #container -->
</div><!-- end #dotted -->

<?php get_footer(); ?>
