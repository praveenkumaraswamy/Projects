<!DOCTYPE html>
<html>
    <head>
        <title>
DATAADDSCREEN
        </title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="DATASCREEN.css">
    </head>
    <body>

    <h1 class="heading">DATA ADD SCREEN</h1>
    <br><br>
<div class="parent">

<form method="POST" formaction="dataaddback.php">
    <div class="sub">
        <h2>
<label style=padding-right:70px;>S.NO</label>       
<input type="number" name="sno"><br><br>



<label>QUESTION</label>
<input class="new" type="text" name="question" style="padding:10px 20px 10px 150px"><br><br>



<label style=padding-right:30px;>OptionA</label>
<input type="text" name="optionA"><br><br>

<label style=padding-right:30px;>OptionB</label>
<input type="text" name="optionB"><br><br>

<label style=padding-right:30px;>OptionC</label>
<input type="text" name="optionC"><br><br>

<label style=padding-right:30px;>OptionD</label>
<input type="text" name="optionD"><br><br>

<label >CorrectAns</label>
<input type="text" name="correctans"><br><br>

</div>
        </h2>
<div class="forallbtn">
<input type="submit" formaction="dataaddback.php" value="ADD" name="add">

<input type="submit" formaction="deletequiz.php" value="DELETE" name="delete">

<input type="reset" value="CLEAR" name="clear">

<input type="submit" value="QUIT" name="quit">
<br>
<br>
</div>
</form>
</div>
</div>

    </body>
</html>