
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="styleSignup.css">
    <link rel="stylesheet" href="styleIndex.css">
    <link rel="stylesheet" href="styleContact.css">
    <link rel="stylesheet" href="StyleAlert.css">
</head>
<body>
    <header>
        <div class="nav1">

           <h1>SignUp | Bhudnagaria </h1>
           <nav>
        <a href="index.php">Home </a>
        <!-- <a href="gallery.php">Photo Gallery </a>
        <a href="events.php">Events </a> -->
        <a href="contact.php">Contact Developer</a>
        <a href="members.php">List of members</a>
        <!-- <a href="stories.php">Stories</a> -->
        
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

 $name= $_POST["Name"] ;
 $email= $_POST["Email"] ;
 $phone= $_POST["phone"] ;
 $gender= $_POST["Gender"] ;
 $dob= $_POST["DOB"] ;
 $password= $_POST["password"] ;
 $cpassword= $_POST["cpassword"];

$hashedpassword= password_hash($password,PASSWORD_BCRYPT);

$number=strval($phone);
  

 $sql="Select * from logincredentials where phone='$phone'  ";
 $res = mysqli_query($conn, $sql);
 $num1=mysqli_num_rows($res);
 $sql="Select * from logincredentials where email='$email'  ";
 $res = mysqli_query($conn, $sql);
 $num2=mysqli_num_rows($res);
 if(strlen($number)!=10){
    echo'
    <div id="failure" class="alert">
   <p> Phone number must be of size 10 </p>
   </div>
   '
   ; 
 }
   else
if($num1!=0) {
    echo'
    <div id="failure" class="alert">
   <p>Phone number already registered</p>
   </div>
   '
   ; 
} else
if($num2!=0) {
    echo'
    <div id="failure" class="alert">
   <p>Email number already registered</p>
   </div>
   '
   
   ;
   
}






else
 if($password==$cpassword){
 $sql="INSERT INTO `logincredentials` (`sn`, `name`,`email`,`phone`,`gender`,`dob`,`password`) VALUES (NULL, '$name','$email','$phone','$gender','$dob','$hashedpassword')";
     $res = mysqli_query($conn, $sql);
     if($res){
       echo'
       <div id="success" class="alert">
<p>Account created successfully.Now go to login page and Login</p>

</div>
       ';
   }
   else{
       echo '
       <div id="failure" class="alert">
       <p>There are some issue in creating your account. Try Again and if problem continues contact us through mail or phone number</p>

      </div>
   
       ';
   }

 }
else{
    echo'
     <div id="failure" class="alert">
    <p>password and confirm password must be same</p>
    </div>
    '
    
    ;
}

}


?>


    <div class="formDiv">
    <form action="signup.php" method="post"> 
        <h2>SignUp</h2>
        <fieldset>
    <fieldset>
       <legend> 
           Users Details
</legend>        <p>* Marked fields are mandatory</p>
    <label for="Name">Name *</label>
    <input type="text" name="Name" id="Name" required> <br>
   <p> Email is going to be used in future to verify </p>
    <label for="Email">Email</label> 
    <input type="email" name="Email" id="Email"> <br>
    <p>Do not add +91 or 0 in begining of number</p>

    <label for="phone">Phone no. *</label>
    <input type="number" name="phone" id="phone" required> <br>
    <fieldset>
        <label for="Gender">Gender *</label>
    <p>   
           Male
        <input type="radio" name="Gender" id="Male" value="Male" required> 
            Female
        <input type="radio" name="Gender" id="Female" value="Female" required> 
    </p> 
    </fieldset>
        <label for="DOB">DOB *</label>
        <input type="date" name="DOB" id="DOB" required> <br>
        <label for="password">Password *</label>
        <input type="password" name="password" id="password" required> <br>
        <label for="cpassword">Confirm Password *</label>
        <input type="password" name="cpassword" id="cpassword" required> <br>
        <input type="submit" value="SignUp" class="btn">
        <input type="reset" value="Reset" class="btn">
    </fieldset>
    </fieldset>
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
</body> </html>