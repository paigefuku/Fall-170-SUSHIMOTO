<?php
/**
Theme Name: Sushimoto 
Author: Paige Fukuhara of Paige Fukuhara Design & Creative Services
Author URI: http://paigefukuhara.com
Description: Custom Wordpress Theme for David Oh of Sushimoto, in Edmonds Washington. 

404.php
*/

get_header(); ?>    
    
<div class="content">
 
<article>
    
    <div class="backgroundWhite">
        <div class="MIA">
            <h1><?php _e( 'Oops! That page can&rsquo;t be found.' ); ?></h1>

            <p><?php _e( 'It looks like something got screwed up with our site! Please try a different search below:?'); ?></p>
        
            <section class="searchbar">
            <?php get_search_form(); ?>
            </section>

            
        
        </div><!-- END div #404warning -->

    </div><!-- END div .backgroundWhite -->
    
</article>
    
</div><!-- END "content"    div -->
<small>404</small>    
<?php get_footer(); ?> 

