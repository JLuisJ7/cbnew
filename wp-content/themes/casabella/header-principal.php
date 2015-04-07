<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
 
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/normalize.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.css" />
<script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr.js"></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
<?php wp_head(); ?>
</head>
<body>