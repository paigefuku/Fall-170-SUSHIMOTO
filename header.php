<?php  
/*Theme Name: Sushimoto 
Author: Paige Fukuhara of Paige Fukuhara Design & Creative Services
Author URI: http://paigefukuhara.com
Description: Custom Wordpress Theme for David Oh of Sushimoto, in Edmonds Washington. 

header.php
*/
?>


<!DOCTYPE html>
<html>
    
<head>
    <title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?> | Seattle, WA</title>

    <!--BEGIN META -->
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" >

    <!-- STYLING -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">

    <link href="<?php bloginfo('template_directory'); ?>" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

    <script type="text/javascript">

    jQuery(document).ready(function($){



        /* prepend menu icon */

        $('#nav-wrap').prepend('<div id="menu-icon"></div>');



        /* toggle nav */

        $("#menu-icon").on("click", function(){

            $("#nav").slideToggle();

            $(this).toggleClass("active");

        });



    });

    </script>
</head>

<body <?php body_class();?>>

<!--BEGIN HEADER-->    
<header>
<div class="linkback"><a href="#">
<!--BEGIN LINKBACK DIV--> 
<div class="banner"><!--BEGIN BANNER DIV--> 

<h1>SUSHI MOTO</h1>
<h2>Japanese Cuisine &amp; Sushi</h2>
 

</div><!--END BANNER DIV--> 
    </a>
</div><!--END LINKBACK DIV--> 
    
<div class="mainMenu">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', 'items_wrap' => '<ul id-"navigation-items" class="%2$s">%3$s</ul>',) ); ?>
</div>    
    
</header><!--END HEADER-->