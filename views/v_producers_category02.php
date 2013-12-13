<div>
	<div>
		<?php 
			$num = $loc_num-10;
			$start_num = 0;
			$nav_num = 0;
		?>
		<?php foreach($kk as $post): 
		 	
		 	if($start_num>=$loc_num){
				break;
			}
		 	if($start_num>=($num)){
		 		echo $post['domain_address']; 
				echo "<br>";
		 	}
			
			$start_num++;
			
		 	endforeach; 
		?>
	</div>

	<div class = 'bottom-nav'>
		<?php foreach($kk as $post): ?>
			
		<?php 

			if($nav_num%10==0){

				echo "<a href = '#' class = 'category02' id = '50'>" . $nav_num/10 . "</a>";
			}
			
			$nav_num++;

		?>
		<?php endforeach; ?>
	</div>
</div>