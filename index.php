<?php 
	error_reporting(E_ERROR);
	if (isset($_POST['sub'])) {
		include "sql_connect.php";
		include "sql_login.php";
	}


	if (isset($_POST['sublog'])) {
		include "sql_connect.php";
		include "sql_join.php";
	}


	
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kenfor World</title>
</head>
<body>
	<header>
		<ul>
			<br> 
			<li>Home</li>
			<a href="login.php"><li>Contact</li></a>
			<a href="join.php"><li>Log in</li></a>
			<!-- Profile -->

				<div class="liLeft">
					<li class='pname'><?php 

					if (isset($_POST['sublog'])) {
	
						if (mysql_num_rows($res) != 0) {
							echo $user;
						}
					}  ?>
						
					</li>


					<li style="background: url('img/<?php if (isset($_POST['sublog'])) {
						if (mysql_num_rows($res) != 0) {
							$t = mysql_fetch_array($res);
							echo $t['image'];
						}
					}

					else {
						echo $new_img_name;
					}
					  ?>'); background-size: cover; background-position: center center;" id="photoP"></li>
					}
				</div>

		</ul>
	</header>
</body>
</html>