<!-- |ADMIN HOME PAGE| -->

<?php include("../includes/user_header.php") ?>
<?php include("../includes/navigations/us_active_home.php") ?>

<div class="col-b-1">
	<div class="col-c-1 cont">
		
			<?php 
			session_start();
			echo " <h2> Hello ". $_SESSION["user"]."</h2>" ?>
			<h3>Welcome To quizEra</h3>	
			<p>Try out our quizzes and pave your way to be an expert!</p>
			
			
		</div>
	
</div>	

<?php include("../includes/footer.php"); ?>