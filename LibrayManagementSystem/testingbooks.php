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
          function clearall(){
             
          }


          </script>

        <style>

     .one{
        color:#e91e63;
    }
    /*#exampleFormControlInput1,#exampleFormControlInput2,#exampleFormControlInput3,#exampleFormControlInput4,#exampleFormControlInput5,#exampleFormControlInput6,#exampleFormControlInput7{
       width:20rem;
    }*/
    .page2{
      color:white;
    }
    .own{
    
      text-align: center;
    }
    .colorcorrection{
      margin-top: 2rem;
    }
    @media (max-width:700px){
      .colorcorrection{
      color:black;
      }

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


<div class="container-fluid">
<div class="position-absolute forslideshow">
<div id="carouselExampleAutoplaying" class="carousel slide d-none d-sm-block" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item three active c-item">
         <img src="glow.jpg" class="d-block w-100 img-fluid img-thumbnail c-img"  alt="..." data-bs-interval="1000"></span> 
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
</div>
<div class="d-flex justify-content-center  page2 mt-3 position-relative">
  <div class="colorcorrection">
    <form action="booksInventory.php" method="POST" > 
    <div class="mb-3 own"><h2>Data Entries-Books</h2></div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Book No</label>
  <input type="number" class="form-control" id="exampleFormControlInput1"  placeholder="AUTO GENERATION" disabled>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Book Name</label>
  <input type="text" class="form-control" id="exampleFormControlInput2" name="BookName" placeholder="ENTER BOOK NAME" required>
</div>
<div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Authors</label>
  <input type="text" class="form-control" id="exampleFormControlInput3" name="Authors"   placeholder="ENTER AUTHORS NAME" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Price</label>
  <input type="number" class="form-control" id="exampleFormControlInput4" name="Price"  placeholder="ENTER PRICE" required>
</div>
<div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Data of Purchase</label>
  <input type="date" class="form-control" id="exampleFormControlInput5" name="DateofPurchase" placeholder="ENTER DATE OF PURCHASE" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Issued status</label>
 <!-- <input type="" class="form-control"  id="exampleFormControlInput6" placeholder="ISUED STATUS">-->
 <select class="form-select" aria-label="Default select example" name="IssuedStatus" placeholder="ISUED STATUS" required>

  <option value="Available" selected>Available</option>
  <option value="Issued">Issued</option>
  
</select>

</div>
<div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Category</label>
 <!--  <input type="number" class="form-control" id="exampleFormControlInput7" placeholder="CATEGORY">-->

  <select class="form-select" aria-label="Default select example" name="Category" required>
 
  <option value="Fiction">Fiction</option>
  <option value="History">History</option>
  <option value="Science">Science</option>
  <option value="Devotional">Devotional</option>
  <option value="Politics">Politics</option>
  <option value="Tech">Tech</option>
  <option value="Others" selected>Others</option>
</select>
</div>
<div>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ADD
</button>

<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title " id="exampleModalLabel">Are you Sure</h5>
        <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
        Want to Store Books in Database ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
        <button type="submit" class="btn btn-success">ADD</button>
      </div>
    </div>
  </div>
</div>
<!--<button type="submit" class="btn btn-success">ADD</button>-->
<button type="button" class="btn btn-secondary">EDIT</button>
<button type="reset" class="btn btn-info" onclick="clearall()" id="type1">CLEAR</button>
<a href="Library.html">
<button type="button" class="btn btn-danger">QUIT</button>
  </a>
</div>
    </form>
  </div>

</div>
</div>



            </body>