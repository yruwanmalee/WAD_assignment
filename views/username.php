<?php

    session_start();

   @$db = new mysqli("localhost", username, password, table);

   if ($db->connect_errno !=0)  {
       exit;
   }

   $usern = $_POST['username'];
   $passw = $_POST['passw'];

   $query = "SELECT * FROM cf_users WHERE(firstname='".$firstName."' and email='".$usern."' and password='".$passw."')"; 

   $db->query($query); 

    $result = $db->query($query);

    $row = mysqli_fetch_array($result, MYSQLI_BOTH);

    if($row[0]>0)  {
        $_SESSION['email'] = $usern;
        $_SESSION['firstName'] = $row['firstName'];  // Modified after suggestion
        header("location: page.php");
        exit();
    }
    else {
        exit("Login Failed.<br/>'.
       'Please fill them in and try again. <a href='javascript:history.go(-1)'>Go back</a>");
    }

    $closed = $db->close();
?>