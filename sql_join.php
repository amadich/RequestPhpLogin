<?php 

	$user = $_POST["userLogin"];

	$req = "select * from accunet where username = '$user' ";
	$res = mysql_query($req);
	

	
?>