<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="Login.css">
    <p Style="text-align:center;position:absolute;top:60px;left:35%;color: aqua;font-size: xx-large;"><b> Welcome to Stock Maintenance </b></p>
</head>
<body class="bg">
     <form action="login_main.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<div style="position:absolute;left:20%;top:37%">
            <div class="bd">
        <h1 style="color:gold;font-size:xx-large"><b> Log in </b> </h1>
        <h2 style="background-color:rgb(240, 225, 24);text-align:left;width:250px;"> Customer</h2>
        <form method="post" action="login_main.php"> <label  id= "Email"style="font-size:large;color:gold"> Email	&nbsp;&emsp; :</label>
        <input type ="text" placeholder="abc@gmail.com" id= "Email" name="Email" style ="text-align:center" required > <br>
        <label id= "Pass"style="font-size:large;color:gold">  Password 	:</label>
        <input type ="Password" placeholder="********"  id= "Pass" name="Pass" required style ="text-align:center"> <br> <br><br>
        
        <a href ="logi.html">
        <Button class ="log" type="submit"> <b>Log in </b></Button>
        </a>

        </form>

        <a href="Signup.html">
            <p  Style="color:gold;text-align:center;font-size:medium;" title="account page"><inserted> <b>Create new Account</b></inserted></p>
        </a>


        
    </div>
</div>
     	


<div class="line1" Style="position:absolute;left:50%;top:20%">
            <div class="bd">

        <h1 style="color:rgb(119, 250, 58)" font-size:20><b> Log in </b> </h1>
        <h2 style="background-color:rgb(233, 67, 150);text-align:left;width:250px;"> Vendor</h2>
        <form action="login_main.php" method="post"> 
        <label  id= "Email" style="font-size:large;color:chartreuse"> Email	&nbsp;&emsp; :</label>
        <input type ="Email id" placeholder="abc@gmail.com" id="Email_id" name="Email_id" style ="text-align:center" required > <br>
        <label id= "Password"style="font-size:large;color:chartreuse">  Password 	:</label>
        <input type ="Password" placeholder="********" id="Password" name="Password" required style ="text-align:center"> <br> <br><br><br>
        <a href ="login_main.php">
        <Button type="submit" class="log"> <b>Log in </b></Button>
        </a>
        </form>
        
        <a href="Signup.html">
            <p Style="color:chartreuse;text-align:center;font-size:medium;"><inserted> <b>Create new Account</b></inserted></p>
        </a>
        
        </div></div>

</body>
</html>