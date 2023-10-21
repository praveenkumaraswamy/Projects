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


 

   $_SESSION["book"]= trim($_POST['BookName']);
   
    $VPrice= trim($_POST['Price']);
    $datepurchase = trim($_POST['DateofPurchase']);
    $VIssuedStatus= trim($_POST['IssuedStatus']);
    $VCategory= trim($_POST['Category']);
    $VAuthors=trim($_POST['Authors']);
    $VnoofBooks=trim($_POST['no_of_books']);


$sql = "UPDATE books_inventory set Price='$VPrice',DateofPurchase='$datepurchase',IssuedStatus='$VIssuedStatus',Category='$VCategory',Authors='$VAuthors',no_of_books='$VnoofBooks' WHERE BookName='".$_SESSION["book"]."' ";


$result  = mysqli_query($conn,$sql);
if($result){
    echo '<div class="container text-light">';
    echo '<div class="alert alert-success alert-dismissible fade show mt-4" role="alert ">
    <strong>Successfully "<strong> '.$_SESSION["book"].'</strong>"  Inserted !</strong> You should check in Database.
    <button type="button" onclick="clicking()" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo '<h5>Your " '.$_SESSION["book"].' " book is Updated Successfully <h5>';
  echo '<br>';
  echo ' <button type="button" onclick="redirect()" class="btn btn-danger  ml-4 mb-4">Home</button>';
  echo '</div>';


}
else{
    echo"sorry";
}
?>
</body>
</html>