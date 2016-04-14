<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fuse_Forex
 */

?>
<?php if (is_front_page()){?>
<footer class="site-footer">
	<p class="site-footer__follow-text">Follow us</p>
	<a href="" class="site-footer__logo">
		<span class="site-footer__counter">33</span>
	</a>
	<div class="site-footer__company">FuseForex</div>
	<p class="site-footer__text">Institutional Trading</p>
	<p class="site-footer__copyright">© 2015 Fuse Forex. All Rights Reserved</p>
</footer>
<?php } else {?>
<footer class="post-footer">
	<p class="post-footer__follow-text">Follow us</p>
	<a href="" class="post-footer__logo">
		<span class="post-footer__counter">33</span>
	</a>
	<p class="post-footer__copyright">© 2015 Fuse Forex. All Rights Reserved</p>
</footer>
<?php } ?>
<?php wp_footer(); ?>

</body>
</html>
