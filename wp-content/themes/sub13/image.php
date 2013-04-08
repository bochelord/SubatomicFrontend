<?php get_header(); ?>

<div id="contenttop"></div>
			<div id="content" class="clearfix"><div id="social">
  <a href="http://www.facebook.com/pages/Flight-1337/134761933293187" title="Check out our facebook page" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/facebook.png" class="domroll <?php echo get_template_directory_uri(); ?>/library/images/FacebookIconClick.png" /></a>
  <a href="http://twitter.com/#!/Flight1337" title="Follow us on twitter!" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/twitter.png" class="domroll <?php echo get_template_directory_uri(); ?>/library/images/TwitterIconClick.png" /></a>
  <a href="http://www.linkedin.com/company/flight-1337" title="Find us on Linkedin" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/linkedin.png" class="domroll <?php echo get_template_directory_uri(); ?>/library/images/LinkedInIconClick.png" /></a></div><!-- end #social -->
			
				<div id="main" class="clearfix">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
      
      					<header>
        					<h1 class="h2"><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>
      					</header>
      
      					<section class="post_content clearfix">
      						<p class="attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></p>
      						<p class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></p>

      						<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
      					</section>
      					
      					<footer>
							<nav class="prev-next-links">
								<ul class="clearfix">
        							<li><?php previous_image_link() ?></li>
        							<li><?php next_image_link() ?></li>
        						</ul>
      						</nav>
      					</footer>
    				</article>
    				
    				<?php endwhile; else: ?>
    				
    				<div class="help">
    					<p>Sorry, no attachments matched your criteria.</p>
    				</div>

					<?php endif; ?>

  				</div> <!-- end #main -->
  				
  				<?php get_sidebar(); // sidebar 1 ?>
  				
  			</div> 			<!-- end #content -->
 <div id="contentbottom"><p class="attribution">&copy; <?php bloginfo('name'); ?> </p></div>



<?php get_footer(); ?>