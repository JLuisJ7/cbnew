<?php get_header(); ?>				
                
                <div id="header_lower">	
					<div id="header_sub_secondary">
						<div id="header_sub_text_secondary">
							<p>Dead End, Sorry.</p>
                    	</div>
						</div><!--end header sub-->
					<div id="header_sub_secondary_right">
					
                	</div><!--end header sub-->
				</div><!-- end header lower-->
			</div><!-- end header secondary -->
		</div><!-- end header wrap secondary -->			
          
	<div id="page_secondary"><!-- start page content -->
		<div id="main_content">
			
			<?php get_sidebar(); ?>
			
			<div id="main_content_left_secondary">
  				<!-- get the page content -->
  				<?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
				<?php the_content(); ?> 
				<?php endwhile; ?> 
				<?php else: ?> 
				<h6>404</h6>
				<p>You're looking for a page that doesn't exist.  Try the search box to the left!</p> 
				<?php endif; ?>
			
				<!-- start the comments  -->
				<div id="comments_template"> 
 					<?php comments_template(); ?> 
				</div> 			
            </div><!-- end main content left  -->
		</div><!-- end main content  -->
	<div style="clear: both;">&nbsp;</div>
</div><!-- end page secondary  -->


<?php get_footer(); ?>

