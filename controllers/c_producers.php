<?php
class producers_controller extends base_controller{
    
	public function __construct(){
		parent::__construct();
	}

    public function total_part($part){
        $q="SELECT 
            domain_address,
            name
            FROM sites;";

        # Run the query
        $posts = DB::instance(DB_NAME)->select_rows($q);

        $this->template->content = View::instance('v_producers_total_part');
        $this->template->content->kk=$posts;
        $this->template->content->loc_num = $part;  

        echo $this->template->content;      
    }

	public function local($part){
        $temp = $_POST['local'];
        //echo $temp;
        $q="SELECT 
            domain_address,
            name
            FROM sites
            WHERE local = '$temp';";

        # Run the query
        $posts = DB::instance(DB_NAME)->select_rows($q);

        $this->template->content = View::instance('v_producers_local');
        $this->template->content->local=$posts;
        $this->template->content->part = $part;
        echo $this->template->content;
    }

    public function local_part($part){
        $temp = $_POST['local'];
        //echo $temp;
        $q="SELECT 
            domain_address,
            name
            FROM sites
            WHERE local = '$temp';";

        # Run the query
        $posts = DB::instance(DB_NAME)->select_rows($q);

        $this->template->content = View::instance('v_producers_local_part');
        $this->template->content->local=$posts;
        $this->template->content->part = $part;
        echo $this->template->content;
    }


    public function local02($part){
       $temp = $_POST['local02'];
        $q="SELECT 
            domain_address,
            name
            FROM sites
            WHERE local02 = '$temp';";

        # Run the query
        $local02 = DB::instance(DB_NAME)->select_rows($q);

        $this->template->content = View::instance('v_producers_local02');
        $this->template->content->local=$local02;

        echo $this->template->content;
    }


    public function local02_part($part){
       $temp = $_POST['local02'];
        $q="SELECT 
            domain_address,
            name
            FROM sites
            WHERE local02 = '$temp';";

        # Run the query
        $local02 = DB::instance(DB_NAME)->select_rows($q);

        $this->template->content = View::instance('v_producers_local02_part');
        $this->template->content->local=$local02;

        echo $this->template->content;
    }



    public function category02($part){
        $this->template->content = View::instance('v_producers_category02');//'v_producers_category02'
        $temp = $_POST['category02'];

        $q="SELECT 
            domain_address,
            name
            FROM sites
            WHERE category02 = '$temp';";

        # Run the query
        $posts = DB::instance(DB_NAME)->select_rows($q);
        $this->template->content->category02=$posts;
        //$this->template->content->loc_num = $loc;
        
        echo $this->template->content;
    } 


    public function category02_part($part){
        $this->template->content = View::instance('v_producers_category02_part');//'v_producers_category02'
        $temp = $_POST['category02'];

        $q="SELECT 
            domain_address,
            name
            FROM sites
            WHERE category02 = '$temp';";

        # Run the query
        $posts = DB::instance(DB_NAME)->select_rows($q);
        $this->template->content->local=$posts;
        //$this->template->content->loc_num = $loc;
        
        echo $this->template->content;
    } 




   //////////////////////////////////////////////////////////// 
 /*
    public function local_part($part){
        $q="SELECT 
            domain_address,
            name
            FROM sites;";

        # Run the query
        $posts = DB::instance(DB_NAME)->select_rows($q);

        $this->template->content = View::instance('v_producers_localpart');
        $this->template->content->kk=$posts;
        $this->template->content->loc_num = $part;  

        echo $this->template->content;
    }
*/
 //////////////////////////////////////////////////////////////   

    


    # renders interface of sites_register
    public function sites_register($error = NULL) {
        # Setup view
        $this->template->content = View::instance('v_producers_register');
        $this->template->title = "Sites_Register";
        $this->template->content->error = $error;
           
        # Render template
        echo $this->template->content;
    }

    # renders interface of sign up
    public function p_sites_register($error = NULL) {
        #error checking : if not fullfilled, send the error message.
        if(!$_POST['name']||!$_POST['domain_address']||!$_POST['email'] || !$_POST['password'] ){
            Router::redirect("/producers/signup/error");
        }

        #error checking : compare POST data with database data
        $email = $_POST['email'];

        $q = "select email from sites
             where email = '$email'";
        $exist = DB::instance(DB_NAME)->select_field($q);     
        //compare POST with database already registered
        //if($exist==$email){
        //    Router::redirect('/users/signup/failed');
        //}
        
        # More data we want stored with the user
        //$_POST['created']  = Time::now();
        //$_POST['modified'] = Time::now();

        # Encrypt the password  
        $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);            

        # Create an encrypted token via their email address and a random string
        //$_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());

        # Insert this user into the database
        $user_id = DB::instance(DB_NAME)->insert('sites', $_POST);

        //sending mail when a user signed up
        /*
        $to[]    = Array("name" => APP_NAME, "email" => $email);
        $from    = Array("name" => APP_NAME, "email" => APP_EMAIL);
        $subject = "Message from SQUAWK";              
        $body = View::instance('v_email_example');
        $cc = "";
        $bcc = "";
    
        # Send email
        Email::send($to, $from, $subject, $body, true, $cc, $bcc);

        Router::redirect('/users/login/registered');
        */
        echo "your site is registered";
    }    
}

