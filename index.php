<?php get_header(); ?>

<div id="page-wrapper">
<?php if (have_posts()) while (have_posts()) : the_post(); ?>
<?php the_title('<h1>', '</h1>'); ?>

<?php the_content(); ?>

<?php if (current_user_can('edit_post', get_the_ID())) { ?>
<p class="aligncenter"><?php edit_post_link('Edit'); ?></p>
<?php } ?>

<?php if (comments_open()) { comments_template(); } ?>
<?php endwhile; ?>
</div>

<?php get_footer(); ?>