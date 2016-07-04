<?php include("../includes/user_header.php") ?>
<?php include("../includes/navigations/us_active_quizzes.php") ?>
<?php include("../config/config.php") ?>

<div class="col-b-1">
	<div class="col-c-1">
		<h1 class="cont"> Your Marks</h1>
					<?php 

						$right_answer=0;
						

						$keys=array_keys($_POST);
						
						$order=join(",",$keys);
						
						$sql = "select question_id,correct_answer from questions where question_id IN($order) ORDER BY FIELD(question_id,$order)";


						$response=mysqli_query($connect, $sql);
						
						while($result=mysqli_fetch_assoc($response)){
							if($result['correct_answer']==$_POST[$result['question_id']]){
								$right_answer++;
							}
						}
						
						echo "<p>Number of Correct answers " . $right_answer . "</p>";

					?>
					<a class="retry" href="quizzes.php"><input type="submit" name="retry" value="Try again"></a>
	</div>
</div>
<?php include("../includes/footer.php"); ?>