<!-- if there is a featured post, get it -->
<?php query_posts('showposts=1&cat='.get_option('featuredcat')); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		
<div class="portfolio_featured_cell">
	<div class="portfolio_featured_image">
		
		<!-- timthumb script -->
		<?php if ( get_post_meta($post->ID, 'thumb', true) ) { ?>
			
			<div class="postthumb"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img class="image_portfolio_small" src="<?php echo get_post_meta($post->ID, "thumb", $single = true); ?>" alt="<?php the_title(); ?>" width="225" height="150" border="0"/></a></div>
			
		<?php } ?>
		
		
	</div><!-- end porfolio image -->
                    
	<div class="portfolio_featured_description">
		<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		<?php the_excerpt('Read More'); ?>
		<a href="<?php the_permalink(); ?>">Read More &rarr;</a>
	</div><!-- end porfolio description -->
      				
	<div class="portfolio_featured_bottom"><img src="<?php bloginfo('template_directory'); ?>/images/featured_project_bottom.jpg" alt="<?php the_title(); ?>" style="vertical-align:middle"/>
	</div>

</div><!-- end featured post -->
		

<?php endwhile; ?>
<!-- if there is no featured post, fuugetabouutiiiit -->
<?php else: ?>
<?php endif; ?>