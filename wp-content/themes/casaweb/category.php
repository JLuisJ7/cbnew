<?php get_header(); ?>				
				                
                <div id="header_lower">	
					<div id="header_sub_secondary">
						<div id="header_sub_text_secondary">
							<h2><?php single_cat_title(); ?></h2>
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
            <div class="breadcrumb"><?php if(function_exists('bcn_display')){bcn_display();}?></div>
			<!-- start category loop -->
			<?php while (have_posts()) : the_post(); ?>
			<?php global $more; $more = 0; ?>
			<div class="blog_cell">
				<div class="blog_description">
					<h6><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h6>
					
					<p class="post_details">Posted in: <?php the_category(', '); ?> by <?php the_author(); ?> on <?php the_date(); ?> | <a href="<?php comments_link(); ?>"><?php comments_number('Sin Comentarios', '1 Comentario', '% Comentarios'); ?></a></p>
					
					<?php the_content('Leer m&aacute;s...'); ?>
					
				</div><!-- porfolio description -->
			</div>
		
			<?php endwhile; ?>     
      		<!-- end of posts from category -->
      	

  				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
		
                    
			</div><!-- end main content left  -->
	</div><!-- end main content  -->
	<div style="clear: both;">&nbsp;</div>
</div><!-- end page secondary  -->

<?php get_footer(); ?>