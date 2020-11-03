<?php
  //fetching data

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  //create Database
  //connect Database

  $conn = new mysqli('localhost','root','','doorstour');
  if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
  }
  $query1 = "SELECT id FROM signup WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($conn, $query1)
                          or die($mysqli_error($conn));
  $num = mysqli_num_rows($result);
  if ($num != 0) {
    echo "User account already exists, please Signin";
  }
  else {
    $stmt = $conn->prepare("insert into signup(firstname,lastname,email,password)
                    values(?, ?, ?, ?)");
    $stmt->bind_param("ssss",$firstname, $lastname, $email, $password);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header("location: index.php");
  }
?>
