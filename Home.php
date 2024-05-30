<?php 
session_start();

if (isset($_SESSION['User_id']) && isset($_SESSION['Email_id']) ){

     $name=$_SESSION['user_name']

 ?> 
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" href="Login.css">
</head>
<body >
<br>
     <div Style = "background-color:cornflowerblue;text-align:center ; padding-left:10px; padding-right:25px; padding-bottom:50px;color:aqua" >     <h1>Hello, <?php echo $name; ?></h1>
     <h2> <inserted>  <b>
          Products Details ....
          </b>
          </inserted>
     </h2>

     <hr> </hr>


     <a href ="Notebook.php">
     <div style="background-color:blanchedalmond ; padding-left:10px;padding-right:25px;padding-bottom:40px;padding-top:30px;">

     <br> <br>

     <div>
                    
                    <img class src ="Products/images_prod/notebook.jpg" style=" position:absolute;left:10%;height:90px;width:200px;top:220px;">
                    
                    <div class="vertical"></div>

                    <h2 Style ="text-align:center" > NOTEBOOKS </h2>
 
                    <style>
                         .vertical {
                         border-left: 3px solid chocolate;
                         height: 155px;
                         position:absolute;
                         top:185px;
                         left: 400px;
                    }
                    </style>

                    

                    <br>
                    <br>

          </div>

          <hr>
     

          
    
     <a href ="Products/pencils.php">
     <div style="background-color:cyan ; padding-left:10px;padding-right:25px;padding-bottom: 60px;padding-top:40px; ">

     
     
     <div>
                    
                    <img class src ="products/images_prod/pencil1.jpg" style=" position:absolute;left:10%;height:90px;width:200px;top:400px;">
                    
                    <div class="vertical1"></div>

                    <h2 Style ="text-align:center" > PENCIL </h2>
 
                    <style>
                         .vertical1{
                         border-left: 3px solid chocolate;
                         height: 165px;
                         position:absolute;
                         top:340px;
                         left: 400px;
                    }
                    </style>

                    <br>
                    <br>

          </div>

          <hr>
     
     

     <a href ="Products/Books.html">
     <div style="background-color:grey; padding-left:10px;padding-right:25px;padding-bottom:20px;">

     <br> <br>

     <div>
                    
               <img class src ="Products/images_prod/novel1.jpg" style=" position:absolute;left:10%;height:90px;width:200px;top:555px;">
                    
               <div class="vertical2"></div>

               <h2 Style ="text-align:center" >Books</h2>
 
               <style>
                    .vertical2{
                    border-left: 3px solid chocolate;
                    height: 150px;
                    position:absolute;
                    top:500px;
                    left: 400px;
               }
               </style>
          </div>
    
               <br> <br>

               </div>

               <hr>

          

     <a href ="Products/paints.php">
     

     <div>
                    
               <img class src ="Products/images_prod/paint2.jpg" style=" position:absolute;left:10%;height:90px;width:200px;top:710px;">
                    
               <div class="vertical3"></div>

               <h2 Style ="text-align:center" > Paints </h2>
 
               <style>
                    .vertical3{     
                    border-left: 3px solid chocolate;
                    height: 160px;
                    position:absolute;
                    top:650px;
                    left: 400px;
                    }
               </style>

                    

               
     </div>

     </div>
          <hr>
          

     <a href ="Products/pens.php">
     
     <br> <br>

     <div>
                    
               <img class src ="Products/images_prod/pen1.jpg" style=" position:absolute;left:10%;height:90px;width:200px;top:850px;">
               
               <div class="vertical4"></div>

               <h2 Style ="text-align:center" > Pens </h2>
 
               <style>
                    .vertical4{     
                    border-left: 3px solid chocolate;
                    height: 175px;
                    position:absolute;
                    top:800px;
                    left: 400px;
                    }
                    </style>

               
     </div>

   
</div>
     <br>
     <br>        
     <a href="logout.php">
     <button > Log out
     </button>
     </a>

     
</div>


</body>
</html>

<?php 
}else{
     header("Location: log.php");
     exit();
}
 ?>


