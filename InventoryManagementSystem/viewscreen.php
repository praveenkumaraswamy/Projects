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
        background-color: wheat;
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
    

    <form action="main2.php" method="post" >
        <div class="box1">
     <h3> <label>  Enter the Item code</label>
    <input type="text" name="itc">

      <input type="submit"formaction="main2.php" name="Go" value="Go" target="_self"></h3>
        </div>
        <br>
        <br>
      
        <hr style="border:1px solid black";>
        <div class="box2">
     <h3>   <label >Item Code:</label>
<input type="text" name="item_code" value="<?php echo $row['item_code'];?>">


<label style="padding-left:100px;">Item Name:</label>
<input type="text" name="item_name">
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
</h3> </div>
     
    </form>

</body>
</html>