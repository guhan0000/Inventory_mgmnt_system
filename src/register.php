<?php 
include "Database_conn.php";
$name=$_POST['Name'];
$email=$_POST['Email'];
$pass=$_POST['Pass'];
$mob=$_POST['Mobile'];
$addr=$_POST['addr'];

/*$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "Stock_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

*/

/*if (!$conn) {
	echo "Connection failed!";
}*/
$user=$_POST['Sign_up_as'];

echo $user;

$sql1="SELECT MAX(User_id) FROM customer";
$result= mysqli_query($conn,$sql1);
$user_id=mysqli_fetch_lengths($result);
echo $user_id;
print_r(mysqli_fetch_assoc($result));
if($user==='Vendor')
{
    $sql= "Insert into Vendor(Name,Email_id,Pass,Mobile_Number,Address) Values('$name','$email','$pass',$mob,'$addr')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}
else
{
  
  $sql= "Insert into customer(Name,Email_id,Pass,Mobile_Number,Address) Values('$name','$email','$pass',$mob,'$addr')";

  if($conn->query($sql) === TRUE) 
  {
      echo "New record created successfully";
  } 
  else 
  {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}


?>