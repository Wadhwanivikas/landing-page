<?php 
    $conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $number = $_POST['number'];
        $date = $_POST['date'];

        $insert = mysqli_query($conn,"INSERT INTO `contact_form`(name,email,number,date) VALUES('$name','$email','$number','$date')") or die('query failed');

        if($insert){
            $message[] = 'Appointment made successfully';
        }
        else{
            $message[] = 'Appointment failed ';
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- font awsome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!-- header section strats -->
    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo">Dental<span>Care.</span></a>
                    <nav class="nav">
                        <a href="#home">Home</a>
                        <a href="#about">About</a>
                        <a href="#services">Services</a>
                        <a href="#reviews">Reviews</a>
                        <a href="#contact">Contact</a>
                    </nav>
                    <a href="#contact" class="link-btn">Make Appoinment</a>
                    <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>
    <!-- header section ends -->

    <!-- Home Section starts -->
    <section class="home" id="home" >
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>let us brighten your smile</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus dolores quae debitis voluptates voluptas alias.</p>
                    <a href="#contact" class="link-btn">Make Appoinment</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Section ends -->

    <!--About section starts-->
    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6  image">
                    <img src="images/about.jpg"  class="w-100 mb-4 mb-md-0">
                </div>

                <div class="col-md-6 content">
                    <span>About us</span>
                    <h3>True Healthcare For Your Family</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A beatae, repudiandae reprehenderit, nostrum provident quis quaerat tempora hic ut error, vero non odit natus quasi.</p>
                    <a href="#contact" class="link-btn">Make Appoinment</a>
                </div>
            </div>
        </div>
    </section>
    <!--About section ends-->


    <!--Service section starts-->
        <section class="services" id="services">
            <h1 class="heading">our services</h1>
            <div class="box-container container">
                <div class="box">
                    <img src="images/11.jfif" alt="">
                    <h3>Alignment specialist</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, fugiat.</p>
                </div>

                <div class="box">
                    <img src="images/12.jfif" alt="">
                    <h3>Cosmetic dentistry</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, fugiat.</p>
                </div>

                 <div class="box">
                    <img src="images/13.jfif" alt="">
                    <h3>Oral Hygiene Experts</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, fugiat.</p>
                </div>

                 <div class="box">
                    <img src="images/14.jfif" alt="">
                    <h3>Root Conal specialist</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, fugiat.</p>
                </div>

                 <div class="box">
                    <img src="images/15.jfif" alt="">
                    <h3>Live Dental Advisory</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, fugiat.</p>
                </div>

                 <div class="box">
                    <img src="images/16.jfif" alt="">
                    <h3>Cavity Inspection</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, fugiat.</p>
                </div>

            </div>
        </section>
    <!--Service section ends-->

    <!-- Process section starts -->
    <section class="process">
        <h1 class="heading">work process</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/1a.jfif" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, rem.</p>
            </div>

            <div class="box">
                <img src="images/2a.jfif" alt="">
                <h3>Pediatric Dentistry</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, rem.</p>
            </div>

            <div class="box">
                <img src="images/3a.jfif" alt="">
                <h3>Dental Implants</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, rem.</p>
            </div>

        </div>
    </section>
    <!-- Process section ends -->

    <!-- Review section starts -->
    <section class="reviews" id="reviews">
        <h1 class="heading">satisfied clients</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/happyclient1.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur impedit nam ipsam exercitationem error rerum quia iure, blanditiis quae inventore.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>John Deo</h3>
                <span>satisfied client</span>
            </div>

            <div class="box">
                <img src="images/happyclient2.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur impedit nam ipsam exercitationem error rerum quia iure, blanditiis quae inventore.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>John Deo</h3>
                <span>satisfied client</span>
            </div>

            <div class="box">
                <img src="images/happyclient3.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur impedit nam ipsam exercitationem error rerum quia iure, blanditiis quae inventore.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>John Deo</h3>
                <span>satisfied client</span>
            </div>

        </div>
    </section>
    <!-- Review section ends -->
    
    <!-- Contact section starts --> 
    <section class="contact" id="contact">
        <h1 class="heading">Make Appoinment</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <?php
                if(isset($message)){
                    foreach($message as $message){
                        echo '<p class="message">'.$message.'</p>';
                    }
                }
            ?>

        
        <span>Your Name:</span>
            <input type="text" name="name" placeholder="Enter Your Name" class="box" required>
            <span>Your Email:</span>
            <input type="email" name="email" placeholder="Enter Your Email" class="box" required>
            <span>Your Number:</span>
            <input type="number" name="number" placeholder="Enter Your Number" class="box" required>
            <span>Your Date:</span>
            <input type="datetime-local" name="date" class="box" required>
            <input type="submit" value="Make Appoinment" name="submit" class="link-btn">
        </form>
    </section>
    <!-- Contact section ends -->

    <!-- Footer section starts -->

    <section class="footer">
        <div class="box-container container">
            <div class="box">
                <i class="fas fa-phone">
                    <h3>phone</h3>
                    <p>+1234567890</p>
                    <p>+1112223333</p>
                </i>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>our address</h3>
                <p>mumbai, india - 400104</p>
            </div>

            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>opening hours</h3>
                <p>00:07am to 10:00pm</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                    <h3>email address</h3>
                    <p>vikasw782@gmail.com</p>
                    <p>abc123@gmail.com</p>
                </i>
            </div>

        </div>

        <div class="credit"> &copy; copyright @ <?php echo date('y');?> by <span>vikas wadhwani</span>  </div>



    </section>

    <!-- Footer section ends -->





















<!-- custom js file link -->
<script>
    let menu = document.querySelector('#menu-btn');
    let navbar = document.querySelector('.header .nav');
    let header = document.querySelector('.header');

    menu.onclick=()=>{
        menu.classList.toggle('fa-times');
        navbar.classList.toggle('active');
    }

    window.onscroll = () =>{
        menu.classList.remove('fa-times');
        navbar.classList.remove('active');

        if(window.scrollY > 0){
            header.classList.add('active');
        }
        else{
            header.classList.remove('active');
        }

    }
</script>


</body>
</html>


