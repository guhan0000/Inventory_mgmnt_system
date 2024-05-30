<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="Login.css">
    <p Style="text-align:center;position:absolute;top:60px;left:35%;color: aqua;font-size: xx-large;"><b> Welcome to Stock Maintenance </b></p>
</head>
<body class="bgin">
     <form action="login_main.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<div style="position:absolute;left:40%;top:37%">
            <div class="bd">
        <h1 style="color:cyan;font-size:xx-large"><b> Log in </b> </h1>
        <h2 style="background-color:rgb(240, 225, 24);text-align:left;width:250px;"> Inventory Manager </h2>
        <form method="post" action="login_main.php"> <label  id= "Email"style="font-size:large;color:cyan"> Email	&nbsp;&emsp; :</label>
        <input type ="text" placeholder="abc@gmail.com" id= "Email" name="Email_inv" style ="text-align:center" required > <br>
        <label id= "Pass"style="font-size:large;color:cyan">  Password 	:</label>
        <input type ="Password" placeholder="********"  id= "Pass" name="Password_inv" required style ="text-align:center"> <br> <br><br>
        
        <a href ="login_main.php">
        <Button class ="log" type="submit"> <b>Log in </b></Button>
        </a>

        </form>
        
    </div>
</div>
     	
