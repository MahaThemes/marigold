<div class="post-comments" id="comments">
	<?php 
	if ( comments_open() ) :
	echo '<div class="post-box"><h4 class="post-box-title">';
	comments_number(__('No Comments','marigold'), __('1 Comment','marigold'), '% ' . __('Comments','marigold') );
	echo '</h4></div>';
	endif;

	echo "<div class='comments'>";
	wp_list_comments(array(
		'avatar_size'	=> 50,
		'max_depth'		=> 5,
		'style'			=> 'ul',
		'callback'		=> 'omaha_comments',
		'type'			=> 'all'
	));
	echo "</div>";

	echo "<div id='comments_pagination'>";
		paginate_comments_links(array('prev_text' => '&laquo;', 'next_text' => '&raquo;'));
	echo "</div>";

	$custom_comment_field = '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>';  //label removed for cleaner layout

	comment_form(array(
		'comment_field'			=> $custom_comment_field,
		'comment_notes_after'	=> '',
		'logged_in_as' 			=> '',
		'comment_notes_before' 	=> '',
		'title_reply'			=> __('Leave a Reply', 'marigold'),
		'cancel_reply_link'		=> __('Cancel Reply', 'marigold'),
		'label_submit'			=> __('Post Comment', 'marigold')
	));
	?>
</div>
