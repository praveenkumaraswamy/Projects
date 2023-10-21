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
        <style>
            .error{
                color:red;

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
.btn{
    margin-top: 2rem;
    margin-right: 2rem;
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

<div class="container">
<div class="row">
    <div class="col-sm-3 ">
    </div>
<div class="col-sm-6">
<form action="DeleteBackBooks.php" method="POST"> 
    <div class="mb-3 own mt-3"><h2>REMOVE-BOOKS</h2></div>
            <div class="mb-3">
  
            <label for="exampleFormControlInput1" class="form-label">Book Name <span class="error">*</span></label><br>
  <input type="text" class="form-control  mr-4" id="exampleFormControlInput1" name="BookName" placeholder="ENTER THE BOOKNAME" required>
  <button type="submit" class="btn btn-success  ml-4">Search</button>
  <button type="button" class="btn btn-danger  ml-4">cancel</button>
</div>
</form>
<h5><strong>Enter a Book Name For Delete</strong></h5>
</div>


</div>
<br>
<br>

<?php
session_start();
$_SESSION['booksnames'] ="test";
?>

</body>

</html>