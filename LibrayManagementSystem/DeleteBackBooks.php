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

            function deletings(){
                window.location.href = "DeleteBackendBooks.php"
            }
        </script>
        <style>
            .tba{
                padding-top:15px;
                padding-bottom:15px;
            }
                .own{
    
    text-align: center;
    color:#e91e63;
    padding-top:1rem;


  }
                    .one{
    color:#e91e63;
}

.mid{
    text-align: center;
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
    margin-left: 33%;
    
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
</nav>
    <?php 



session_start();


   $servername="localhost";
   $username="praveen";
   $password="Dbpass123";
   $databasename="books_master";

   $conn = mysqli_connect($servername,$username,$password,$databasename);




$_SESSION['booksnames'] = trim($_POST['BookName']);



$sql = "SELECT BookNo,BookName,Price,DateofPurchase,IssuedStatus,Category,Authors,no_of_books,issued_copies FROM books_inventory WHERE BookName='".$_SESSION['booksnames']."'";
$result = mysqli_query($conn, $sql);

if (!$result) {
  echo 'There was an error executing the SQL query.';
  exit();
}

$row = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) > 0) {

?>

<div class="container-fluid">

    <div class="row">
        <div class="col-sm-2">


        </div>
        <div class="col-sm-6">
      
        <div class="mb-3 own mt-3"><h2>Data-views</h2></div>
        
        
<table class="table caption-top table-striped table-bordered border-info table-responsive">
  <caption>Delete-Books</caption>
  <tbody>
    <tr>
    <th scope="col" class="table-success" >1</th>
      <th scope="" >Book ID</th>
      <td><?php echo $row['BookNo'];?></td>
      </tr>

      <tr>
      <th scope="col" class="table-success" >2</th>
      <th scope="" >Book Name</th>
      <td><?php echo $row['BookName'];?></td>
       </tr>

       <tr>
       <th scope="col" class="table-success" >3</th>
      <th scope="">Authors</th>
      <td><?php echo $row['Authors'];?></td>

      </tr>

      <tr>
      <th scope="col" class="table-success" >4</th>
      <th scope="" >Price</th>
      <td><?php echo $row['Price'];?></td>

      </tr>

      <tr>
      <th scope="col" class="table-success" >5</th>
      <th scope="" >Date of Purchase</th>
      <td><?php echo $row['DateofPurchase'];?></td>

      </tr>

      <tr>
      <th scope="col" class="table-success" >6</th>
      <th scope="" >Issued status</th>
      <td><?php echo $row['IssuedStatus'];?></td>

      </tr>




      <tr>
      <th scope="col" class="table-success" >7</th>
      <th scope="" >Catagory</th>
      <td><?php echo $row['Category'];?></td>

      </tr>


      <tr>
      <th scope="col" class="table-success" >8</th>
      <th scope="" >No Of Books</th>
      <td><?php echo $row['no_of_books'];?></td>

      </tr>

      <tr>
      <th scope="col" class="table-success" >9</th>
      <th scope="" >Issued copies</th>
      <td><?php echo $row['issued_copies'];?></td>

      </tr>
  </tbody>


</table>
<form action="DeleteBackendBooks.php" method="POST">
    <!--<input type="hidden" name="BookNo" value="<?php /*echo $row['BookNo']; */?>">-->
    <input type="hidden" name="BookName" value="<?php echo $row['BookName']; ?>">
   
    <button type="button" class="btn btn-danger m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
  DELETE
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
        Do You Want to Delete <strong><?php echo $row['BookName'];?></strong> in Library?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
        <button type="submit" class="btn btn-danger ">DELETE</button>
 


        </div>
    </div>
</div>


        </div>
        <button type="button" onclick="redirect()" class="btn btn-info ">Home</button>
        </form>


    </div>
</div>

<?php
}





?>
</body>
</html>