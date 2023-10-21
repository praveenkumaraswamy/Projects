<!DOCTYPE html>
<html>
    <head>
        <title>
SEPM
        </title>        
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
       <link rel="stylesheet" href="LibraryStyle.css"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
        <script src="code.jquery.com_jquery-3.7.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <script>
        function clearall(){
          window.loction.href = ".php"
        }
           function redirect(){
            window.loction.href = "booksInventory.php"
           }

          </script>

        <style>
          .error{
            color: #FF0000;
          }
        body{
          background-color:#202426;
            }
     .one{
        color:#e91e63;
    }
    #txtDate,#exampleFormControlInput1,#exampleFormControlInput2,#exampleFormControlInput3,#exampleFormControlInput4,#exampleFormControlInput5,#exampleFormControlInput6,#exampleFormControlInput7{
       width:70%;
    }
    /*input[type=text],input[type=number],input[type=date]{
      width:50%;
    }*/
    .page2{
      padding-top: 12rem;
   padding-left: 20px;
    }
    .own{
    
      text-align: center;
      color:#e91e63;
  
    }
    .colorcorrection{
      margin-top: 2rem;
    }
    @media (max-width:700px){
      .colorcorrection{
      color:black;
      }

    }
    .c-item{
    height:320px;
}

.c-img{
    height: 100%;
    object-fit:cover;
    filter:brightness(0.6);

}

.imgs{
height:250px;
width:250px;

}



            </style>
    </head>
            <body>
            <?php
        
        $nameErr = $authorErr = $priceErr =  $dateErr = $IssuedStatusErr = $CategoryErr = $NoOfBooksErr = "";
        $name = $email = $price = $date = $IssuedStatus = $Category =  $NoOfBooks =  "";
        
        

     
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["BookName"])) {
              $nameErr = "Name is required";
            } else {
              $name = testing($_POST["BookName"]);
              
              if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
              }
            }
            
            if (empty($_POST["Authors"])) {
              $authorErr = "Author Name is required";
            } else {
              $author = testing($_POST["Authors"]);
              
              if (!preg_match("/^[a-zA-Z-' ]*$/",$author)) {
                $authorErr = "Only letters and white space allowed";
              }
            }
            


            if (empty($_POST["Price"])) {
              $priceErr = "Price is required";
            } else {
              $dprice = $_POST["Price"];
        }



            
         if (empty($_POST["DateofPurchase"])) {
              $dateErr = "Date is required";
            } else {
              $date = $_POST["DateofPurchase"];
        }

        
        if (empty($_POST["IssuedStatus"])) {
          $IssuedStatusErr = " required";
        } else {
          $IssuedStatus = testing($_POST["IssuedStatus"]);
        
        }


            
             if (empty($_POST["Category"])) {
              $CategoryErr = "Category is required";
            } else {
              $Category = testing($_POST["Category"]);
      }
    
         
    if (empty($_POST["no_of_books"])) {
      $NoOfBooksErr = "No Of Books is required";
    } 
   else {
    $date = $_POST["no_of_books"];
}
        }
 


        function testing($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }

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


            <div class="container-fluid">

<div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item three active c-item">
         <img src="glow.jpg" class="d-block w-100 img-fluid img-thumbnail border-info c-img"  alt="..." data-bs-interval="1000"></span> 
      </div>
      <div class="carousel-item three c-item">
        <img src="bePartOfBook.jpg" class="d-block w-100 img-fluid img-thumbnail c-img " alt="..." data-bs-interval="2000">
      </div>
      <div class="carousel-item three c-item">
        <img src="readbooksevertday.jpg" class="d-block w-100 img-fluid img-thumbnail c-img" alt="..." >
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
 

  
</div>

<div class="container ">
  <div class="row">
<div class="col-3">
  
