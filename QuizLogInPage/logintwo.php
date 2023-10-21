<html>
    <head>
        <title>
SIGN UP
        </title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
     
        <link rel="stylesheet" href="stylelogin.css">
        <style>
            body{
    
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(sky.jpg); 
    background-size: cover;
    background-position: center;
   
    background-repeat: no-repeat;
    min-height: 100px;
    font-family:'Poppins', sans-serif;
    
  

}
            </style>
    </head>
<?php

$v_email = $v_user_name = $v_password= "";


?>
     <body>
<h1 class="heading">QUIZ PROGRAM</h1>
<div class="forform">
     
     <form method="POST">
          <h2 class="h2">SIGN IN</h2>
         
<h5>
    <div class=forlabel>
    <div class="forlabel2">
<label style="padding-right:30px">Email:</label>
        <input type="text" name="email" placeholder="Enter your Email"><br>
    </div>
    <div class="forlabel2">
        <label>Username:</label>
        <input type="text" name="user_name" placeholder="Enter your username"><br>
    </div>
          <div class="forlabel2">

        <label>Password:</label>
        <input type="password" name="password" placeholder="Enter your Password">
</div>
</h5>
         
          <input type="reset" name="Clear" value="Clear" class="thirdbtn"style="padding:5px 10px 5px 20px">
          
          <input type="submit" name="submit" value="Log in" class="firstbtn" formaction="signupback.php" style="padding:5px 10px 5px 20px"><br>
</div>
       
         
         
               
                  

     </form>
</div>
<?php

if (isset($_POST["submit"])){
echo "it works";
}
else{
    echo "not connected";
}

?>
     </body>

</html>