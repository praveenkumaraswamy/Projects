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
            function clicking(){
                window.location.href = "Library.html"
            }
            
           
        </script>
        <style>
            </style>
            <body>
                <?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["MemberName"])) {
      $nameErr = "Name is required";
    } else {
      $name = testing($_POST["MemberName"]);
      
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }
    
    if (empty($_POST["Address"])) {
      $addressErr = "Date is required";
    } else {
      $address = $_POST["Address"];
}
    
if (empty($_POST["JoinDate"])) {
  $dateErr = "Date is required";
} else {
  $date = $_POST["JoinDate"];
}



if(empty($_POST['PhoneNumber'])){
$numberErr = "PhoneNumber is required";
}
else {
$number = testing($_POST['PhoneNumber']);

if(!preg_match('/^ ([0-9]+)$/', $number)){
    $numberErr = "Enter valid number";
}
}



    
 if (empty($_POST["DateOfBirth"])) {
      $datebrithErr = "Date is required";
    } else {
      $datebrith = $_POST["DateOfBirth"];
}

if (empty($_POST["Sex"])) {
  $sexErr = " required";
} else {
  $sex = testing($_POST["Sex"]);

}


    
     if (empty($_POST["TokenNo"])) {
      $tokenErr = "TokenNo is required";
    } else {
      $token = testing($_POST["TokenNo"]);
}
}
 




function testing($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }








                session_start();
                $servername="localhost";
                $username="praveen";
                $password="Dbpass123";
                $databasename="books_master";
                
                $conn = mysqli_connect($servername,$username,$password,$databasename);


                // $V_BookNo= trim($_POST['BookNo']);
                //$_SESSION['gv_memberid']  = $V_memberid = trim($_POST['MemberId']);

                $_SESSION['gv_membername'] = $V_memberName = trim($_POST['MemberName']);
                 $V_address= trim($_POST['Address']);
                 $V_Dateofjoin= trim($_POST['JoinDate']);
                 $V_PHNO= trim($_POST['PhoneNumber']);
                 $V_DateOfBirth= trim($_POST['DateOfBirth']);
                 $V_sex=trim($_POST['Sex']);
                 $_SESSION['gv_token'] = $V_TokenNo=trim($_POST['TokenNo']);
                $sql = "INSERT INTO membersinfo(MemberName,Address,JoinDate,PhoneNumber,DateOfBirth,Sex,TokenNo)VALUES('".$_SESSION['gv_membername'] ."','$V_address','$V_Dateofjoin','$V_PHNO','$V_DateOfBirth','$V_sex','".$_SESSION['gv_token']."')";

                 $result = mysqli_query($conn,$sql);

                 

              

                 if($result){
                    echo '<div class="container">';
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert ">
                    <strong>Successfully Added  <strong>"' .$_SESSION['gv_membername']. '"</strong>  To be a Member
                    <button type="button" onclick="clicking()" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                  echo "<h6>Welcome '" .$_SESSION['gv_membername']. "' To Be a Part of Library</h6>";
                  echo '</div>';
                  
                
                 }
                 else{
                    echo  mysqli_error($conn);
                 }

                ?>
            </body>
            </html>