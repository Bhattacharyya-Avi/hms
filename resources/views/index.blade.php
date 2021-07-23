<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LifeSupport</title>

    <!-- aos css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- magnific popup css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/index-style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div class="container">

        <a href="#" class="logo"><span>L</span>ife<span>S</span>upport</a>

        <nav class="nav">
            <ul>
                <li><a href="#home">home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#facility">facility</a></li>
                <li><a href="{{url('/login')}}">user login</a></li>
            </ul>
        </nav>

        <div class="fas fa-bars"></div>

    </div>

</header>

<!-- header section ends  -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="container">

        <div class="row min-vh-100 align-items-center text-center text-md-left">

            <div class="col-md-6 pr-md-5" data-aos="zoom-in">
                <img src="images/home-img.svg" width="100%" alt="">
            </div>

            <div class="col-md-6 pl-md-5 content" data-aos="fade-left">
                <h1>Wellcome to <span>LifeSupport</span> Hospital.</h1>
                <h2><span>stay</span> safe, <span>stay</span> healthy.</h2>
            <!--  <h3>caring for you.</h3>
                <a href="#"><button class="button">learn more</button></a> -->
            </div>

        </div>

    </div>

</section>


<!-- home section ends -->

<!-- about section start  -->

<section class="about" id="about">

    <div class="container">
        <h1 class="heading"><span>'</span> About our services <span>'</span></h1>

        <div class="row min-vh-100 align-items-center">

            <div class="col-md-6 content" data-aos="fade-right">

                <div class="box">
                    <h3> <i class="	fas fa-user-clock"></i> 24 Hour Doctor </h3>
                    <p>You can find 24x7 hours special doctors in the hospital</p>
                </div>

                <div class="box">
                    <h3> <i class="fas fa-procedures"></i> emergency rooms </h3>
                    <p>we have enough rooms.depending on type of patient room are given.</p>
                </div>

                <div class="box">
                    <h3> <i class="fas fa-stethoscope"></i> indoor facilities </h3>
                    <p>patient will be given sevarel facilities with any time doctor services.</p>
                </div>

            </div>

            <div class="col-md-6 d-none d-md-block" data-aos="fade-left">
                <img src="images/about-img2.png" width="100%" alt="">
            </div>

        </div>

    </div>

</section>

<!-- about section ends -->

<!-- facility section starts  -->

<section class="facility" id="facility">

    <div class="container">

    <h1 class="heading"><span>'</span> our facilities <span>'</span></h1>

        <div class="box-container">

            <div class="box" data-aos="zoom-in">
                <a href="images/img1.jpg" title="our team">
                    <img src="images/img1.jpg" alt="">
                </a>
            </div>

            <div class="box" data-aos="zoom-in">
                <a href="images/img2.jpg" title="our lab">
                    <img src="images/img2.jpg" alt="">
                </a>
            </div>

            <div class="box" data-aos="zoom-in">
                <a href="images/img3.jpg" title="emergency rooms">
                    <img src="images/img3.jpg" alt="">
                </a>
            </div>

            <div class="box" data-aos="zoom-in">
                <a href="images/img4.jpg" title="expert doctors">
                    <img src="images/img4.jpg" alt="">
                </a>
            </div>

            <div class="box" data-aos="zoom-in">
                <a href="images/img5.png" title="expert nurse">
                    <img src="images/img5.png" alt="">
                </a>
            </div>

            <div class="box" data-aos="zoom-in">
                <a href="images/img6.jpg" title=" rooms">
                    <img src="images/img6.jpg" alt="">
                </a>
            </div>

            <!--    
            <div class="box" data-aos="zoom-in">
                <a href="images/img7.jpg" title="expert doctors">
                    <img src="images/img7.jpg" alt="">
                </a>
            </div>

            <div class="box" data-aos="zoom-in">
                <a href="images/img8.jpg" title="emergency rooms">
                    <img src="images/img8.jpg" alt="">
                </a>
            </div>

            <div class="box" data-aos="zoom-in">
                <a href="images/img9.jpg" title="enough beds">
                    <img src="images/img9.jpg" alt="">
                </a>
            </div>
            -->

        </div>

    </div>

</section>

<!-- facility section ends -->

<!-- appointment section starts  -->

<!-- <section class="contact" id="contact">

    <div class="container min-vh-100">

        <div class="row justify-content-center">

            <h1 class="heading"><span>'</span> make an appointment <span>'</span></h1>

            <div class="col-md-10" data-aos="flip-down">

                <form action="">

                    <div class="inputBox">
                        <input type="text" placeholder="full name">
                        <input type="number" placeholder="phone">
                    </div>

                    <div class="inputBox">
                        <input type="email" placeholder="your email">
                        <select name="" id="">
                            <option value="" disabled selected>make an appointment</option>
                            <option value="09-11 am">09-11 am</option>
                            <option value="11-03 pm">11-03 pm</option>
                            <option value="03-06 pm">03-06 pm</option>
                            <option value="06-09 pm">06-09 pm</option>
                        </select>
                    </div>

                    <textarea name="" id="" cols="30" rows="10" placeholder="message ( optional )"></textarea>

                    <input type="submit" name="" id="" value="make appointment" class="button">

                </form>

            </div>

        </div>

    </div>

</section> -->

<!-- appointment section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="container">

        <div class="row">

            <div class="col-md-4" data-aos="fade-right">
                <a href="#" class="logo"><span>L</span>ife<span>S</span>upport.</a>
                <p>Dhaka, Bangladesh. phone: 01423567891</p>
            </div>

            <div class="col-md-4 text-center" data-aos="fade-up">
                <h3>Stuff's login</h3>
                <a href="{{url('/login')}}">Admin</a>
                <a href="#">Doctor</a>
                <a href="#">facility</a>
                <a href="#">appointment</a>
            </div>

            <div class="col-md-4 text-center" data-aos="fade-left">
                <h3>Follow us on </h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                
            </div>

        </div>

    </div>

    <!-- <h1 class="credit text-center mx-auto"><span>LifeSupport</span> | all rights reserved.</h1>-->

</section>

<!-- footer section ends -->

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- magnific popup js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<!-- aos js file cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- custom js link  -->
<script src="js/index-main.js"></script>

<script>

AOS.init({
    duration:1000,
    delay:400
});

</script>

</body>
</html>