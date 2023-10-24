<!DOCTYPE html>
<html> 
<body>


<?php

$servername="localhost";
$username="praveen";
$password="Dbpass123";
$databasename="inventory";

$conn = mysqli_connect ($servername,$username,$password,$databasename);
if($conn){
echo "connect sucessfully";}
else{
    echo "DID NOT REACH THE SERVERS";
}

echo "iam here";

$v_item_code = trim($_POST['itc']); 



#$sql = 'SELECT item_code,item_name ,quantity, Buy_price, Sell_price, CGST, SGST,unit FROM hw_master where item_code='.'."$v_item_code"';

$sql = 'SELECT item_code,item_name ,quantity, Buy_price, Sell_price, CGST, SGST,unit FROM hw_master where item_code='.'"'.$v_item_code.'"';

#$sql = 'SELECT item_name,quantity,Buy_price,Sell_price,CGST,SGST,unit FROM hw_master where item_code = "$_POST['itc']"';
 echo $sql;
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0 ) {
  
  while($row = mysqli_fetch_assoc($result)) {


echo "." .$row["item_code"];
echo "<br>";
    echo "itemname " . $row["item_name"];

    echo "<br>";
    echo "Quantity " . $row["quantity"];
    echo "<br>";
    echo "Price " . $row["Buy_price"];
    echo "<br>";
    echo "price" . $row["Sell_price"];
    echo"<br>";
    echo "CGST" . $row["CGST"];
    echo "<br>"; 
    echo "SGST" . $row["SGST"];
  }
} else {
  echo "0 results";
}





?>
  
  



</body>
</html>