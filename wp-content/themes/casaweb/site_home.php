<?php

/* 

Template Name: Home Page

*/ 

?>

<?php include("header-home.php"); ?>

<div style="clear:both"></div>



<div class="slider">

<ul id="image_rotate" style="list-style: none; padding:0; margin:0;">

<li><img src="<?php echo get_option('slide1'); ?>" alt="rooms" /></li>

<li><img src="<?php echo get_option('slide2'); ?>" alt="casa bella hotel" /></li>

<li><img src="<?php echo get_option('slide3'); ?>" alt="rooms" /></li>

<li><img src="<?php echo get_option('slide4'); ?>" alt="rooms" /></li>

<li><img src="<?php echo get_option('slide5'); ?>" alt="rooms" /></li>

</ul>

</div>

<div style="clear:both"></div>

<ul id="buttomNav">

<li class="articles"><a href="<?php echo get_option('home'); ?>/airport-transfer-services/" title="<?php echo get_option('subbox1desc'); ?>">Airport Transfer Services</a></li>

<li class="forums"><a href="<?php echo get_option('home'); ?>/rates-availability/" title="<?php echo get_option('subbox2desc'); ?>">Rates & Availabilities</a></li>

<li class="videos"><a href="https://secure.guestcentric.net/api/bg/book.php?apikey=f574d237ca9871f55c306a1903e7c50a" title="<?php echo get_option('subbox3desc'); ?>">Make a Reservation</a></li>

</ul>



</div>

</div>

<div id="page">

<div id="main_content">

<div id="main_content_left">

<div class="column1">

<?php query_posts('showposts=1&page_id='.get_option('aboutid')); 
while (have_posts()) : the_post(); ?>

<h5 class="tit_home"><a href="<?php echo get_option('home'); ?>/about-us/"><?php the_title(); ?></a></h5>

<?php
$more = 0;

the_content("Read More &rarr;");

endwhile; 

?>

<p><a href="<?php echo get_option('home'); ?>/about-us/">Read More &rarr;</a></p>



<div style="text-align:left; font-size:14px; color:#000; margin-bottom:20px;">

<p>Local Time: <span class="jclock"></span></p>

</div>



<a href="http://livechat.boldchat.com/aid/238468884419305815/bc.chat?cwdid=2772812126678393419"><img width="307" height="115" border="0" src="<?php bloginfo('template_directory'); ?>/images/buttoms/livechat.jpg" alt="Live chat"></a>



</div>



<div class="column2">
<?php query_posts('showposts=1&page_id=397');
while (have_posts()) : the_post();?>

<h5 class="tit_home"><a href="<?php echo get_option('home'); ?>/category/room/"><?php the_title(); ?></a></h5>

<?php

$more = 0;

the_content("Read More &rarr;");

endwhile; 

?>
<p><a href="<?php echo get_option('home'); ?>/?cat=10">View all rooms &rarr;</a></p>


<?php query_posts('showposts=1&page_id=954');
while (have_posts()) : the_post(); ?>

<h5 class="tit_home"><a href="<?php echo get_option('home'); ?>/tours/"><?php the_title(); ?></a></h5>

<?php

$more = 0;

the_content("Read More &rarr;");

endwhile; 

?>

<?php /*?><h5 class="tit_home"><a href="<?php echo get_option('home'); ?>/tours/">Lima City Tours</a></h5>



<p>A three-hour sightseeing tour of the colonial and modern Lima.</p>



<p><img src="<?php bloginfo('template_directory'); ?>/images/catedral-lima.jpg" width="297" height="118" alt="catedral lima" /></p>



<p>We will drive you through historical monuments and locations such as the Government Palace, the City Hall and the Cathedral of Lima at the Plaza Mayor.</p><?php */?>



<h5 class="tit_home"><a href="<?php echo get_option('home'); ?>/category/blog/">News &amp; Blog</a></h5>

<ul>

<?php query_posts('cat=-'.get_option('portfoliocat').',-'.get_option('featuredcat').'&showposts=5');

while (have_posts()) : the_post();

?>

<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>

<?php endwhile; ?>

</ul>

</div>

</div>



<div id="main_content_right">



<div id="blog_home">
<?php query_posts('showposts=1&page_id=956');
while (have_posts()) : the_post(); ?>

<h5 class="tit_home"><a href="<?php echo get_option('home'); ?>/deluxe-condo-suite-apartment/"><?php the_title(); ?></a></h5>

<?php

$more = 0;

the_content("Read More &rarr;");

endwhile; 

?>

<?php query_posts('showposts=1&page_id=462');
while (have_posts()) : the_post(); ?>

<h5 class="titpro"><a href="http://www.tripadvisor.com/Hotel_Review-g294316-d628608-Reviews-Casa_Bella_B_B_Boutique_Hotel-Lima.html" target="_blank"><?php the_title(); ?></a></h5>

<?php

$more = 0;

the_content("Read More &rarr;");

endwhile; 

?>


<h5 class="tit_home"><a href="http://www.casabellaperu.net/gallery/">Photo Tour</a></h5>

<?php query_posts('showposts=1&page_id=960');
while (have_posts()) : the_post();

$more = 0;

the_content("Read More &rarr;");

endwhile; 

?>


<?php /*?><h5 class="tit_home">Corporate Rates</h5>

<?php query_posts('showposts=1&page_id=962');

while (have_posts()) : the_post();

$more = 0;

the_content("Read More &rarr;");

endwhile; 

?><?php */?>


<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FCasa-Bella-Boutique-Hotel%2F117910828286223&amp;width=292&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=true&amp;height=360" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:360px;" allowTransparency="true"></iframe>

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