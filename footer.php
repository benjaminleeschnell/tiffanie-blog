<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

  <?php 

      $args = array(
        'post_type' => 'contact-image'
        );
      $query = new WP_Query( $args );

  ?>

	<div class="row bottom">
		 <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
		<!-- <div class="large-4 columns logo"><?php the_field( 'logo_color'); ?></div> -->
		<div class="large-12 columns icon">
		<ul>
			<li><?php the_field( 'fb_icon'); ?></li>
			<li><?php the_field( 'twitter_icon'); ?></li>
			<li><?php the_field( 'mail_icon'); ?></li>
		</ul>
		</div>
  <?php endwhile; endif; wp_reset_postdata(); ?>

</body>
</html>
