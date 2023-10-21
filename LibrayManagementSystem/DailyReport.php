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
$sql = "SELECT BookNo,BookName FROM books_inventory WHERE DateofPurchase=(CURRENT_DATE)";






$result = mysqli_query($conn, $sql);


//$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

$rows = [];
while($row = mysqli_fetch_assoc($result)){

    $rows[] = $row;
}
echo '<img class="img-fluid img-responsive images" src="todayreport.png" height="300px" width="300px">';
    echo '<div class="container">';
    echo '<div id="okk" class="text-success"></div>';
    echo '<table class="table mid caption-top  table-bordered border-danger table-responsive table-hover">';
    echo "<caption id='changings'></caption>";
    echo '<thead>';
    echo '<tr>';
    echo '<th class="table-success " >BookNo</th>';
    echo '<th class="table-success">BookName</th>';
    echo '</tr>';
    echo '</thead>';
    foreach($rows as $row){
    echo '<tbody>';
    echo '<tr>';
    echo '</tr>';
    echo '<td>'.$row['BookNo'].'</td>';
    echo '<td>'.$row['BookName'].'</td>';
   
    
          }
          echo '<tr>';

          echo '</tbody>';
        echo '</table>';
        echo '<button type="button" onclick="redirect()" class="btn btn-danger m-3">Back to Home</button>';
        echo '</div>';



/*if(mysqli_num_rows($result) > 0){
   

    echo  $row['BookNo'];
     echo $row['BookName'];
  }*/



/*$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result) > 0){
   

  echo  $row['BookNo'];
   echo $row['BookName'];
}*/

/*while(mysqli_num_rows($result) > 0){
    echo  $row['BookNo'];
    echo $row['BookName'];
}*/


 ?>
        <script>

const d = new Date();




document.getElementById("changings").innerHTML=  "TODAY'S REPORT" +  " [ " +d.toDateString()+ " ] " 
</script>
  
</body>
</html>