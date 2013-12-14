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
        <a href='/producers/sites_register' class = 'menu-producers'>sites_register</a> |
        <a href="">USERS</a> ||
        <a href='#' class = 'menu-users'>signup</a> |
        <a href='#' class = 'menu-users'>login</a> |
        <a href='/users/logout'>logout</a> |

        <a href="">POSTS</a> ||
        <a href='/posts/add' class = 'menu-posts'>add</a> |
        <a href='/posts/index' class = 'menu-posts'>index</a> |
        <a href='/posts/mypage' class = 'menu-posts'>mypage</a> |
        <a href='/posts/update' class = 'menu-posts'>update</a> |
        <a href='/posts/users' class = 'menu-posts'>users</a> |
    </div>

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
    <script src = "/js/control.js"></script>
</body>
</html>