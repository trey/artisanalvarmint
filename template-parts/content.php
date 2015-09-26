<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Artisanal_Varmint
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content" title="<?php the_title(); ?>">
		<?php the_content(); ?>
	</div>

	<footer class="entry-footer">
		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<a href="<?php the_permalink(); ?>">
					<?php get_template_part('template-parts/content-meta'); ?>
				</a>
			</div>
		<?php endif; ?>
	</footer>
</article>
