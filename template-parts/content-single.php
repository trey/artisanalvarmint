<?php
/**
 * Template part for displaying single posts.
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
		<div class="entry-meta">
			<?php get_template_part('template-parts/content-meta'); ?>
		</div>
	</footer>
</article>
