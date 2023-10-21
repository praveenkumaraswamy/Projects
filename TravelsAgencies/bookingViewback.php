<html>
    <head>
     <style>
        table,tr,th,td{
            border:1px solid black;
            border-collapse : collapse;

        }
     </style>

    </head>
    <body>
<h2>View History</h2>
  <form method="POST"> 
    <h3><label> Enter a Travel date</label></h3>
    <input type="text" name="booking_id" id="booking_id">
    <input type="submit" value="Go">
    </form>
    <?php 


        session_start();


        $servername="localhost";
        $username="praveen";
        $password="Dbpass123";
        $databasename="booking_history";

        
        $conn=mysqli_connect($servername,$username,$password,$databasename);


        if($conn){
            echo "conected";
        }
        else{
            echo "sorry";
        }

        $v_traveldate = trim($_POST['booking_id']);

        $sql = 'SELECT * FROM travel_booking WHERE booking_id='.$v_traveldate;

        $result = mysqli_query($conn,$sql);

    
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            echo $row['booked_by'];
            echo $row['booking_id'];
          } else {
            echo "Error: " . mysqli_error($conn);
          }




        ?>
    </body>
    </html>