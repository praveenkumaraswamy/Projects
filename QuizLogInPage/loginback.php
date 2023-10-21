<html>
    <head>

    </head>
    <body>
<?php
    $servername="localhost";
        $username="praveen";
        $password="Dbpass123";
        $databasename="login";

        $conn = mysqli_connect ($servername,$username,$password,$databasename);

        if($conn){
            echo "Connected";
        }
        else{
            echo "not conected";
        }


        $v_email = trim($_POST['email']);
        $v_password= $_POST['password'];


        $sql = "SELECT password from user_id WHERE email='$v_email'";



        $result = mysqli_query($conn, $sql);


        

if (mysqli_num_rows($result) > 0 ) {
    $row = mysqli_fetch_assoc($result);
    echo "<br>";
     
      echo "<br>";
      
     if($row['password']==$v_password){
        header("location: homepage.php");;

     }
      else{
        echo "<script>alert('Invalid username or Password')</script>";
      }
      
}
else{
    echo "Invalid username or Password";
}


      

        ?>
    </body>
</html>