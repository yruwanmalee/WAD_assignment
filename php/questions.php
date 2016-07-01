<?php

	include ('../config/config.php');
	


	if(isset($_POST["addques"])){
		$qid = $_POST["qid"];
		$quesid = $_POST["quesid"];
		$ques = $_POST["nq"];
		$ans1 = $_POST["ans1"];
		$ans2 = $_POST["ans2"];
		$ans3 = $_POST["ans3"];
		$ans4 = $_POST["ans4"];
		$crans = $_POST["crans"];
		
		
		
		$sqluser = "INSERT INTO `questions`(`question_id`, `question`, `answer_01`, `answer_02`, `answer_03`, `answer_04`, `correct_answer`, `quiz_id`) VALUES ('$quesid', '$ques', '$ans1', '$ans2', '$ans3', '$ans4', '$crans', '$qid')";
		if(mysqli_query($connect,$sqluser)){
			echo "<script>
				   alert('Question successfully added to the quiz!!');
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