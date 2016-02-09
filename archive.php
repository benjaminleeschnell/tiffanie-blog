<?php get_header(); ?>


<?php 
/*

  Template Name: Archives

*/

get_header(); ?>



<div class="wrapper">
  <div class="grid">
<?php 

$args = array(
  'post_type' => 'post',
  'posts_per_page' => -1,
);

// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

  <!-- pagination here -->

  <!-- the loop -->
  <?php while ( have_posts() ) : the_post(); 
    

//Gets post's featured image url to use as background image of post 
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
  <!-- end of the loop -->

  <!-- pagination here -->

  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
  </div>
</div>





<!-- **************************************************************

JS

******************************************************************* -->  

 
 


    <!-- ==================

    Masonry 

   ==================== -->

<script>
$('.grid').masonry({
  // options
   itemSelector: '.grid-item',
   columnWidth: 200
   // isFitWidth: true
});
//$('.wrapper').masonry({ isFitWidth: true });
</script>


<!-- **************************************************************

JS

******************************************************************* -->  
<?php get_footer(); ?>






<!-- **************************************************************

JS

******************************************************************* -->  

 
 


    <!-- ==================

    Masonry 

   ==================== -->

<script>
$('.grid').masonry({
  // options
   itemSelector: '.grid-item',
   columnWidth: 2a00
   // isFitWidth: true
});
//$('.wrapper').masonry({ isFitWidth: true });
</script>


<!-- **************************************************************

JS

******************************************************************* -->  
<?php get_footer(); ?>

