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
                window.location.href = "books.php"
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
.image{
    margin-top: 50%;
    margin-bottom: 50%;
    margin-left: auto;
    margin-right: auto;
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
   
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
</div>
            
</nav>

<?php 

session_start();
   $servername="localhost";
   $username="praveen";
   $password="Dbpass123";
   $databasename="books_master";

   $conn = mysqli_connect($servername,$username,$password,$databasename);



   $sql = "SELECT BookNo,BookName,no_of_books FROM books_inventory";

   $result = mysqli_query($conn,$sql);

   $rows = [];
   

   while($row = mysqli_fetch_assoc($result)){
           $rows[] = $row;

   }

 

   echo '<img class="img-fluid img-responsive images" src="stockreport1.png" height="300px" width="300px">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-10">';
    echo '<div id="okk" class="text-success"><marquee height="" loop="">Total Books Stock Of Library</marquee></div>';
    echo '<table class="table mid caption-top  table-bordered border-secondary table-responsive table-hover">';
    echo "<caption id='changings'></caption>";
    echo '<thead class="table-dark tba">';
    echo '<tr>';
    echo '<th class=" " >BOOK NUMBER</th>';
    echo '<th class="">BOOK NAME</th>';
    echo '<th class="">BOOKS IN STOCK</th>';
    echo '</tr>';
    echo '</thead>';
    foreach($rows as $row){
    echo '<tbody>';
    echo '<tr>';
    echo '</tr>'; 
    echo '<td>'.$row['BookNo'].'</td>';
    echo '<td>'.$row['BookName'].'</td>';
    if($var2 = ""){
     echo "NOT AVAILABLE";
    }
    else{
        echo '<td>'.$row['no_of_books'].'</td>';
    }
    
    
          }
          echo '<tr>';

          echo '</tbody>';

        echo '</table>';
       
   ?>

      <button type="button" onclick="redirect()" class="btn btn-success m-3">ADD BOOKS TO LIBRARY</button>
      
       <a href="Library.html">
       <button type="button" class="btn btn-danger m-3">QUIT</button>
        </a>
        </div>

    <div class=col-2>
    <img class="img-fluid img-responsive image" src="readystock2.png" height="300px" width="300px">

    </div>
        </div>
</body>
</html>