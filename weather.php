
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>
    
    <link rel="stylesheet" href="styleIndex.css">
    <link rel="stylesheet" href="StyleAlert.css">
    <link rel="stylesheet" href="styleWeather.css">
</head>
<body>
    <div class="nav1">
        <h1>Weather-Bhudnagaria</h1>
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
  
  <div class="weather" >
        <div class="contain" id="weather1">
            <!-- <p>
                erw
            </p> <br>
            <p>
                erw
            </p> <br>
            <p>
                erw
            </p>
     -->
    
        </div>
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

<script>

    var data;
fetch('https://api.openweathermap.org/data/2.5/weather?lat=27.333508&lon=79.304710&appid=b8ab057cfb450f1d61920864f8865fa6&units=metric').then((apidata)=>{
     return apidata.json();
 })
 .then((actualdata)=>{
     data=actualdata;
console.log(data);
var a=document.getElementById("weather1");
            var x="<p> temperatue: "+data.main.temp+"</p> <br>"
            +"<p> humidity: "+data.main.humidity+"</p> <br>"
            +"<p> pressure: "+data.main.pressure+"</p> <br>"
            +"<p> sea level: "+data.main.sea_level+"</p> <br>"
            +"<p> feels like: "+data.main.feels_like+"</p> <br>"
            +"<p> max temperature: "+data.main.temp_max+"</p> <br>"
            +"<p> min temperature: "+data.main.temp_min+"</p> <br>"
            +"<p> "+data.weather[0].main+" <br> "+data.weather[0].description+"</p> <br>";


a.innerHTML+= x;;
 })
 .catch((error)=>{
     console.error(error);
 });


</script>
</body>
</html>