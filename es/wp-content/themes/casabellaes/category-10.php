<?php 
/* 
Template Name: Proyects 
*/ 
?>
<?php get_header(); ?>
	<div class="bread">
      <div class="row">
        <div class="small-12 columns">
          <h2 class="titpagina left"><?php single_cat_title(); ?></h2>
          <p class="titparrafo right"><?php echo get_option('projectsub'); ?></p>        
          
        </div>
      </div>    
    </div>
     <div class="row">
	    <div class="small-12 medium-4 large-4 columns panel hide-for-small">
	      <?php get_sidebar(); ?>
	    </div>
	    <div class="small-12 medium-8 large-8 columns text-content">
        
	    	<?php include("featured.php"); ?>
	    	<div style="clear: both;">&nbsp;</div>
<!-- start loop -->
<?php query_posts('showposts=8&cat=-'.get_option('featuredcat').','.get_option('portfoliocat').'&paged='.$paged.'&orderby=date&order=asc');
while (have_posts()) : the_post();
?>
<div class="row portfolio_cell">
  <div class="small-12 large-7 columns">
    <div class="portfolio_description">
      <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
      <?php the_excerpt('Read More &rarr;'); ?>
      <a href="<?php the_permalink(); ?>">Read More &rarr;</a>
    </div><!-- porfolio description -->
  </div>
  <div class="small-12 large-5 columns">
    <div class="portfolio_image">
      <!-- timthumb script -->
      <?php if ( get_post_meta($post->ID, 'thumb', true) ) { ?>
      <div class="postthumb">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img class="image_portfolio_small" src="<?php echo get_post_meta($post->ID, "thumb", $single = true); ?>" alt="<?php the_title(); ?>" width="225" height="150" border="0"/></a>
      </div>
      <?php } ?>
    </div>
  </div>
</div>



<?php endwhile; ?>     
<!-- end of posts from portfolio category -->


<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
	    </div>      
	 </div>


<?php get_footer(); ?>