
<?php
	include ('../config/config.php');
	$sql = "SELECT question,answer01,answer02,answer03,answer04 FROM questions";
	$result = $connect->query($sql);
	
	if (result->num_rows > 0{
		while ($row = $result -> fetch_assoc()){
			echo "question:" .$row["question"]. .$row["answer01"]. .$row["answer02"]. .$row["answer03"]. .$row["answer04"] 
		}
	}
	?>


