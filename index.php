<?php get_header(); ?>

<div id="page-wrapper">


<?php if (have_posts()) while (have_posts()) : the_post(); ?>
<?php // the_title('<h1>', '</h1>'); ?>

<div class="row about">
<?php if (current_user_can('edit_post', get_the_ID())) { ?>
<p class="aligncenter"><?php edit_post_link('Edit'); ?></p>
<?php } ?>
		<div class="padded-column medium-4 columns"><?php echo get_the_post_thumbnail(); ?></div>
		<div class="medium-8 columns">
		<p><?php the_content(); ?></p>
		</div>
	
</div>

<?php
if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>

<?php endwhile; ?>
</div>

<?php //wp_reset_postdata(); ?>


</div>

<?php get_footer(); ?>