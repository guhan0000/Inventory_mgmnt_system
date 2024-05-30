<?php
    include "Database_conn.php"
?>
<!DOCTYPE html>
<html>
    <head>
<title>
    fictionbk
</title>
<link rel="stylesheet" href="style.css">
    </head>
    <body>
       <h2 style="text-align: center;">FICTION BOOKS</h2> 
       <hr style="border-color:black ;">
<div id="p1">
<img src="images_prod/fic1.jpg" alt="fictionbk1" id="img1" Style="width:200px;position:absolute;left:37.9%">
<br>
<h4>PRODUCT DESCRIPTION</h4>
<div id="desc1">
   <p>The Midnight Library</p> 
   <p>by Matt Haig</p>
   <p>ISBN-13: 978-124644665</p>
</div>
<br>
<div>
    <p style="text-indent: 225px;"><b>price :</b> Rs.920.00</p>
</div>
<h2>Product Quantity :</h2>
<h2> <b> <t>
<?php 
    $sql = " Select Quantity from products where Product_Name ='Fiction' ";
    $result = mysqli_query($conn,$sql);
    $res=mysqli_fetch_row($result);
    //$res1 = $res(0);
   echo implode(" ",$res);
?>
</t></b></h2>

<br>
<h4>PRODUCT DETAILS</h4>
<div id="details1">
    
    <p><b>Publisher :</b> Canongaten Books</p>
    <p><b>Language :</b> English</p>
    <p><b>paperback :</b> 304 pages</p>
    <p><b>ISBN-13 :</b> 978-124644665</p>
    <p><b>Publication Date :</b> 30 August 2020</p>
    
</div>
</div>
<div id="p2">
    <img src="images_prod/fic2.jpg" alt="fictionbk2" id="img2">
<br>
<h4>PRODUCT DESCRIPTION</h4>
<div id="desc2">
   <p>The Time Machine</p> 
   <p>by H.G.Wells</p>
   <p>ISBN-13: 978-897654321</p>
</div>
<br>
<div>
    <p style="text-indent:225px;"><b>price :</b> Rs.290.00</p>
</div>
<h2>Product Quantity :</h2>
<h2> <b> <t>
<?php 
    $sql = " Select Quantity from products where Product_Name ='Fiction' ";
    $result = mysqli_query($conn,$sql);
    $res=mysqli_fetch_row($result);
    //$res1 = $res(0);
   echo implode(" ",$res);
?>
</t></b></h2>
<br>
<h4>PRODUCT DETAILS</h4>
<div id="details2">
    
    <p><b>Publisher :</b> Fingerprint! publishing</p>
    <p><b>Language :</b> English</p>
    <p><b>paperback :</b> 144 pages</p>
    <p><b>ISBN-13 :</b> 978-897654321</p>
    <p><b>Publication Date :</b> 22 August 2020</p>
</div>

</div>
    </body>
</html>