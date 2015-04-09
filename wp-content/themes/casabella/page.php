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


    <div class="bread">
      <div class="row">
        <div class="small-12 columns">
          <h2 class="titpagina left"><?php the_title(); ?></h2>
          <?php if (get_post_meta($post->ID, 'intro_message', true)) { ?> 
          <p class="titparrafo right">
          <?php echo get_post_meta($post->ID, 'intro_message', true); ?>
          </p>
          <?php } ?>
          
        </div>
      </div>
      
    </div>

  <div class="row">
    <div class="small-12 medium-4 large-4 columns panel hide-for-small">
      <div id="left" class="">

  <div class="gcBookingGadget vertical"></div>

  <script type="text/javascript" src="https://secure.guestcentric.net/api/bg/?apikey=f574d237ca9871f55c306a1903e7c50a"> </script>



<div id="left_navigation">

<?php 

    if ($post->post_parent != 0) { 

        $parent = $post->post_parent; 

    } else { 

        $parent = $post->ID; 

    } 

    $parent_title = get_the_title($parent); 

    $parent_link = get_permalink($parent); 

?>

 

<?php if($post->post_parent)

  

  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0"); else

  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");

  if ($children) { ?>

  <ul id="subnav">

    <?php echo $children; ?>

  </ul>

<?php } else { ?>

<?php } ?>

</div>



<?php if(in_category(get_option('blogcat')) || is_category(get_option('blogcat'))) { ?>

<div class="categories">

    <ul>

    <?php  if ( have_posts() ) { the_post(); rewind_posts(); } ?>

    <?php if(in_category(get_option('portfoliocat')) || is_category(get_option('portfoliocat'))) { ?>

    <?php wp_list_categories('title_li=&child_of='.get_option('portfoliocat')); ?>

    <?php } else { ?>

    <?php wp_list_categories('title_li=&child_of='.get_option('blogcat')); ?>

    <?php } ?>

    </ul>

  </div>

  <div class="archives">

    <?php if(in_category(get_option('blogcat')) || is_category(get_option('blogcat'))) { ?>

    <h2 class="widgettitle">Archives</h2>

    <ul>

    <?php wp_get_archives(); ?>

    </ul>

    <?php } else { ?>

    

    <?php } ?>

  </div>

<?php } ?>



<div id="left_widgets">

<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>    

<div class="homenoticias">
<h2 class="widgettitle">Contact Us</h2>
<div class="textwidget font-10">
<span class="contact_widget_name">Casa Bella B&B Boutique Hotel</span><br /><span class="contact_widget_address">Las Flores 459 San Isidro </span><br /><span class="contact_widget_city">Lima – Peru</span>&nbsp;<br />

<span class="contact_widget_phone">Phone in Peru: (511) 421-7354 - (511) 421-1033</span><br />

<span class="contact_widget_phone">Phone In USA: (720) 648-3451</span><br />

<span class="contact_widget_email"><a href="mailto:casabellaperu@msn.com">casabellaperu@msn.com</a></span><br /><img src="http://www.casabellaperu.net/wp-content/themes/casaweb/images/casabella-sidebar.jpg" width="220" height="146" alt="casa bella" /></div>
</div>
  <?php endif; ?>



  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>    

  <?php endif; ?>



  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(3) ) : else : ?>    

  <?php endif; ?>

</div>

</div>
    </div>
    <div class="small-12 medium-8 large-8 columns text-content">
      
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
<?php the_content(); ?>
<?php endwhile; ?> 
<?php else: ?> 
<p>There are no posts to display. Try using the search.</p> 
<?php endif; ?>
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
              <p class="gris font-12">Phone: (511) 421-7354 - (511) 421-1033 In USA: (720) 648-3451</p>
            </div>
            <div class="small-12 columns">
              <p class="gris font-12">&copy; <?php bloginfo('name'); ?> | Todos los Derechos Reservados.</p>
            </div>
          </div>
          
          
            
          </div> 
      
     
      </footer>



    

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>

    <script>
      $(document).foundation();
    </script>
    <script>
 
</script>
</body>
</html>