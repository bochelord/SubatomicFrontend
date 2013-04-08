<?php get_header(); ?>
			
			<div id="content" class="clearfix">           
			
				<div id="main" class="col940 left first clearfix" role="main">
				<div id="topphotos"><img src="<?php if ( get_post_meta($post->ID, 'Main Image', true) ) : echo get_post_meta($post->ID, 'Main Image', true) ?><?php endif; ?>" />
					<div class="capt"><?php if ( get_post_meta($post->ID, 'Main Image Caption', true) ) : echo get_post_meta($post->ID, 'Main Image Caption', true) ?><?php endif; ?></div>
				</div><!-- end #topphotos-->
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
						<section class="post_content clearfix">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
							<?php edit_post_link('Edit this entry', '<p class="meta">', '</p>'); ?>
                            
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					
					<?php endwhile; ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1>Not Found</h1>
					    </header>
					    <section class="post_content">
					    	<p>Sorry, but the requested resource was not found on this site.</p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
        
			</div> 			<!-- end #content -->
</div> <!-- end #container -->
<?php get_footer(); ?>