<?php

	include ('../config/config.php');
	


	if(isset($_POST["su"])){
		$un = $_POST["un"];
		$pw = $_POST["pw"];
		$fn = $_POST["fn"];
		$ln = $_POST["ln"];
		$tel = $_POST["tele"];
		$email = $_POST["email"];
		
		
		
		
		$sqluser = "insert into `users` (`user_name`, `password`, `f_name`, `l_name`, `contact_no`, `e_mail`,  `is_admin`) values ('$un','$pw','$fn','$ln','$tel','$email','0')";
		if(mysqli_query($connect,$sqluser)){
			echo "<script>
				   alert('User Account Created!!');
				   window.location.href='../views/login.php';
				  </script>";
		}
		else{
			echo "<script>
				   alert('Oops! Something went wrong! Try again');
				   window.location.href='../views/login.php';
				  </script>";
			
		}
	}
	
?>