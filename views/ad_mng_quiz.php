<!-- |ADMIN HOME PAGE| -->

<?php include("../includes/admin_header.php") ?>
<?php include("../includes/navigations/ad_nav_active_mng_quiz.php") ?>
<div class="col-b-1">
	<div class="col-c-1">
		<h1 class="cont"> Manage Your Quizzes</h1>
			
			<div class="col-c-4">
				<h2>Your Quizzes</h2>
					<form method="get" action="">
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
						<input type="submit" name="view" value="Veiw Quiz">&nbsp 
						<input type="submit" name="Delete" value="Delete Quiz">&nbsp 
					</form>
			</div>

			
			<div class="col-c-5">
					<h2>Edit Your quiz here</h2>
					<h3> #name of the quiz</h3>
					<input type="submit" name="save" value="Save Changes">
			</div>
	</div>
</div>

<?php include("../includes/footer.php"); ?>

