<?php

session_start();
$enteredid=$_SESSION["login"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best byes</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/bestbyes.css">

</head>
<body>
    
<!-- header section starts      -->

<header>

    <a href="#" class="logo">BEST BYES</a>

    <nav class="navbar">
        <a class="active" href="#home">home</a>
        <a href="login.php">Shopping List</a>
        <a href="#aboutus">About Us</a>
        <a href="#contact">Contact</a>
       <?php 
       if($enteredid)
       echo' <a href="login.php">'.$enteredid.'</a>';
       else
       echo' <a href="login.php">Sign in</a>';?>
    </nav>

</header>

<!-- header section ends-->

<!-- search form  -->



<!-- home section starts  -->

<section class="home" id="home"style="height:100vh;">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
                <div class="content"style="display:block;">
                    <span>Expiry date tracker</span>
                    <h3>Be Alert!</h3>
                    <p>Are you struggling with keeping track of all the items in your fridge whether it is fresh or not?
                        
                        <br>
                        Dont worry here we are!<br>
                        check your items by clicking the button below
                    </p>
                    <a href="login.php" class="btn">Check items</a>
                </div>
                <div class="image">
                    <img src="images/carousel.png" alt="">
                </div>
            </div>

           
        </div>

        
    </div>

</section>

<!-- home section ends -->



<!-- about section starts  -->

<div class="about" id="aboutus"style="height:100vh;">

    <h3 class="sub-heading"> about us </h3>
    <h1 class="heading"> why choose us? </h1>

    <div class="row">

        <div class="image" style="backgound-color:red;">
            <img style= "width: 80%;"
            src="images/logo.png" alt="" class="aboutus-img">
        </div>

        <div class="content"style="display:block;">
            <h3>Eat what you Buy!!</h3>
            <p><br>
          For many people in the world, food waste has become a habit: buying more food than we need at markets, letting fruits and
          vegetables spoil in the fridge.<br>
          
          
         we have created an expiry date tracker that will you to check your items expiry dates<br>
          Also we will notify you one day before it is going to be expired.<br>
          Along with notifications you can also see recomendations about recipes for food that is in your fridge.<br>
          Many more features would be added along the course of time, so be with us andget notified before it's too late.</p>

    </div>

</div>

<!-- about section ends -->




<!-- review section starts  -->

<section class="review" id="review"style="height:100vh;">

    <h3 class="sub-heading"> customer's review </h3>
    <h1 class="heading"> what they say </h1>

    <div class="swiper-container review-slider"style="display:block;">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/pic-1.png" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/pic-2.png" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/pic-3.png" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/pic-4.png" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
            </div>

        </div>

    </div>
    
</section>

<!-- review section ends -->

<!-- contact section starts  -->

<div class="order" id="contact"style="height:100vh;">

    <h3 class="sub-heading">  </h3>
    <h1 class="heading"> CONTACT US </h1>

    <form action="contact.php" method="post">

        <div class="inputBox">
            <div class="input">
                <span>your name</span>
                <input type="text" name="name"placeholder="enter your name">
            </div>
            <div class="input">
                <span>your number</span>
                <input type="number"name="pnum" placeholder="enter your number">
            </div>
        </div>
        
           
       
           
        <div class="inputBox">
            <div class="input">
                <span>your address</span>
                <textarea name="address" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="input">
                <span>your message</span>
                <textarea name="msg" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
            </div>
        </div>

        <input type="submit" value="Contact" name="contact"class="btn">

    </form>

</div>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>locations</h3>
            <a href="#">india</a>
            <a href="#">japan</a>
            <a href="#">russia</a>
            <a href="#">USA</a>
            <a href="#">france</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="list.php">Shopping List</a>
            <a href="#aboutus">about</a>
            <a href="display.php">Your Items</a>
            <a href="#review">reivew</a>
           
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+123-456-7890</a>
            <a href="#">+111-222-3333</a>
            <a href="#">ronak1@gmail.com</a>
            <a href="#">ronak2@gmail.com</a>
            <a href="#">namrata@gmail.com</a>
            <a href="#">mumbai, india - 400050</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <div class="credit"> copyright @ 2022 <span></span> </div>

</section>

<!-- footer section ends -->

<!-- loader part  -->
<div class="loader-container">
    <img src="images/loader.gif" alt="">
</div>





















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>