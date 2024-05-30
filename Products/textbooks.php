<?php
    include "Database_conn.php";
?>
<!DOCTYPE html>
<html>
    <head>
<title>
    textbooks
</title>
<link rel="stylesheet" href="style.css">
    </head>
    <body>
       <h2 style="text-align: center;">TEXTBOOKS</h2> 
       <hr style="border-color:black ;">
<div id="p1">
<img src="images_prod/textbk1.jpg" alt="chemistry_bk" id="img1" style="position:absolute;width:200px;left:37.9%;top:22">
<br>
<h4>PRODUCT DESCRIPTION</h4>
<div id="desc1">
   <p>Class 11 Chemistry Book(2022)</p> 
   <p>First Edition 8 October 2020</p>
   <p>ISBN-13: 978-5678987612</p>
</div>
<br>
<div>
    <p style="text-indent: 225px;"><b>price :</b> Rs.350.00</p>
</div>
<h2>Product Quantity :</h2>
<h2> <b> <t>
<?php 
    $sql = " Select Quantity from products where Product_Name ='TextBooks' ";
    $result = mysqli_query($conn,$sql);
    $res=mysqli_fetch_row($result);
    //$res1 = $res(0);
   echo implode(" ",$res);
?>
</t></b></h2>

<br>
<h4>PRODUCT DETAILS</h4>
<div id="details1">
    
    <p><b>Publisher :</b> Oswall Books and Learning pvt Ltd</p>
    <p><b>Language :</b> English</p>
    <p><b>paperback :</b> 448 pages</p>
    <p><b>ISBN-13 :</b> 978-5678987612</p>
    <p><b>Item Weight :</b> 490 g</p>
    
</div>
</div>
<div id="p2">
    <img src="images_prod/textbk2.jpg" alt="physics_bk" id="img2">
<br>
<h4>PRODUCT DESCRIPTION</h4>
<div id="desc2">
   <p>Physics Galaxy 21: Advanced Illustration in Physics</p> 
   <p>First Edition 8 March 2020</p>
   <p>ISBN-13: 978-5678923412</p>
</div>
<br>
<div>
    <p style="text-indent:225px;"><b>price :</b> Rs.450.00</p>
</div>
<h2>Product Quantity :</h2>
<h2> <b> <t>
<?php 
    $sql = " Select Quantity from products where Product_Name ='TextBooks' ";
    $result = mysqli_query($conn,$sql);
    $res=mysqli_fetch_row($result);
    //$res1 = $res(0);
   echo implode(" ",$res);
?>
</t></b></h2>
<br>
<h4>PRODUCT DETAILS</h4>
<div id="details2">
    
    <p><b>Publisher :</b> G.K publishers</p>
    <p><b>Language :</b> English</p>
    <p><b>paperback :</b> 899 pages</p>
    <p><b>ISBN-13 :</b> 978-5678987612</p>
    <p><b>Item Weight :</b> 650 g</p>
    
</div>

</div>
</body>
</html>