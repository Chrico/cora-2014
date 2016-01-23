<?php
/**
 * The template for displaying the footer.
 *
 * @package Cora-2014
 */
?>

			</div> <?php /* site-content-inner */ ?>
		</main> <?php /* site-content */ ?>

		<footer id="site-footer" class="clearfix" role="contentinfo">
			<?php get_template_part( 'parts/navigation', 'footer' ); ?>
		</footer>

</div> <?php /* site */ ?>

<?php wp_footer(); ?>

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	<?php if( is_user_logged_in() ) : ?>
		ga('create', 'UA-53010254-1', { 'userId': '<?php echo wp_get_current_user()->ID; ?>' });
	<?php else: ?>
		ga('create', 'UA-53010254-1', 'auto');
	<?php endif; ?>
	ga('set', 'forceSSL', true);
	ga('set', 'anonymizeIp', true);
	ga('require', 'linkid', 'linkid.js');
	ga('require', 'displayfeatures');
	ga('send', 'pageview');
</script>
</body></html>