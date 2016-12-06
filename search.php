<?php
/**
Theme Name: Sushimoto 
Author: Paige Fukuhara of Paige Fukuhara Design & Creative Services
Author URI: http://paigefukuhara.com
Description: Custom Wordpress Theme for David Oh of Sushimoto, in Edmonds Washington. 

search.php
*/

get_header(); ?>    
    

<div class="content">
 <article>
    
    <div class="backgroundWhite">
        <div class="searchResults">
          
             
 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>

    <?php the_content(''); // get page or posting written content ?>
    <?php get_search_query(''); ?>

    <?php endwhile; endif; // end the loop ?>

     

<h3>Try another?</h3>
<?php get_search_form();?>
            
</div><!-- END "searchResults    div -->
</div><!-- END "backgroundWhiate    div -->
</article>
</div><!-- END "content"    div -->
     
<small>search.php</small>    
<?php get_footer(); ?> 

