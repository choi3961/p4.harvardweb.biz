<!--

-->
<div>
<?php 
$start_num = $loc_num-55;
$num = 0;
$num2 = 0;
?>

<?php foreach($kk as $totalshow): ?>

	<?php if($num > $loc_num): ?>
		<?php break; ?>
	<?php endif; ?>

	<?php if($num<$start_num): ?>
		<? continue; ?>
	<?php else:?>
		<a href="<?=$totalshow['domain_address']?>" target="_blank"><div class = 'box'><?=$totalshow['name'] ?></div></a>
	<?php endif;?>
	
	<?php $num++; ?>

<?php endforeach; ?>
</div>

<div class = 'bottom-nav'>
<?php foreach($kk as $totalshow): ?>
	<?php if($num2%10 == 0):?>
		<a href="#" class = 'total-part'><?php echo $num2/10;?></a>
	<?php endif; ?>
	<?php $num2++; ?>
<?php endforeach;?>
</div>
