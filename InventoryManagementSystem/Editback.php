<html>
    <head>
        <title>
Edit Entry
        </title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <style>
            .h1{
                text-align:center;
              
                border:3px solid black;
                
                background-color:white;
                color:black;
            }
            body{
               background-color: #1a1a1a;
               
               
               color:#fafafa;
            }
            .top{
                padding-left:100px;
                padding-top:80px;
            }

            .label1{
                padding-right:20px;
            }

            .input1{
                padding:5px 5px 5px 5px ;
            }

            .input2{
                padding:5px 5px 5px 5px ;
                background-color:#998f99;
                color:black;
            }

.input3{

padding:5px 2px 2px 2px;
cursor: not-allowed; 
cursor:pointer;


}

            .input4{
                
              padding-top:700px;
              padding-left:460px;
           
              
            }
            .h2{
                text-align:center;
              
              border:3px solid black;
              
              background-color:white;
              color:black;;
            }
           .label2{
            padding-left:100px;
             
            border:3px solid black;
              
              background-color:lightgray;
              color:black;
              margin-right:700px;
              margin-left:70px;
              margin-top:40px;
              
              padding:30px;
              float:left;
              position:absolute;
              

               
           }

           .not-allowed     { cursor: not-allowed; }


           .label3{
            float:right;
             background-color:lightgray;
              color:black;
            margin-left:70px;
              margin-top:40px;
              margin-right:100px;
              padding:30px;
           }
           .h3{
            padding:30px;
            background-color: limegreen;
            border:2px solid black;
           }

           .h4{
              padding:30px;
            background-color:dodgerblue;
            border:2px solid black;
           }

           hr{
           border:5px solid aquamarine;
           
          
} 
           input[type=submit] {
  background-color: rgb(27, 108, 155);
  color:white;
  border:1px solid black;
  width: 100px;
  height:30px;
           }
        
           input[type=] {
  background-color: rgb(27, 108, 155);
  color:white;
  border:1px solid black;
  width: 100px;
  height:30px;
           }

            </style>
    </head>
   <body>
   
    <div class="h1">
    <h2>
       Hardware shop ,Tuticorin
    </h2>
    </div>
    <div class="top">
        
    <form method="POST"><h3>
        <label class="label1"> Enter the code for Entry</label>
      
      
        <input class="input1" type="text" name="item_code" required>
        
       <input  class="input2" type ="submit" name="Go" value="Go" target="_self">
   
        </h3>
        </form>
        </div>
        
        <br>
        <br>
<br>
<hr>
<br>


<?php
session_start();


$_SESSION['gv_prodcode'] = 'p10';

$servername="localhost";
$username="praveen";
$password="Dbpass123";
$databasename="inventory";

$conn = mysqli_connect ($servername,$username,$password,$databasename);
/*if($conn){
echo "Connect sucessfully";}
else{
    echo "DID NOT REACH THE SERVERS";
}
*/


$v_item_code = trim($_POST['item_code']); 
$_SESSION['gv_prodcode'] = trim($_POST['item_code']); 




$sql = 'SELECT item_code,item_name ,quantity, Buy_price, Sell_price, CGST, SGST,unit FROM hw_master where item_code='.'"'.$v_item_code.'"';
#$$sql = 'SELECT item_name,quantity,Buy_price,Sell_price,CGST,SGST,unit FROM hw_master where item_code = "c100"';
 
$result = mysqli_query($conn, $sql);


$row = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) > 0 ) {


echo "<br>";
?>
<h2>
    <div class="h2">
    Edit master entries
    </div>
</h2>
<br>
<br>
<form>
    <h3>
        <div class="not-allowed">
    <div class="label2">
        <h2 class="h3">
            Existing data entry
        </h2>
        <br>

<label style="padding-right:100px;">Item Name:</label>

<input class="input3" type="text" name="item_name" value="<?php echo $row['item_name'];?>">
<br>
<br>

<label style="padding-right:115px;">Quantity:</label>

<input class="input3" type="number" name="quantity" value="<?php echo $row['quantity'];?>">
<br><br>

<label style="padding-right:143px;">Units:</label>

<input class="input3" type="text" name="unit" value="<?php echo $row['unit'];?>">
<br><br>

<label style="padding-right:92px;">Buyer price:</label>

<input class="input3" type="number" name="Buy_price" value="<?php echo $row['Buy_price'];?>">
<br><br>
<label style="padding-right:92px;">Seller Price:</label>

<input class="input3" type="number" name="Sell_price" value="<?php echo $row['Sell_price'];?>">
<br><br>


<label style="padding-right:135px;">CGST:</label>


<input class="input3"type="text" name="CGST" value="<?php echo $row['CGST'];?>">
<br><br>



<label style="padding-right:135px">SGST:</label>


<input class="input3"type="text" name="SGST" value="<?php echo $row['SGST'];?>">
<br>
        </h3>
        </div>
</div>

</form>
<form method="POST" target="_self">

<div class="label3">
<h2 class="h4">
    Edit Entry
</h2>
<br>
<h3>
<label style="padding-right:100px;">Item Name:</label>

<input class="input3" type="text" name="item_name" value="<?php echo $row['item_name'];?>">
<br>
<br>

<label style="padding-right:115px;">Quantity:</label>

<input class="input3" type="number" name="quantity" value="<?php echo $row['quantity'];?>">
<br><br>

<label style="padding-right:143px;">Units:</label>

<input class="input3" type="text" name="unit" value="<?php echo $row['unit'];?>" >
<br><br>

<label style="padding-right:92px;">Buyer price:</label>

<input class="input3" type="number" name="Buy_price" value="<?php echo $row['Buy_price'];?>">
<br><br>
<label style="padding-right:92px;">Seller Price:</label>

<input class="input3" type="number" name="Sell_price" value="<?php echo $row['Sell_price'];?>">
<br><br>


<label style="padding-right:135px;">CGST:</label>


<input class="input3" type="text" name="CGST" value="<?php echo $row['CGST'];?>">
<br><br>



<label style="padding-right:135px">SGST:</label>


<input class="input3" type="text" name="SGST" value="<?php echo $row['SGST'];?>">
        </h3>
        



</div>
<div class="input4">
    <input type="submit" name="Save" value="Save" formaction="editbackend.php">
    <input type="reset"  name="Cancel" value="Cancel">
    <input type="submit"  name="Exit" value="Exit" formaction="dataentrynew.html">
</div>


</form>
<?php
}
else {
    echo "0 results";
  }
 echo  $sql;
 ?>




<hr>
</body>
</html>