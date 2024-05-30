<?php
    include "Database_conn.php";
?>
<!DOCTYPE html>
<html>
    <head>
<title>
    novelbooks
</title>
<link rel="stylesheet" href="style.css">
    </head>
    <body>
       <h2 style="text-align: center;">NOVELS</h2> 
       <hr style="border-color:black ;">
<div id="p1">
<img src="images_prod/novel1.jpg" alt="novel1_bk" id="img1">
<br>
<h4>PRODUCT DESCRIPTION</h4>
<div id="desc1">
   <p>The Complete Novels of Sherlock Holmes</p> 
   <p>by Arthur Conan Doyle</p>
   <p>ISBN-13: 978-8761234567</p>
</div>
<br>
<div>
    <p style="text-indent: 225px;"><b>price :</b> Rs.500.00</p>
</div>
<h2>Product Quantity :</h2>
<h2> <b> <t>
<?php 
    $sql = " Select Quantity from products where Product_Name ='Novel' ";
    $result = mysqli_query($conn,$sql);
    $res=mysqli_fetch_row($result);
    //$res1 = $res(0);
   echo implode(" ",$res);
?>
</t></b></h2>

<br>
<h4>PRODUCT DETAILS</h4>
<div id="details1">
    
    <p><b>Publisher :</b> Fingerprint! Publishing</p>
    <p><b>Language :</b> English</p>
    <p><b>paperback :</b> 536 pages</p>
    <p><b>ISBN-13 :</b> 978-8761234567</p>
    <p><b>Publication Date :</b> 10 January 2017</p>
    
</div>
</div>
<div id="p2">
    <img src="images_prod/novel2.jpg" alt="novel2_bk" id="img2">
<br>
<h4>PRODUCT DESCRIPTION</h4>
<div id="desc2">
   <p>Harry Potter and the Prisoner of Azkaban</p> 
   <p>by J.K.Rowling</p>
   <p>ISBN-13: 978-14068547656</p>
</div>
<br>
<div>
    <p style="text-indent:225px;"><b>price :</b> Rs.450.00</p>
</div>
<h2>Product Quantity :</h2>
<h2> <b> <t>
<?php 
    $sql = " Select Quantity from products where Product_Name ='Novel' ";
    $result = mysqli_query($conn,$sql);
    $res=mysqli_fetch_row($result);
    //$res1 = $res(0);
   echo implode(" ",$res);
?>
</t></b></h2>

<br>
<h4>PRODUCT DETAILS</h4>
<div id="details2">
    
    <p><b>Publisher :</b> Bloomsbury Children's Books</p>
    <p><b>Language :</b> English</p>
    <p><b>paperback :</b> 480 pages</p>
    <p><b>ISBN-13 :</b> 978-14068547656</p>
    <p><b>Publication Date :</b>3 September 4 2003</p>
    
    
</div>

</div>
    </body>
</html>