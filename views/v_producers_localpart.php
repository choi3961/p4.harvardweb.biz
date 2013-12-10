<div>
		<?php 
			$num = $loc_num-10;
			$start_num = 0;
			$nav_num = 0;
		?>
		<?php foreach($kk as $site): 
		 	
		 	if($start_num>=$loc_num){
				break;
			}
		 	if($start_num>=($num)){
		 		echo $site['domain_address']; 
				echo "<br>";
		 	}
			
			$start_num++;
			
		 	endforeach; 
		?>
</div>