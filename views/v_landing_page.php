<!--
	This shows the contents of the landing page.
-->
<div>
	<?php 
		$q = "select * from sites";
		$result = DB::instance(DB_NAME)->select_rows($q);
		$num = 1;
		$num2 = 1;
	?>

	<?php foreach($result as $post): ?>
		<?php if($num >59): ?>
		<?php break; ?>
		<?php endif; ?>
		<a href="<?=$post['domain_address']?>" target="_blank"><div class = 'box'><?=$post['name'] ?></div></a>
		<?php $num++; ?>
	<?php endforeach; ?>
</div>

