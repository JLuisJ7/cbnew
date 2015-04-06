<?php get_header(); ?>				
<div id="header_lower">	
<p class="titpagina"><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></p>
<?php if (get_post_meta($post->ID, 'intro_message', true)) { ?> 
<p class="titparrafo">
<?php echo get_post_meta($post->ID, 'intro_message', true); ?>
</p>
<?php } ?>
</div><!-- end header lower-->

</div>
</div>			

<div id="page_secondary">
<div id="main_content">
<?php get_sidebar(); ?>
<div id="main_content_left_secondary">
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
<div style="clear: both;">&nbsp;</div>
</div>


<?php get_footer(); ?>