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

    <div class="backgroundWhite">
        
  <section id="openingWelcome">  
<h2><a href="<?php the_permalink(); // link to the page or posting ?>" class="mainPageTitle"><?php the_title(); // get the page or posting title ?></a></h2>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>

 


   <script src="<?php bloginfo('template_directory'); ?>/responsiveslides.min.js"></script>
   
<h3>206-000-0000</h3>
<h4>LUNCH IS SERVED FROM 11AM-2PM</h4>
<h4>DINNER IS SERVED FROM 4PM-10PM</h4>
<h4>PLEASE ALLOW 15 MINUTES FOR TAKEOUT ORDERS.</h4></section>
   <ul class="rslides">
  <li><img src="<?php bloginfo('template_directory'); ?>/images/sushim1.jpg" alt=""></li>
  <li><img src="<?php bloginfo('template_directory'); ?>/images/sushim2.jpg" alt=""></li>
  <li><img src="<?php bloginfo('template_directory'); ?>/images/sushim3.jpg" alt=""></li>
  <li><img src="<?php bloginfo('template_directory'); ?>/images/sushim4.jpg" alt=""></li>
  <li><img src="<?php bloginfo('template_directory'); ?>/images/sushim5.jpg" alt=""></li>
  <li><img src="<?php bloginfo('template_directory'); ?>/images/sushim6.jpg" alt=""></li>
  <li><img src="<?php bloginfo('template_directory'); ?>/images/sushim7.jpg" alt=""></li>
  <li><img src="<?php bloginfo('template_directory'); ?>/images/sushim8.jpg" alt=""></li>

  
</ul>
    </div>
    </div>
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

