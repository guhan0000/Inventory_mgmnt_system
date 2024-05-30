<?php
    include "Database_conn.php";
?>
<!DOCTYPE html>
<html>
    <head>
<title>
    storybooks
</title>
<link rel="stylesheet" href="style.css">
    </head>
    <body>
       <h2 style="text-align: center;">STORY BOOKS</h2> 
       <hr style="border-color:black ;">
<div id="p1">
<img src="images_prod/story1.jpg" alt="story1_bk" id="img1">
<br>
<h4>PRODUCT DESCRIPTION</h4>
<div id="desc1">
   <p>Fairy Tales</p> 
   <p>by Hans Christian Anderson</p>
   <p>ISBN-13: 978-874893933</p>
</div>
<br>
<h2>Product Quantity : </h2>
            <h2>
                <b>
                    
            <?php 
                $sql = " Select Quantity from products where Product_Name ='Story' ";
                $result = mysqli_query($conn,$sql);
                $res=mysqli_fetch_row($result);
                //$res1 = $res(0);
            
                echo implode(" ",$res);

            ?>
<div>
    <p style="text-indent: 225px;"><b>price :</b> Rs.300.00</p>
</div>
<br>
<h4>PRODUCT DETAILS</h4>
<div id="details1">
    
    <p><b>Publisher :</b> Wonder House Books</p>
    <p><b>Language :</b> English</p>
    <p><b>paperback :</b> 88 pages</p>
    <p><b>ISBN-13 :</b> 978-93843280</p>
    <p><b>Publication Date :</b> 12 December 2010 </p>
    
</div>
</div>
<div id="p2">
    <img src="images_prod/story2.jpg" alt="story2_bk" id="img2">
<br>
<h4>PRODUCT DESCRIPTION</h4>
<div id="desc2">
   <p>The Jungle book</p> 
   <p>by Rudyard kipling</p>
   <p>ISBN-13: 978-5678923412</p>
</div>
<br>
<div>
    <h2>Product Quantity : </h2>
            <h2>
                <b>
                    
            <?php 
                $sql = " Select Quantity from products where Product_Name ='Story' ";
                $result = mysqli_query($conn,$sql);
                $res=mysqli_fetch_row($result);
                //$res1 = $res(0);
            
                echo implode(" ",$res);

            ?>
            
            </b>
            </h2>
    <p style="text-indent:225px;"><b>price :</b> Rs.450.00</p>
</div>
<br>
<h4>PRODUCT DETAILS</h4>
<div id="details2">
    
    <p><b>Publisher :</b> Wonder House Books</p>
    <p><b>Language :</b> English</p>
    <p><b>paperback :</b> 240 pages</p>
    <p><b>ISBN-13 :</b> 978-5678923412</p>
    <p><b>Publication Date :</b> 27 July 2002 </p>
   
    
</div>

</div>
    </body>
</html>