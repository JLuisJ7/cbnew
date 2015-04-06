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

</head>

<body style="background:none;">