</div>

 
  <div class="col-sm-6  d-flex justify-content-center mt-5 bg-light border border-3 border-opacity-50 rounded-end border-success">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" > 
    <div class="mb-5 mt-3 own"><h2>Data Entries-Books</h2><div><hr></div></div>
    <div class="text-success">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Book No</label>
  <input type="number" class="form-control" id="exampleFormControlInput1"  placeholder="AUTO GENERATION" disabled>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Book Name <span class="error">*<?php echo $nameErr;?></span></label>
  <input type="text" class="form-control" id="exampleFormControlInput2" name="BookName" placeholder="ENTER BOOK NAME" required>
  
</div>
<div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Authors <span class="error">*<?php echo $authorErr;?></span></label>
  <input type="text" class="form-control" id="exampleFormControlInput3" name="Authors"   placeholder="ENTER AUTHORS NAME" required>  

</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Price <span class="error">*<?php echo $priceErr;?></span></label>
  <input type="number" class="form-control" id="exampleFormControlInput4" name="Price"  placeholder="ENTER PRICE" required>

</div>
<div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Data of Purchase   <span class="error">*<?php echo $dateErr;?></span></label>
  <input type="date" class="form-control" id="txtDate" name="DateofPurchase" placeholder="ENTER DATE OF PURCHASE" required>

</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Issued status <span class="error">*<?php echo $IssuedStatusErr;?></span></label>
 <!-- <input type="" class="form-control"  id="exampleFormControlInput6" placeholder="ISUED STATUS">-->
 <select class="form-select" aria-label="Default select example" id="exampleFormControlInput4" name="IssuedStatus" placeholder="ISUED STATUS" required>


  <option value="Available" selected>Available</option>
  <option value="Issued">Issued</option>
  
</select>


</div>
<div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Category <span class="error">*<?php echo $CategoryErr;?></span></label>
 <!--  <input type="number" class="form-control" id="exampleFormControlInput7" placeholder="CATEGORY">-->

  <select class="form-select" aria-label="Default select example" id="exampleFormControlInput4" name="Category" required>
 
  <option value="Fiction">Fiction</option>
  <option value="History">History</option>
  <option value="Science">Science</option>
  <option value="Devotional">Devotional</option>
  <option value="Politics">Politics</option>
  <option value="Tech">Tech</option>
  <option value="Others" selected>Others</option>
</select>

</div>
<div class="mb-3">

<label for="exampleFormControlInput1" class="form-label">Number Of Books <span class="error">*<?php echo $NoOfBooksErr;?></span>
</label>
  <input type="number" class="form-control" id="exampleFormControlInput4" name="no_of_books"  placeholder="ENTER NO OF BOOKS" required>


</div>
<div>
</div>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-success m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ADD
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
        Want to Store  in Library ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
        <input type="submit" formaction="booksInventory.php" class="btn btn-success " value="ADD">
      </div>
    </div>
  </div>
</div>
<!--<button type="submit" class="btn btn-success">ADD</button>-->
<button type="button" class="btn btn-secondary m-3">EDIT</button>
<button type="reset" class="btn btn-info m-3" onclick="" id="type1">CLEAR</button>
<a href="Library.html">
<button type="button" class="btn btn-danger m-3">QUIT</button>
  </a>
</div>
    </form>
  </div>
  <div class="col-3 page2">



    
<blockquote>
  <div class="card" style="width: 18rem;">
  <img src="image3.jpg" class="card-img-top" alt="..." height="250px" width="250px">
  <div class="card-body bg-light text-dark">
    <h5 class="card-title">Library</h5>
    <p class="card-text">"Be the change you want to see in the world."</p>
    <br>
      
      <footer class="blockquote-footer mt-4">(Father of the nation, India)<cite title="Source Title">Mahatma Gandhi </cite></footer>
    </blockquote>

  </div>
</div>


</div>
</div>

</div>
</div>
<script>

  


$(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var minDate= year + '-' + month + '-' + day;

    $('#txtDate').attr('min', minDate);
});
  </script>

            </body>
</html>












