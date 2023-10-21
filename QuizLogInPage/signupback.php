<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php
        
        session_start();

        $_SESSION['gv_email'] = 'a100';

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
        $_SESSION['gv_email'] = trim($_POST['email']);

        $v_user_name = $_POST['user_name'];
        $v_password= $_POST['password'];


        $sql = "INSERT INTO user_id(email,user_name,password)VALUES('$v_email','$v_user_name','$v_password')";

        if(mysqli_query($conn, $sql)){
            echo "<script> alert('Sucessfully loged in') </script>";
        }
        else{
            echo "Error";
        }
        
        ?>
    </body>
</html>