<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>  	
	<?php die('You can not access this page directly!'); ?>  
<?php endif; ?>

<?php if(!empty($post->post_password)) : ?>
  	<?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
		<p>This post is password protected. Enter the password to view comments.</p>
  	<?php endif; ?>
<?php endif; ?>

<?php 
if($comments) : 
?>
 	<!-- comment header -->
  	<div class="comment_number_wrap">
  		<h2>Comments</h2> 
  		<div class="comment_number">
  			<?php comments_number('Sin Comentarios', '1 Comentario', '% Comentarios'); ?> 
  		</div>
  	</div>
  	<!-- start list of comments -->
  	<ol>
    	<?php foreach($comments as $comment) : ?>
  		<li id="comment-<?php comment_ID(); ?>">
  			<div class="comment_left">
  				<?php echo get_avatar($comment, $size, $default_avatar ); ?>
  				<div class="avatar_name">
  					<?php comment_author_link(); ?>
  				</div>
  			</div>
  			<div class="comment_right_wrap">
  				<div class="comment_right">
  					<?php if ($comment->comment_approved == '0') : ?>
  						<p>Your comment is awaiting approval</p>
  					<?php endif; ?>
  					<?php comment_text(); ?>
  					<p class="meta"><?php comment_type(); ?> by <?php comment_author_link(); ?> on <?php comment_date(); ?> at <?php comment_time(); ?></p>
  				</div>
  				<div class="comment_right_bottom"></div>
  			</div>
  		</li>
		<?php endforeach; ?>
	</ol>

<?php else : ?>
		<br>
<?php endif; ?>

<!-- start comment form -->
<div class="comment_form">
	<?php if(comments_open()) : ?>
		<?php if(get_option('comment_registration') && !$user_ID) : ?>
			<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
		<?php else : ?>
		
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<?php if($user_ID) : ?>
				<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
			<?php else : ?>
				<div class="row comment_name">
				    <div class="large-12 columns">
						<label for="author">
							<small>Nombre <?php if($req) echo "(se requiere)"; ?></small>
							<input type="text" name="author" id="author" class="input" value="<?php echo $comment_author; ?>" tabindex="1"/>
						</label>				        
				    </div>
				</div>
				<div class="row comment_mail">
				    <div class="large-12 columns">
						<label for="email">
							<small>E-Mail (no ser&aacute; publicado) <?php if($req) echo "(se requiere)"; ?></small>
							<input type="text" name="email" id="email" class="input" value="<?php echo $comment_author_email; ?>" tabindex="2" />
						</label>				        
				    </div>
				</div>
				<div class="row comment_web">
				    <div class="large-12 columns">
						<label for="url">
							<small>Sitio Web</small>
							<input type="text" name="url" id="url" class="input" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
						</label>				        
				    </div>
				</div>
			<?php endif; ?>
				<div class="row comment_web">
				    <div class="large-12 columns">
				      <label>
				        <textarea name="comment" id="comment"  rows="10" tabindex="4"></textarea>
				      </label>
				    </div>
				</div>
				<div class="row">
				    <div class="large-12 columns">				    
					<input name="submit" class ="button" type="submit" id="submit" tabindex="5" value="Enviar Comentario" />
					<input type="hidden" class="button" name="comment_post_ID" value="<?php echo $id; ?>" />					
				    </div>
				</div>
				
				<?php do_action('comment_form', $post->ID); ?>
		</form>
	<?php endif; ?>
<?php else : ?>
	
<?php endif; ?>
</div>