<?php
/*
Template Name: About us
*/
?>

<?php get_header(); ?>
<div id="content" class="clearfix">           
	<div id="main" class="col940 left first clearfix" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="topphotos"><img src="<?php if ( get_post_meta($post->ID, 'Main Image', true) ) : echo get_post_meta($post->ID, 'Main Image', true) ?><?php endif; ?>" />
			<div class="capt"><?php if ( get_post_meta($post->ID, 'Main Image Caption', true) ) : echo get_post_meta($post->ID, 'Main Image Caption', true) ?><?php endif; ?></div>
		</div><!-- end #topphotos-->
		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
			
			<section class="post_content clearfix">
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry', '<p class="meta">', '</p>'); ?>
			</section> <!-- end article section -->

		</article> <!-- end article -->
		
		<?php endwhile; ?>	
		<?php endif; ?>
		
		<h3>Our Staff</h3>
		<div id="icons">
		  <a id="myHeader1" href="javascript:showonlyone('aboutboxes1');" ><img src="<?php echo get_template_directory_uri(); ?>/library/images/MelindaElement.png" alt="Staff" width="95" height="95" /></a>
		<a id="myHeader1" href="javascript:showonlyone('aboutboxes2');" ><img src="<?php echo get_template_directory_uri(); ?>/library/images/VincentElement.png" alt="Staff" width="95" height="95" /></a>
		<a id="myHeader1" href="javascript:showonlyone('aboutboxes3');" ><img src="<?php echo get_template_directory_uri(); ?>/library/images/JoannaElement.png" alt="Staff" width="95" height="95" /></a>
		  <a id="myHeader1" href="javascript:showonlyone('aboutboxes4');" ><img src="<?php echo get_template_directory_uri(); ?>/library/images/JoseElement.png" alt="Staff" width="95" height="95" /></a>
		  <a id="myHeader1" href="javascript:showonlyone('aboutboxes5');" ><img src="<?php echo get_template_directory_uri(); ?>/library/images/SarahElement.png" alt="Staff" width="95" height="95" /></a>
		  <a id="myHeader1" href="javascript:showonlyone('aboutboxes6');" ><img src="<?php echo get_template_directory_uri(); ?>/library/images/WouterElement.png" alt="Staff" width="95" height="95" /></a>
		  <a id="myHeader1" href="javascript:showonlyone('aboutboxes7');" ><img src="<?php echo get_template_directory_uri(); ?>/library/images/GwynElement.png" alt="Staff" width="95" height="95" /></a>
		</div>
		<div id="personalinfo">
		  <div name="aboutboxes" class="aboutbox" id="aboutboxes1" style="display: block;"><img src="<?php echo get_template_directory_uri(); ?>/library/images/Melinda_pos.png"  alt="Position" width="70" height="198" /><p class="infoabout"><img src="<?php echo get_template_directory_uri(); ?>/library/images/Melinda.gif" alt="Staff" width="105" height="180" />
<?php
$post_id = 15;
$queried_post = get_post($post_id);
?>
<h5><?php echo $queried_post->post_title; ?></h5>
<?php $content = $queried_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content; ?> </p><img src="<?php echo get_template_directory_uri(); ?>/library/images/MelindaElement.png" alt="Staff" width="55" height="55" class="element"/></div>

<div name="aboutboxes" class="aboutbox" id="aboutboxes2" style="display: none;"><img src="<?php echo get_template_directory_uri(); ?>/library/images/Vincent_pos.png" alt="Position" width="70" height="198" /><p class="infoabout"><img src="<?php echo get_template_directory_uri(); ?>/library/images/Vincent.gif" alt="Staff" width="105" height="180" /><?php
$post_id = 18;
$queried_post = get_post($post_id);
?>
<h5><?php echo $queried_post->post_title; ?></h5>
<?php $content = $queried_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content; ?></p><img src="<?php echo get_template_directory_uri(); ?>/library/images/VincentElement.png" alt="Staff" width="55" height="55" class="element"/></div>

