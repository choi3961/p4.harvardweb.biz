<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<link rel="stylesheet" type="text/css" href="/css/sample-app.css">
    <script src = "/js/jquery.js"></script>
	
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	
    <!-- This is the interface for the pages the users could access through easily -->
	<div id='menu'>
        <a href='/'>Home  </a> |
        <a href = '/administrator/upload'> upload</a> |
        <!-- Menu for users who are logged in -->
        
        <a href='/producers/local'>local</a> |
        <a href='/producers/local02'>local02</a> |
        <a href='/producers/category02'>category02</a> |
        
    </div>

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
    <script src = "/js/sample-app.js"></script>
</body>
</html>