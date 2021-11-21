<?php

// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//        include 'db/db_connect.php';

//     $suggestion= $_POST["suggestion"] ;
//     $sql="INSERT INTO `suggestion` (`sn`, `suggest`) VALUES (NULL, '$suggestion')";
//         $res = mysqli_query($conn, $sql);
//         if($res){
//           echo'
//           <script>
//           document.getElementById("success").style.display="block";
//       </script>
//           ';
//       }
//       else{
//           echo '
//           <script>
//           document.getElementById("failure").style.display="block";
//       </script>
//           ';
//       }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suggestion</title>
    <link rel="stylesheet" href="styleIndex.css">
    <link rel="stylesheet" href="styleContact.css">
    <link rel="stylesheet" href="StyleAlert.css">
    <!-- <script src="https://kit.fontawesome.com/7b654fc8b6.js" crossorigin="anonymous"></script> -->
</head>
<body>
    <header>
        <div class="nav1">

           <h1>Home | Bhudnagaria </h1>
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
    </header>


    
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





    <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
       include 'db/db_connect.php';

    $suggestion= $_POST["suggestion"] ;
    $sql="INSERT INTO `suggestion` (`sn`, `suggest`) VALUES (NULL, '$suggestion')";
        $res = mysqli_query($conn, $sql);
        if($res){
          echo'
          <div id="success" class="alert">
 <p>We will look into your suggestion and try to fix the issue and came up with the better version of ours and try reach upto your expectations</p>

</div>
          ';
      }
      else{
          echo '
          <div id="failure" class="alert">
          <p>There are some issue in submitting your data. Try Again and if problem continues contact us through mail or phone number</p>

         </div>
      
          ';
      }


}
?>




<!-- <div id="success" class="alert">
 <p>We will look into your suggestion and try to fix the issue and came up with the better version of ours and try reach upto your expectations</p>
 <button onclick="hide()"> <i class="fas fa-times"></i> </button>
</div>
<div id="failure" class="alert">
    <p>There are some issue in submitting your data. Try Again and if problem continues contact us through mail or phone number</p>
    <button onclick="hide()"> <i class="fas fa-times"></i> </button>
   </div> -->

    <div class="suggest">
        <form action="contact.php" method="post">
            <label for="suggestion">Write Below</label> <br>
            <textarea name="suggestion" id="suggestion" cols="30" rows="10"></textarea> <br>
            <input type="submit" value="Submit" class="btn">
        </form>
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
<!-- 
<script>
    function hide() {
    document.getElementById("success").style.display="none";
    document.getElementById("failure").style.display="none";
    }
</script> -->

</body>
</html>