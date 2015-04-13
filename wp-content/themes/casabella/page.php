<?php get_header(); ?>

    <div class="bread">
      <div class="row">
        <div class="small-12 columns">
          <h2 class="titpagina left"><?php the_title(); ?></h2>
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
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
      <?php the_content(); ?>
      <?php endwhile; ?> 
      <?php else: ?> 
      <p>There are no posts to display. Try using the search.</p> 
      <?php endif; ?>
      <!-- start the comments  -->
      <div id="comments_template"> 
      <?php comments_template(); ?> 
      </div>  
    </div>      
  </div>
<?php get_footer(); ?>