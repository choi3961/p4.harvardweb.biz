<?php
class producers_controller extends base_controller{
    
	public function __construct(){
		parent::__construct();
	}


	public function index(){
		echo "hello indexww";
	}


	public function local(){
        //echo "hello local555";

        $temp = $_POST['local'];

        $q="SELECT 
            domain_address
            FROM sites
            WHERE local = '$temp';";

        # Run the query
        $posts = DB::instance(DB_NAME)->select_rows($q);

       foreach ($posts as $post) {
            echo $post['domain_address'];
            echo "<br>";
        }
    }

    public function local_part($part){

        $this->template->content = View::instance('v_producers_localpart');
        
        //$temp = $_POST['category02'];
        //$temp = '';
        $q="SELECT 
            domain_address
            FROM sites;";

        # Run the query
        $posts = DB::instance(DB_NAME)->select_rows($q);
        $this->template->content->kk=$posts;
        $this->template->content->loc_num = $part;  

        echo $this->template->content;
    }


    public function local02(){

       $temp = $_POST['local02'];

        $q="SELECT 
            domain_address
            FROM sites
            WHERE local02 = '$temp';";

        # Run the query
        $posts = DB::instance(DB_NAME)->select_rows($q);

       foreach($posts as $post){
            echo "hello";
            echo $post['domain_address'];
            echo "<br>";
        } 
    }

    public function category02($loc){

        //echo $loc;

        $this->template->content = View::instance('v_producers_category02');

        $temp = $_POST['category02'];

        $q="SELECT 
            domain_address
            FROM sites
            WHERE category02 = '$temp';";
        # Run the query

        $posts = DB::instance(DB_NAME)->select_rows($q);
        $this->template->content->kk=$posts;
        $this->template->content->loc_num = $loc;
        
        echo $this->template->content;

    }

    

   
}

/*
       foreach ($posts as $post) {
            $num++;
            echo $post['domain_address'];
            echo "<br>";
            if(($num>10) && ($num%10==0)){
                echo $num;
                break;
            }
        }
 */