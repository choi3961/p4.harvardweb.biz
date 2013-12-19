<!--

-->
<div>
	<?php if(!$local):?>
		<?php echo "Sorry, no data for this part for now.."; ?>
	<?php else: ?>
		<?php 
			$num = 0;
			$nav_num=0; 
		?>
		<?php foreach($local as $site): ?>
		
			<?php if($num <49): ?>
				<a href="<?=$site['domain_address']?>" target="_blank"><div class = 'box'><?=$site['name'] ?></div></a>
		 	<?php endif; ?>
		 	<?php	$num++; ?>

		<?php endforeach; ?>
	<?php endif;?>


</div>

<!--

-->
<!--
<div class = 'bottom-nav'>
	<?php foreach($local as $post): ?>
		<?php if($nav_num%49 == 0):?>
			<a href="/producers/local02/<?=$nav_num?>" class = 'local02-part'><?php echo $nav_num/49;?></a>
		<?php endif; ?>
		<?php $nav_num++; ?>
	<?php endforeach;?>
</div>
-->