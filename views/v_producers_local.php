<div>
<?php 
$num = 0;
$num2 = 0;
?>

<?php foreach($local as $localshow): ?>
	<?php if($num >55): ?>
	<?php break; ?>
	<?php endif; ?>
	<a href="<?=$localshow['domain_address']?>" target="_blank"><div class = 'box'><?=$localshow['name'] ?></div></a>
	<?php $num++; ?>
<?php endforeach; ?>
</div>

<div class = 'bottom-nav'>
<?php foreach($local as $localshow): ?>
	<?php if($num2%10 == 0):?>
		<a href="#" class = 'center-part-local'><?php echo $num2/10;?></a>
	<?php endif; ?>
	<?php $num2++; ?>
<?php endforeach;?>
</div>
