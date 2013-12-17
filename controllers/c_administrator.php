<!--
	This is the page for the adminstrator to upload the files.
-->
<?php
class administrator_controller extends base_controller{
	public function __construct(){
		parent::__construct();
	}

	public function checkdns(){
///////////////////////////////////////////////
	    $q="SELECT 
        domain_address
        FROM sites;";

	    # Run the query
	    $posts = DB::instance(DB_NAME)->select_rows($q);

$num = 0;
	    foreach($posts as $key){
	    	
	    	echo $num;
	    	$num++;
	    	if($num<600){
	    		continue;
	    	}
	    	$site = $key['domain_address'];

		   	$data = file_get_contents($site);
		    if($data){
		    	echo "yes<br>";
		    }
		    else{
		    	echo "no<br>";
		    	$qq="delete from sites
		    	    where domain_address = '$site'";
		    	DB::instance(DB_NAME)->query($qq);
		    }
	    }		

///////////////////////////////////////////////
/*
	    foreach($posts as $key){
	    	$num++;
	    	echo $key['domain_address'];
	    	echo "<br>";
	    	
	    	$site = $key['domain_address'];
			$temp = checkdnsrr($site);

			if($temp){
				echo "exists";
				echo "<br>";
			}
			else{
				echo "no";
				echo "<br>";
			}
	    }
	    echo $num;
*/
///////////////////////////////////////////////////////


	}

	/*
	upload csv file
	*/
	public function upload(){
		$this->template->title="upload";
		$this->template->content = View::instance("v_administrator_upload");
		echo $this->template;
	}

	/*
	processing the csv file into database.
	*/
	public function p_upload(){

		if(isset($_FILES['userfile'])){
			echo "hello isset?";

			$file=$_FILES['userfile']['tmp_name'];

			$handle = fopen($file, "r");
			
			for($i=0;$i<810;$i++){
				$data = fgetcsv($handle);
				$sql = "insert into sites set 
					name = '$data[0]',
					local = '$data[1]',
					local02 = '$data[2]',
					domain_address = '$data[3]',
					category01 = '$data[5]',
					category02 = '$data[6]',
					owner = '$data[4]'
					;";
				
				DB::instance(DB_NAME)->query($sql);

				echo $data[3];
				echo "<br>";
			}
		}
	}
}
?>