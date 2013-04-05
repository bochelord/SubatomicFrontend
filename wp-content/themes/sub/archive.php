<?php get_header(); ?>
<div id="content" class="clearfix">
    
  <div id="main" class="col940 left first clearfix" role="main">
	<!-- begin top posts -->
	   <?php query_posts( array( 'category__and' => array(5), 'posts_per_page' => 6 ) );
	    $count = 1;
	    while (have_posts()) : the_post(); ?>
	    <div class="topnewspost <?php if ($count == 6) : ?>last<?php endif; ?>" id="post-<?php the_ID(); ?>">
		    
		     <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'bones-thumb-150' ); ?></a>
		     <div class="topnewsheader"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
		     
	    </div>
	    <?php $count++; ?>
	    <?php endwhile;  wp_reset_query(); ?>
	<!-- end top posts -->
	    <br clear="all" />
	<!-- begin featured post -->
	    <div id="featurednews">
	    <?php query_posts( array( 'category__and' => array(6), 'posts_per_page' => 1 ) );
	    while (have_posts()) : the_post(); ?>
      
      	    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><img src="<?php if ( get_post_meta($post->ID, 'Featured Image', true) ) : ?><?php echo get_post_meta($post->ID, 'Featured Image', true) ?><?php endif; ?>" /></a>
	    <div class="caption"><?php if ( get_post_meta($post->ID, 'Main Image Caption', true) ) : echo get_post_meta($post->ID, 'Main Image Caption', true) ?><?php endif; ?></div>
			
	    <?php endwhile;  wp_reset_query(); ?>
	    </div><!-- end #featurednews -->
	    <!-- end featured post -->
	    <!-- begin bottom posts -->
	    <div id="bottomnews">
	     <div id="bottomnewscolumn">
	      <h2>Company News</h2>
	    <?php query_posts( 'cat=5&tag=company&posts_per_page=6' );
	    while (have_posts()) : the_post(); ?>
		  <p class="newstitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>,
		   <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS Y'); ?></time></p>
			    
	    <?php endwhile;  wp_reset_query(); ?>
	    
	      </div> <!-- end #bottomnewscolumn -->
	       <div id="bottomnewscolumn">
		<h2>Projects</h2>
	    <?php query_posts( 'cat=5&tag=projects&posts_per_page=6' );
	    while (have_posts()) : the_post(); ?>
		  <p class="newstitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>,
		    <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS Y'); ?></time></p>
	   
	    <?php endwhile;  wp_reset_query(); ?>
	      </div> <!-- end #bottomnewscolumn -->
	      
	       <div id="bottomnewscolumn">
	       <h2>Events</h2>
	    <?php query_posts( 'cat=5&tag=events&posts_per_page=6' );
	    while (have_posts()) : the_post(); ?>
		  <p class="newstitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>,
		    <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS Y'); ?></time></p>
		  
	    <?php endwhile;  wp_reset_query(); ?>
	      </div> <!-- end #bottomnewscolumn -->
	    </div><!-- end #bottomnews -->
	<!-- end bottom posts -->
	
    </div> <!-- end #main -->

</div> <!-- end #content -->
</div> <!-- end #container -->
</div><!-- end #dotted -->

<?php get_footer(); ?>
