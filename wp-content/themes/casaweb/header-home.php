<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="google-site-verification" content="8ObL7vqGoR5ptIWXYH8SYritZ0_B3uhchUAIjHjGAJw" />
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/<?php echo get_option('themecolor'); ?>.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />



<!-- Fix the PNG's - Die IE6 -->



<!--[if lt IE 7]>



<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/unitpngfix.js"></script>



<![endif]--> 



<?php wp_head(); ?>



<script src="<?php bloginfo('template_directory'); ?>/js/imghover.js" type="text/javascript"></script>



<script src="<?php bloginfo('template_directory'); ?>/js/jquery.innerfade.js" type="text/javascript"></script>



<script src="<?php bloginfo('template_directory'); ?>/js/js.js" type="text/javascript"></script>



<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jclock.js"></script>



<script type="text/javascript">



    $(function($) {



      var options = {



        format: '%I:%M:%S %p', // 12-hour with am/pm



      }



      $('.jclock').jclock(options);
    });
</script>
<link rel="stylesheet" href="http://labs.abeautifulsite.net/jquery-dropdown/jquery.dropdown.css" type="text/css" media="screen" />
<script src="http://labs.abeautifulsite.net/jquery-dropdown/jquery.dropdown.js" type="text/javascript"></script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<div class="wrap">	
<div class="datos">
<p class="textosup">Boutique Hotels Lima Peru - Av. De La Aviación 565 Miraflores Lima - Per&uacute; Phone: (511) 421-7354 - (511) 421-1033 - In USA: (720) 648-3451 <span class="flags"><a href="<?php echo get_option('home'); ?>/es/"><img src="<?php bloginfo('template_directory'); ?>/images/icons/spanish.gif" width="16" height="11" alt="spanish" /></a> <a href="<?php echo get_option('home'); ?>/sanisidro"><img src="<?php bloginfo('template_directory'); ?>/images/icons/english.gif" width="16" height="11" alt="english" /></a> <a href="http://www.peru.o-kom.info/casabellaperu/" target="_self"><img src="<?php bloginfo('template_directory'); ?>/images/icons/german.gif" width="16" height="11" alt="german" /></a></span></p></div>



<div id="header_wrap">



<div id="header"><!-- begin header -->



<div id="header_upper">



<div id="navs">
<div id="navs_center">
<ul id="topnav"><?php wp_nav_menu(array( 'theme_location' => 'menu' )); ?></ul>
<div style="clear:both"></div>
</div>

<div style=" float:right;">
<div class="dropdownbtn">
<a href="#" class="boton" data-dropdown="#dropdown-1"><span class="label">Search Hotel</span><span class="toggle"></span></a>
</div>

<div id="dropdown-1" class="dropdown dropdown-tip">
<ul class="dropdown-menu">
<li><a href="http://www.casabellaperu.net/miraflores/">Casa Bella San Miraflores</a></li>
<li><a href="http://www.casabellaperu.net/grand-reserve/">Casa Bella Miraflores Grand Reserve</a></li>
</ul>
</div>

</div>

</div><!-- end navigations -->







<div id="header_logo">



<a href="<?php echo get_option('home'); ?>/sanisidro">
<img src="http://www.casabellaperu.net/images/logo.png" alt="lima peru hotels"/>
</a>



</div>



</div><!-- end header upper -->