<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Gumption</title>
    <script src="https://use.typekit.net/rff6fnz.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?> /css/normalize.css" />
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
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

<div class="wrapper">
  <div class="grid">
  	<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
    <a href="/Tiffanie/wordpress"> 
    <div class="grid-item grid-item--width2 grid-item--height2">
      <?php the_field( 'logo_color'); ?>
    </div></a>

 
	
	<?php //Gets list of most used tags
	$tags = get_tags( 'number=50&orderby=count&order=DESC' ); 
	$tag_link = array();
	$tag_name = array();
	
	//Add links and names of tags to arrays
	foreach ( $tags as $tag ) {
	array_push($tag_link, get_tag_link( $tag->term_id ));
	array_push($tag_name, $tag->name);
	}
	$tagNum = 0; // iterates through tag arrays	
	$state = 0; //variable to help control switching between dynamic and static posts
	
	query_posts( 'posts_per_page=5' ); 

	if ( have_posts() ) : while ( have_posts() ) : the_post(); 
		
		$rand = (float)rand()/(float)getrandmax();
	 
		if($state == 1){ //After first post block do these static blocks
			$state++; ?>
		 
				
  <?php 
  //First tag/post blocks after static blocks
  if ($rand < .5){ //get tag 1/2 of the time			
			
				if( $tagNum <= count($tag_name) && $tagNum > -1){ ?>
			<a href="<?php echo $tag_link[$tagNum] ?>">
			<div class="grid-item grid-item--width2 grid-item--height2 secondary">    
				<h1><?php echo $tag_name[$tagNum];?></h1>
				</div>
			</a>
	
			<?php 
			$tagNum ++; // move position to next tag
			}
			}
  
  
  } if($state == 0 || $state >= 2  ){ //Initial post block before static blocks and all following posts blocks
			if($state < 2){$state++; }
		 
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
			
  <?php 	}		
			if ($rand < 0.3 && $state >= 2){ //get tag block after a post block 1/3 of the time		
			
				if( $tagNum <= count($tag_name) && $tagNum > -1){ ?>
			<a href="<?php echo $tag_link[$tagNum] ?>">
			<div class="grid-item grid-item--width2 grid-item--height2 secondary">    
				<h1><?php echo $tag_name[$tagNum];?></h1>
				</div>
			</a>
	
			<?php 
			$tagNum ++;
			}
			}
  
	 
	 endwhile;
    endif;
?>  

<a href="/Tiffanie/wordpress/archives/">  
					<div class="grid-item grid-item--width2 grid-item--height2">
						<div id="smaller-border">
							<h1>See More</h1>
						</div>
					</div>
				</a> 

    <?php endwhile; endif; wp_reset_postdata(); ?>

     <?php 

      $args = array(
        'post_type' => 'about'
        );
      $query = new WP_Query( $args );

  ?>
 	<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
    <a href="/Tiffanie/wordpress/about">  
					<div class="grid-item grid-item--width2 grid-item--height2 third">
					<h1><?php the_field( 'title'); ?></h1>
					</div>
				</a> 

	  <?php endwhile; endif; wp_reset_postdata(); ?>

<?php 

      $args = array(
        'post_type' => 'contact-image'
        );
      $query = new WP_Query( $args );

  ?>

<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
 <a href="https://www.facebook.com/tiffanie.robinson09?fref=ts"> 
					<div class="grid-item primary">
					 <?php the_field( 'home_facebook_icon'); ?>
					</div>
				</a>

				<a href="https://twitter.com/MrsRobinson1010"> 
					<div class="grid-item primary">
					 <?php the_field( 'home_twitter_icon'); ?>
					</div>
				</a>
 <?php endwhile; endif; wp_reset_postdata(); ?>

				
<!--
    <div class="grid-item grid-item--width2 grid-item--height2 secondary">    
      <h1>#business</h1>
      <h6>OCT. 1, 2015</h6>
    </div>

    <div class="grid-item grid-item--width2 grid-item--height2 img2">
    <p>blog title stuff</p>
    <h6>OCT. 1, 2015</h6>
    </div> 

    <div class="grid-item grid-item--width2 grid-item--height2 secondary">    
      <h1>#startups</h1>
    </div>

    <div class="grid-item grid-item--width2 grid-item--height2 secondary">    
      <h1>#winning</h1>
    </div>

    <div class="grid-item grid-item--width2 grid-item--height2 img3">
    <p>other blog title stuff</p>
    <h6>OCT. 1, 2015</h6>
    </div>

    <div class="grid-item grid-item--width2 grid-item--height2 img4">
    <p>businessy title stuff</p>
    <h6>OCT. 1, 2015</h6>
    </div> 

    <div class="grid-item grid-item--width2 grid-item--height2 img5">
    <p>space blog title stuff. moons and stuff like that.</p>
    <h6>OCT. 1, 2015</h6>
    </div> 

     <div class="grid-item grid-item--width2 grid-item--height2 circle">
      <h1>See more</h1>
    </div>
	
	
	<!--
	<?php //Post template ?>
	<div class="grid-item grid-item--width2 grid-item--height2 img1">
    <p>How to pursue your passion without sacrificing your paycheck.</p>
    <h6>OCT. 1, 2015</h6>
    </div> 
	
	<div class="grid-item grid-item--width2 grid-item--height2 img2">
    <p>blog title stuff</p>
    <h6>OCT. 1, 2015</h6>
    </div> 
	
	<?php //Tag template ?>
	<div class="grid-item grid-item--width2 grid-item--height2 secondary">    
      <h1>#entrepreneurship</h1>
    </div>
	-->
	
	

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
<?php wp_footer(); ?>
  </body>
</html>


