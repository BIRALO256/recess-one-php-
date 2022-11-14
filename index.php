<?php


 session_start();


include('login.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Techer login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<script type="text/javascript" src="validation.js" ></script>
</head>
<body style="background-image:url(teacher2.jpg); " >

<div class="login">
	<img src="log.jpg" class="log"  >
	<br>
	<h1>login here</h1>
	  <form action="rymon.php" method="post" >
	    <p>User name:</p>
	    <input type="text" name="username" placeholder="Enter user name or email" id="user">

	    <p>Password:</p>
	    <input type="Password" name="password" placeholder="Enter Password" id="Password">
	    <br>	
	    <br> 
	    <input type="submit" name="login"  value="Login">
	    <br>
	    <span class="text-danger2">
	    	<?php 
            if(!empty($empty_err))
            {
            echo $empty_err;
            }
	      ?></span>
	    <span class="text-danger">
	    	<?php  
            if(!empty($login_error))
            {
            echo $login_error;
            }
	      ?></span>
	    <br>
	    <br>
	    <a href="signpage.php"  style="color:black;"> create account?</a>


	  </form>
	
</div>

</body>
</html>