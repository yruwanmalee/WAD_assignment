<?php

	include ('../config/config.php');
	


	if(isset($_POST["crt"])){
		$quizid = $_POST["qid"];
		$quizname = $_POST["nwq"];
		
		
		
		
		$sqluser = "INSERT INTO `quiz`(`quiz_id`, `quiz_name`) VALUES ('$quizid','$quizname')";
		if(mysqli_query($connect,$sqluser)){
			echo "<script>
				   alert('Quiz Created!!');
				   window.location.href='../views/ad_crt_quiz.php';
				  </script>";
		}
		else{
			echo "<script>
				   alert('Oops! Something went wrong! Try again');
				   window.location.href='../views/ad_crt_quiz.php';
				  </script>";
			
		}
	}
	
?>