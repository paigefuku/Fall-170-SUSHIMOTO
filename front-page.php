<?php
/**
Theme Name: Sushimoto 
Author: Paige Fukuhara of Paige Fukuhara Design & Creative Services
Author URI: http://paigefukuhara.com
Description: Custom Wordpress Theme for David Oh of Sushimoto, in Edmonds Washington. 

front-page.php
*/

get_header(); ?>    
    

<div class="content">
 
<h2><a href="<?php the_permalink(); // link to the page or posting ?>" class="mainPageTitle"><?php the_title(); // get the page or posting title ?></a></h2>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>

 
<?php the_content(''); // get page or posting written content ?>

   <script src="js/responsiveslides.min.js"></script>

   <ul class="rslides">
  <li><img src="images/sushim6.jpg" alt=""></li>
  <li><img src="images/sushim1.jpg" alt=""></li>
  <li><img src="images/sushim4.jpg" alt=""></li>
  <li><img src="images/sushim2.jpg" alt=""></li>
  <li><img src="images/sushim3.jpg" alt=""></li>
  <li><img src="images/sushim5.jpg" alt=""></li>
  <li><img src="images/sushim7.jpg" alt=""></li>
  <li><img src="images/sushim8.jpg" alt=""></li>

  
</ul>
<script>
  $(function() {
  $(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 700,            // Integer: Speed of the transition, in milliseconds
  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: false,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: false,           // Boolean: Pause on hover, true or false
  });
});
</script>
</article>
<script>
  $(function() {
    $(".rslides").responsiveSlides();
  });
</script>

<?php endwhile; endif; // end the loop ?>

    
</div><!-- END "content"    div -->
<small>front-page.php</small>    
<?php get_footer(); ?> 

