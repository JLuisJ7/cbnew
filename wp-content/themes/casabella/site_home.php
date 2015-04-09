<?php

/* 

Template Name: Home Page

*/ 

?>
<?php get_header(); ?>
<div class="row">
	 <div class="small-11 small-centered columns">
		<div class="slider">
			<ul class="example-orbit" data-orbit>
				<li><img src="<?php echo get_option('slide1'); ?>" alt="rooms" /></li>
				<li><img src="<?php echo get_option('slide2'); ?>" alt="casa bella hotel" /></li>
				<li><img src="<?php echo get_option('slide3'); ?>" alt="rooms" /></li>
				<li><img src="<?php echo get_option('slide4'); ?>" alt="rooms" /></li>
				<li><img src="<?php echo get_option('slide5'); ?>" alt="rooms" /></li>
			</ul>
		</div>
	</div>
</div>
<div class="row">
	<div class="small-12 medium-6 large-4 columns">
		<div class="botones">
			<a href="<?php echo get_option('home'); ?>/airport-transfer-services/" title="<?php echo get_option('subbox1desc'); ?>"><i class="fa fa-plane"></i> Airport Transfer Services</a>
		</div>
	</div>
	<div class="small-12 medium-6 large-4 columns">

		<div class="botones">
			<a href="<?php echo get_option('home'); ?>/rates-availability/" title="<?php echo get_option('subbox2desc'); ?>"><i class="fa fa-credit-card"></i> Rates & Availabilities</a>
		</div>

	</div>
	<div class="small-12 medium-6 large-4 columns">

		<div class="botones">
			<a href="https://secure.guestcentric.net/api/bg/book.php?apikey=f574d237ca9871f55c306a1903e7c50a" title="<?php echo get_option('subbox3desc'); ?>"><i class="fa fa-laptop"></i> Make a Reservation</a>
		</div>

	</div>
</div>
<?php get_footer(); ?>