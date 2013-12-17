		<div>
		<?php 
		$q = "select * from sites";
        $result = DB::instance(DB_NAME)->select_rows($q);
        $num = 1;
        $num2 = 0;
        ?>

		<?php foreach($result as $post): ?>
			<?php if($num >49): ?>
			<?php break; ?>
			<?php endif; ?>
			<a href="<?=$post['domain_address']?>" target="_blank"><div class = 'box'><?=$post['name'] ?></div></a>
			<?php $num++; ?>
		<?php endforeach; ?>
		</div>

		<div class = 'bottom-nav'>
		<?php foreach($result as $post): ?>
			<?php if($num2%49 == 0):?>
				<a href="/producers/total_part/<?=$num2 ?>" class = 'total-part'><?php echo $num2/49;?></a>
			<?php endif; ?>
			<?php $num2++; ?>

		<?php endforeach;?>
		</div>