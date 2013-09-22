 
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<a href="http://miracletracking.com/" rel="generator">Proudly powered by Miracles</a>
		</div><!-- .site-info -->
		<?php	
		if ( is_user_logged_in()) {
		?>
			<div  class="searchform_footercover"><?php get_search_form(); ?></div> 
		<?php	
		}
		?>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>