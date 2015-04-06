<?php get_header(); ?>				
                
                <div id="header_lower">	
					<div id="header_sub_secondary">
						<div id="header_sub_text_secondary">
							<p>The Archives</p>
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
					
			
			<!-- if you want to show categories on the project page -->
			
				<div class="categories">
					<h2>Categories</h2>
					<ul>
					<?php  if ( have_posts() ) { the_post(); rewind_posts(); } ?>
					
					<?php wp_list_categories('title_li=&child_of='.get_option('blogcat')); ?>
					
					</ul>
				</div>
				
				<div class="archives">
					
					<h2>Archives</h2>
					<ul>
					<?php wp_get_archives(); ?>
					
					</ul>
				</div>
			
			<!-- get the subnavs -->
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
					<h2>Sub Navigation</h2>
					<?php echo $children; ?>
				</ul>
			<?php } else { ?>
			<?php } ?>
			
				</div>
				
				<!-- get the search form -->
				<h2>SEARCH</h2>
				<form method="get" id="searchform" action="<?php 
					bloginfo('url'); ?>/"> 
					<p> 
					<input type="text" value="<?php echo wp_specialchars($s, 
					1); ?>" name="s" id="s" size="15" /> 
					<input type="submit" id="searchsubmit" value="Search" /> 
					</p> 
				</form>
			
			
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
			<!-- start archive loop -->
			
			<?php if (have_posts()) : ?>
			
			<?php $post = $posts[0]; ?>

				<?php if (is_category()) { ?><h2 class="arh"><?php echo single_cat_title(); ?>'</h2>
				<?php } elseif (is_day()) { ?><h2 class="arh"><?php the_time('F jS, Y'); ?></h2>
				<?php } elseif (is_month()) { ?><h2 class="arh"><?php the_time('F, Y'); ?></h2>
				<?php } elseif (is_year()) { ?><h2 class="arh"><?php the_time('Y'); ?></h2>
				<?php } elseif (is_author()) { ?><h2 class="arh">Archivos por Autor</h2>
				<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?><h2 class="arh">Archives</h2>
				<?php } elseif (is_tag()) { ?><h2 class="arh">Tag: <?php echo single_tag_title('', true); ?></h2>	

				<?php } ?>
	
				<?php while (have_posts()) : the_post(); ?>
				
				<?php if (in_category(get_option('portfoliocat') )) continue; ?>
				 
				 
				 

				
			<?php global $more; $more = 0; ?>
			<div class="blog_cell">
				<div class="blog_description">
					<h6><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h6>
					
					<p class="post_details">Posted in: <?php the_category(', '); ?> by <?php the_author(); ?> on <?php the_date(); ?></p>
					
					<?php the_content('Read more...'); ?>
					
				</div><!-- blog description -->
			</div>
		
			<?php endwhile; ?>
			     
      		<!-- end of posts from category -->
      	
      		<div id="posts_navigation"> 
  				<?php previous_posts_link(); ?> 
 				<?php next_posts_link(); ?> 
			</div> 	
			
			<?php endif; ?>		
                    
			</div><!-- end main content left  -->
	</div><!-- end main content  -->
	<div style="clear: both;">&nbsp;</div>
</div><!-- end page secondary  -->

<?php get_footer(); ?>