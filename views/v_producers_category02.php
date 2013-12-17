<!--

-->
<div>
	<?php 
		$num = 0;
		$nav_num=0; 
	?>
	<?php foreach($category02 as $site): ?>
		
			<?php if($num <40): ?>
				<a href="<?=$site['domain_address']?>" target="_blank"><div class = 'box'><?=$site['name'] ?></div></a>
		 	<?php endif; ?>
		 	<?php	$num++; ?>

	<?php endforeach; ?>

</div>

<!--
<div class = 'bottom-nav'>
	<?php foreach($category02 as $site): ?>
		<?php if($nav_num%10 == 0):?>
			<a href="#" class = 'category02-part'><?php echo $nav_num/10;?></a>
		<?php endif; ?>
		<?php $nav_num++; ?>
	<?php endforeach;?>
</div>
-->