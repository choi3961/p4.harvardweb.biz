<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/main02.css">
    <script src = "/js/jquery.js"></script>
    
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	
    <!-- This is the interface for the pages the users could access through easily -->
	<div id='menu'>
        <a href='/'>Home  </a> |
        <!-- Menu for users who are logged in -->
        <a href='/producers/sites_register' class = 'menu-producers'>Sites_register</a> |
        <a href="">USERS</a> ||
        <a href='/users/signup' class = 'menu-users'>Signup</a> |
        <a href='/users/login' class = 'menu-users'>Login</a> |
        <a href='/users/logout'>Logout</a> |

        <a href="">POSTS</a> ||
        <a href='/posts/add' class = 'menu-posts'>Add</a> |
        <a href='/posts/index' class = 'menu-posts'>Index</a> |
        <a href='/posts/mypage' class = 'menu-posts'>Mypage</a> |
        <a href='/posts/users' class = 'menu-posts'>Users</a> |
    </div>

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
    <script src = "/js/control.js"></script>
</body>
</html>