<!-- This shows the posts the user follows -->
<div class = 'container02'>
	<div class = 'header002'>농산물 직거래 장터<br></div>
	<div class = 'header002'>POSTS</div>
	<div>
		<?php foreach($posts as $post): ?>
		<div class = 'article'>
			<article>
			    <div class = 'article-header'><?=$post['first_name']?> <?=$post['last_name']?> posted:</div>
			    <div class = 'article-content'><p><?=$post['content']?></p></div>
			    <div class = 'article-time'>
			    	<time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
			        	<?=Time::display($post['created'])?>
			    	</time>
			    </div>
			</article>
		</div>
		<?php endforeach; ?>
	</div>
</div>