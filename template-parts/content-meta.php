<?php
/**
 * Template part for displaying metadata on image posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Artisanal_Varmint
 */
?>

<?php the_field('camera'); ?>
<?php if (get_field('film')): ?>
    / <?php the_field('film'); ?>
<?php endif; ?>
<?php if (get_field('film_iso')): ?>
    @ ISO <?php the_field('film_iso'); ?>
<?php endif; ?>
<?php if (get_field('location')): ?>
    / <?php the_field('location'); ?>
<?php endif; ?>
 / <?php echo date('F d, Y', strtotime(get_field('date'))); ?>
