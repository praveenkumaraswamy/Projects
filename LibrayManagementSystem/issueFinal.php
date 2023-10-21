
<!DOCTYPE html>
<html>
    <head>
        <title>
SEPM
        </title>        
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
       <link rel="stylesheet" href="booksStyle.css"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
        <script src="code.jquery.com_jquery-3.7.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <script>

            function redirect(){
                window.location.href = "Library.html"
            }
            function clicking(){
                window.location.href = "Library,html"
            }
        </script>
        <style>

 
                    body{
          background-color:#202426;
            }
                    .one{
    color:#e91e63;
}
.dropdown-item{
    color:white;
}
#exampleFormControlInput1{
    width:70%;

}
.table-striped{
    background-color:indianred;
}
caption{
    color:#e91e63;
}
.btns{
    margin-right:2rem ;
}
.images{
    margin-left: 4rem;
    margin-top: 4rem;
}

         </style>
    </head>

<body>
<nav class="navbar navbar-expand-lg navbar-fixed bg-body-tertiary ">

<div class="container-fluid bg-dark ">
    <img class="img-fluid" src="SEPM.png" height="75px" width="75px">
   <div class="navbar-brand"></div>
    <div class="navbar one"><h3>Library Management System</h3></div>
    <div class="navbar-brand"></div>
    <div class="navbar-brand"></div>
</div>
            
</nav>



<?php 

session_start();
//$BookNo = $_SESSION['BookNo']; 

//$_SESSION['gv_booknames'] = $_POST['BookName'];



   $servername="localhost";
   $username="praveen";
   $password="Dbpass123";
   $databasename="books_master";

   $conn = mysqli_connect($servername,$username,$password,$databasename);


   $BookNo = $_POST['BookNo'];





//$sql = "INSERT INTO transaction (DueDate,MemberId,ReturnDate,BookNo,BookNo) VALUES (DATE_ADD(CURRENT_DATE, INTERVAL 15 DAY),".$_SESSION['gv_memberid'].",DATE_ADD(CURRENT_DATE, INTERVAL 15 DAY), ".$_SESSION['gv_bookname'].") ";



$sql = "INSERT INTO transaction (DueDate,MemberId,BookNo) VALUES (DATE_ADD(CURRENT_DATE, INTERVAL 15 DAY),".$_SESSION['gv_memberid'].",'$BookNo') ";
$result  = mysqli_query($conn,$sql);
if($result){
    echo '<div class="container text-light">';
    echo '<div class="alert alert-success alert-dismissible fade show mt-4" role="alert ">
    <strong>Successfully Inserted !</strong> You should check in Database.
    <button type="button" onclick="clicking()" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';

}
else{
    echo"sorry";
}
 $var2 = '<div class="alert alert-success alert-dismissible fade show" role="alert ">
 <strong>Successfully UPDATED !</strong> You should check in Database.
 <button type="button" onclick="clicking()" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';





$sql3 = "UPDATE books_inventory set issued_copies=issued_copies+1 WHERE BookNo='$BookNo'";




if (mysqli_query($conn, $sql3)) {
    echo $var2;
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
   
 
  if ($var2){

     $sql4 = "UPDATE books_inventory set no_of_books=no_of_books-1 WHERE BookNo='$BookNo'";
        
     $result4 = mysqli_query($conn,$sql4);

     if($result4){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert ">
        <strong>Successfully UPDATED !</strong> You should check in Database.
        <button type="button" onclick="clicking()" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      echo "<br>";
      echo 'SUCCESSFULLY ISSUED <strong>'.$BookNo.'</strong> PLEASE TAKE A BOOK';
      echo '<div>';
      echo '<button type="button" onclick="redirect()" class="btn btn-danger  ml-4 mb-4">Home</button>';
      echo '</div>';
      echo '</div>';
     }
 
  }
  else{

  }
  ?>


 



?>




</body>
</html>