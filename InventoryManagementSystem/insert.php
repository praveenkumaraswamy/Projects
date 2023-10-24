<!DOCTYPE html>
<html>
<body>


<?php

$servername="localhost";
$username="praveen";
$password="Dbpass123";
$databasename="inventory";

$conn = mysqli_connect ($servername, $username, $password,$databasename);
echo "connected sucessfully";
echo "I am here";

        
      $v_item_code = $_POST['item_code'];
        $v_item_name = $_POST['item_name'];
        $v_quantity = $_POST['quantity'];
        $v_unit = $_POST['unit'];
        $v_Buy_price = $_POST['Buy_price'];
        $v_Sell_price = $_POST['Sell_price'];
        
        $v_CGST = $_REQUEST['CGST'];
        $v_SGST = $_REQUEST['SGST'];


      //  $sql = "INSERT INTO hw_master VALUES('$item_code', '$item_name', $quantity, $unit, $Sell_price, $Buy_price, $CGST, $SGST)";

       $sql = "INSERT INTO hw_master(item_code,item_name,quantity,Buy_price,Sell_price,CGST,SGST,unit) VALUES('$v_item_code','$v_item_name',$v_quantity, $v_Buy_price, $v_Sell_price, $v_CGST, $v_SGST,'$v_unit')"; 
echo "i am here 2";
       // $sql = "INSERT INTO hw_master(item_code) VALUES('c100')"; 
        echo $sql;
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.</h3>";

        }else{
            echo "ERROR: Hush! Sorry $sql."
                . mysqli_error($conn);
        }

        mysqli_close($conn);
?>
