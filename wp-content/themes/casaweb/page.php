<?php get_header(); ?>
<div id="header_lower">	
<h2 class="titpagina"><?php the_title(); ?></h2>
<?php if (get_post_meta($post->ID, 'intro_message', true)) { ?> 
<p class="titparrafo">
<?php echo get_post_meta($post->ID, 'intro_message', true); ?>
</p>
<?php } ?>
</div><!-- end header lower-->
</div><!-- end header secondary -->
</div><!-- end header wrap secondary -->
<div id="page_secondary"><!-- start page content -->
<div id="main_content">
<?php if(is_page(1112)){ ?>
<?php include(TEMPLATEPATH.'/barra-apartments.php'); ?>
<?php }else{ ?>
<?php get_sidebar(); ?>
<?php }?>
<div id="main_content_left_secondary">
<!-- get the page content -->
<div class="breadcrumb"><?php if(function_exists('bcn_display')){bcn_display();}?></div>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
<?php the_content(); ?>
<?php endwhile; ?> 
<?php else: ?> 
<p>There are no posts to display. Try using the search.</p> 
<?php endif; ?>

<!-- start the comments  -->
<div id="comments_template"> 
<?php comments_template(); ?> 
</div> 			
</div><!-- end main content left  -->
</div><!-- end main content  -->
<div style="clear: both;">&nbsp;</div>
</div><!-- end page secondary  -->
</div>

<?php get_footer(); ?>