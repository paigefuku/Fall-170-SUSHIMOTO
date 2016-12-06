<?php
/**
Theme Name: Sushimoto 
Author: Paige Fukuhara of Paige Fukuhara Design & Creative Services
Author URI: http://paigefukuhara.com
Description: Custom Wordpress Theme for David Oh of Sushimoto, in Edmonds Washington. 

index.php
*/

get_header(); ?>    
    

<div class="content">
 <article>
     <div class="backgroundWhite">
<h2><a href="<?php the_permalink(); // link to the page or posting ?>" class="mainPageTitle"><?php the_title(); // get the page or posting title ?></a></h2>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>



<?php the_content(''); // get page or posting written content ?>
    
<?php endwhile; endif; // end the loop ?>
         </div>
</article>
</div><!-- END "content"    div -->
<small>index.php</small>    
<?php get_footer(); ?> 

