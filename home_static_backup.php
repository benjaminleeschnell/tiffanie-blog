<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Gumption</title>
    <script src="https://use.typekit.net/rff6fnz.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <link rel="stylesheet" href="/wp-content/themes/tiffanie-blog/css/normalize.css" />
    <link rel="stylesheet" href="/wp-content/themes/tiffanie-blog/css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="/wp-content/themes/tiffanie-blog/js/masonry.pkgd.min.js"></script>
	 <?php wp_head(); ?> 
  </head>
  <body>

<div class="wrapper">
  <div class="grid">

    <a href="/"> 
    <div class="grid-item grid-item--width2 grid-item--height2">
      <img src="/wp-content/themes/tiffanie-blog/img/logo.jpg">
    </div></a>

    <div class="grid-item grid-item--width2 grid-item--height2 img1">
    <p>How to pursue your passion without sacrificing your paycheck.</p>
    <h6>OCT. 1, 2015</h6>
    </div> 

	<a href="/contact">  
    <div class="grid-item grid-item--width2 grid-item--height2 primary">
        <h1>Contact Me</h1>
    </div></a>

	<a href="#"> 
    <div class="grid-item primary">
      <h1>FB</h1>
    </div></a>

	<a href="#"> 
    <div class="grid-item primary">
      <h1>Twitter</h1>
    </div></a>   
   
    <a href="/about">  
    <div class="grid-item grid-item--width2 grid-item--height2 third">
      <h1>About the Author</h1>
    </div></a> 

    <div class="grid-item grid-item--width2 grid-item--height2 secondary">    
      <h1>#entrepreneurship</h1>
    </div>

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
});
//$('.wrapper').masonry({ isFitWidth: true });
</script>


<!-- **************************************************************

JS

******************************************************************* -->  
<?php wp_footer(); ?>
  </body>
</html>


