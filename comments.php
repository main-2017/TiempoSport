<?php 
	if (post_password_required()) {
		return;
	}
 ?>
	<div class="wrapper">
		
	</div>
 <div id="comments" class="comments-area">
 	<?php if (have_comments()) : 	 ?>
 		<h2 class="comment-title">
 			<?php echo __('Comentarios', 'tiemposport') ?>
 		</h2>

 		<ol class="comment-list">
 			<?php 
 			wp_list_comments( array(
 				'type' => 'comment'

 			));

 			 ?>
 		</ol>
 		<?php the_comments_pagination(array(
 			'prev_text' => '<span class="screen-render-text">' . __('Anterior', 'tiemposport').'</span>',
 			'next_text' => '<span class="screen-render-text">' . __('Siguiente', 'tiemposport').'</span>'

 		));

 		 ?>
 	<?php endif; ?>
 	<div class="wrapper">
 		
 	</div>
 	<?php comment_form();?>
 </div>