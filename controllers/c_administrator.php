<?php
class administrator_controller extends base_controller{
	public function __construct(){
		parent::__construct();
	}

	public function upload(){
		$this->template->title="upload";
		$this->template->content = View::instance("v_administrator_upload");
		echo $this->template;
	}

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