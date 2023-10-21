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
   

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-6">
        <form method="POST">
        <div class="mb-3 own mt-3"><h2>Data views</h2></div>
        
<table class="table caption-top table-striped table-bordered border-info table-responsive">
  <caption>Books-Issue</caption>
  <tbody>
    <tr>
    <th scope="col" class="table-success" >SNO</th>
      <th scope="" >Book ID</th>
      <td><?php echo $row['BookNo'];?></td>
      </tr>

      <tr>
      <th scope="col" class="table-success" >1</th>
      <th scope="" >Book Name</th>
      <td><?php echo $row['BookName'];?></td>
       </tr>

       <tr>
       <th scope="col" class="table-success" >2</th>
      <th scope="">Authors</th>
      <td><?php echo $row['Authors'];?></td>

      </tr>

      <tr>
      <th scope="col" class="table-success" >3</th>
      <th scope="" >Price</th>
      <td><?php echo $row['Price'];?></td>

      </tr>

      <tr>
      <th scope="col" class="table-success" >4</th>
      <th scope="" >Date of Purchase</th>
      <td><?php echo $row['DateofPurchase'];?></td>

      </tr>

      <tr>
      <th scope="col" class="table-success" >5</th>
      <th scope="" >Issued status</th>
      <td><?php echo $row['IssuedStatus'];?></td>

      </tr>




      <tr>
      <th scope="col" class="table-success" >6</th>
      <th scope="" >Catagory</th>
      <td><?php echo $row['Category'];?></td>

      </tr>


      <tr>
      <th scope="col" class="table-success" >7</th>
      <th scope="" >No Of Books</th>
      <td><?php echo $row['no_of_books'];?></td>

      </tr>

      <tr>
      <th scope="col" class="table-success" >8</th>
      <th scope="" >Issued copies</th>
      <td><?php echo $row['issued_copies'];?></td>

      </tr>
  </tbody>


</table>
<button type="reset" class="btn btn-info btns d-inline" onclick="issue()">SEARCH FOR ANOTHER</button>
<button type="button" onclick="redirect()" class="btn btn-danger btns d-inline">CANCEL</button>
   </form>

        </div>

<?php 


   }
  
   else{
     echo "not connected";
   }


?>
        <div class="col-sm-2">
        
      <?php  if($var1 =="Available"){
        echo '<img class="img-fluid img-responsive images" src="available.jpg" height="140px" width="140px"><br>
        <button type="button" class="btn btn-success btns images2" onclick="issue()">ISSUE</button>';
      }
         else{
            echo '<img class="img-fluid img-responsive images" src="download.png" height="140px" width="140px">';
         }

         mysqli_close($conn);
        
?>


        </div>
    </div>


</div>

</body>

</html>