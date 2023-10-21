



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
                window.location.href = "LibraryView.php"
            }
        </script>
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
#exampleFormControlInput1,#exampleFormControlInput2{
    width:70%;

}
            </style>
    </head>

<body>

<?php  

session_start();



$_SESSION['booksnames']= 'test';

//$_SESSION['gv_bookname'] = trim($_POST['BookName']);

?>
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
<form action="issuesBackend.php" method="POST"> 
    <div class="mb-3 own mt-3"><h2>ISSUED-BY</h2></div>
            <div class="mb-3">
  
            <label for="exampleFormControlInput1" class="form-label">MEMBER ID <span class="error">*</span></label><br>
  <input type="number" class="form-control mb-4" id="exampleFormControlInput1" name="MemberId" placeholder="ENTER MEMBER ID" required>


  <label for="exampleFormControlInput1" class="form-label">Book Name <span class="error">*</span></label><br>
  <input type="text" class="form-control mb-4" id="exampleFormControlInput2" name="BookName" placeholder="ENTER BOOKNAME" required>

  <!--<label for="exampleFormControlInput1" class="form-label">TOKEN NO</label><br>
  <input type="number" class="form-control mb-4" id="exampleFormControlInput1" name="BookNo" placeholder="ENTER TOKEN NO" >-->
  <button type="submit" class="btn btn-success mr-4 mb-4">Issue</button>
  <button type="button" onclick="redirect()" class="btn btn-danger  ml-4 mb-4">Cancel</button>
</div>
</form>
<h5><span>Enter a Member Id and Book Name to Issue</span></h5>
</div>


    

</div>
<br>
<br>



</body>

</html>