<html>
    <head>
    </head>
    <body>
    <form method="POST"> 
    <input type="text" name="booked_by">
    <input type="submit" value="Go" formaction="bookingView.php">
    </form>
    <?php 


session_start();
//$_SESSION['gv_bdk'] = trim($_POST['travel_date']);

?>
    </body>
</html>