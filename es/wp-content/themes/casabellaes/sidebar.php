<div id="left" class="">
        <div class="gcBookingGadget vertical"></div>
        <script type="text/javascript" src="https://secure.guestcentric.net/api/bg/?apikey=d088c9a25fcbe3a2b6337f49131f19eb"> </script>
        <div id="left_navigation">
          <?php 
              if ($post->post_parent != 0) { 
              $parent = $post->post_parent;
              } else { 
                $parent = $post->ID; 
              }
              $parent_title = get_the_title($parent);
              $parent_link = get_permalink($parent);
              ?>
              <?php 
              if($post->post_parent)
                  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
              else
                $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");

                if ($children) { ?>

                <ul id="subnav">

                  <?php echo $children; ?>

                </ul>

              <?php } else { ?>
              <?php } ?>
        </div>
        <?php if(in_category(get_option('blogcat')) || is_category(get_option('blogcat'))) { ?>
          <div class="categories">
            <ul>
              <?php if ( have_posts() ) { the_post(); rewind_posts(); } ?>
              <?php if(in_category(get_option('portfoliocat')) || is_category(get_option('portfoliocat'))) { ?>
              <?php wp_list_categories('title_li=&child_of='.get_option('portfoliocat')); ?>
              <?php } else { ?>
              <?php wp_list_categories('title_li=&child_of='.get_option('blogcat')); ?>
              <?php } ?>
            </ul>
          </div>
          <div class="archives">
            <?php if(in_category(get_option('blogcat')) || is_category(get_option('blogcat'))) { ?>
            <h2 class="widgettitle">Archives</h2>
            <ul>
              <?php wp_get_archives(); ?>
            </ul>
            <?php } else { ?>
            <?php } ?>
          </div>
          <?php } ?>
          <div id="left_widgets">
            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
            <?php endif; ?>
            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>
            <?php endif; ?>
            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(3) ) : else : ?>
            <?php endif; ?>
          </div>
        </div>