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
        <style>
     .one{
        color:white;
    }
  /* #exampleFormControlTextarea1,#exampleFormControlInput1,#exampleFormControlInput2,#exampleFormControlInput3,#exampleFormControlInput4,#exampleFormControlInput5,#exampleFormControlInput6,#exampleFormControlInput7{
       width:20rem;
    }*/
    .page2{
      color:white;
    }
    .own{
    
      text-align: justify;
    }
    .example{
        width:20rem;
    }
    
    .example2{
        margin-top: 10rem;
        margin-left: 5rem;

    }
    .total{
      height:20rem;
    }
    .example3{
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



<div class="container-fluid total">

<div class="position-absolute">
  <div class=".d-sm-none .d-md-block">
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
</div>
    
<div class="row position-relative">
    <div class="col-sm-3 ">
    </div>
  
    <div class="col-sm-6 example3 d-flex justify-content-center">
        

    <div class="colorcorrection text-info">
    <form action="MembersInventory.php" method="POST"> 
    <div class="mb-3 own mt-3"><h2>Data-Entries-Members</h2></div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">MemberId</label>
  <input type="number" class="form-control" id="exampleFormControlInput1"  placeholder="AUTO GENERATION" disabled>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Member name</label>
  <input type="text" class="form-control" id="exampleFormControlInput2" name="MemberName" placeholder="ENTER NAME">
</div>
<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">Address</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="Address" rows="2" placeholder="ENTER ADDRESS"></textarea>

</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Join date</label>
  <input type="date" class="form-control" id="exampleFormControlInput4" name="JoinDate" placeholder="ENTER JOIN DATE">
</div>
<div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phone number</label>
  <input type="number" class="form-control" id="exampleFormControlInput5" name="PhoneNumber" placeholder=" ENTER PHONE NUMBER">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Date of Birth</label>
  <input type="date" class="form-control" id="exampleFormControlInput4" name="DateOfBirth" placeholder="ENTER THE DATE OF BIRTH">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Sex</label>

 <select class="form-select" aria-label="Default select example" name="Sex" placeholder="ISUED STATUS" required>

  <option>Male</option>
  <option>Female</option>
  <option>Others</option>
  
</select>




<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
        Want to Add a Member ?
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
<button type="reset" class="btn btn-info">CLEAR</button>
<a href="Library.html">
<button type="button" class="btn btn-danger">QUIT</button>
  </a>

    </form>
    </div>
  </div>





 
    
    <div class="col-sm-3 text-danger example2 ml-5">
        <h5 class="">NOTE:</h5>
        <ul class="list-group ">
  <li class="list-group-item">Happy to be a Part of <strong> Us </strong></li>
  <li class="list-group-item">Please <strong>Treat</strong> a Books Like a Own Books</li>
  <li class="list-group-item">In Case Books Are <strong>Damaged </strong> Member have a Responsible </li>
  <li class="list-group-item">Please Submit Books <strong> On Time </strong></li>
  <li class="list-group-item">If Once You done a Payment <strong>It Not Be Refund </strong></li>
</ul>
    </div>
  

<!--<form action="" method="POST">
<input type="hidden" name="_method" value="DELETE"> 
<input type="hidden" name="_token" value="the_token">
<a href="Library.html">
<button type="submit" class="btn btn-link" onclick="if (!confirm('Are you sure?')) { return false }"><span>Delete</span></button>
</a>
</form>-->
</div>
</body>

</html>