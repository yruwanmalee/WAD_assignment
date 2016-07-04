<!-- |ADMIN HOME PAGE| -->

<?php include("../includes/user_header.php") ?>
<?php include("../includes/navigations/us_active_quizzes.php") ?>
<?php include("../config/config.php") ?>
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
					<h3> SOFTWARE ENGINEERING QUIZ</h3>
					<form method="post" action="review.php">
					<?php
					$res = mysqli_query($connect, "select * from questions ORDER BY RAND() limit 10") or die(mysql_error());
					$rows = mysqli_num_rows($res);
					$i=1;
                         while($result=mysqli_fetch_array($res)){?>

                             <div id='question<?php echo $i;?>' class='cont'>
                             <p class='questions' id="qname<?php echo $i;?>"> <?php echo $i?>.<?php echo $result['question'];?></p>
                             <table class="question-table">
                               <tr>
                                 <td>

                                   <input type="radio" value="1" id='radio1_<?php echo $result['question_id'];?>' name='<?php echo $result['question_id'];?>'/><?php echo $result['answer_01'];?>
                                 </td>
                               </tr>
                               <tr>
                                 <td>

                                   <input type="radio" value="2" id='radio1_<?php echo $result['question_id'];?>' name='<?php echo $result['question_id'];?>'/><?php echo $result['answer_02'];?>
                                 </td>

                               </tr>
                               <tr>
                                 <td>

                                   <input type="radio" value="3" id='radio1_<?php echo $result['question_id'];?>' name='<?php echo $result['question_id'];?>'/><?php echo $result['answer_03'];?>
                                 </td>

                               </tr>
                               <tr>
                                 <td>

                                   <input type="radio" value="4" id='radio1_<?php echo $result['question_id'];?>' name='<?php echo $result['question_id'];?>'/><?php echo $result['answer_04'];?>

                                 </td>

                               </tr>
                               <tr>
                                 <td>

                                   <input type="radio" checked='checked' style='display:none' id='radio1_<?php echo $result['question_id'];?>' name='<?php echo $result['question_id'];?>'/>

                                 </td>

                               </tr>
                             </table>

                             </div>
                  <?php $i++;} ?>
					
					<input type="submit">
					</form>
			</div>
	</div>
</div>

<?php include("../includes/footer.php"); ?>