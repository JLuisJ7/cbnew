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