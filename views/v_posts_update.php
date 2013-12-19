<!-- This provides the interface for the user to update the posts -->
<div class = 'container02'>
	<div class = 'header002'>농산물 직거래 장터<br></div>
	<?php $post = $posts[0] ?>
	<div class = 'header002'>update</div>
	<div class = 'center02'>
		<form method='POST' action="/posts/p_update/<?=$post_id?>" class="form-standard">
		    <label for='content'>Update:</label><br>
		    <textarea name='content' id='content'><?php echo $post['content']; ?></textarea><br><br>
		    <input type='submit' value='Update'>
		</form> 
	</div>
</div>