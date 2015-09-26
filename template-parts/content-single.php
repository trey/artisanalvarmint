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
	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<footer class="entry-footer">
		<div class="entry-meta">
			[entry-meta]
		</div>
	</footer>
</article>
