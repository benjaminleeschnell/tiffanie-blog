<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<title>Gumption</title>
<script src="https://use.typekit.net/rff6fnz.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/foundation.css">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/masonry.pkgd.min.js"></script>
<?php wp_head(); ?>
</head>

<body>

 <?php 

      $args = array(
        'post_type' => 'contact-image'
        );
      $query = new WP_Query( $args );

  ?>

	<div class="topper"><a href="/Tiffanie/wordpress">
        <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
    <a href="/Tiffanie/wordpress"> 
      <?php the_field( 'logo_color'); ?>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>

	<div class="row navigation">
<!--  <?php

  $defaults = array(
    'echo' => false,
    'container' => false,
    'theme_location' => 'primary Menu',
    'nav-class' => 'navigation', 
  );

{
    

    $menu = wp_nav_menu($defaults);
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);

}

  wp_nav_menu( $defaults );

 ?>  -->
	<!--	<div class="large-3 columns"><a href="/">Blog</a></div>
		<div class="large-3 columns"><a href="/wordpress/topics">Topics</a></div>
		<div class="large-3 columns"><a href="/Tiffanie/wordpress/about">The Author</a></div>
		<div class="large-3	 columns"><a href="wordpress/contact">Contact</a></div> -->
	</div> 