<div name="aboutboxes" class="aboutbox" id="aboutboxes3" style="display: none;"><img src="<?php echo get_template_directory_uri(); ?>/library/images/Joanna_pos.png" alt="Position" width="70" height="198" /><p class="infoabout"><img src="<?php echo get_template_directory_uri(); ?>/library/images/Joanna.gif" alt="Staff" width="105" height="180" /><?php
$post_id = 20;
$queried_post = get_post($post_id);
?>
<h5><?php echo $queried_post->post_title; ?></h5>
<?php $content = $queried_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content; ?></p><img src="<?php echo get_template_directory_uri(); ?>/library/images/JoannaElement.png" alt="Staff" width="55" height="55" class="element"/></div>

<div name="aboutboxes" class="aboutbox" id="aboutboxes4" style="display: none;"><img src="<?php echo get_template_directory_uri(); ?>/library/images/Jose_pos.png" alt="Position" width="70" height="198" /><p class="infoabout"><img src="<?php echo get_template_directory_uri(); ?>/library/images/Jose.gif" alt="Staff" width="105" height="180" /><?php
$post_id = 69;
$queried_post = get_post($post_id);
?>
<h5><?php echo $queried_post->post_title; ?></h5>
<?php $content = $queried_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content; ?></p><img src="<?php echo get_template_directory_uri(); ?>/library/images/JoseElement.png" alt="Staff" width="55" height="55" class="element"/></div>

<div name="aboutboxes" class="aboutbox" id="aboutboxes5" style="display: none;"><img src="<?php echo get_template_directory_uri(); ?>/library/images/Sarah_pos.png" alt="Position" width="70" height="198" /><p class="infoabout"><img src="<?php echo get_template_directory_uri(); ?>/library/images/Sarah.gif" alt="Staff" width="105" height="180" /><?php
$post_id = 67;
$queried_post = get_post($post_id);
?>
<h5><?php echo $queried_post->post_title; ?></h5>
<?php $content = $queried_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content; ?></p><img src="<?php echo get_template_directory_uri(); ?>/library/images/SarahElement.png" alt="Staff" width="55" height="55" class="element"/></div>

 <div name="aboutboxes" class="aboutbox" id="aboutboxes6" style="display: none;"><img src="<?php echo get_template_directory_uri(); ?>/library/images/Wouter_pos.png" alt="Position" width="70" height="198" /><p class="infoabout"><img src="<?php echo get_template_directory_uri(); ?>/library/images/Wouter.gif" alt="Staff" width="105" height="180" /><?php
$post_id = 22;
$queried_post = get_post($post_id);
?>
<h5><?php echo $queried_post->post_title; ?></h5>
<?php $content = $queried_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content; ?></p><img src="<?php echo get_template_directory_uri(); ?>/library/images/WouterElement.png" alt="Staff" width="55" height="55" class="element"/></div>
 
 <div name="aboutboxes" class="aboutbox" id="aboutboxes7" style="display: none;"><img src="<?php echo get_template_directory_uri(); ?>/library/images/Gwyn_pos.png" alt="Position" width="70" height="198" /><p class="infoabout"><img src="<?php echo get_template_directory_uri(); ?>/library/images/Gwyn.gif" alt="Staff" width="105" height="180" /><?php
$post_id = 61;
$queried_post = get_post($post_id);
?>
<h5><?php echo $queried_post->post_title; ?></h5>
<?php $content = $queried_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content; ?></p><img src="<?php echo get_template_directory_uri(); ?>/library/images/GwynElement.png" alt="Staff" width="55" height="55" class="element"/></div>
		</div> <!-- end personalinfo -->
		
	</div> <!-- end #main -->
</div> 	<!-- end #content -->
</div> <!-- end #container -->
<?php get_footer(); ?>