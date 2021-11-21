<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Bhudnagaria</title>
    <link rel="stylesheet" href="styleIndex.css">
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



    <div class="updates">

       <div >
        <h2>Updates</h2>
       </div>
        <marquee behavior="scroll" direction="up"   scrollamount="3" class="news"  >

    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum doloremque quos id?</li>
    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum doloremque quos id?</li>
    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum doloremque quos id?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem non in voluptatibus excepturi obcaecati ex velit laudantium aut repudiandae fugit. Nulla tempore sit reiciendis, deleniti incidunt dolor iste non placeat exercitationem eos ducimus dolorum accusamus mollitia soluta veniam beatae, provident cupiditate suscipit labore dolorem optio deserunt id odit cumque. Fugit quidem cumque ut, vel rerum nisi, quaerat maiores vero sequi debitis tempore, provident ipsum ullam ea! Nesciunt laboriosam sit hic voluptas saepe blanditiis eos adipisci, architecto tempora, a harum magni nam veniam eius quisquam corporis ipsum quas.</li>
    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum doloremque quos id?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem non in voluptatibus excepturi obcaecati ex velit laudantium aut repudiandae fugit. Nulla tempore sit reiciendis, deleniti incidunt dolor iste non placeat exercitationem eos ducimus dolorum accusamus mollitia soluta veniam beatae, provident cupiditate suscipit labore dolorem optio deserunt id odit cumque. Fugit quidem cumque ut, vel rerum nisi, quaerat maiores vero sequi debitis tempore, provident ipsum ullam ea! Nesciunt laboriosam sit hic voluptas saepe blanditiis eos adipisci, architecto tempora, a harum magni nam veniam eius quisquam corporis ipsum quas.</li>
    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum doloremque quos id?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem non in voluptatibus excepturi obcaecati ex velit laudantium aut repudiandae fugit. Nulla tempore sit reiciendis, deleniti incidunt dolor iste non placeat exercitationem eos ducimus dolorum accusamus mollitia soluta veniam beatae, provident cupiditate suscipit labore dolorem optio deserunt id odit cumque. Fugit quidem cumque ut, vel rerum nisi, quaerat maiores vero sequi debitis tempore, provident ipsum ullam ea! Nesciunt laboriosam sit hic voluptas saepe blanditiis eos adipisci, architecto tempora, a harum magni nam veniam eius quisquam corporis ipsum quas.</li>
    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum doloremque quos id?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem non in voluptatibus excepturi obcaecati ex velit laudantium aut repudiandae fugit. Nulla tempore sit reiciendis, deleniti incidunt dolor iste non placeat exercitationem eos ducimus dolorum accusamus mollitia soluta veniam beatae, provident cupiditate suscipit labore dolorem optio deserunt id odit cumque. Fugit quidem cumque ut, vel rerum nisi, quaerat maiores vero sequi debitis tempore, provident ipsum ullam ea! Nesciunt laboriosam sit hic voluptas saepe blanditiis eos adipisci, architecto tempora, a harum magni nam veniam eius quisquam corporis ipsum quas.</li>
    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum doloremque quos id?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem non in voluptatibus excepturi obcaecati ex velit laudantium aut repudiandae fugit. Nulla tempore sit reiciendis, deleniti incidunt dolor iste non placeat exercitationem eos ducimus dolorum accusamus mollitia soluta veniam beatae, provident cupiditate suscipit labore dolorem optio deserunt id odit cumque. Fugit quidem cumque ut, vel rerum nisi, quaerat maiores vero sequi debitis tempore, provident ipsum ullam ea! Nesciunt laboriosam sit hic voluptas saepe blanditiis eos adipisci, architecto tempora, a harum magni nam veniam eius quisquam corporis ipsum quas.</li>
    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum doloremque quos id?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem non in voluptatibus excepturi obcaecati ex velit laudantium aut repudiandae fugit. Nulla tempore sit reiciendis, deleniti incidunt dolor iste non placeat exercitationem eos ducimus dolorum accusamus mollitia soluta veniam beatae, provident cupiditate suscipit labore dolorem optio deserunt id odit cumque. Fugit quidem cumque ut, vel rerum nisi, quaerat maiores vero sequi debitis tempore, provident ipsum ullam ea! Nesciunt laboriosam sit hic voluptas saepe blanditiis eos adipisci, architecto tempora, a harum magni nam veniam eius quisquam corporis ipsum quas.</li>


        </marquee>

    </div>
    <div class="slideshow">
    
       <img src="img/bakery-1209446_1920.jpg" alt="FO" class="mySlides" id="img10">
        
    
       <img src="img/breakfast-1804457_1920.jpg" alt="FO" class="mySlides" id="img20">
        

       <img src="img/breakfast-690128_1920.jpg" alt="FO" class="mySlides" id="img30">
        

       <img src="img/food-1081707_1920.jpg" alt="FO" class="mySlides" id="img40">
        
    
        <img src="img/ice-1786311_1920.jpg" alt="FO" class="mySlides" id="img50">
        
    </div>
    <script >
     var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  
  slides[slideIndex-1].style.display = "block";  
  
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

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