<?php

/* 

Template Name: Home Page

*/ 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="google-site-verification" content="8ObL7vqGoR5ptIWXYH8SYritZ0_B3uhchUAIjHjGAJw" />
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/normalize.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.css" />
<script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr.js"></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slider.css" type="text/css">
  
<?php wp_head(); ?>
</head>
<body>

<div class="container bg-datos">
    <div class="row bg-datos">
  <div class="small-12 columns datos">
    <p style="display:inline-block!important;">
        <span class="hide-for-small" >Boutique Hotels Lima Perú - Av. De La Aviación 565 Miraflores Lima - Perú Teléfono: (511) 421-7354 - (511) 421 a 1.033 - En EE.UU.: (720) 648-3451</span>
       <span class="flags"><a href="http://www.casabellaperu.net/casabella-es">
        <img src="http://www.casabellaperu.net/wp-content/themes/casaweb/images/icons/spanish.gif" width="16" height="11" alt="spanish" /></a> <a href="http://www.casabellaperu.net/"><img src="http://www.casabellaperu.net/wp-content/themes/casaweb/images/icons/english.gif" width="16" height="11" alt="english" /></a> <a href="http://www.peru.o-kom.info/casabellaperu/" target="_self"><img src="http://www.casabellaperu.net//wp-content/themes/casaweb/images/icons/german.gif" width="16" height="11" alt="german" /></a></span>
     </p>
  </div>
 
</div>
</div>
  <div class="row ">
    <div class="small-12 columns">
      <h1>
        <a class="navbar-brand"  href="<?php echo get_option('home'); ?>">
          <img src="http://www.casabellaperu.net/images/logo.png" alt="lima peru hotels"/>
        </a>
      </h1>
    </div>
  </div>
  

  <div class="contain-to-grid">
<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <a href="#"></a>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <?php wp_nav_menu(array('theme_location' => 'menu','menu_id' => 'menu', 'menu_class' => 'eleven columns','container' => '','items_wrap'      => '<ul class="left">%3$s</ul>',)); ?>
    <ul class="right">      
      <li class="has-dropdown">
        <a href="#">Search Hotel</a>
        <ul class="dropdown">
          <li>
              <a href="http://www.casabellaperu.net/miraflores/">Casa Bella San Miraflores</a>
            </li>
            <li>
              <a href="http://www.casabellaperu.net/grand-reserve/">Casa Bella Miraflores Grand Reserve</a>
            </li>         
        </ul>
      </li>
    </ul>
  </section>
</nav>
</div>

	
<div class="row">
	<div class="small-12 columns">
		<div class="flex-container">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<img src="<?php echo get_option('slide1'); ?>" alt="rooms" />
					</li>
					
					<li>
						<img src="<?php echo get_option('slide2'); ?>" alt="casa bella hotel" />
					</li>
					
					<li>
						<img src="<?php echo get_option('slide3'); ?>" alt="rooms" /></li>						
					</li>
					<li>
						<img src="<?php echo get_option('slide4'); ?>" alt="rooms" />
					</li>
					<li>
						<img src="<?php echo get_option('slide5'); ?>" alt="rooms" />
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="row margin-t margin-b">
	<div class="small-12 medium-6 large-4 columns margin-b">
		<div class="botones">
			<a href="<?php echo get_option('home'); ?>/airport-transfer-services/" title="<?php echo get_option('subbox1desc'); ?>">
				<img src="<?php bloginfo('template_directory'); ?>/images/buttons/Airport-Transfer-service.png" alt="" class="btn_image">
			</a>
		</div>
	</div>
	<div class="small-12 medium-6 large-4 columns margin-b">

		<div class="botones">
			<a href="<?php echo get_option('home'); ?>/rates-availability/" title="<?php echo get_option('subbox2desc'); ?>">
				<img src="<?php bloginfo('template_directory'); ?>/images/buttons/Rates-&-Availability.png" alt="" class="btn_image">
			</a>
		</div>

	</div>
	<div class="small-12 medium-12  large-4 columns margin-b">

		<div class="botones">
			<a href="https://secure.guestcentric.net/api/bg/book.php?apikey=f574d237ca9871f55c306a1903e7c50a" title="<?php echo get_option('subbox3desc'); ?>">
				<img src="<?php bloginfo('template_directory'); ?>/images/buttons/Make-a-Reservation.png" alt="" class="btn_image"> 
			</a>
		</div>

	</div>
