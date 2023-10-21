<php 



?>
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
            function issue(){
                window.location.href = "issues.php"
            }
        </script>
        <style>
                    .one{
    color:#e91e63;
}
.dropdown-item{
    color:white;
}
#txtDate,#exampleFormControlInput1,#exampleFormControlInput2,#exampleFormControlInput3,#exampleFormControlInput4,#exampleFormControlInput5,#exampleFormControlInput6,#exampleFormControlInput7{
       width:65%;
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
    margin-top: 11rem;
}
.images2{
    margin-left: 4rem;
    margin-top: 2rem;
    padding-left: 50px;
    padding-right: 50px;
    padding-top: 10px;
    padding-bottom: 10px;
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

$_SESSION["book"]= trim($_POST['BookName']);

   $servername="localhost";
   $username="praveen";
   $password="Dbpass123";
   $databasename="books_master";

   $conn = mysqli_connect($servername,$username,$password,$databasename);

 
   //$_SESSION['gv_bookname'] = trim($_POST['BookName']);
   //$_SESSION['gv_booksno'] = $V_BookNo = trim($_POST['BookNo']);

   

  $sql = "SELECT BookNo,BookName,Price,DateofPurchase,IssuedStatus,Category,Authors,no_of_books,issued_copies FROM books_inventory WHERE BookName = '".$_SESSION["book"]."' ";



    
   $result = mysqli_query($conn, $sql);


   $row = mysqli_fetch_assoc($result);
   $var1 = $row['IssuedStatus'];


   
   if (mysqli_num_rows($result) > 0 ) {
    $row['IssuedStatus'];

?>

<div class="container">
    <div class="row ">
        <div class="col-sm-6 ">
        <div class="mb-5 mt-3 own"><h2>Existing-Data-Entry</h2><div><hr></div></div>
    <div class="text-success">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Book No</label>
  <input type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['BookNo'];?>" disabled>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Book Name </label>
  <input type="text" class="form-control" id="exampleFormControlInput2" name="BookName" value="<?php echo $row['BookName'];?>" disabled >
  
</div>
<div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Authors </label>
  <input type="text" class="form-control" id="exampleFormControlInput3" name="Authors" value="<?php echo $row['Authors'];?>" disabled>  

</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Price </label>
  <input type="number" class="form-control" id="exampleFormControlInput4" name="Price" value="<?php echo $row['Price'];?>" disabled >

</div>
<div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Data of Purchase </label>
  <input type="date" class="form-control" id="txtDate" name="DateofPurchase" value="<?php echo $row['DateofPurchase'];?>" disabled>

</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Issued status</label>
 <!-- <input type="" class="form-control"  id="exampleFormControlInput6" placeholder="ISUED STATUS">-->
 <input type="text" class="form-control"  id="exampleFormControlInput4" name="IssuedStatus" value="<?php echo $row['IssuedStatus'];?>" disabled>


  

</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Category</label>
 <!-- <input type="" class="form-control"  id="exampleFormControlInput6" placeholder="ISUED STATUS">-->
 <input type="text" class="form-control"  id="exampleFormControlInput4" name="Category" value="<?php echo $row['Category'];?>" disabled>
 

</div>
<div class="mb-3">

<label for="exampleFormControlInput1" class="form-label">Number Of Books </label>

  <input type="number" class="form-control" id="exampleFormControlInput4" name="no_of_books" value="<?php echo $row['no_of_books'];?>" placeholder="NONE" disabled>


</div>
<div>
</div>
  <!-- Button trigger modal -->



</div>
        </div>
        <div class="col-sm-6 d-flex justify-content-center">
        <form method="POST" action="UpdateBooksFinal.php">
        <div class="mb-5 mt-3 own"><h2>Existing-Data-Entry</h2><div><hr></div></div>
    <div class="text-danger">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Book No</label>
  <input type="number" class="form-control" id="exampleFormControlInput12" value="<?php echo $row['BookNo'];?>" disabled>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Book Name </label>
  <input type="text" class="form-control" id="exampleFormControlInput22" name="BookName" value="<?php echo $row['BookName'];?>">
  
</div>
<div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Authors </label>
  <input type="text" class="form-control" id="exampleFormControlInput32" name="Authors" value="<?php echo $row['Authors'];?>">  

</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Price </label>
  <input type="number" class="form-control" id="exampleFormControlInput42" name="Price" value="<?php echo $row['Price'];?>">

</div>
<div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Data of Purchase </label>
  <input type="date" class="form-control" id="txtDate2" name="DateofPurchase" value="<?php echo $row['DateofPurchase'];?>">

</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Issued status</label>
 <!-- <input type="" class="form-control"  id="exampleFormControlInput6" placeholder="ISUED STATUS">-->
 <input type="text" class="form-control"  id="exampleFormControlInput42" name="IssuedStatus" value="<?php echo $row['IssuedStatus'];?>">


  

</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Category</label>
 <!-- <input type="" class="form-control"  id="exampleFormControlInput6" placeholder="ISUED STATUS">-->
 <input type="text" class="form-control"  id="exampleFormControlInput42" name="Category" value="<?php echo $row['Category'];?>">


  

</div>
<div class="mb-3">

<label for="exampleFormControlInput1" class="form-label">Number Of Books 
</label>
  <input type="number" class="form-control" id="exampleFormControlInput42" name="no_of_books" value="<?php echo $row['no_of_books'];?>" placeholder="NONE">


</div>
<div>
<button type="button" class="btn btn-success m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Update
</button>

<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h5 class="modal-title " id="exampleModalLabel">Are you Sure</h5>
        <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
        Do You Want to Update  '<strong><?php echo $row['BookName'];?></strong>' the Book to Library ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
        <button type="submit" class="btn btn-success ">Update</button>
                    
        
               
            </div>
            

        </div>


    </div>
  

</div>
  <!-- Button trigger modal -->

  <button type="button" onclick="redirect()" class="btn btn-danger d-inline ml-4">Cancel</button>

</div>
        </div>


   </form>

        </div>

<?php 


   }
  
   else{
     echo "not connected";
   }


?>



        </div>
    </div>


</div>

</body>

</html>