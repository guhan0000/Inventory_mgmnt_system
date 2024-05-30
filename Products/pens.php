<?php
include "Database_conn.php"
?>
<!DOCTYPE html>
<html>
    <head>
<title>
    pens
</title>
<link rel="stylesheet" href="style.css">
    </head>
    <body>
       <h2 style="text-align: center;">PENS</h2> 
       <hr style="border-color:black ;">
<div id="p1">
<img src="images_prod/pen1.jpg" alt="pen1" id="img1" style="position: absolute;left: 462px;">
<br>
<h4>PRODUCT DESCRIPTION</h4>
<div id="desc1">
   <p>Cello clear Blue Ball pen Jar of 60 Units</p> 
   <p>Ball pens set for students</p>
   <p>and Office use</p>
</div>
<br>
<div>
    <p style="text-indent: 225px;"><b>price :</b> Rs.345.00</p>
</div>
<h2>Product Quantity :</h2>
<h2> <b> <t> &emsp;
<?php 
    $sql = " Select Quantity from products where Product_Name ='Pen' ";
    $result = mysqli_query($conn,$sql);
    $res=mysqli_fetch_row($result);
    //$res1 = $res(0);
   echo implode(" ",$res);
?>
</t></b></h2>

<br>
<h4>PRODUCT DETAILS</h4>
<div id="details1">
    
    <p><b>Brand :</b> Cello</p>
    <p><b>colour :</b> Clear</p>
    <p><b>Ink colour :</b> Blue</p>
    <p><b>Point Type :</b> Fine</p>
    <p><b>Net Quantity :</b> 60 count </p>
    
</div>
</div>
<div id="p2" style="float:right;">
    <img src="images_prod/pen2.jpg" alt="pen2" id="img2">
<br>
<h4>PRODUCT DESCRIPTION</h4>
<div id="desc2">
   <p>Classmate Octane Neon-Blue Gel Pens (Pack of 5)</p> 
   <p>Waterproof Ink for Smudge free writing</p>
   <p>Preffered by Students for Exam</p>
</div>
<br>
<div>
    <p style="text-indent:225px;"><b>price :</b> Rs.50.00</p>
</div>
<h2>Product Quantity :</h2>
<h2> <b> <t>
<?php 
    $sql = " Select Quantity from products where Product_Name ='Pen' ";
    $result = mysqli_query($conn,$sql);
    $res=mysqli_fetch_row($result);
    //$res1 = $res(0);
   echo implode(" ",$res);
?>
</t></b></h2>

<br>
<h4>PRODUCT DETAILS</h4>
<div id="details2">
    
    <p><b>Brand :</b> Classmate</p>
    <p><b>colour :</b> blue</p>
    <p><b>Ink colour :</b> Blue</p>
    <p><b>Point Type :</b> Fine</p>
    <p><b>Net Quantity :</b> 5 count </p>
   
    
</div>

</div>
    </body>
</html>