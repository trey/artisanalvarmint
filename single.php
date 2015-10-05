<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Artisanal_Varmint
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'single' ); ?>
		<?php endwhile; ?>

			<nav class="navigation post-navigation" role="navigation">
				<h2 class="screen-reader-text"><?php esc_html_e( 'Post navigation', 'artisanalvarmint' ); ?></h2>
				<div class="nav-links">
					<div class="nav-previous"><?php previous_post_link('%link'); ?></div>
					<div class="nav-next"><?php next_post_link('%link'); ?></div>
				</div>
			</nav>
		</main>
	</div>

<?php get_footer(); ?>
