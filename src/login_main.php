<?php 
session_start(); 
include "Database_conn.php";


if (isset($_POST['Email']) && isset($_POST['Pass'])) 
{

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$Email = validate($_POST['Email']);
    echo $Email;
	$pass = validate($_POST['Pass']);
    echo $pass;

	if (empty($Email)) 
	{
		header("Location: log.php?error=User Name is required");
	    exit();
	}
	else if(empty($pass))
	{
        header("Location: log.php?error=Pass is required");
	    exit();
	}
	else
	{

        $sql = "SELECT * FROM customer WHERE Email_id='$Email' AND Pass='$pass'";
		
		
		$result = mysqli_query($conn,$sql);

        //print_r($result);

        
         $temp=(mysqli_num_rows( mysqli_query($conn,$sql)));
         print($temp);
         if(mysqli_num_rows($result) === 1) 
		 {
			$row = mysqli_fetch_assoc($result);
            print_r($row) ;
        
            print($row['Email_id']);

                $_SESSION['Email_id'] = $row['Email_id'];
            	$_SESSION['Password'] = $row['Password'];
            	$_SESSION['User_id'] = $row['User_id'];

				$_SESSION['user_name'] = $row['Name'];

				print($row['Name']);

				//$sql= "Select Name From customer where User_id = $row['User_id']";
            	header("Location: Home.php");
		        exit();

            

           if ($row['Email_id'] === $Email && $row['Pass'] === $pass) 
		   {
                $_SESSION['Email_id'] = $row['Email_id'];
                $_SESSION['Password'] = $row['Password'];
                $_SESSION['User_id'] = $row['User_id'];
                header("Location: Home.php");
		        exit();
            }
			else
			{
				header("Location: log.php?error=Incorect User name or Password");
		        exit();
			}
		}
	
		else
		{
			header("Location: log.php?error=Incorect User name or Pass");
	    	exit();
		}
	}
}
else if(isset($_POST['Email_id']) && isset($_POST['Password'])) 
{	

				function validate($data)
				{
				   $data = trim($data);
				   $data = stripslashes($data);
				   $data = htmlspecialchars($data);
				   return $data;
				}
			
				$Email = validate($_POST['Email_id']);
				echo $Email;
				$pass = validate($_POST['Password']);
				echo $pass;
				
				$sql = "SELECT * FROM vendor WHERE Email_id='$Email' AND Pass='$pass'";
		
		
				$result = mysqli_query($conn,$sql);

        		//print_r($result);

        
        		$temp=(mysqli_num_rows( mysqli_query($conn,$sql)));
       		  	print($temp);
         		if(mysqli_num_rows(mysqli_query($conn,$sql)) === 1) 
				{
					$row = mysqli_fetch_assoc($result);
            		print_r($row) ;
        
            		print($row['Email_id']);

                	$_SESSION['Email_id'] = $row['Email_id'];
            		$_SESSION['Password'] = $row['Pass'];
            		$_SESSION['User_id'] = $row['User_id'];

					$_SESSION['user_name'] = $row['Name'];
					print($row['Name']);

					//$sql= "Select Name From customer where User_id = $row['User_id']";
            		
					header("Location: server.html");
		        	exit();            

           			if ($row['Email_id'] === $Email && $row['Password'] === $pass) {
                		$_SESSION['Email_id'] = $row['Email_id'];
                		$_SESSION['Password'] = $row['Password'];
                		$_SESSION['User_id'] = $row['User_id'];
                		header("Location: server.html");
		       			exit();
            		}
					else
					{
						header("Location: log.php?error=Incorect User name or Password");
		        		exit();
					}
				}
				else
				{
					header("Location: log.php?error=Incorect User name or Pass");
	        		exit();
				}
}

		

else{
header("Location: log.php");
exit();
}


