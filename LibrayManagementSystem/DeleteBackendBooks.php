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
        function clicking(){
                window.location.href = "Library.html"
            }
         </script>

  </head>

<body>
<nav class="navbar navbar-expand-lg navbar-fixed bg-body-tertiary ">

<div class="container-fluid bg-dark ">
    <img class="img-fluid" src="SEPM.png" height="75px" width="75px">
   <div class="navbar-brand"></div>
    <div class="navbar one"><h3>Library Management System</h3></div>
    <div class="navbar-brand"></div>
   
  
</div>
            
</nav>

<?php 

session_start();


   $servername="localhost";
   $username="praveen";
   $password="Dbpass123";
   $databasename="books_master";

   $conn = mysqli_connect($servername,$username,$password,$databasename);
   

   $BOOKNOS = trim($_POST['BookName']);

   $_SESSION['booksnames'] = trim($_POST['BookName']);
 

   $sql = "DELETE FROM books_inventory WHERE BookName='$BOOKNOS'";

   $result = mysqli_query($conn,$sql);

   if($result){
    echo '<div class="container">';
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert ">
 DELETED Successfully  ! <strong>' .$BOOKNOS.'</strong> You should check in Library.
 <button type="button" onclick="clicking()" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    echo '<div class="d-flex justify-content-center">Deleted successfully! <strong>'.$BOOKNOS.'</strong> </div> ';
    echo '<div class="d-flex justify-content-center mt-4">';
    echo '<button type="button" onclick="clicking()" class="btn btn-danger"> Home </button>';
    echo '</div>';
echo '</div>';

   }
   else{
    echo "not conected";
   }
   if (isset($_POST['BookName'])) {
    $BOOKNAMES = $_POST['BookName'];
    // Rest of your code
} else {
    echo 'Error: BookName is not set.';
}
?>
</body>
</html>