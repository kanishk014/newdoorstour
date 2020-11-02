<?php

  $email = $_POST['email'];
  $password = $_POST['password'];

  $conn = new mysqli('localhost','root','','doorstour');
  $query1 = "SELECT id FROM signup WHERE email = '$email' AND password = '$password'";
  $query_result = mysqli_query($conn, $query1);

  if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
  }elseif (mysqli_num_rows($query_result) == 0) {
    echo "User account does not exists.";
  }else{
    $row = mysqli_fetch_array($query_result);
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    header("location: index.php");
  }
 ?>
