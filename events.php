
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="website of bhudnadaria village">
   <meta name="keywords" content="Weather Bhudnagaria bhoodnagaria bhoornagaria">
   <meta name="author" content="utkarsh yadav">
    <title>Events</title>
    
    <link rel="stylesheet" href="styleIndex.css">
    <link rel="stylesheet" href="StyleAlert.css">
    <link rel="stylesheet" href="styleEvents.css">
    
</head>
<body>
    <div class="nav1">
        <h1>Events-Bhudnagaria</h1>
    <nav>
        <a href="index.php">Home </a>
        <!-- <a href="gallery.php">Photo Gallery </a> -->
        <!-- <a href="events.php">Events </a> -->
        <a href="contact.php">Contact Developer</a>
        <a href="members.php">List of members</a>
        <!-- <a href="stories.php">Stories</a> -->
        <a href="signup.php">Signup</a>
        <a href="login.php">Login</a>
        <a href="profile.php">Profile</a>
        <a href="weather.php">Weather</a>
      </nav> 
    </div>


    
    <?php
include 'db/db_connect.php';
session_start();
if(isset($_SESSION['phone'])){
$phone1= $_SESSION['phone'];
$check= strval($phone1);
if(strlen($check)>0){
    echo'
<div id="success" class="alert">
<p>you are logged in with '.$phone1.'</p>
<a href="logout.php" id="logoutbutton" > Logout </a>
</div>


';
}
}

?>




<div class="events">
    <h3>Event 1</h3>
<img src="img/bakery-1209446_1920.jpg" alt="reload">
<a href="">See More</a>
    <h3>Event 2</h3>
    <img src="img/breakfast-1804457_1920.jpg" alt="">
    <a href="">See More</a>
    <h3>Event 3</h3>
    <img src="img/breakfast-690128_1920.jpg" alt="">
    <a href="">See More</a>
    <h3>Event 4</h3>
    <img src="img/food-1081707_1920.jpg" alt="">
    <a href="">See More</a>
    <h3>Event 5</h3>
    <img src="img/ice-cream-1274894_1920.jpg" alt="">
    <a href="">See More</a>
</div>

    <footer>
        <P>
             Copyright &copy; 2021
        </P>
        <p>
            Call Us At-8979053386
        </p>
        <p>
            Mail us at - utkarshyadav9876@gmail.com
        </p>
      </footer>
  