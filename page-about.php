<?php 
/*

	Template Name: About

*/


 ?>

<?php get_header(); ?>

<?php 

  $args = array(
    'post_type' => 'about'
    );
  $query = new WP_Query( $args );

?>

<div class="row about">

 <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

		<div class="padded-column medium-4 columns"><?php the_field( 'profile-image') ?></div>
		<div class="medium-8 columns h1"><h1><?php the_field( 'title') ?></h1>
			<p><?php the_field( 'about-me') ?></p></div>
	<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>

<?php get_footer(); ?>
