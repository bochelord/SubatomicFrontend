<?php get_header(); ?>

	<div id="content" class="clearfix">            			
	<div id="main" class="col940 left first clearfix" role="main">
		<div class="morenewsdetail"><p><a href="<?php echo home_url(); ?>/category/news/"> &laquo; BACK TO NEWS</a></p></div>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class('newspostdetail clearfix'); ?> role="article">
			<div id="newsdetailimage"><img src="<?php if ( get_post_meta($post->ID, 'Main Image', true) ) : echo get_post_meta($post->ID, 'Main Image', true) ?><?php endif; ?>" />
			<div class="caption"><?php if ( get_post_meta($post->ID, 'Main Image Caption', true) ) : echo get_post_meta($post->ID, 'Main Image Caption', true) ?><?php endif; ?></div>
				</div>
		
			<section class="post_content clearfix">
				<h1><?php the_category(', '); ?>: <br />
				<?php the_title(); ?></h1>
				<div id="newsdetail"><?php the_content(); ?>
				<?php edit_post_link('Edit this entry', '<p class="meta">', '</p>'); ?>
				<span class="meta"><strong>Share:</strong></span>
				<?php _trackableshare_embed() ?>
				</div>
			</section> <!-- end article section -->
			
		</article> <!-- end article -->
		
		<?php endwhile; endif; ?>
		<div class="navigation">
<div class="alignleft">
	<?php previous_post_link('&laquo; %link', '%title', TRUE); ?> 
</div>
<div class="alignright">
<?php next_post_link('%link &raquo;', '%title', TRUE); ?> 
</div>
</div> <!-- end navigation -->
    </div> <!-- end #main -->

</div> <!-- end #content -->
</div> <!-- end #container -->
</div><!-- end #dotted -->

<?php get_footer(); ?>