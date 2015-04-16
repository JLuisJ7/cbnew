<?php get_header(); ?>

    <div class="bread">
      <div class="row">
        <div class="small-12 columns">
          <h2 class="titpagina left"><?php single_cat_title(); ?></h2>
          <?php if (get_post_meta($post->ID, 'intro_message', true)) { ?> 
          <p class="titparrafo right">
          <?php echo get_post_meta($post->ID, 'intro_message', true); ?>
          </p>
          <?php } ?>
          
        </div>
      </div>
      
    </div>

  <div class="row">
    <div class="small-12 medium-4 large-4 columns panel hide-for-small">
      <?php get_sidebar(); ?>
    </div>
    <div class="small-12 medium-8 large-8 columns text-content">
      <!-- start category loop -->
		<?php while (have_posts()) : the_post(); ?>
		<?php global $more; $more = 0; ?>
		<div class="blog_cell">
			<div class="blog_description">
				<h6>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h6>
				<p class="post_details">Posted in: <?php the_category(', '); ?> by <?php the_author(); ?> on <?php the_date(); ?> | <a href="<?php comments_link(); ?>"><?php comments_number('Sin Comentarios', '1 Comentario', '% Comentarios'); ?></a></p>
				<?php the_content('Leer m&aacute;s...'); ?>
					
			</div><!-- porfolio description -->
		</div>
		
		<?php endwhile; ?>     
      		<!-- end of posts from category -->
      	<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    </div>      
  </div>

<?php get_footer(); ?>