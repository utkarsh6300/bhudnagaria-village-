<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styleIndex.css">
    <link rel="stylesheet" href="styleSignup.css">
    <link rel="stylesheet" href="styleLogin.css">
    <link rel="stylesheet" href="styleContact.css">
    <link rel="stylesheet" href="StyleAlert.css">
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
        <a href="profile.php">Profile</a>
        <a href="weather.php">Weather</a>
        
    </nav>
            
          
        </div>
    </header>

   
    <?php
    
// include 'db/db_connect.php';
// session_start();
// if(isset($_SESSION['phone'])){
// $phone1= $_SESSION['phone'];
// $check= strval($phone1);
// if(strlen($check)>0){
//     echo'
// <div id="success" class="alert">
// <p>you are logged in with '.$phone1.'</p>
// <a href="logout.php" id="logoutbutton" > Logout </a>
// </div>


// ';
// }
// } 

?>


<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'db/db_connect.php';

 
 $phone= $_POST["phone"] ;
 $password= $_POST["password"] ;
 
 $hashedpassword= password_hash($password,PASSWORD_BCRYPT);

 $number=strval($phone);

//  $sql="Select * from logincredentials where phone='$phone' and password='$password'";



 $sql="Select * from logincredentials where phone='$phone'";
     $res = mysqli_query($conn, $sql);
     $data=mysqli_fetch_array($res);
     $num=mysqli_num_rows($res);
     if(strlen($number)!=10){
        echo'
        <div id="failure" class="alert">
       <p> Phone number must be of size 10 </p>
       </div>
       '
       ; 
     }
       else
     if($num==0){
        echo '
        <div id="failure" class="alert">
        <p>Signup with this number and try logging again</p>
 
       </div>
    
        ';  
     } else
     if(!password_verify($password,$hashedpassword)){
        echo '
        <div id="failure" class="alert">
        <p>Incorrect Password</p>
 
       </div>
    
        ';
     } else
     if($num == 1){

         session_start();
         $_SESSION['phone']=$phone;



       echo'
       <div id="success" class="alert">
<p>Logged in successfully</p>

</div>
       ';
   }
   else{
       echo '
       <div id="failure" class="alert">
       <p>There are some issue in logging in your account. Try Again and if problem continues contact us through mail or phone number</p>

      </div>
   
       ';
   }


}


?>


    <div class="login">
        <form action="login.php" method="post">
            <label for="phone">Phone No.</label>
            <input type="number" name="phone" id="phone" required> <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required> <br>
            <input type="submit" value="Login" class="btn">
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
</body>
</html>