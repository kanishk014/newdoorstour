<?php
$conn = new mysqli('localhost','jtmdrjci_admin','Jaisairam11*','jtmdrjci_doorstour','3306');
if($conn->connect_error){
  echo "$conn->connect_error";
  die("Connection Failed : ". $conn->connect_error);
}
?>
