<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fete n' Festa</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <script src="https://kit.fontawesome.com/e5a0e83fd0.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- custom css file link  -->
    <link href="css/style.css" rel="stylesheet">

</head>


<body>


    <!-- header section starts  -->

    <header class="header">

        <a href="admin.php" class="logo"><span>Fete</span> n' <span>Festa</span></a>
        <ul class="navbar-nav">
            <nav class="menu"><a href="admin.php">Home</a>
                <nav class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">services<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <a href="weddings.php">Weddings</a>
                        <a href="transport.php">Transport</a>
                        <a href="birthday.php">Birthday</a>
                        <a href="concerts.php">Concerts</a>
                        <a href="photosvideos.php">Photos & videos</a>
                        <a href="customfood.php">custom food</a>
                    </ul>
                </nav>
                <a href="#about">about</a>
                <a href="#review">review</a>
                <a href="contact.php">contact</a>
                <a class="log" href="login.php">log in</a>
                <a class="reg" href="register.php">sign up</a>
            </nav>
        </ul>


        <div id="menu-bars" class="fas fa-bars"></div>

    </header>


    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>Its time to celebrate! The best <span> Event Organizers </span></h3>
            <a href="contact.php" class="btn"> <i class="fa-solid fa-phone"></i> contact us </a>


        </div>

        <div class="swiper-container home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/slide-1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/slide-2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/slide-3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/slide-4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/slide-5.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/slide-6.jpg" alt=""></div>
            </div>
        </div>

    </section>

    <!-- home section ends -->



    <!-- service section starts  -->

    <section class="service" id="service">

        <h1 class="heading"> our services</h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3><a href="weddings.php">Weddings</a></h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit.</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3><a href="transport.php">Transport</a></h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit.</p>
            </div>

            <div class="box">
                <i class="fa-solid fa-cake-candles"></i>
                <h3><a href="birthday.php">Birthday</a></h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit.</p>
            </div>

            <div class="box">
                <i class="fas fa-guitar"></i>
                <h3><a href="concerts.php">concerts</a></h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit.</p>
            </div>

            <div class="box">
                <i class="fas fa-photo-video"></i>
                <h3><a href="photosvideos.php">photos and videos</a></h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit.</p>
            </div>

            <div class="box">
                <i class="fa fa-cutlery"></i>
                <h3><a href="customfood.php">custom food</a></h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit.</p>
            </div>


        </div>

    </section>

    <!-- service section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"><span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="images/about-img.jpg" alt="">
            </div>

            <div class="content">
                <h3>we will give a very special celebration for you</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam labore fugiat ut esse perferendis perspiciatis provident dolores fuga in facilis culpa possimus, quia praesentium itaque, sapiente quasi harum rem asperiores.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat vero expedita incidunt provident quibusdam aut odit, numquam nesciunt similique nisi.</p>
                <a href="#" class="btn">contact us</a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">

        <h1 class="heading">our <span>gallery</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="images/g-1.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a class="fas fa-heart"></a>
                    <a class="fas fa-share"></a>
                    <a class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-2.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-3.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-4.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-5.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-6.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-7.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-8.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

        </div>

    </section>

    <!-- gallery section ends -->



    <!-- review section starts  -->

    <section class="reivew" id="review">

        <h1 class="heading">client's <span>review</span></h1>

        <div class="review-slider swiper-container">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/pic-1.png" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <span>happy clients</span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dolor dicta cum. Eos beatae eligendi, magni numquam nemo sed ut corrupti, ipsam iure nisi unde et assumenda perspiciatis voluptatibus nihil.</p>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/pic-2.png" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <span>happy clients</span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dolor dicta cum. Eos beatae eligendi, magni numquam nemo sed ut corrupti, ipsam iure nisi unde et assumenda perspiciatis voluptatibus nihil.</p>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/pic-3.png" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <span>happy clients</span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dolor dicta cum. Eos beatae eligendi, magni numquam nemo sed ut corrupti, ipsam iure nisi unde et assumenda perspiciatis voluptatibus nihil.</p>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/pic-4.png" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <span>happy clients</span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dolor dicta cum. Eos beatae eligendi, magni numquam nemo sed ut corrupti, ipsam iure nisi unde et assumenda perspiciatis voluptatibus nihil.</p>
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends -->



    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>branches</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Dhaka </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Khulna </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Jeshore </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Satkhira </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Sylhet </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="admin.php"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="contact.php"> <i class="fas fa-arrow-right"></i> contact </a>
                <a href="weddings.php"> <i class="fas fa-arrow-right"></i> Weddings </a>
                <a href="concerts.php"> <i class="fas fa-arrow-right"></i> concerts </a>
                <a href="birthday.php"> <i class="fas fa-arrow-right"></i> birthday </a>
                <a href="customfood.php"> <i class="fas fa-arrow-right"></i> custom food </a>
                <a href="photosvideos.php"> <i class="fas fa-arrow-right"></i> photos videos </a>
                <a href="transport.php"> <i class="fas fa-arrow-right"></i> transport </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> 01715427898 </a>
                <a href="#"> <i class="fas fa-phone"></i> 01979642879 </a>
                <a href="#"> <i class="fas fa-envelope"></i> noobsquad@gmail.com </a>
                <a href="#"> <i class="fas fa-envelope"></i> teamnoob@gmail.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Dhaka, Bangladesh </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com/Rahat12787"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="https://twitter.com/Sk12787"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="https://www.instagram.com/night.thinker.guy/"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="https://www.linkedin.com/in/sk-rahat-islam-0997491a0/"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>

        </div>

        <div class="credit"> created by <span>NoobSquadTeam</span> | all rights reserved 2022.</div>

    </section>

    <!-- footer section ends -->

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>