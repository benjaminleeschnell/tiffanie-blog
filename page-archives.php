  
<?php 
/*

  Template Name: Archives

*/

get_header(); ?>



<div class="wrapper1">
  <div class="grid">

<?php 

$args = array(
  'post_type' => 'post',
  'posts_per_page' => 12,
);

// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

  <!-- pagination here -->

  <!-- the loop -->
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
    

//Gets post's featured image url to use as background image of post 
      if (has_post_thumbnail($post->ID)){ 
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
        } ?>
      
      <a href="<?php the_permalink(); ?>" > 
        <div class="grid-item" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php echo $image[0]; ?>); background-size: cover;">
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

<div class="archive-list1">
<h1>Monthly</h1>
<?php $args = array(
  'type'            => 'monthly',
  'before'          => '',
  'after'           => '',
  'show_post_count' => true,
  'echo'            => 1,
  'order'           => 'DESC'
);
wp_get_archives( $args ); ?>
</div>
<div class="archive-list2">
<?php 
   $args = array(
  'show_option_all'    => '',
  'orderby'            => 'name',
  'order'              => 'ASC',
  'style'              => 'list',
  'show_count'         => 1,
  'hide_empty'         => 1,
  'use_desc_for_title' => 0,
  'child_of'           => 0,
  'feed'               => '',
  'feed_type'          => '',
  'feed_image'         => '',
  'exclude'            => '',
  'exclude_tree'       => '',
  'include'            => '',
  'hierarchical'       => 1,
  'title_li'           => __( 'Categories' ),
  'show_option_none'   => __( '' ),
  'number'             => null,
  'echo'               => 1,
  'depth'              => 0,
  'current_category'   => 0,
  'pad_counts'         => 0,
  'taxonomy'           => 'category',
  'walker'             => null
    );
    wp_list_categories( $args ); 
?> 

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

