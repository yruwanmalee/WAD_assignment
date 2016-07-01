<!-- |ADMIN HOME PAGE| -->

<?php include("../includes/admin_header.php") ?>
<?php include("../includes/navigations/ad_nav_active_crt_quiz.php") ?>
<div class="col-b-1">
	<div class="col-c-1">
		<h1 class="cont"> Create your quiz here</h1>
			
			<div class="col-c-2">
			<h2>New Quiz</h2>
			<table border="0">
			<form action="../php/quiz.php" method="post">
			<tr>
			<td>Quiz ID:</td>
			<td><input type="text" name="qid" /> </td>
			</tr>
			<tr>
			<td>Quiz Name:</td>
			 <td><input type="text" name="nwq" /> </td>
			 </tr>
			 <tr>
			 <td></td>
			 <td><input type="submit" name="crt" value="Create Quiz" /></td>
			 </tr>
			 </form>
			 </table>
			</div>

			<div class="col-c-2">
			<h2>Add questions to the quiz</h2>

				<form method="post" action="../php/questions.php">
					<table border="0">
						<tr>
							<td> Quiz ID:</td> 
							<td><input  required type="text" name="qid"></td>
						</tr>
						<tr>
							<td> Question ID:</td> 
							<td><input required type="text" name="quesid"></td>
						</tr>
						<tr>
							<td> Question:</td> 
							<td><textarea required name="nq"></textarea>	</td>
						</tr>
						<tr>	
							<td>Answer 01:</td>
							<td><input required type="text" name="ans1" /> </td>
						</tr>
						<tr>	
							<td>Answer 02:</td>
							<td><input required type="text" name="ans2" /></td>
						</tr>
						<tr>	
							<td>Answer 03:</td>
							<td><input required type="text" name="ans3" /> </td>
						</tr>
						<tr>	
							<td>Answer 04:</td>
							<td><input required type="text" name="ans4" /></td>
						</tr>
						<tr>
							<td>Correct Answer: </td>
							<td><input required type="text" name="crans" /> </td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="addques" value="Add Question" /></td>
						</tr>	
					</table>
				</form>	
			</div>
	</div>
</div>

<?php include("../includes/footer.php"); ?>

