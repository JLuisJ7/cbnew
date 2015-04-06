<?php
function mijq() {
if( !is_admin()){
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"), false, '1.8.3');
	wp_enqueue_script('jquery');
}
}
add_action('init', 'mijq');

//***********Custom Menu******************
add_theme_support( 'nav-menus' );

add_action( 'init', 'register_my_menu' );

function register_my_menu() {
 if ( function_exists( 'register_nav_menus' ) ) {
   register_nav_menus(
    array(
     'menu-1-slug' => 'menu1',
     'menu-2-slug' => 'menu2',
	 'menu' => __( 'menu', 'Casa Bella' ),
'menu-footer'=>__( 'menu-footer', 'Casa Bella' )
    )
   );
 }
}

//*******************************

if ( function_exists('register_sidebars') )
register_sidebar(array(
'name' => 'sidebar-noticias',
'before_widget' => '<div class="homenoticias">',
'after_widget' => '</div>',
));

register_sidebars(3, array(
'before_widget' => '<div class="widget">',
'after_widget' => '</div><!--/widget-->',
));

add_action('admin_menu', 'add_theme_pages');
add_option('themecolor', 'blue');
add_option('portfoliocat', '');
add_option('projecttitle', '');
add_option('blogcat', '');
add_option('blogtitle', '');
add_option('featuredcat', '');
add_option('aboutid', '');
add_option('logopath', '');
add_option('projectsub', '');
add_option('hometitle', '');
add_option('homesubtext', '');
add_option('subbox1title', '');
add_option('subbox1icon', '');
add_option('subbox1desc', '');
add_option('subbox1link', '');
add_option('subbox2title', '');
add_option('subbox2icon', '');
add_option('subbox2desc', '');
add_option('subbox2link', '');
add_option('subbox3title', '');
add_option('subbox3icon', '');
add_option('subbox3desc', '');
add_option('subbox3link', '');
add_option('navinclude', '');
add_option('analytics', '');
add_option('slide1', '');
add_option('slide1_link', '');
add_option('slide2', '');
add_option('slide2_link', '');
add_option('slide3', '');
add_option('slide3_link', '');
add_option('slide4', '');
add_option('slide4_link', '');
add_option('slide5', '');
add_option('slide5_link', '');
add_option('slide6', '');
add_option('slide6_link', '');
add_option('slide7', '');
add_option('slide7_link', '');
add_option('slide8', '');
add_option('slide8_link', '');
add_option('slide9', '');
add_option('slide9_link', '');
add_option('slide10', '');
add_option('slide10_link', '');



function add_theme_pages() {
	add_theme_page('Bluelight Options', 'Bluelight Settings', 8, 'colorthemes', 'color_themes_page');
}

