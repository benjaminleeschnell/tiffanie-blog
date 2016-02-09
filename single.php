<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wellonthesouthside
 */

get_header(); ?>

<div id="page-wrapper">

	<div class="row about">
		
		<?php
		while ( have_posts() ) : the_post(); ?>

		<div class="padded-column medium-4 columns"><?php echo get_the_post_thumbnail(); ?></div>
		<div class="medium-8 columns">
		<p><?php the_content(); ?></p>
		</div>

		<?php

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>

		<?php
		endwhile; // End of the loop. ?>
	
	</div> <!-- row about -->
		


</div><!-- page-wrapper -->

<?php
//get_sidebar();
get_footer();
