<?php 
/* 
Template Name: Proyects 
*/ 
?>
<?php get_header(); ?>
<div id="header_lower">	
<h2 class="titpagina"><?php single_cat_title(); ?></h2>
<p class="titparrafo"><?php echo get_option('projectsub'); ?></p>
</div><!-- end header lower-->
</div><!-- end header -->
</div><!-- end header wrap -->
<div id="page_secondary"><!-- start page content -->
<div id="main_content">
<!-- get the sidebar -->
<?php get_sidebar(); ?>

<div id="main_content_left_secondary">
<div class="breadcrumb"><?php if(function_exists('bcn_display')){bcn_display();}?></div>
<!-- grab featured loop -->
<?php include("includes/featured.php"); ?>
<div style="clear: both;">&nbsp;</div>
<!-- start loop -->
<?php query_posts('showposts=8&cat=-'.get_option('featuredcat').','.get_option('portfoliocat').'&paged='.$paged.'&orderby=date&order=asc');
while (have_posts()) : the_post();
?>
<div class="portfolio_cell">
<div class="portfolio_image">
<!-- timthumb script -->
<?php if ( get_post_meta($post->ID, 'thumb', true) ) { ?>

<div class="postthumb">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img class="image_portfolio_small" src="<?php echo get_post_meta($post->ID, "thumb", $single = true); ?>" alt="<?php the_title(); ?>" width="225" height="150" border="0"/></a>
</div>

<?php } ?>

</div>

<div class="portfolio_description">
<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
<?php the_excerpt('Read More &rarr;'); ?>
<a href="<?php the_permalink(); ?>">Read More &rarr;</a>
</div><!-- porfolio description -->
</div>

<?php endwhile; ?>     
<!-- end of posts from portfolio category -->


<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>


</div><!-- end main content left  -->
</div><!-- end main content  -->
<div style="clear: both;">&nbsp;</div>
</div><!-- end page secondary  -->


<?php get_footer(); ?>