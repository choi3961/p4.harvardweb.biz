<div>
		<?php 
			$num = $loc_num-56;
			$start_num = 0;
			$nav_num = 0;
		?>
		<?php foreach($kk as $site): ?>
		 	
		 	<?php if($start_num>=$loc_num): ?>
			<?php break; ?>
			<?php endif; ?>
			<?php if($start_num>=($num)): ?>
			<a href="<?=$site['domain_address']?>" target="_blank"><div class = 'box'><?=$site['name'] ?></div></a>
		 	<?php endif; ?>
			<?php $start_num++; ?>
		<?php endforeach; ?>
</div>

<div class = 'bottom-nav'>
	<?php foreach($kk as $post): ?>
		<?php if($nav_num%10 == 0):?>
			<a href="#" class = 'center-part'><?php echo $nav_num/10;?></a>
		<?php endif; ?>
		<?php $nav_num++; ?>
	<?php endforeach;?>
</div>
