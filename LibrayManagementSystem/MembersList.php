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
                window.location.href = "Members.php"
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



   $sql = "SELECT MemberName,MemberId FROM membersinfo";

   $result = mysqli_query($conn,$sql);

   $rows = [];

   while($row = mysqli_fetch_assoc($result)){
           $rows[] = $row;

   }

    echo "<div class='mb-3 own mt-3'><h2>MEMBER'S LIST</h2></div>";
 //  echo '<img class="img-fluid img-responsive images" src="Memberlisting.png" height="300px" width="300px">';
    echo '<div class="container">';
    echo '<div id="okk" class="text-success"><marquee height="" loop="">Total Members Of Library</marquee></div>';
    echo '<table class="table mid caption-top  table-bordered border-success table-responsive table-hover">';
    echo "<caption id='changings'></caption>";
    echo '<thead class="table-dark tba">';
    echo '<tr>';
    echo '<th class=" " >MEMBER NAME</th>';
    echo '<th class="">MEMBER ID</th>';
    echo '</tr>';
    echo '</thead>';
    foreach($rows as $row){
    echo '<tbody>';
    echo '<tr>';
    echo '</tr>';
    echo '<td>'.$row['MemberName'].'</td>';
    echo '<td>'.$row['MemberId'].'</td>';
   
    
          }
          echo '<tr>';

          echo '</tbody>';
        echo '</table>';
     
   ?>

<button type="button" onclick="redirect()" class="btn btn-success m-3">ADD MEMBERS</button>
      
      <a href="Library.html">
      <button type="button" class="btn btn-danger m-3">QUIT</button>
       </a>
       </div>
</body>
</html>