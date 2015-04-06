<?php get_header(); ?>				
                
                <div id="header_lower">	
					<div id="header_sub_secondary">
						<div id="header_sub_text_secondary">
							<p>Blog</p>
                    	</div>
						<div id="header_sub_button"></div>
						</div><!--end header sub-->
					<div id="header_sub_secondary_right">
					<?php if (get_post_meta($post->ID, 'intro_message', true)) { ?> 
 					<?php echo get_post_meta($post->ID, 'intro_message', true); ?>
 					<?php } ?>
                	</div><!--end header sub-->
				</div><!-- end header lower-->
			</div><!-- end header -->
		</div><!-- end header wrap -->			
          
	<div id="page_secondary"><!-- start page content -->
		<div id="main_content">
			<!-- get the sidebar -->
			<?php get_sidebar(); ?>
			
			<div id="main_content_left_secondary">
			<!-- start blog loop -->
			<?php query_posts('cat=-'.get_option('portfoliocat').',-'.get_option('featuredcat').'showposts=10'.'&paged='.$paged);
			   while (have_posts()) : the_post();  
			?>
			<?php global $more; $more = 0; ?>
			<div class="blog_cell">
				<div class="blog_description">
					<h6><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h6>
					
					<p class="post_details">En: <?php the_category(', '); ?> el <?php the_date(); ?></p>
					
					<?php the_content('Read more...'); ?>
					
					
				</div><!-- porfolio description -->
			</div>
		
			<?php endwhile; ?>     
      		<!-- end of posts from portfolio category -->
      	
      		<div id="posts_navigation"> 
  				<?php previous_posts_link(); ?> 
 				<?php next_posts_link(); ?> 
			</div> 			
                    
			</div><!-- end main content left  -->
	</div><!-- end main content  -->
	<div style="clear: both;">&nbsp;</div>
</div><!-- end page secondary  -->

<?php get_footer(); ?>