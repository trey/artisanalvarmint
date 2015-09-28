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
		<?php get_template_part('template-parts/content-photo'); ?>

		<div class="entry-meta">
			<?php get_template_part('template-parts/content-meta'); ?>
		</div>

		<div class="page-header">
			<h1><?php the_title(); ?></h1>
		</div>

		<div class="copy"><?php the_content(); ?></div>
	</div>
</article>
