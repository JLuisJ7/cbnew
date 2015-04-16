<?php get_header(); ?>

    <div class="bread">
      <div class="row">
        <div class="small-12 columns">
          <h2 class="titpagina left">The Archives</h2>
          
          <p class="titparrafo right">
          
          </p>
          
          
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
      	<h6>404</h6>
		<p>You're looking for a page that doesn't exist.  Try the search box to the left!</p>  
      <?php endif; ?>
      <!-- start the comments  -->
      <div id="comments_template"> 
      <?php comments_template(); ?> 
      </div>  
    </div>      
  </div>
<?php get_footer(); ?>