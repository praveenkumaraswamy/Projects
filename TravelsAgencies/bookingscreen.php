<html>
    <head>
        <link rel="stylesheet" href="interiortwo.css">
    </head>
    <body>
        <?php
        
        $nameErr = $emailErr = $numberErr = $locationfromErr = $locationtoErr = $datetravelErr = $nopersonErr = $vehicletypeErr = "";
        $name = $email = $number = $locationfrom = $locationto = $date = $person = $vehicle = "";
        
        

     
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
              $nameErr = "Name is required";
            } else {
              $name = testing($_POST["name"]);
              
              if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
              }
            }
            
            $email = testing($_POST["mail"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format";
            }

    if(empty($_POST['number'])){
        $numberErr = "Number is required";
    }
    else {
        $number = testing($_POST['number']);

        if(!preg_match('/^ ([0-9]+)$/', $number)){
            $number = "Enter valid number";
        }
        }

         if (empty($_POST["locationfrom"])) {
              $locationfromErr = "location is required";
            } else {
              $locationfrom = testing($_POST["locationfrom"]);
                  if (!preg_match("/^[a-zA-Z-' ]*$/",$locationfrom)) {
                $locationfromErr = "Only letters and white space allowed";
              }
            }
         

            
         if (empty($_POST["locationto"])) {
              $locationtoErr = "location is required";
            } else {
              $locationto = testing($_POST["locationto"]);
              
              if (!preg_match("/^[a-zA-Z-' ]*$/",$locationto)) {
                $locationtoErr = "Only letters and white space allowed";
              }
            }


            
         if (empty($_POST["date"])) {
              $datetravelErr = "Date is required";
            } else {
              $date = $_POST["date"];
        }

             if (empty($_POST["person"])) {
              $nopersonErr = " required";
            } else {
              $person = testing($_POST["person"]);
            
            }

            
             if (empty($_POST["vehicle"])) {
              $vehicletypeErr = "location is required";
            } else {
              $vehicle = testing($_POST["vehicle"]);
      }
    }
         
       


        function testing($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }

        ?>
       
        <h1>
            Booking Progress
        </h1>
        
            <div class="align">
            <form method="POST"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
           
                
    <h3>

      <div class="label2">

<label>  Name</label>
<br>
<input  type="text" name=" booked_by" placeholder="Enter your Name" >
<span class="error">* <?php echo $nameErr;?></span>
<br>
<br>

<label> E-mail</label>
<br>
<input  type="text" name="mailid" placeholder="Enter your E-mail">
<span class="error">*<?php echo  $emailErr;?></span>
<br><br>

<label>Number:</label>
<br>
<input  type="text" name=" Contact_ph_no" placeholder="phone Number">
<span class="error">*<?php echo $numberErr;?></span>
<br><br>

<label>location From</label>
<br>
<input  type="text" name="pickup_point" placeholder="from location">
<span class="error">*<?php echo $locationfromErr;?></span>
<br><br>
      </div>
      <div class="label3">
<label> location To</label>

<br>
<input  type="text" name="destination" placeholder=" To location">
<span class="error">*<?php echo $locationtoErr;?></span>
<br><br>

<label>Date of travel</label>
<br>
<input style="padding:5px 70px 5px 3px"  type="date" name="travel_date"  min="7-31-2023" placeholder="Date">
<span class="error">*<?php echo $datetravelErr;?></span>
<br><br>





<label>Vehicle type</label>
<br>

<select value=vehicle name="vehicle">
    <option>MINI</option>
    <option>INDICA</option>
    <option>TAVERA</option>
    <option>XYLO</option>
    <option>TRIBER</option>
    <option>TEMPO</option>
    <option>21 SEATER</option>
</select>
<span class="error">*<?php echo $vehicletypeErr;?></span>
<br><br>


<label>Number of Persons:</label>
<br>

<input type="number" name="passangercount" value="passangercount" >
<span class="error">*<?php echo $nopersonErr;?></span>
</div>

<br><br>
<div class="sum">
<input type="submit" name="submit" formaction="bookingback.php">
</div>

        </h3>


</form>



        </body>
</html>