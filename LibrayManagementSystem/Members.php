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

           function redirect(){
            window.location.href = "MembersInventory.php"
           }

          </script>

        <style>
            nav{
                background-color:#202426;
            }
        body{
          background-color:#202426;
            }
     .one{
        color:#e91e63;
    }
    /*#exampleFormControlInput1,#exampleFormControlInput2,#exampleFormControlInput3,#exampleFormControlInput4,#exampleFormControlInput5,#exampleFormControlInput6,#exampleFormControlInput7{
       width:20rem;
    }*/
    .page2{
      padding-top: 12rem;
   padding-left: 5rem;
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
.error{
            color: #FF0000;
          }



            </style>
    </head>
            <body>
              <?php
            $nameErr = $addressErr = $dateErr = $numberErr =   $datebrithErr = $sexErr = $tokenErr = "";
        $name = $address = $date = $number =  $datebrith = $sex = $token =  "";
        
        

     

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

<div class="container-fluid ">
  <div class="row">
<div class="col-sm-3">
</div>

 
  <div class="col-sm-5 d-flex justify-content-center mt-5 bg-light border border-3 border-opacity-50 rounded-end border-success">
  <div class="colorcorrection text-info">
    <form  action="MembersInventory.php" method="POST"> 
    <div class="mb-3 own mt-3"><h2>Data-Entries-Members</h2></div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">MemberId</label>
  <input type="number" class="form-control" id="exampleFormControlInput1"  placeholder="AUTO GENERATION" disabled>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Member name <span class="error">*<?php echo $nameErr;?></span></label>
  <input type="text" class="form-control" id="exampleFormControlInput2" name="MemberName" placeholder="ENTER NAME" required>
</div>
<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">Address <span class="error">*<?php echo $addressErr;?></span></label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="Address" rows="2" placeholder="ENTER ADDRESS" required></textarea>

</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Join date <span class="error">*<?php echo $dateErr;?></span></label>
  <input type="date" class="form-control" id="txtDate" name="JoinDate" placeholder="ENTER JOIN DATE" required>
</div>
<div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phone number <span class="error">*<?php echo $numberErr;?></span></label>
  <input type="number" class="form-control" id="exampleFormControlInput5" name="PhoneNumber" placeholder=" ENTER PHONE NUMBER" required>
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Date of Birth <span class="error">*<?php echo $datebrithErr;?></span></label>
  <input type="date" class="form-control" id="exampleFormControlInput4" name="DateOfBirth" placeholder="ENTER THE DATE OF BIRTH" required>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Sex <span class="error">*<?php echo $sexErr;?></span></label>

 <select class="form-select" aria-label="Default select example" name="Sex" placeholder="ISUED STATUS" required>

  <option>Male</option>
  <option>Female</option>
  <option>Others</option>
  
</select>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Token No <span class="error">*<?php echo $tokenErr;?></span></label>
  <input type="number" class="form-control" id="exampleFormControlInput4" name="TokenNo" placeholder="ENTER TOKEN" required>
</div>




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
        <button type="submit" onclick="redirect()" class="btn btn-success">ADD</button>
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





 
    
   <!-- <div class="col-sm-3 text-danger example2 ml-5">
        <h5 class="">NOTE:</h5>
        <ul class="list-group ">
  <li class="list-group-item">Happy to be a Part of <strong> Us </strong></li>
  <li class="list-group-item">Please <strong>Treat</strong> a Books Like a Own Books</li>
  <li class="list-group-item">In Case Books Are <strong>Damaged </strong> Member have a Responsible </li>
  <li class="list-group-item">Please Submit Books <strong> On Time </strong></li>
  <li class="list-group-item">If Once You done a Payment <strong>It Not Be Refund </strong></li>
</ul>
    </div>
  </div>-->

</div>
<div class="col-sm-3 page2">

<blockquote>
        <div class="card" style="width: 18rem;">
        <img src="new.jpg" class="card-img-top bg-light" alt="..." height="250px" width="250px">
        <div class="card-body bg-light text-dark">
          <h5 class="card-title">Library</h5>
          <p class="card-text">"Libraries store the energy that fuels the imagination. They open up windows to the world and inspire us to explore and achieve, and contribute to improving our quality of life.".</p>
         
            
            <footer class="blockquote-footer">Sidney Sheldon<cite title="Source Title"></cite></footer>
          </blockquote>
      

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














