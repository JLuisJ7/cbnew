<?php get_header(); ?>

    <div class="bread">
      <div class="row">
        <div class="small-12 columns">
          <h2 class="titpagina left">Resultados para '<?php echo($s); ?>'</h2>
          
          <p class="titparrafo right">
            <?php if (get_post_meta($post->ID, 'intro_message', true)) { ?> 
          <?php echo get_post_meta($post->ID, 'intro_message', true); ?>
          <?php } ?>
          </p>
          
          
        </div>
      </div>
      
    </div>

  <div class="row">
    <div class="small-12 medium-4 large-4 columns panel hide-for-small">
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
    </div>
    <div class="small-12 medium-8 large-8 columns text-content">
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
    </div>      
  </div>
<?php get_footer(); ?>