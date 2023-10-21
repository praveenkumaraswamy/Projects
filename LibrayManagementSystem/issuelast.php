<?php 

session_start();


//$_SESSION['gv_booknames'] = $_POST['BookName'];



   $servername="localhost";
   $username="praveen";
   $password="Dbpass123";
   $databasename="books_master";

   $conn = mysqli_connect($servername,$username,$password,$databasename);

   $sql = "SELECT BookNo,BookName FROM books_inventory WHERE BookName = 'test'";
   echo $sql;
   $result = mysqli_query($conn,$sql);
   
   $row = mysqli_fetch_row($result);
   
   if (mysqli_num_rows($result) > 0){
   
       echo $row['BookNo'];
       echo $row['BookName'];
   }