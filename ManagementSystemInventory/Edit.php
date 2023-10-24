
<html>
    <head>

    </head>
    <body>
<?php

$servername="localhost";
$username="praveen";
$password="Dbpass123";
$databasename="inventory";

$conn = mysqli_connect($servername, $username, $password, $databasename);

if($conn){
    echo "Conected";
}
else{
    echo "Error";
}




        
$v_item_code = $_POST['item_code'];
/*$v_item_name = $_POST['item_name'];
$v_quantity = $_POST['quantity'];
$v_unit = $_POST['unit'];
$v_Buy_price = $_POST['Buy_price'];
$v_Sell_price = $_POST['Sell_price'];

$v_CGST = $_REQUEST['CGST'];
$v_SGST = $_REQUEST['SGST'];




$sql = "UPDATE INTO hw_master(item_code,item_name,unit,quantity,Buy_price,Sell_price,CGST,SGST) VALUES('$v_item_code','$v_item_name', '$v_unit', $v_quantity, $v_Buy_price, $v_Sell_price, $v_CGST, $v_SGST)"; 



if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully.</h3>";

}else{
    echo "ERROR: Hush! Sorry $sql."
        . mysqli_error($conn);
}*/


$sql = "UPDATE hw_master  WHERE item_code=$v_item_code";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>