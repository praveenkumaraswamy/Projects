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
            function issue(){
                window.location.href = "issues.php"
            }
        </script>
        <style>
                    .one{
    color:#e91e63;
}
body{
          background-color:#202426;
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
 

  $_SESSION["booksnames"]= trim($_POST['BookName']);


   $servername="localhost";
   $username="praveen";
   $password="Dbpass123";
   $databasename="books_master";

   $conn = mysqli_connect($servername,$username,$password,$databasename);
if($conn){
    echo "connected";

}
else{
    echo "not connected";
}
 

$sql = "SELECT BookName,BookNo FROM books_inventory WHERE BookName='".$_SESSION['booksnames']."'";
$result = mysqli_query($conn, $sql);


if (!$result) {
    // Handle the SQL query error
    die("Error in SQL query: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="container-fluid">
        <p id="demo"></p>
        <div class="row">
        <div class="col-sm-2"></div>
         <div class="col-sm-6">
         <div class="mb-3 own mt-3 text-light"><h2>Data views</h2></div>
         <form action="issueFinal.php" method="POST">
                    <table class="table caption-top table-striped table-bordered border-info table-responsive">
        <caption class="text-light">Books-Issue</caption>
                        <tbody>
                            <tr>
                                <th scope="col" class="table-success">1</th>
                                <th scope="">BookName</th>
                                <td><?php echo $row['BookName']; ?></td>
                            </tr>

        
                            <input type="hidden" name="BookNo" value="<?php echo $row['BookNo']; ?>">
<?php

} else {
   
    echo "No matching records found.";
}













$_SESSION['gv_memberid'] = trim($_POST['MemberId']);




$sql1 = "SELECT MemberId,MemberName,TokenNo FROM membersinfo WHERE MemberId ='".$_SESSION['gv_memberid']."'";



$results = mysqli_query($conn, $sql1);


if (!$results) {
    
    die("Error in SQL query: " . mysqli_error($conn));
}

if (mysqli_num_rows($results) > 0) {
    $rows = mysqli_fetch_assoc($results);

    ?>

    

    <tr>
    <th scope="col" class="table-success" >2</th>
      <th scope="" >Member ID</th>
      <td><?php echo $rows['MemberId'];?></td>
      </tr>

      <tr>
      <th scope="col" class="table-success" >3</th>
      <th scope="" >Member Name</th>
      <td><?php echo $rows['MemberName'];?></td>
       </tr>

       <tr>
       <th scope="col" class="table-success" >4</th>
      <th scope="">Token No</th>
      <td><?php echo $rows['TokenNo'];?></td>
      </tr>
      
      
     





<?php  

}





mysqli_close($conn);
?>


</tbody>
                    </table>
<button type="button" class="btn btn-success m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    ISSUE
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
        Do You Want to Issue Books to <strong><?php echo $rows['MemberName'];?></strong> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
        <button type="submit" class="btn btn-success ">Issue</button>
                    
        
               
            </div>
            

        </div>


    </div>
</div>
    <button type="button" onclick="redirect()" class="btn btn-danger ">Home</button>
        </form>

</body>
</html>







