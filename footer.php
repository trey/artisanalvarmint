<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Artisanal_Varmint
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'artisanalvarmint' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'artisanalvarmint' ), 'WordPress' ); ?></a> and <a href="https://github.com/trey/artisanalvarmint">Artisanal Varmint</a>.
			<span class="sep"> | </span>
			Copyright &copy; 2015&mdash;<?php echo date('Y'); ?> <?php the_author_link(); ?>. All rights reserved.
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
