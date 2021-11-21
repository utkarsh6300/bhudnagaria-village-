<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styleIndex.css">
    <link rel="stylesheet" href="styleProfile.css">
</head>
<body>
    <div class="nav1">
    <h1>Profile | Bhudnagaria </h1>
    <nav>
        <a href="index.php">Home </a>
        <!-- <a href="gallery.php">Photo Gallery </a>
        <a href="events.php">Events </a> -->
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

    <div class="info">
       <div class="photo">photo
       </div>
      <div class="content">
   <!-- name 
   email
   gender
   age -->
   
  

    <?php
    //   include 'db/db_connect.php';
    //  session_start();
     if(isset($_SESSION['phone'])){
      $phone1= $_SESSION['phone'];
    $sql="Select * from logincredentials where phone='$phone1'";
    $res = mysqli_query($conn, $sql);
     $data=mysqli_fetch_array($res);
     for ($i=1; $i <6 ; $i++) {    
         echo '<p>'.$data[$i].'</p>';
        }
      }
        else  echo '<p>you are not logged in</p>';
        ?>
   


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
</body>
</html>