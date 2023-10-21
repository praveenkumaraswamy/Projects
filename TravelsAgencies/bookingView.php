<html>
    <head>
     <style>
        body{
          background-color: black;
        }
        .aligh{
          margin:30px;
          padding-top: 30px;
          padding-left: 20px;
          padding-right: 65px;
          border:2px solid black;
          
          position: absolute;
          background-color: lightblue;
        }
        .insideInput{
          padding-top:30px;
          padding-left: 20px;
          margin-left: 500px;
         
        }

        h1{
          margin-left: 100px;

        }
        .adjustment{
          border: 2px solid black;
          padding-left: 20px;
          padding-top:30px ;
          margin-right:400px;
          background-color: lightgreen;
          
        }
        .a1{
            text-align: center;
            color:#e4ff35;
            font-size: 70px;

        }
        .forclr{
             color:white;
             margin-left:250px;
             
        }
        input[type=submit]{
      background-color:#df3e56;
              color:#fff;
      padding-top:5px;
      padding-bottom:5px;
      padding-left:10px;
      padding-right:10px;
  }
  input[type=submit]:hover{
      background-color:white;
      color:black;
  }
  .btn{
    padding-top: 30px;
    padding-left:450px;
  }

  @media (max-width:800px){
    .aligh{
   position: fixed;
    }
    .adjustment{
      position: fixed;
      color:white;
      background-color: black;
    };
  }

     </style>

    </head>
    <body>
      <div class="Forclr">
<h1>View History</h1>
<br>
<br>
    <form method="POST"> 
    <h3><label> Enter a Travel date</label>
    <input type="text" name="booked_by" id="booked_by">
    
    <input type="submit" value="Go">
    </h3>
    </form>
      </div>
    <?php 


        session_start();


        $servername="localhost";
        $username="praveen";
        $password="Dbpass123";
        $databasename="booking_history";

        
        $conn=mysqli_connect($servername,$username,$password,$databasename);


   

   
    $v_traveldate = trim($_POST['booked_by']);
    $_SESSION['gv_bdy'] = $v_traveldate = trim($_POST['booked_by']);

   // $_SESSION['gv_bookby'] = $_POST['booked_by'];

   //$sql="SELECT booking_id,booking_date,travel_date,booked_by,pickup_point,destination,Advance_paid,Total_amount,Contact_ph_no,mailid,passangercount,vehicle FROM travel_booking WHERE booked_by = 'ezhil'";
   
   $sql="SELECT booking_id,booking_date,travel_date,booked_by,pickup_point,destination,Advance_paid,Total_amount,Contact_ph_no,mailid,passangercount,vehicle FROM travel_booking WHERE trim(booked_by)='$v_traveldate'";

  

 

 
 
    $result=mysqli_query($conn,$sql);


    $row=mysqli_fetch_assoc($result);


  


    
    if (mysqli_num_rows($result) > 0 ) {

  echo "<br>";
 
 // echo  $_SESSION['gv_bookby'];*/

 /*if (mysqli_num_rows($result) < 0 ) {
  $row = mysqli_fetch_assoc($result);

  echo $row['booking_id'];
 }
 else{
  echo "sorry";
 }*/

?>


<form method="POST" target="_self">

<h1>
    Booking History
</h1>

<div>
    <div class="aligh">
    <h2 class="same">EXISTING BOOKING</h2>
<h3>
<label style="padding-right:40px;">Booking ID:</label>

<input class="input3" type="text" name="booking_id" value="<?php echo $row['booking_id'];?>" readonly>
<br><br>

<label style="padding-right:25px;">Booking Date:</label>

<input class="input3" type="text" name="booking_date" value="<?php echo $row['booking_date'];?>" readonly>
<br><br>

<label style="padding-right:39px;">Travel Date:</label>

<input class="input3" type="text" name="travel_date" value="<?php echo $row['travel_date'];?>" readonly>
<br><br>

<label style="padding-right:45px;">Booked By:</label>

<input class="input3" type="text" name="booked_by" value="<?php echo $row['booked_by'];?>" readonly>
<br><br>
<label style="padding-right:30px;">Pickup Point:</label>

<input class="input3" type="text" name="pickup_point" value="<?php echo $row['pickup_point'];?>" readonly>
<br><br>

<label style="padding-right:42px;">Destination:</label>

<input class="input3" type="text" name="destination"  value="<?php echo $row['destination'];?>" readonly>
<br><br>

<label style="padding-right:29px;">Advance paid</label>

<input class="input3" type="text" name="Advance_paid" placeholder="null" value="<?php echo $row['Advance_paid'];?>" readonly>
<br><br>

<label style="padding-right:29px;">Total Amount</label>
<input class="input3" type="text" name="Total_amount" placeholder="null" value="<?php echo $row['Total_amount'];?>" readonly> 
<br><br>

           
<label style="padding-right:px;">Contact Number:</label>

<input class="input3" type="text" name="Contact_ph_no" value="<?php echo $row['Contact_ph_no'];?>" readonly>
<br><br>

<label style="padding-right:86px;">Email:</label>

<input class="input3" type="text" name="mailid" value="<?php echo $row['mailid'];?>" readonly>
<br><br>

<label style="padding-right:85px;">Vehicle</label>

<input class="input3" type="text" name="vechicle" value="<?php echo $row['vehicle'];?>" readonly> 
<br><br>







</table>
    </div>
<div class="insideInput">
  <div class="adjustment">
    <h2>EDIT BOOKING</h2>
<h3>
<label style="padding-right:40px;">Booking ID:</label>

<input class="input3" type="text" name="booking_id" value="<?php echo $row['booking_id'];?>">
<br><br>

<label style="padding-right:25px;">Booking Date:</label>

<input class="input3" type="text" name="booking_date" value="<?php echo $row['booking_date'];?>">
<br><br>

<label style="padding-right:39px;">Travel Date:</label>

<input class="input3" type="text" name="travel_date" value="<?php echo $row['travel_date'];?>">
<br><br>

<label style="padding-right:45px;">Booked By:</label>

<input class="input3" type="text" name="booked_by" value="<?php echo $row['booked_by'];?>">
<br><br>
<label style="padding-right:30px;">Pickup Point:</label>

<input class="input3" type="text" name="pickup_point" value="<?php echo $row['pickup_point'];?>">
<br><br>

<label style="padding-right:42px;">Destination:</label>

<input class="input3" type="text" name="destination"  value="<?php echo $row['destination'];?>">
<br><br> 

<label style="padding-right:29px;">Advance paid</label>

<input class="input3" type="text" name="Advance_paid" placeholder="null" value="<?php echo $row['Advance_paid'];?>">
<br><br>

<label style="padding-right:29px;">Total Amount</label>

<input class="input3" type="text" name="Total_amount" placeholder="null" value="<?php echo $row['Total_amount'];?>">
<br><br>

           
<label style="padding-right:px;">Contact Number:</label>

<input class="input3" type="text" name="Contact_ph_no" value="<?php echo $row['Contact_ph_no'];?>">
<br><br>

<label style="padding-right:86px;">Email:</label>

<input class="input3" type="text" name="mailid" value="<?php echo $row['mailid'];?>">
<br><br>

<label style="padding-right:85px;">Vehicle</label>

<input class="input3" type="text" name="vechicle" value="<?php echo $row['vehicle'];?>">
<br><br>
</h3>

</div>
</div>
<?php
    }
   else {
        echo "<h1 class='a1'>Sorry no records are found</h1>";
      }


      
 
     
     ?>
     <div class='btn'>
     <input type="submit" name="Edit" value="Edit">
    </div>
    
        
   
        </h3>
        </form>
    </body>
</html>