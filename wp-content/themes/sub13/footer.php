<br clear="all" />
<div id="footerbg">
<div id="container">
	<footer role="contentinfo">
		<div id="links">
			<a href="http://www.meetup.com/The-Gamification-Meetup-Group/" target="_blank">Gamification Meetup Group</a>
		</div> <!-- end #links -->
		<div id="social"> 
			<a href="http://www.facebook.com/subatomicnl" title="Check out our Facebook page" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/facebook.png" /></a>
			<a href="https://plus.google.com/b/117873201654417647885/117873201654417647885/posts" title="Find us on Google Plus" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/google.png" /></a>
			<a href="http://twitter.com/#!/subatomicnl" title="Follow us on Twitter" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/twitter.png" /></a>
			<a href="https://www.linkedin.com/company/subatomic" title="Find us on Linkedin" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/linkedin.png" /></a>
			<a href="https://pinterest.com/subatomicnl/" title="Subatomic on Pinterest" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/pinterest.png" /></a>

		</div> <!-- end #social -->
	<div class="fb-like" data-href="http://www.facebook.com/subatomicnl" data-send="false" data-layout="button_count" data-width="80" data-show-faces="false" data-font="arial"></div>
	<br clear="all" />
	<div id="inner-footer" class="clearfix">
		<nav>
			<?php bones_footer_links(); ?>
		</nav>
	</div> <!-- end #inner-footer -->
	</footer> <!-- end footer -->
</div><!-- end #container -->
</div><!-- end #footerbg -->
<div id="bgextra">&#32;</div>

<!-- scripts are now optimized via Modernizr.load -->	
<script src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>

<!--[if lt IE 7 ]>
<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

<?php wp_footer(); ?>

</body>
</html>