<?php
/*
Template Name: LP GUTEN
*/
?>
<?php get_header(); ?>

<main class="mymain myblocks">

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<?php the_content(); ?>

<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
