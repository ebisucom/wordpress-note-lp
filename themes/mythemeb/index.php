<?php get_header(); ?>

<main class="mymain">

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<article <?php post_class( 'myblocks' ); ?>>

<?php if( has_post_thumbnail() ): ?>
<figure class="myfigure">
<?php the_post_thumbnail(); ?>
</figure>
<?php endif; ?>

<h1><?php the_title(); ?></h1>

<?php the_content(); ?>

</article>

<?php endwhile; endif; ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
