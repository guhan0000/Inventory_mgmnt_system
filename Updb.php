<?php
include "Database_conn.php";
?>

<!DOCTYPE html>
<html>
    <head>
    <title>update_stocks</title>
    </head>
    <body class="Menu">
        <h1></h1>
        <br>
        <h1 style= "text-align:center;color:ghostwhite;font-family:arial"><b>UPDATE STOCKS</b></h1>

        <link rel="stylesheet" href="Login.css">
        <br>
        <br>
        <br>

    <form action="Updb1.php" method ="Post">
    <div class="Menu1" Style="text-align:center;">
      <label name="prod"><b>
        Select product :
    </label>
          <select name="prod">
            <option value ="Notebook">Notebook </option>
            <option value="TextBooks">Textbook </option>
            <option value="Comic_Books">Comic book </option>
            <option value="Fiction">Fiction book </option>
             <option value="Novel">Novel book </option>
             <option value="Story">Story book </option>
            <option value="Pen">Pen</option>
            <option value="Pencil">Pencil</option>
            <option value="Paint">Paint</option>
          </select> 
        </b>
        <br>
            <br>
            <label><b>Addtional Products :</b></label>
            <input type ="text" name="new_prod">
            <br><br>
          <label name ="qty"></label>
          
          <b>Quantity   :&emsp;&emsp;</b>
          <input type="number" value ="Quantity" name="Qty" required>
          
            <br><br>
        <Button value="Submit" Style="color:darkgoldenrod;border-color:antiquewhite;width:90px;height:30px;border-radius:15px;background-color:darkorchid"><b>
            Submit </b>
        </Button>
    </div>

    </form>
    </body>
</html>
