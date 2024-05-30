<?php
include "Database_conn.php" ;
?>
<!DOCTYPE html>
<html>
    <head>
        <body Style="text-align:center">
            <title>notebooks</title>
            
            <h1 align="center">NOTEBOOKS</h1>
            <hr>
            <img  src="Products/images_prod/notebook.jpg" alt="Notebooks">
            <br>
            <br>
            <h3>PRODUCT DESCRIPTION</h3>
            <br>
            <br>
            ABC Notebook -240mm x 180mm,soft cover ruled,100 pages
            <!--<dl>ABC Notebook -240mm x 180mm,soft cover ruled,100 pages</dl>-->
            <br>
            <br>
            <h2>price : Rs.35.00</h2>
            <br>
            <br>
            <h2>Product Quantity : </h2>
            <h2>
                <b>
                    
            <?php 
                $sql = " Select Quantity from products where Product_Name ='Notebook' ";
                $result = mysqli_query($conn,$sql);
                $res=mysqli_fetch_row($result);
                //$res1 = $res(0);
            
                echo implode(" ",$res);

            ?>
            
            </b>
            </h2>
            <h3>Product details</h3>
            <p><b>Brand</b> Abc</p>
            <p><b>Colour</b> Multi</p>
            <p><b>Pages</b> 100</p>
            <p><b>Style</b> Classic</p>
            <p><b>Ruling Type</b> Ruled</p>



        </body>
    </head>
</html>