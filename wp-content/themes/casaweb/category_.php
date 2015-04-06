<?php get_header(); ?>				
				                
                <div id="header_lower">	
					<div id="header_sub_secondary">
						<div id="header_sub_text_secondary">
							<p><?php single_cat_title(); ?></p>
                    	</div>
						<div id="header_sub_button"></div>
						</div>
					<div id="header_sub_secondary_right">
					<?php if (get_post_meta($post->ID, 'intro_message', true)) { ?> 
 					<?php echo get_post_meta($post->ID, 'intro_message', true); ?>
 					<?php } ?>
                	</div>
				</div>
			</div>
		</div>
          
	<div id="page_secondary">
		<div id="main_content">
			
			<?php get_sidebar(); ?>
			
			<div id="main_content_left_secondary">
			<div class="breadcrumb"><?php if(function_exists('bcn_display')){bcn_display();}?></div>
			<?php while (have_posts()) : the_post(); ?>
			<?php global $more; $more = 0; ?>
			<div class="blog_cell">
				<div class="blog_description">
					<h6><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h6>
					<?php the_content('Leer m&aacute;s...'); ?>
					
				</div>
			</div>
		
			<?php endwhile; ?>
      	
      		<div id="posts_navigation"> 
  				<?php previous_posts_link(); ?> 
 				<?php next_posts_link(); ?> 
			</div> 			
                    
			</div>
	</div>
	<div style="clear: both;">&nbsp;</div>
</div>

<?php get_footer(); ?>