<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <?php 

        session_start();
        
        $severname = "localhost" ;
        $username = "praveen" ;
        $password = "Dbpass123";
        $databasename = "booking_history";

        $conn = mysqli_connect($severname,$username,$password,$databasename);

       
  


        $v_traveldate = trim($_POST['travel_date']);
        $v_name =  trim($_POST['booked_by']);
        $v_locationfrom = trim($_POST['pickup_point']);
        $v_locationto = trim($_POST['destination']);
        $v_number = trim($_POST['Contact_ph_no']);
        $v_email = trim($_POST['mailid']) ;
        //$v_passengers = trim($_POST['passangercount']);
        $v_passengers = trim($_POST['passangercount']);
        $v_vehicletype = trim($_POST['vehicle']);


     /*   echo  $v_locationfrom;
        echo  $v_locationto;
        echo   $_SESSION['gv_passengers'];*/
        $sql = "INSERT INTO travel_booking(travel_date,booked_by,pickup_point,destination,Contact_ph_no,mailid,passangercount,vehicle)VALUES('$v_traveldate',' $v_name',' $v_locationfrom','$v_locationto','$v_number','$v_email','$v_passengers','$v_vehicletype')";

        $result = mysqli_query($conn,$sql);


        if($result){
            echo "<script>alert('hi')
           
            </script>";
        }
        else{
            echo "could not conect";
        };

        if($result){
          
            header("location: greetings.html");
          
        }
        else{
            echo "could not conect";
        };
       
       
        
        ?>
    </body>
</html>