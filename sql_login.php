<?php 

	$user =$_POST['user'];
	$pwd =$_POST['pwd'];

	 $img_name = $_FILES['set_image']["name"];
		 $img_size = $_FILES['set_image']["size"];
		 $tmp_name = $_FILES['set_image']["tmp_name"];

		 $image_error = $_FILES['set_image']["error"];

		 if ($image_error === 0) {
		 	$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
		 	$img_ex_lc = strtolower($img_ex);
		 	$new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
		 	$img_upload_path = 'img/'.$new_img_name;
		 	move_uploaded_file($tmp_name, $img_upload_path);

		 	//  insert all information

		 	$req = "insert into accunet values ('$user','$pwd','$new_img_name',now())";
		 	$res = mysql_query($req);

		 	if (mysql_affected_rows() == 1) {
		 		echo "Succsifule ! ";
		 	}

		 	else {
		 		echo "Faild to Log in!!";
		 	}

		 }
		 else {
		 	echo "Faild Send Image !";
		 }

		
?>