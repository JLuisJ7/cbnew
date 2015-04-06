<?php
/* 
Template Name: Home Page
*/ 
?>
<?php include("header-home.php"); ?>
<div style="clear:both"></div>

<div class="slider">
<ul id="image_rotate" style="list-style: none; padding:0; margin:0;">
<li><img src="http://www.3bcorp.com/works/casabella/wp-content/themes/casaweb/images/slides/rooms.jpg" width="960" height="348" alt="casa bella hotel" /></li>
<li><img src="http://www.3bcorp.com/works/casabella/wp-content/themes/casaweb/images/slides/rooms-slide1.jpg" width="960" height="348" alt="rooms" /></li>
<li><img src="http://www.3bcorp.com/works/casabella/wp-content/themes/casaweb/images/slides/rooms-slide2.jpg" width="960" height="348" alt="rooms" /></li>
<li><img src="http://www.3bcorp.com/works/casabella/wp-content/themes/casaweb/images/slides/rooms-slide3.jpg" width="960" height="348" alt="rooms" /></li>
<li><img src="http://www.3bcorp.com/works/casabella/wp-content/themes/casaweb/images/slides/rooms-slide4.jpg" width="960" height="348" alt="rooms" /></li>
<li><img src="http://www.3bcorp.com/works/casabella/wp-content/themes/casaweb/images/slides/rooms-slide5.jpg" width="960" height="348" alt="rooms" /></li>
</ul>
</div>

</div>
</div>
<div id="page">
<div id="sub_boxes">

<div class="sub_box">
<div class="sub_box_text">
<img src="<?php bloginfo('template_directory'); ?><?php echo get_option('subbox1icon'); ?>" alt="subbox1" width="40" height="40" style="vertical-align:middle" class="sub_box_image" />
<h2><a href="<?php echo get_option('subbox1desc'); ?>"><?php echo get_option('subbox1title'); ?></a></h2>
</div>
</div>

<div class="sub_box">
<div class="sub_box_text">
<img src="<?php bloginfo('template_directory'); ?><?php echo get_option('subbox2icon'); ?>" alt="subbox2" width="40" height="40" style="vertical-align:middle" class="sub_box_image" />
<h2><a href="<?php echo get_option('subbox2desc'); ?>"><?php echo get_option('subbox2title'); ?></a></h2>
</div>
</div>

<div class="sub_box">
<div class="sub_box_text">
<img src="<?php bloginfo('template_directory'); ?><?php echo get_option('subbox3icon'); ?>" alt="subbox3" width="40" height="40" style="vertical-align:middle" class="sub_box_image" />
<h2><a href="<?php echo get_option('subbox3desc'); ?>"><?php echo get_option('subbox3title'); ?></a></h2>
</div>
</div>

</div>

<div id="main_content">
<div id="main_content_left">

<div class="column1">
<h5 class="tit_home">Casa Bella B&B</h5>

<?php query_posts('showposts=1&page_id='.get_option('aboutid'));    
while (have_posts()) : the_post();
$more = 0;
the_content("Read More &rarr;");
endwhile; 
?>

<h5 class="tit_home">News &amp; Blog</h5>
<ul>
<?php query_posts('cat=-'.get_option('portfoliocat').',-'.get_option('featuredcat').'&showposts=5');
while (have_posts()) : the_post();  
?>
<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; ?>
</ul>
</div>

<div class="column2">
<h5 class="tit_home">Rooms</h5>
<?php query_posts('showposts=1&page_id=397');
while (have_posts()) : the_post();
$more = 0;
the_content("Read More &rarr;");
endwhile; 
?>

<p><a href="<?php echo get_option('home'); ?>/?cat=10">View all rooms &rarr;</a></p>
</div>
</div>

<div id="main_content_right">

<div id="blog_home">
<h5 class="tit_home">Contact US</h5>
<p><strong>Phone</strong>: (511) 421-7354 - (511) 421-1033 - In USA: (720) 648-3451
  </p>
<p><strong>Email</strong>: <a href="mailto:info@casabellaperu.net">info@casabellaperu.net</a></p>
<p><strong>Address</strong>: Las Flores 459 San Isidro Lima - Per&uacute;</p>

<img src="http://www.3bcorp.com/works/casabella/wp-content/themes/casaweb/images/casa-bella-hotel.jpg" />

<h5 class="tit_home">Promotional Package</h5>
<?php query_posts('showposts=1&page_id=462');
while (have_posts()) : the_post();
$more = 0;
the_content("Read More &rarr;");
endwhile; 
?>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("sidebar-noticias") ) : 
endif; ?>
  

<div id="twitter">
  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(3) ) : else : ?>		
  <?php endif; ?>
</div>

</div>
</div>

</div>
</div>
</div>
<?php get_footer(); ?>