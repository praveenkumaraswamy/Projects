<html>
    <head>
        <title>
LOG IN
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

     <body>
<h1 class="heading">QUIZ PROGRAM</h1>
<div class="forform">
     
     <form method="POST">
          <h2 class="h2">LOG IN<h2>
          <div class="forlabel">
<h6>
        <label>Username:</label>
        <input type="text" name="email" placeholder="Enter your Email"><br>
          <div class="forlabel2">
        <label>Password:</label>
        <input type="password" name="password" placeholder="Enter your Password">
</div>
</h6>
          </div>
          <input type="reset"  value="Clear" class="thirdbtn" style="padding:5px 10px 5px 20px">

          <input type="submit" formaction="loginback.php" class="firstbtn" name="submit" value="Log in" style="padding:5px 10px 5px 8px"><br>

          <div>
         
          </div>
          <div class="pad">
               <ul>
               <li><a href="#">Forgot Password?</a></li>
               <li>New User<a href="logintwo.php"><button type="button" class="secondbtn">Sign Up</button</a></li>
               
               </ul>
               
          </div>
         

     </form>
</div>

     </body>

</html>