<?php get_header(); ?>

    <div class="bread">
      <div class="row">
        <div class="small-12 columns">
          <h2 class="titpagina left">
            <?php
              $category = get_the_category(); 
              echo $category[0]->cat_name;
            ?>
          </h2>
          <?php if (get_post_meta($post->ID, 'intro_message', true)) { ?> 
            <p class="titparrafo">
            <?php echo get_post_meta($post->ID, 'intro_message', true); ?>
            </p>
          <?php } ?>
          
        </div>
      </div>
      
    </div>

  <div class="row">
    <div class="small-12 medium-4 large-3 columns panel hide-for-small">
      <?php get_sidebar(); ?>
    </div>
    <div class="small-12 medium-8 large-9 columns text-content font-12">
      <div class="breadcrumb"><?php if(function_exists('bcn_display')){bcn_display();}?></div>
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
		<h6><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h6>
		<?php the_content(); ?> 
		<?php endwhile; ?> 
		<p class="post_details">En: <?php the_category(', '); ?> el <?php the_date(); ?></p>
		<?php else: ?> 
		<p>No hay art&iacute;culos a mostrar. Utilice el buscador.</p> 
		<?php endif; ?>

		<div id="comments_template"> 
		<?php comments_template(); ?> 
		</div>
    </div>      
  </div>
<?php get_footer(); ?>