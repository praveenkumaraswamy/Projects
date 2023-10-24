<!DOCTYPE html>
<html>
<head>
<title>
    viewscreen
</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<style>
    body{
        width:100%;
        background-color: lightgray;
    }
    h1{
        background-color:#000942;
        color:white;
        text-align: center;
        border:5px solid white;
       
        
    }
    .box1{
        margin:0%;
        padding-top:50px;
        padding-left:100px;
    }
    hr{
        border:1px solid black;
        
        
    }
    .box2{
        padding-top:30px;
        padding-left:100px;

    }

  
    </style>
</head>
<h1>VIEW SCREEN</h1>
<body>


<div>
    <form action="" method="post" >
        <div class="box1">
     <h3> <label>  Enter the Item code</label>
    <input type="text" name="itc" value=''>

      <input type="submit"formaction="" name="Go" value="Go" target="_self"></h3>
        </div>
        <br>
        <br>
</div>
</form>
</div>
<br>
<br>
<hr>



   <?php

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

#echo "iam here";

$v_item_code = trim($_POST['itc']); 



#$sql = 'SELECT item_code,item_name ,quantity, Buy_price, Sell_price, CGST, SGST,unit FROM hw_master where item_code='.'."$v_item_code"';

$sql = 'SELECT item_code,item_name ,quantity, Buy_price, Sell_price, CGST, SGST,unit FROM hw_master where item_code='.'"'.$v_item_code.'"';

#$sql = 'SELECT item_name,quantity,Buy_price,Sell_price,CGST,SGST,unit FROM hw_master where item_code = "$_POST['itc']"';
 #echo $sql;
$result = mysqli_query($conn, $sql);


$row = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) > 0 ) {
echo "<br>";

?>
<div class="box2">
<h3>  <label >Item Code:</label>
<input type="text" name="item_code" value="<?php echo $row['item_code'];?>">

<label style="padding-left:100px;">Item Name:</label>
<input type="text" name="item_name" value="<?php echo $row['item_name'];?>">
<br>
<br>

<label>Quantity:</label>

<input type="number" name="quantity" value="<?php echo $row['quantity'];?>">



<label style="padding-left:115px;">Units:</label>

<input type="text" name="unit" value="<?php echo $row['unit'];?>">
<br>
<br>


<label>Buyer price:</label>

<input type="number" name="Sell_price" value="<?php echo $row['Buy_price'];?>">



<label style="padding-left:90px;">Seller Price:</label>

<input type="number" name="Sell_price" value="<?php echo $row['Sell_price'];?>">


<br>
<br>

<label>CGST:</label>

<input type="text" name="CGST" value="<?php echo $row['CGST'];?>">




<label style="padding-left:135px;">SGST:</label>

<input type="text" name="SGST" value="<?php echo $row['SGST'];?>">
<br>

</h3>
</div>



<?php
   /* echo "itemname " . $row["item_name"];

    echo "<br>";
    echo "Quantity " . $row["quantity"];
    echo "<br>";
    echo "Price " . $row["Buy_price"];
    echo "<br>";
    echo "price" . $row["Sell_price"];
    echo"<br>";
    echo "CGST" . $row["CGST"];
    echo "<br>"; 
    echo "SGST" . $row["SGST"]*/
}
else {
    echo "0 results";
  }
 ?>



</body>
</html>
 
  