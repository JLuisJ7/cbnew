<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="google-site-verification" content="8ObL7vqGoR5ptIWXYH8SYritZ0_B3uhchUAIjHjGAJw" />
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/normalize.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />

</head>
<body>
<div class="container-fluid bg-datos" >
    <div class="row">
        <div class="col-md-12 datos">
        	<p>
	           	Boutique Hotels Lima Perú - Av. De La Aviación 565 Miraflores Lima - Perú Teléfono: (511) 421-7354 - (511) 421 a 1.033 - En EE.UU.: (720) 648-3451
	       		<span class="flags">
	       			<a href="http://www.casabellaperu.net/casabella-es">
	        			<img src="http://www.casabellaperu.net/wp-content/themes/casaweb/images/icons/spanish.gif" width="16" height="11" alt="spanish" />
	        		</a>
	        		<a href="http://www.casabellaperu.net/">
	        			<img src="http://www.casabellaperu.net/wp-content/themes/casaweb/images/icons/english.gif" width="16" height="11" alt="english" />
	        		</a>
	        		<a href="http://www.peru.o-kom.info/casabellaperu/" target="_self">
	        			<img src="http://www.casabellaperu.net//wp-content/themes/casaweb/images/icons/german.gif" width="16" height="11" alt="german" />
	        		</a>
	        	</span>
    		</p>
        </div>
      </div>
</div>

<nav class="navbar navbar" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="height:130px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand"  href="<?php echo get_option('home'); ?>">
				<img src="http://www.casabellaperu.net/images/logo.png" alt="lima peru hotels"/>
			</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            	<?php wp_nav_menu(array('theme_location' => 'menu','menu_id' => 'menu', 'menu_class' => 'eleven columns','container' => '','items_wrap'      => '<ul class="nav navbar-nav">%3$s</ul>',)); ?>
            	

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
    	<div class="row">
	    	<div class="col-md-12 center">
	    		<div class="btn-group">
					<button class="btn btn-default" style="width:200px;">Search Hotel
					</button>
					<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<span class="glyphicon glyphicon-chevron-down"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="http://www.casabellaperu.net/miraflores/">Casa Bella San Miraflores</a>
						</li>
						<li>
							<a href="http://www.casabellaperu.net/grand-reserve/">Casa Bella Miraflores Grand Reserve</a>
						</li>
					</ul>
				</div>
	    	</div>
	    </div>
    </div>	
    

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>