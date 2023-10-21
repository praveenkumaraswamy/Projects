<!DOCTYPE html>
<html>
    <head>
        <title>
SEPM
        </title>        
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
       <link rel="stylesheet" href="LibraryStyle.css"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
        <script src="code.jquery.com_jquery-3.7.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function clicking(){
                window.location.href = "Library.html"
            }
            
           
        </script>
        <style>
            </style>
            <body>
                <?php
                session_start();
                $servername="localhost";
                $username="praveen";
                $password="Dbpass123";
                $databasename="books_master";
                
                $conn = mysqli_connect($servername,$username,$password,$databasename);

      //          $_SESSION['gv_bookno'] = $V_BookNo= trim($_POST['BookNo']);
                $_SESSION['gv_bookname'] = trim($_POST['BookName']);
                //$_SESSION['gv_bookname'] = trim($_POST['BookName']);
                $_SESSION['gv_issue']  = trim($_POST['IssuedStatus']);
                 $V_Price= trim($_POST['Price']);
                 $_SESSION['gv_date'] = trim($_POST['DateofPurchase']);
                 $V_IssuedStatus= trim($_POST['IssuedStatus']);
                 $V_Category= trim($_POST['Category']);
                 $V_Authors=trim($_POST['Authors']);
                 $V_noofBooks=trim($_POST['no_of_books']);
                $sql = "INSERT INTO books_inventory(BookName,Price,DateofPurchase,IssuedStatus,Category,Authors,no_of_books)VALUES('".$_SESSION['gv_bookname']."','$V_Price','".$_SESSION['gv_date']."','".$_SESSION['gv_issue']."','$V_Category','$V_Authors','$V_noofBooks')";

                 $result = mysqli_query($conn,$sql);


                 if($result){
                    echo '<div class="container">';
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert ">
                    Successfully added!  <strong> ' .$_SESSION['gv_bookname'].'</strong>  You should check in Database.
                    <button type="button" onclick="clicking()" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                  echo "<h6>This '<strong>" .$_SESSION['gv_bookname']. "</strong>' Book is uccessfully Added Library</h6>";
                  echo '</div>';
                 }
                 else{
                    echo "not connected";
                 }




                ?>
            </body>
            </html>