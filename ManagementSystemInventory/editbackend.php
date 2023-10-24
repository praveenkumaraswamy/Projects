
<html>
    <body>





    



    <?php

    session_start();

$servername="localhost";
$username="praveen";
$password="Dbpass123";
$databasename="inventory";

$conn = mysqli_connect ($servername,$username,$password,$databasename);
if($conn){
echo "Connect sucessfully";}
else{
    echo "DID NOT REACH THE SERVERS";
}

#$v_item_code = trim($_POST['item_code']); 



/*function itemcode() {
    $GLOBALS['$v_item_code'] ;
  }
   
 itemcode();*/
 #$v_item_code = $_POST['item_code'];

 #if (isset($v_item_code)) {
 #   echo $v_item_code;
  #}
  echo $_SESSION['gv_prodcode'];
 

 
$v_item_name = $_POST['item_name'];
$v_quantity = $_POST['quantity'];
$v_unit = $_POST['unit'];
$v_Buy_price = $_POST['Buy_price'];
$v_Sell_price = $_POST['Sell_price'];

$v_CGST = $_REQUEST['CGST'];
$v_SGST = $_REQUEST['SGST'];


$sql="UPDATE hw_master SET item_name='$v_item_name', quantity='$v_quantity', unit='$v_unit', Buy_price='$v_Buy_price', Sell_price='$v_Sell_price', CGST='$v_CGST', SGST='$v_SGST' WHERE item_code=".'"'.$_SESSION['gv_prodcode'].'"';

echo "$sql";


if(mysqli_query($conn, $sql)){
    echo "connected";

}
else {
    echo "Syntax error";
}



?>

    </body>
</html>