function color_themes_page() { ?>

<div class="wrap"> <?php echo "<h2 style='margin-bottom:25px;'>" . __( 'Bluelight Theme Settings') . "</h2>"; ?>
	<form method="post" action="options.php">
		<?php wp_nonce_field('update-options'); ?>
		<h2>Theme Color</h2>
		<p>Theme Color:
			<select name="themecolor" id="themecolor" value="<?php echo get_option('themecolor'); ?>">
				<option name="blue" value="blue/blue"<?php if(get_option('themecolor') == "blue/blue") { echo ' selected'; } ?>>Blue</option>
				<option name="gray" value="gray/gray"<?php if(get_option('themecolor') == "gray/gray") { echo ' selected'; } ?>>Gray</option>
				<option name="dkblue" value="dkblue/dkblue"<?php if(get_option('themecolor') == "dkblue/dkblue") { echo ' selected'; } ?>>Dark Blue</option>
				<option name="green" value="green/green"<?php if(get_option('themecolor') == "green/green") { echo ' selected'; } ?>>Green</option>
				<option name="brown" value="brown/brown"<?php if(get_option('themecolor') == "brown/brown") { echo ' selected'; } ?>>Brown</option>
			</select>
			
		</p>
		<h2>Category Settings</h2>
		<p>Project Category:
			<?php wp_dropdown_categories('show_option_none=Select category&name=portfoliocat&selected='.get_option('portfoliocat')); ?>
		</p>
		<p>Project Page Title (title that will appear in navigation):
			<input type="text" name="projecttitle" id="projecttitle" size="20" value="<?php echo get_option('projecttitle'); ?>" />
		</p>
		<p>Blog Category:
			<?php wp_dropdown_categories('show_option_none=Select category&name=blogcat&selected='.get_option('blogcat')); ?>
		</p>
		<p>Blog Page Title (title that will appear in navigation):
			<input type="text" name="blogtitle" id="blogtitle" size="20" value="<?php echo get_option('blogtitle'); ?>" />
		</p>
		<p>Featured Category:
			<?php wp_dropdown_categories('show_option_none=Select category&name=featuredcat&selected='.get_option('featuredcat')); ?>
		</p>
		<p>About Page:
			<?php wp_dropdown_pages('name=aboutid&selected='.get_option('aboutid')); ?>
		</p>
		<p>Besides Home, Projects, and Blog, which pages should be included in the navigation?:
			<input type="text" name="navinclude" id="navinclude" size="20" value="<?php echo get_option('navinclude'); ?>" />
		</p>
		<p>Path to your logo (/images/logo.png):
			<input type="text" name="logopath" id="logopath" size="20" value="<?php echo get_option('logopath'); ?>" />
		</p>
		<p>Project page sub-message:
			<input type="text" name="projectsub" id="projectsub" size="20" value="<?php echo get_option('projectsub'); ?>" />
		</p>
		<h2>Homepage Settings</h2>
		<p>Home Title
			<input type="text" name="hometitle" id="hometitle" size="20" value="<?php echo get_option('hometitle'); ?>" />
		</p>
		<p>Home Subtext:
			<input type="text" name="homesubtext" id="homesubtext" size="20" value="<?php echo get_option('homesubtext'); ?>" />
		</p>
		<br>
		<p>Sub Box 1 Title
			<input type="text" name="subbox1title" id="subbox1title" size="20" value="<?php echo get_option('subbox1title'); ?>" />
		</p>
		<p>Sub Box 1 Icon
			<input type="text" name="subbox1icon" id="subbox1icon" size="20" value="<?php echo get_option('subbox1icon'); ?>" />
		</p>
		<p>Sub Box 1 Description
			<input type="text" name="subbox1desc" id="subbox1desc" size="20" value="<?php echo get_option('subbox1desc'); ?>" />
		</p>
		<p>Sub Box 1 Link
			<?php wp_dropdown_pages('name=subbox1link&selected='.get_option('subbox1link')); ?>
		</p>
		<br>
		<p>Sub Box 2 Title
			<input type="text" name="subbox2title" id="subbox2title" size="20" value="<?php echo get_option('subbox2title'); ?>" />
		</p>
		<p>Sub Box 2 Icon
			<input type="text" name="subbox2icon" id="subbox2icon" size="20" value="<?php echo get_option('subbox2icon'); ?>" />
		</p>
		<p>Sub Box 2 Description
			<input type="text" name="subbox2desc" id="subbox2desc" size="20" value="<?php echo get_option('subbox2desc'); ?>" />
		</p>
		<p>Sub Box 2 Link
			<?php wp_dropdown_pages('name=subbox2link&selected='.get_option('subbox2link')); ?>
		</p>
		<br>
		<p>Sub Box 3 Title
			<input type="text" name="subbox3title" id="subbox3title" size="20" value="<?php echo get_option('subbox3title'); ?>" />
		</p>
		<p>Sub Box 3 Icon
			<input type="text" name="subbox3icon" id="subbox3icon" size="20" value="<?php echo get_option('subbox3icon'); ?>" />
		</p>
		<p>Sub Box 3 Description
			<input type="text" name="subbox3desc" id="subbox3desc" size="20" value="<?php echo get_option('subbox3desc'); ?>" />
		</p>
		<p>Sub Box 3 Link
			<?php wp_dropdown_pages('name=subbox3link&selected='.get_option('subbox3link')); ?>
		</p>
		<h2>Google Analytics</h2>
		<p>Analytics - Example: UA-XXXXXXX-X
			<input type="text" name="analytics" id="analytics" size="20" value="<?php echo get_option('analytics'); ?>" />
		</p>
		<h2>Homepage Slider Management.  Use 495px X 255px images.</h2>
		<p>Slide 1 Path
			<input type="text" name="slide1" id="slide1" size="20" value="<?php echo get_option('slide1'); ?>" />
		</p>
		<p>Slide 1 Link
			<input type="text" name="slide1_link" id="slide1_link" size="20" value="<?php echo get_option('slide1_link'); ?>" />
		</p>
		<br />
		<p>Slide 2 Path
			<input type="text" name="slide2" id="slide2" size="20" value="<?php echo get_option('slide2'); ?>" />
		</p>
		</p>
		<p>Slide 2 Link
			<input type="text" name="slide2_link" id="slide2_link" size="20" value="<?php echo get_option('slide2_link'); ?>" />
		</p>
		<br />
		<p>Slide 3 Path
			<input type="text" name="slide3" id="slide3" size="20" value="<?php echo get_option('slide3'); ?>" />
		</p>
		</p>
		<p>Slide 3 Link
			<input type="text" name="slide3_link" id="slide3_link" size="20" value="<?php echo get_option('slide3_link'); ?>" />
		</p>
		<br />
		<p>Slide 4 Path
			<input type="text" name="slide4" id="slide4" size="20" value="<?php echo get_option('slide4'); ?>" />
		</p>
		</p>
		<p>Slide 4 Link
			<input type="text" name="slide4_link" id="slide4_link" size="20" value="<?php echo get_option('slide4_link'); ?>" />
		</p>
		<br />
		<p>Slide 5 Path
			<input type="text" name="slide5" id="slide5" size="20" value="<?php echo get_option('slide5'); ?>" />
		</p>
		</p>
		<p>Slide 5 Link
			<input type="text" name="slide5_link" id="slide5_link" size="20" value="<?php echo get_option('slide5_link'); ?>" />
		</p>
		<br />
		<p>Slide 6 Path
			<input type="text" name="slide6" id="slide6" size="20" value="<?php echo get_option('slide6'); ?>" />
		</p>
		</p>
		<p>Slide 6 Link
			<input type="text" name="slide6_link" id="slide6_link" size="20" value="<?php echo get_option('slide6_link'); ?>" />
		</p>
		<br />
		<p>Slide 7 Path
			<input type="text" name="slide7" id="slide7" size="20" value="<?php echo get_option('slide7'); ?>" />
		</p>
		</p>
		<p>Slide 7 Link
			<input type="text" name="slide7_link" id="slide7_link" size="20" value="<?php echo get_option('slide7_link'); ?>" />
		</p>
		<br />
		<p>Slide 8 Path
			<input type="text" name="slide8" id="slide8" size="20" value="<?php echo get_option('slide8'); ?>" />
		</p>
		</p>
		<p>Slide 8 Link
			<input type="text" name="slide8_link" id="slide8_link" size="20" value="<?php echo get_option('slide8_link'); ?>" />
		</p>
		<br />
		<p>Slide 9 Path
			<input type="text" name="slide9" id="slide9" size="20" value="<?php echo get_option('slide9'); ?>" />
		</p>
		</p>
		<p>Slide 9 Link
			<input type="text" name="slide9_link" id="slide9_link" size="20" value="<?php echo get_option('slide9_link'); ?>" />
		</p>
		<br />
		<p>Slide 10 Path
			<input type="text" name="slide10" id="slide10" size="20" value="<?php echo get_option('slide10'); ?>" />
		</p>
		</p>
		<p>Slide 10 Link
			<input type="text" name="slide10_link" id="slide10_link" size="20" value="<?php echo get_option('slide10_link'); ?>" />
		</p>
		
		
		
		<br>
		
		<input type="submit" name="Submit" value="<?php _e('Save Changes') ?>" />
		<input type="hidden" name="action" value="update" />
		<input type="hidden" name="page_options" value="themecolor,portfoliocat,projecttitle,blogcat,blogtitle,aboutid,featuredcat,logopath,projectsub,hometitle,homesubtext,subbox1title,subbox1icon,subbox1desc,subbox1link,subbox2title,subbox2icon,subbox2desc,subbox2link,subbox3title,subbox3icon,subbox3desc,subbox3link,navinclude,analytics,slide1,slide2,slide3,slide4,slide5,slide6,slide7,slide8,slide9,slide10,slide1_link,slide2_link,slide3_link,slide4_link,slide5_link,slide6_link,slide7_link,slide8_link,slide9_link,slide10_link" />
	</form>
</div>


<?php } ?>