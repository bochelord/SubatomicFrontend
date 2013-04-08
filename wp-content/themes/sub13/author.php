<?php get_header(); ?>
			
<div id="contenttop"></div>
			<div id="content" class="clearfix"><div id="social">
  <a href="http://www.facebook.com/pages/Flight-1337/134761933293187" title="Check out our facebook page" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/facebook.png" class="domroll <?php echo get_template_directory_uri(); ?>/library/images/FacebookIconClick.png" /></a>
  <a href="http://twitter.com/#!/Flight1337" title="Follow us on twitter!" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/twitter.png" class="domroll <?php echo get_template_directory_uri(); ?>/library/images/TwitterIconClick.png" /></a>
  <a href="http://www.linkedin.com/company/flight-1337" title="Find us on Linkedin" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/linkedin.png" class="domroll <?php echo get_template_directory_uri(); ?>/library/images/LinkedInIconClick.png" /></a></div><!-- end #social -->
			
				<div id="main" class="col620 left first clearfix" role="main">
				
					<h1 class="archive_title h2">
						<span><?php _e("Posts By:", "bonestheme"); ?></span> 
						<!-- google+ rel=me function -->
						<?php $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
						$google_profile = get_the_author_meta( 'google_profile', $curauth->ID );
						if ( $google_profile ) {
							echo '<a href="' . esc_url( $google_profile ) . '" rel="me">' . $curauth->display_name . '</a>'; ?></a>
						<?php } else { ?>
						<?php echo get_author_name(get_query_var('author')); ?>
						<?php } ?>
					</h1>
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							
							<p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
						
						</header> <!-- end article header -->
					
						<section class="post_content">
						
							<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
						
							<?php the_excerpt(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php endwhile; ?>	
					
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>

					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
								<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
							</ul>
						</nav>
					<?php } ?>
								
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("No Posts Yet", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, What you were looking for is not here.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> 			<!-- end #content -->
 <div id="contentbottom"><p class="attribution">&copy; <?php bloginfo('name'); ?> </p></div>



<?php get_footer(); ?>