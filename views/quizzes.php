<!-- |ADMIN HOME PAGE| -->

<?php include("../includes/user_header.php") ?>
<?php include("../includes/navigations/us_active_quizzes.php") ?>
<div class="col-b-1">
	<div class="col-c-1">
		<h1 class="cont"> Try Our Quizzes</h1>
			
			<div class="col-c-4">
				<h2>Your Quizzes</h2>
					<form method="post" action="">
						<input type="radio" name="quiz" value="quiz1">quiz 01 <br/>
						<input type="radio" name="quiz" value="quiz1">quiz 01 <br/>
						<input type="radio" name="quiz" value="quiz1">quiz 01 <br/>
						<input type="radio" name="quiz" value="quiz1">quiz 01 <br/>
						<input type="radio" name="quiz" value="quiz1">quiz 01 <br/>
						<input type="radio" name="quiz" value="quiz1">quiz 01 <br/>
						<input type="radio" name="quiz" value="quiz1">quiz 01 <br/>
						<input type="radio" name="quiz" value="quiz1">quiz 01 <br/>
						<input type="radio" name="quiz" value="quiz1">quiz 01 <br/>
						<br/> 
						<input type="submit" name="try" value="Try Quiz">&nbsp 
					</form>
			</div>

			
			<div class="col-c-5">
					<h2>Check your Knowledge</h2>
					<h3> #name of the quiz</h3>
					<form method="post" action="">
					<input type="submit" name="finish" value="Finish & Submit">
					</form>
			</div>
	</div>
</div>

<?php include("../includes/footer.php"); ?>