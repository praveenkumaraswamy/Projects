<html>
    <head>
<style>
body{
  
    text-align: center;
    background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,150,120,255));
}
input[type=submit]{
background-color: green;
    text-align:center;
    color: white;
    margin-top: 100px;
}
h1{
    background-color: white;
}
input[type=submit]:hover{
background-color: black;
}
li{
    text-decoration: none;
    list-style: none;
}

</style>

    </head>
    <body>
        <h1 style="border:2px solid black;">WELCOME TO THE QUIZ</h1>
        <div class="padd">
            <form method="POST" formaction="quiz.php">
            <input type="submit"  style="padding:10px 10px 20px 10px;"; name="submit" formaction="quizExtra.php" value="Start the Quiz" target=""><br><br>
            </form>
        </div>
        <div>

        <ul>
            <li>INSTRUCTIONS:</li><br>
            <li>1. User has a limited tme to finish the quiz</li><br>
        <li>2. This quiz has a particular time to finished it </li><br>
       
</ul>
        </div>
    </body>
</html>