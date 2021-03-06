<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<footer id="footer">
	<section class="form-wrapper">
		<?php dynamic_sidebar( 'newsletter_form' ); ?>
	</section>

	<ul class="footer-social">
		<?php if(get_field('twitter_url', 'option')): ?>
			<li><a target="_blank" href="<?php the_field('twitter_url', 'option'); ?>" class="social-link"><i class="fa fa-twitter"></i></a></li>
		<?php endif; ?>
		<?php if(get_field('email', 'option')): ?>
			<li><a href="mailto:<?php the_field('email', 'option'); ?>?subject=HiZachary" class="social-link"><i class="fa fa-paper-plane"></i></a></li>
		<?php endif; ?>
	</ul>
</footer>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70824865-3', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_footer();?>

</body>
</html>
