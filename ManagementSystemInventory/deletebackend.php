<!DOCTYPE html>
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
echo $_SESSION['gv_code'];

 

 $sql="DELETE FROM hw_master where item_code=".'"'.$_SESSION['gv_code'].'"';
 $result = mysqli_query($conn, $sql);
echo $sql;

 if($result){
    echo "deleted sucessfully";
 }
 else{
    echo "error";
 }


?>




</body>
</html>