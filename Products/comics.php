<?php
include "Database_conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2 style="text-align: center;">COMIC BOOK</h2> 
       <hr style="border-color:black ;">
<img src="images_prod/cmc1.jpg" alt="comic1_bk" id="img1" style="position:absolute;width:200px;left:33.7%;top:20.7%">
<br>
<div id="p1">
<h4>PRODUCT DESCRIPTION</h4>
<div id="desc1">
   <p>Marvel's Wolverine vs Hulk</p> 
   <p>First Volume</p>
   
</div>
<br>
<div>
    <p style="text-indent: 225px;"><b>price :</b> Rs.150.00</p>
</div>
<br>
<h2>Product Quantity :</h2>
<h2> <b> <t>
<?php 
    $sql = " Select Quantity from products where Product_Name ='Comic_Books' ";
    $result = mysqli_query($conn,$sql);
    $res=mysqli_fetch_row($result);
    //$res1 = $res(0);
   echo implode(" ",$res);
?>
</t></b></h2>
<br>
<h4>PRODUCT DETAILS</h4>
<div id="details1">
    
    <p><b>Publisher :</b> Marvel</p>
    <p><b>Language :</b> English</p>
    <p><b>print length :</b> 30 pages</p>
    <p><b>Publication date :</b> 27 May 2009</p>
    <p><b>ASIN :</b> B00ZMP6MOS</p>
    <p><b>Reading age :</b> 12-17 years</p>
    
</div>
</div>
<div id="p2">
    <img src="images_prod/cmc2.jpg" alt="comic2_bk" id ="img2" Style=" position:absolute;width:200px;left:66.6%;">
<br>
<h4>PRODUCT DESCRIPTION</h4>
<div id="desc2">
   <p>Marvel's Invincible Iron Man</p> 
   <p>Stark Resilient Book1</p>
   <p>(2008-2012)</p>
</div>
<br>
<div>
    <p style="text-indent:225px;"><b>price :</b> Rs.220.00</p>
</div>
<h2>Product Quantity :</h2>
<h2> <b> <t>
<?php 
    $sql = " Select Quantity from products where Product_Name ='Comic_Books' ";
    $result = mysqli_query($conn,$sql);
    $res=mysqli_fetch_row($result);
    //$res1 = $res(0);
   echo implode(" ",$res);
?>
</t></b></h2>
<br>
<h4>PRODUCT DETAILS</h4>
<div id="details2">
    
    <p><b>Publisher :</b> Marvel</p>
    <p><b>Language :</b> English</p>
    <p><b>paperback :</b> 121 pages</p>
    <p><b>ASIN :</b> B00AR52ZM</p>
    <p><b>Reading age :</b> 12-17 years</p>
    
</div>

</div>
</body>
</html>