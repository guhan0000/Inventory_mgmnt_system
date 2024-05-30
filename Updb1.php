<?php

include "Database_conn.php";

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

    $prod=validate($_POST['prod']);
    echo $prod ; 
    $qty=validate($_POST['Qty']);
    echo $qty ;
    $newprd=validate($_POST['new_prod']);
    echo $newprd;

        
       $newprd = $_POST['new_prod'];
       $chk1 = "SELECT * FROM products WHERE Product_Name='$newprd'";
        $result1 = mysqli_query($conn,$chk1);
    
    
            //print_r($result);
        $temp1=mysqli_num_rows($result1);
        /*$temp1=mysqli_fetch_assoc($result);
        print_r($temp1);*/
        echo $temp1;
        $chk = "SELECT * FROM products WHERE Product_Name='$prod'";
        $result = mysqli_query($conn,$chk);
    
    
            //print_r($result);
        $temp=mysqli_num_rows($result);
        /*$temp1=mysqli_fetch_assoc($result);
        print_r($temp1);*/
        echo $temp;
        
        
        if($temp1 === 0 && $temp === 1 )
        {
            

            
            if($newprd==="" && $temp===1)
            {
                $sql = "Update products Set Quantity = Quantity+$qty where Product_Name='$prod'";
                echo "Entered";
                if($conn->query($sql) === True)
                {
                    printf("Record Added Successfully\n");
                    echo "New Record added";
                }
            }

            else if($newprd!=""){
                $sql="INSERT INTO products(Product_Name, Quantity) VALUES('$newprd',$qty)";
                if($conn->query($sql) === True)
                {
                    printf("Record Added Successfully\n");
                    
                    echo "New Record added";
                }
                }
            else
            {
                printf("No Record Created\n");
                echo "No Record";
            }
           
            /*$sql = "Update products Set Quantity = Quantity+$qty where Product_Name='$prod'";
            echo "Entered";*/
        
            if($conn->query($sql) === True)
            {
                printf("\nRecord Added Successfully\n");
                    
                echo "New Record added";
            }

            
        }
    else if($temp1 ===1)
    {   
        $sql="Update products Set Quantity=Quantity + $qty where Product_Name='$newprd'";
                if($conn->query($sql) === True)
                {
                    printf("Record Added Successfully\n");
                    
                    echo "New Record added";
                }
            }
        /*else if($newprd!=""){
            $sql="INSERT INTO products(Product_Name, Quantity) VALUES('$newprd',$qty)";
            if($conn->query($sql) === True)
            {
                echo "New Record added";
            }
            }
        else{
            echo "No Record";
        }
            
        /*else
        {
            
        }*/
    else{

        $sql="INSERT INTO products(Product_Name, Quantity) VALUES('$prod',$qty)";
            if($conn->query($sql) === True)
            {
                printf("Record Added Successfully\n");
                echo "New Record added";
            }
        }
?>