</div>
<div class="row site_home_content">
	<div class="small-12  medium-12 large-4 columns">
		<?php 
			query_posts('showposts=1&page_id='.get_option('aboutid')); 
			while (have_posts()) : the_post(); 
		?>
		<h5 class="tit_home">
			<a href="<?php echo get_option('home'); ?>/about-us/"><?php the_title(); ?></a>
		</h5>
		<?php $more = 0; the_content("Read More &rarr;");
		endwhile;
		?>
		<p>
			<a href="<?php echo get_option('home'); ?>/about-us/">Read More &rarr;</a>
		</p>
		<div style="text-align:left; font-size:14px; color:#000; margin-bottom:20px;">
			<p>Local Time: <span class="jclock"></span></p>
		</div>
		<a href="http://livechat.boldchat.com/aid/238468884419305815/bc.chat?cwdid=2772812126678393419"><img width="307" height="115" border="0" src="<?php bloginfo('template_directory'); ?>/images/buttoms/livechat.jpg" alt="Live chat"></a>
	</div>
	<div class="small-12  medium-6 large-4 columns">
		<?php 
			query_posts('showposts=1&page_id=397');
			while (have_posts()) : the_post();
		?>
		<h5 class="tit_home"><a href="<?php echo get_option('home'); ?>/category/room/"><?php the_title(); ?></a></h5>
		<?php $more = 0; the_content("Read More &rarr;");
		endwhile;
		?>
		<p><a href="<?php echo get_option('home'); ?>/?cat=10">View all rooms &rarr;</a></p>
		<?php query_posts('showposts=1&page_id=954');
		while (have_posts()) : the_post(); ?>
		<h5 class="tit_home"><a href="<?php echo get_option('home'); ?>/tours/"><?php the_title(); ?></a></h5>
		<?php $more = 0; the_content("Read More &rarr;");
		endwhile;
		?>

		<?php /*?><h5 class="tit_home"><a href="<?php echo get_option('home'); ?>/tours/">Lima City Tours</a></h5>
		<p>A three-hour sightseeing tour of the colonial and modern Lima.</p>
		<p><img src="<?php bloginfo('template_directory'); ?>/images/catedral-lima.jpg" width="297" height="118" alt="catedral lima" /></p>
		<p>We will drive you through historical monuments and locations such as the Government Palace, the City Hall and the Cathedral of Lima at the Plaza Mayor.</p><?php */?>
		<h5 class="tit_home">
			<a href="<?php echo get_option('home'); ?>/category/blog/">News &amp; Blog</a>
		</h5>
		<ul class="recent_post">
			<?php query_posts('cat=-'.get_option('portfoliocat').',-'.get_option('featuredcat').'&showposts=5');
			while (have_posts()) : the_post();?>
			<li>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</li>
			<?php endwhile; ?>
		</ul>
	</div>
	<div class="small-12  medium-6 large-4 columns">
		<div id="blog_home">
			<?php query_posts('showposts=1&page_id=956');
			while (have_posts()) : the_post(); ?>
			<h5 class="tit_home"><a href="<?php echo get_option('home'); ?>/deluxe-condo-suite-apartment/"><?php the_title(); ?></a></h5>
			<?php $more = 0; the_content("Read More &rarr;");
			endwhile;
			?>
			<?php query_posts('showposts=1&page_id=462');
			while (have_posts()) : the_post(); ?>
			<h5 class="titpro">
				<a href="http://www.tripadvisor.com/Hotel_Review-g294316-d628608-Reviews-Casa_Bella_B_B_Boutique_Hotel-Lima.html" target="_blank"><?php the_title(); ?></a>
			</h5>
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
			<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FCasa-Bella-Boutique-Hotel%2F117910828286223&amp;width=292&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=true&amp;height=360" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:345px;" allowTransparency="true"></iframe>
			<div id="twitter">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(3) ) : else : ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>


   <div class="border-top">
     <div class="row hide-for-small" style=" padding: 2em; margin-top: 1.5em;">
            
              <div class="small-12 small-centered columns">
                
                <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-5">
       <li><a href="http://twitter.com/casabellaperu" title="hotel casa bella in twitter">
                  <img src="http://www.casabellaperu.net/wp-content/themes/casaweb/images/social/twitter.png"  alt="casa bella twitter" class="mb">
                </a><!-- Your content goes here --></li>
       <li><a href="http://www.facebook.com/casabellaperu" title="hotel casa bella in facebook">
                  <img src="http://www.casabellaperu.net/wp-content/themes/casaweb/images/social/facebook.png" alt="casa bella facebook" class="mb">
                </a><!-- Your content goes here --></li>
       <li><a href="http://www.tripadvisor.com/Hotel_Review-g294316-d628608-Reviews-Casa_Bella_B_B-Lima.html" title="hotel casa bella in tripadvisor">
                  <img src="http://www.casabellaperu.net/wp-content/themes/casaweb/images/social/tripadvisor.png" alt="casa bella tripadvisor" class="mb">
                </a><!-- Your content goes here --></li>
       
     <li><a href="http://www.peru.info/es/iperu-oficinas-de-informacion-y-asistencia-al-turista-ip4-1-home" title="Tourist information and assistance">
                  <img src="<?php bloginfo( 'template_directory' ); ?>/images/social/iperu.jpg" alt="Tourist information and assistance" style="margin-right:0" class="mb">
                </a></li>
                <li><a href="#">
                  <img width="84" height="38" border="0" alt="El Tiempo Lima-Callao / Aerop. Internacional Jorgechavez" src="http://www.tutiempo.net/imagenes_asociados/84x38/SPIM.png" style="" class="mb">
                </a></li>
     </ul>
            
     
              </div>  
             <div class="small-6 medium-6 large-2 small-centered columns center">
        <img width="110" height="65" border="0" alt="marca peru" src="http://www.casabellaperu.net/images/marca-peru.jpg">
      </div>        
        </div>
   </div>

     
<footer class="footer">
        <div class="container">
          <div class="row center">
            <div class="small-12 columns">
                <?php wp_nav_menu(array('theme_location' => 'menu-footer','menu_id' => 'menu', 'menu_class' => 'eleven columns','container' => '','items_wrap'      => '<ul id="menu-footer-navigation" class="menu-footer">%3$s</ul>',)); ?>
            </div>
            <div class="small-12 columns">             
              <p class="gris font-12 mb_0">Phone: (511) 421-7354 - (511) 421-1033 In USA: (720) 648-3451</p>
            </div>
            <div class="small-12 columns">
              <p class="gris font-12 mb_0">&copy; <?php bloginfo('name'); ?> | Todos los Derechos Reservados.</p>
            </div>
          </div>
          
          
            
          </div> 
      
     
      </footer>



    

  <!-- Latest compiled and minified JavaScript -->

  
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jclock.js"></script>


    <script>
      $(document).foundation();
    </script>
   

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider-min.js"></script>
    <script>
    $(document).ready(function () {
      $('.flexslider').flexslider({
        animation: 'fade',
        controlsContainer: '.flexslider'
      });
    });
    </script>


</body>
</html>

