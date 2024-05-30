<?php
include "Database_conn.php";

$name=$_POST['Name'];
$email=$_POST['Email'];
$pass=$_POST['Pass'];
$mob=$_POST['Mobile'];
$addr=$_POST['addr'];


$sql = "Insert into Inventory_Manager(Name,Email_id,Password,Mobile_Number,Address) Values('$name','$email','$pass',$mob,'$addr')";

  if($conn->query($sql) === TRUE) 
  {
      echo "New User created successfully";
  } 
  else 
  {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
?>