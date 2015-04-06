<?php get_header(); ?>				
                
                <div id="header_lower">	
					<div id="header_sub_secondary">
						<div id="header_sub_text_secondary">
							<h2>Resultados para '<?php echo($s); ?>'</h2>
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
			<div id="left">
				<div id="left_navigation">
					
			<!-- get the subnavs -->
			
			
				</div>
				
				<!-- get the search form -->
			
			
				<div id="left_widgets">
				<!-- get the sidebar widgets -->
			
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>		
				<?php endif; ?>
			
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>		
				<?php endif; ?>
			
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(3) ) : else : ?>		
				<?php endif; ?>
			
				</div>
			</div>
			
			<div id="main_content_left_secondary">
			<!-- start blog loop -->
			
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			
			<div class="blog_cell">
				<div class="blog_description">
					<h6><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h6>
					
					<?php the_excerpt(); ?>
					
					<p class="post_details">Posted in: <?php the_category(', '); ?> by <?php the_author(); ?> on <?php the_date(); ?></p>
				</div><!-- porfolio description -->
			</div>
			
			<?php endwhile; ?>
			<?php else: ?>
			
			<h6>What have you done now?!</h6> 
			<p>Sorry, your search did not return any results.  Please try again!</p>
			<?php endif; ?>
			    
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