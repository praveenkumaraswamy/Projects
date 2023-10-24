<html>
    <head>

</head>
<body>
        <?php
        session_start();
        $_SESSION["gv_question"] = 'p10';

    $servername="localhost";
        $username="praveen";
        $password="Dbpass123";
        $databasename="quiz_entry";

        $conn = mysqli_connect ($servername,$username,$password,$databasename);

        if($conn){
            echo "connected";
        }
        else{
            echo "not conected";
        }

    $v_sno =  trim($_POST['sno']);
      $v_question = trim($_POST['question']);
      //$_SESSION["gv_question"] = $_POST['question'];

      $v_optionA = $_POST['optionA'];
      $v_optionB = $_POST['optionB'];
      $v_optionC = $_POST['optionC'];
      $v_optionD = $_POST['optionD'];
      $v_correctans = $_POST['correctans'];



        $sql="INSERT INTO question_bank(sno,question,optionA,optionB,optionC,optionD,correctans)VALUES('$v_sno','$v_question','$v_optionA','$v_optionB','$v_optionC','$v_optionD','$v_correctans')";

        
        if(mysqli_query($conn, $sql)){
            echo "<script> alert('Sucessfully added') </script>";
        }
        else{
            echo "Error";
        }

        ?>
    </body>
</html>