<div id="left">

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
<div class="textwidget">
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