<?php
    include "Database_conn.php";
?>
<!DOCTYPE html>
<html>
    <head>
<title>
    pencils
</title>
<link rel="stylesheet" href="style.css">
    </head>
    <body>
       <h2 style="text-align: center;">PENCILS</h2> 
       <hr style="border-color:black ;">
<div id="p1">
<img src="images_prod/pencil1.jpg" alt="pencil1" id="img1" style="position: absolute; left: 461.5px;">
<br>
<h4>PRODUCT DESCRIPTION</h4>
<div id="desc1">
   <p>DOMS Neon Pencil Nrt 10 Pcs</p> 
   <p>For dark and neat writing</p>
   <p>Comes in five attractive neon colours</p>
</div>
<br>
<div>
    <p style="text-indent: 225px;"><b>price :</b> Rs.60.00</p>
</div>
<h2>Product Quantity :</h2>
<h2> <b> <t>
<?php 
    $sql = " Select Quantity from products where Product_Name = 'Pencil' ";
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
    <p><b>colour :</b> Black</p>
    <p><b>Material :</b> Wood</p>
    <p><b>Net Quantity :</b> 10 count </p>
    
</div>
</div>
<div id="p2">
    <img src="images_prod/pencil2.jpg" alt="pencil2" id ="img2">
<br>
<h4>PRODUCT DESCRIPTION</h4>
<div id="desc2">
   <p>Nataraj 621 Pencil Jar - Pack of 50</p> 
   <p>Writing pencils</p>
   <p>India’s most recognized stationery</p>
</div>
<br>
<div>
    <p style="text-indent:225px;"><b>price :</b> Rs.190.00</p>
</div>
<h2>Product Quantity :</h2>
<h2> <b> <t>
<?php 
    $sql = " Select Quantity from products where Product_Name ='Pencil' ";
    $result = mysqli_query($conn,$sql);
    $res=mysqli_fetch_row($result);
    //$res1 = $res(0);
   echo implode(" ",$res);
?>
</t></b></h2>
<br>
<h4>PRODUCT DETAILS</h4>
<div id="details2">
    
    <p><b>Brand :</b> Nataraj</p>
    <p><b>colour :</b> Black</p>
    <p><b>Ink colour :</b> Blue</p>
    <p><b>Material :</b> Wood</p>
    <p><b>Net Quantity :</b> 50 count </p>
   
    
</div>

</div>
</body>
</html>
