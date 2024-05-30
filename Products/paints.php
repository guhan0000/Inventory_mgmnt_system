<?php
include "Database_conn.php";
?>
<!DOCTYPE html>
<html>
    <head>
<title>
    paints
</title>
<link rel="stylesheet" href="style.css">
    </head>
    <body>
       <h2 style="text-align: center;">PAINTS</h2> 
       <hr style="border-color:black ;">
<div id="p1">
<img src="images_prod/paint1.jpg" alt="paint1" id="img1" style="position: absolute;left: 462px;">
<br>
<h4>PRODUCT DESCRIPTION</h4>
<div id="desc1">
   <p>Asian Paints ezyCR8 Health Shield</p> 
   <p>Wall Paint (White) with Anti-Bacterial Coating</p>
   <p>1L Bucket (White)</p>
</div>
<br>
<div>
    <p style="text-indent: 225px;"><b>price :</b> Rs.720.00</p>
</div>
<h2>Product Quantity :</h2>
<h2> <b> <t>
<?php 
    $sql = " Select Quantity from products where Product_Name ='Paint' ";
    $result = mysqli_query($conn,$sql);
    $res=mysqli_fetch_row($result);
    //$res1 = $res(0);
   echo implode(" ",$res);
?>
</t></b></h2>
<br>
<h4>PRODUCT DETAILS</h4>
<div id="details1">
    
    <p><b>Brand :</b> Asian Paints</p>
    <p><b>colour :</b> White</p>
    <p><b>Finish Type :</b> Gloss</p>
    <p><b>Item Volume :</b>1 L </p>
    
</div>
</div>
<div id="p2">
    <img src="images_prod/paint2.jpg" alt="paint2" id="img2">
<br>
<h4>PRODUCT DESCRIPTION</h4>
<div id="desc2">
   <p>Asian Paints Spray Paint</p> 
   <p>Crackle Effect Spray 200ml</p>
   
</div>
<br>
<div>
    <p style="text-indent:225px;"><b>price :</b> Rs.180.00</p>
</div>
<h2>Product Quantity :</h2>
<h2> <b> <t>
<?php 
    $sql = " Select Quantity from products where Product_Name ='Paint' ";
    $result = mysqli_query($conn,$sql);
    $res=mysqli_fetch_row($result);
    //$res1 = $res(0);
   echo implode(" ",$res);
?>
</t></b></h2>
<br>
<h4>PRODUCT DETAILS</h4>
<div id="details2">
    
    <p><b>Brand :</b> Asian Paints</p>
    <p><b>colour :</b> Crackle</p>
    <p><b>Finish Type :</b> Matte</p>
    <p><b>Point Type :</b> Fine</p>
    <p><b>Item Volume :</b>200 ml </p>
   
    
</div>

</div>
    </body>
</html>