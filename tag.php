<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

<div class="tags">
		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Tags: %s', 'tiffanie-blog' ), single_tag_title( '', false ) ); ?></h1>

				<?php if ( tag_description() ) : // Show an optional tag description ?>
				<div class="archive-meta"><?php echo tag_description(); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->
</div>

			<div class="wrapper">
				<div class="grid">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post();
				if (has_post_thumbnail($post->ID)){ 
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
				} ?>
	 
			
			<a href="<?php the_permalink(); ?>" > 
				<div class="grid-item grid-item--width2 grid-item--height2" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php echo $image[0]; ?>); background-size: cover;">
					<p><?php the_title(); ?></p>
					<h6><?php the_time('F jS, Y'); ?></h6>
				</div>
			</a>
			
			<?php endwhile; ?>
			</div>
			</div>
			

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

 <?php //get_sidebar(); ?>


    <!-- ==================

    Masonry 

   ==================== -->

<script>
$('.grid').masonry({
  // options
   itemSelector: '.grid-item',
   columnWidth: 200
});
//$('.wrapper').masonry({ isFitWidth: true });
</script>

<?php get_footer(); ?>
