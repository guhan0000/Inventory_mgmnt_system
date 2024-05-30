<?php 
include "Database_conn.php";
?>
    <!Doctype Html>
    <html>
        <head>
            <h1 Style="text-align:center;color:blueviolet">
            <link rel="Stylesheet" href="Login.css">
            <b>Products</b>
            </h1>
        </head>

        <hr>

        <body class="by">

        <ol type="I">
            <li><h3><b>Notebooks<b></h3></li>
            Product Quantity :
        <?php 
            $sql = " Select Quantity from products where Product_Name ='Notebook' ";
            $result = mysqli_query($conn,$sql);
            $res=mysqli_fetch_row($result);
            //$res1 = $res(0);
            echo implode(" ",$res);
        ?>

        <br>
            <li><h3><b>Books<b></h3></li>
            <ul>
                <li><h4><b>Text Books</b></h4></li>
                Product Quantity :
        <?php 
            $sql = " Select Quantity from products where Product_Name ='TextBooks' ";
            $result = mysqli_query($conn,$sql);
            $res=mysqli_fetch_row($result);
            //$res1 = $res(0);
            echo implode(" ",$res);
        ?>
        
                
                <li><h4><b>Comics Books</b></h4></li>
                Product Quantity :
        <?php 
            $sql = " Select Quantity from products where Product_Name ='Comic_Books' ";
            $result = mysqli_query($conn,$sql);
            $res=mysqli_fetch_row($result);
            //$res1 = $res(0);
            echo implode(" ",$res);
        ?>
        
               
                <li><h4><b>Novels Books</b></h4></li>
                Product Quantity :
        <?php 
            $sql = " Select Quantity from products where Product_Name ='Novel' ";
            $result = mysqli_query($conn,$sql);
            $res=mysqli_fetch_row($result);
            //$res1 = $res(0);
            echo implode(" ",$res);
        ?>
        
                
                <li><h4><b>Fictonal Books</b></h4></li>
                Product Quantity :
        <?php 
            $sql = " Select Quantity from products where Product_Name ='Fiction' ";
            $result = mysqli_query($conn,$sql);
            $res=mysqli_fetch_row($result);
            //$res1 = $res(0);
            echo implode(" ",$res);
        ?>
        
                
                <li><h4><b>Story Books</b></h4></li>
                Product Quantity :
        <?php 
            $sql = " Select Quantity from products where Product_Name ='Story' ";
            $result = mysqli_query($conn,$sql);
            $res=mysqli_fetch_row($result);
            //$res1 = $res(0);
            echo implode(" ",$res);
        ?>
        
                
            </ul>
            <li><h3><b>Pencil<b></h3></li>
            Product Quantity :
            <?php 
                $sql = " Select Quantity from products where Product_Name ='Pencil' ";
                $result = mysqli_query($conn,$sql);
                $res=mysqli_fetch_row($result);
                //$res1 = $res(0);
                echo implode(" ",$res);
        ?>
        
            

            <li><h3><b>Pen<b></h3></li>
            Product Quantity :
            <?php 
                $sql = " Select Quantity from products where Product_Name ='Pen' ";
                $result = mysqli_query($conn,$sql);
                $res=mysqli_fetch_row($result);
                //$res1 = $res(0);
                echo implode(" ",$res);
            ?>
        
            

            <li><h3><b>Paints<b></h3> </li>
            Product Quantity :
            <?php 
                $sql = " Select Quantity from products where Product_Name ='Paint'";
                $result = mysqli_query($conn,$sql);
                $res=mysqli_fetch_row($result);
                //$res1 = $res(0);
                echo implode(" ",$res);
            ?>
            <br>
            <br>

            </ol>

            <br>
            <br>

            <div Style="border-left:20%"></div>
            <div Style="position:absolute;top:15%;left:65%;border:5px solid yellowgreen;border-radius:15px;padding-left:5%;padding-bottom:5%">
            <h2><b>Hire a Inventory Manager /</b></h2>
            <h2><b>Register for a New Inventory Manager </b></h2>

            <a href="Signup_Inv.html">
            <button Style="width:90px;height:40px;border-radius:15px;border-width:3px;border-color:chartreuse;background-color:aquamarine;position:absolute;left:33%"><b> Register Here <b></button>
            </div>
</a>
        </body>
    </html>
