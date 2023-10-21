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
            </script>
        <style>
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


//$sql = "SELECT BookNo,BookName FROM books_inventory WHERE DateofPurchase=2023-09-19";
$sql = "SELECT BookNo,MemberId,Transaction_id,Issuedate,DueDate,ReturnDate FROM transaction WHERE ReturnDate IS NOT NULL 
ORDER BY Transaction_id DESC";






$result = mysqli_query($conn, $sql);


//$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

$rows = [];
while($row = mysqli_fetch_assoc($result)){

    $rows[] = $row;
}
echo '<img class="img-fluid img-responsive images" src="received1.png" height="300px" width="300px">';
    echo '<div class="container">';
    echo '<div id="okk" class="text-success"></div>';
    echo '<table class="table mid caption-top  table-bordered border-success table-responsive table-hover">';
    echo "<caption id='changings'></caption>";
    echo '<thead>';
    echo '<tr>';
    echo '<th class="table-info" >TransactionId</th>';
    echo '<th class="table-info">MemberId</th>';
    echo '<th class="table-info" >BookNo</th>';
    echo '<th class="table-info">IssueDate</th>';
    echo '<th class="table-info" >DueDate</th>';
    echo '<th class="table-info" >ReturnDate</th>';
   
    echo '</tr>';
    echo '</thead>';
    foreach($rows as $row){
    echo '<tbody>';
    echo '<tr>';
    echo '</tr>';
    echo '<td>'.$row['Transaction_id'].'</td>';

    echo '<td>'.$row['MemberId'].'</td>';
    echo '<td>'.$row['BookNo'].'</td>';
    echo '<td>'.$row['Issuedate'].'</td>';
    echo '<td>'.$row['DueDate'].'</td>';
   
    echo '<td>'.$row['ReturnDate'].'</td>';
    
          }
          echo '<tr>';

          echo '</tbody>';
        echo '</table>';
        echo '<button type="button" onclick="redirect()" class="btn btn-danger m-3">Back to Home</button>';
        echo '</div>';





 ?>
        
  
</body>
</html>