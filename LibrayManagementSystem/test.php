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
        <style>
     .one{
        color:#e91e63;
    }
   #exampleFormControlTextarea1,#exampleFormControlInput1,#exampleFormControlInput2,#exampleFormControlInput3,#exampleFormControlInput4,#exampleFormControlInput5,#exampleFormControlInput6,#exampleFormControlInput7{
       width:20rem;
    }
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
    }
    .example3{
        border:2px solid black;

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



<div class="container">
    
<div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6 example3 d-flex justify-content-center">
        


    <form method="POST"> 
    <div class="mb-3 own mt-3"><h2>Data Entries-Members</h2></div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">MemberId</label>
  <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="AUTO GENERATION" disabled>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Member name</label>
  <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="ENTER NAME">
</div>
<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">Address</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="ENTER ADDRESS"></textarea>

</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Join date</label>
  <input type="date" class="form-control" id="exampleFormControlInput4" placeholder="ENTER JOIN DATE">
</div>
<div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phone number</label>
  <input type="number" class="form-control" id="exampleFormControlInput5" placeholder=" ENTER PHONE NUMBER">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Date of Birth</label>
  <input type="date" class="form-control" id="exampleFormControlInput4" placeholder="ENTER THE DATE OF BIRTH">
</div>
<div class="mb-5">
<label for="exampleFormControlInput1" class="form-label">Sex</label>
<select class="form-select example" aria-label="Default select example" placeholder="">

<option value="1" selected>Male</option>
<option value="2">Female</option>
<option value="3">Others</option>

</select>
</div>




<button type="submit" class="btn btn-success">ADD</button>
<button type="button" class="btn btn-secondary">EDIT</button>
<button type="button" class="btn btn-info">CLEAR</button>
<a href="Library.html">
<button type="button" class="btn btn-danger">QUIT</button>
  </a>

    </form>
    </div>




 
    
    <div class="col-sm-3 text-danger example2 ml-2">
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