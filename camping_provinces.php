<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags for character set, compatibility, and viewport -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
    <!-- Title for the webpage -->
    <title>Explore Camping Grounds</title>

    <!-- External CSS and Font Awesome stylesheets -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/province_styles.css" />
    <link rel="stylesheet" href="css/styles.css" />

    <!-- Font Awesome script -->
    <script src="https://kit.fontawesome.com/b11fc013a7.js" crossorigin="anonymous"></script>

    <!-- jQuery script -->
    <script type="text/javascript" src="js/navscroll.js"></script>

    <!-- Favicon for the webpage -->
    <link rel="icon" href="Images/logo.png" type="image/x-icon" />
</head>


<body>
    <!-- Scroll Up Button -->
    <div class=" scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><i class="fa-solid fa-tents fa-bounce" style="color: #08c1e4;"></i>&nbsp;TravelBug</div>
            <!-- Navigation menu items -->
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#explore">Explore</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="contact.php">Admin Panel</a></li>
            </ul>
        </div>
    </nav>


    <!-- Main Content Section -->
    <div class="back"
        style="background-image: url('Images/wall/cam_1.jpg'); background-size: cover; background-repeat: no-repeat; height: 100vh;">
        <br><br><br>
        <!-- Main heading and subheading -->
        <h1 data-aos="fade-right" data-aos-delay="150" data-aos-duration="400">Camping Grounds</h1>
        <p data-aos="fade-left" data-aos-delay="300" data-aos-duration="400">Discover the
            enchanting allure of your favorite <br> camping grounds,
            thoughtfully categorized by <br> their corresponding provinces!
        </p><br>
    </div>

    <h1 class="text2" data-aos="flip-up" data-aos-delay="200" data-aos-duration="400">Essential Camping Gear</h1>

    <!-- Information box at the top -->
    <br>
    <div id="information-box" class="information-box" data-aos="fade-down" data-aos-delay="250" data-aos-duration="200">
        <h1>Shelter and Comfort:</h1><br>
        <p>
        <ul>
            <li>
                Tent
            </li>
            <li>
                Tent Poles
            </li>
            <li>
                Sleeping bags
            </li>
            <li>
                Flashlights (with extra batteries)
            </li>
            <li>
                Lantern
            </li>
            <li>
                Footwear
            </li>
            <li>
                Rain Gear
            </li>
        </ul>
        </p>
    </div>

    <!-- Three boxes in the container section -->
    <div class="container">
        <!-- Left box -->
        <div class="left-box information-box" data-aos="fade-right" data-aos-delay="250" data-aos-duration="200">
            <h1>Tools and Repair:</h1><br>
            <p>
            <ul>
                <li>
                    Multi-Tool Kit
                </li>
                <li>
                    Duct Tape
                </li>
                <li>
                    Tent-pole repair sleeve
                </li>
                <li>
                    Mallet or hammer
                </li>
                <li>
                    Saw or axe
                </li>
                <li>
                    Multimeter
                </li>
                <li>
                    Safety Gear
                </li>
                <li>
                    Utility Knife
                </li>
            </ul>
            </p>
        </div>

        <!-- Animated image -->
        <div class="animated-image" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="400">
            <img src="Images/prov/camping.gif" alt="Animated Image">
        </div>

        <!-- Right box -->
        <div class="right-box information-box" data-aos="fade-left" data-aos-delay="250" data-aos-duration="200">
            <h1>Cooking and Eating:</h1><br>
            <p>
            <ul>
                <li>
                    Stove and fuel
                </li>
                <li>
                    Matches/light/firestarter
                </li>
                <li>
                    Cook pots
                </li>
                <li>
                    Sharp knife
                </li>
                <li>
                    Plates and Cups
                </li>
                <li>
                    Water bottles
                </li>
                <li>
                    Recycling bags
                </li>
            </ul>
            </p>
        </div>
    </div>

    <!-- Bottom box -->
    <div class="bottom-box information-box" data-aos="fade-up" data-aos-delay="250" data-aos-duration="200">
        <h1>Miscellaneous:</h1><br>
        <p>
        <ul>
            <li>
                Firewood sourced near campsite
            </li>
            <li>
                Mosquito Net
            </li>
        </ul>
        </p>
    </div>

    <!-- Additional heading -->
    <h1 class="text2" data-aos="flip-up" data-aos-delay="450" data-aos-duration="400">Discover the wonders of each
        province with just a click!</h1>


    <!--Provinces Slider-->
    <div class="mid">
        <div class="app">
            <!-- Card list with left and right buttons -->
            <div class="cardList">
                <button class="cardList__btn btn btn--left">
                    <div class="icon">
                        <svg>
                            <use xlink:href="#arrow-left"></use>
                        </svg>
                    </div>
                </button>

                <!-- Cards wrapper with individual cards -->
                <div class="cards__wrapper">
                    <!-- Card 1 -->
                    <div class="card card1">
                        <div class="card__image">
                            <img src="Images/prov/kandy.png" alt="" />
                        </div>
                    </div>

                    <div class="card card2">
                        <!-- Card 2 -->
                        <div class="card__image">
                            <img src="Images/prov/colombo.png" alt="" />
                        </div>
                    </div>

                    <div class="card card3">
                        <!-- Card 3 -->
                        <div class="card__image">
                            <img src="Images/prov/galle.png" alt="" />
                        </div>
                    </div>

                    <div class="card card4">
                        <!-- Card 4 -->
                        <div class="card__image">
                            <img src="Images/prov/eastern.png" alt="" />
                        </div>
                    </div>

                    <div class="card card5">
                        <!-- Card 5 -->
                        <div class="card__image">
                            <img src="Images/prov/jaffna.png" alt="" />
                        </div>
                    </div>

                    <div class="card card6">
                        <!-- Card 6 -->
                        <div class="card__image">
                            <img src="Images/prov/badulla.png" alt="" />
                        </div>
                    </div>

                    <div class="card card7">
                        <!-- Card 7 -->
                        <div class="card__image">
                            <img src="Images/prov/northc.jpg" alt="" />
                        </div>
                    </div>

                    <div class="card card8">
                        <!-- Card 8 -->
                        <div class="card__image">
                            <img src="Images/prov/northw.jpg" alt="" />
                        </div>
                    </div>

                    <div class="card card9">
                        <!-- Card 9 -->
                        <div class="card__image">
                            <img src="Images/prov/sabara.png" alt="" />
                        </div>
                    </div>

                </div>

                <button class="cardList__btn btn btn--right">
                    <div class="icon">
                        <svg>
                            <use xlink:href="#arrow-right"></use>
                        </svg>
                    </div>
                </button>
            </div>


            <!-- Background images for each card -->
            <div class="app__bg">
                <!-- Background image for Card 1, Background image for Card 2, ..., Background image for Card 9 -->
                <div class="app__bg__image card1image">
                    <img src="Images/prov/kandy.png" alt="" />
                </div>
                <div class="app__bg__image card2image">
                    <img src="Images/prov/colombo.png" alt="" />
                </div>
                <div class="app__bg__image card3image">
                    <img src="Images/prov/galle.png" alt="" />
                </div>
                <div class="app__bg__image card4image">
                    <img src="Images/prov/eastern.png" alt="" />
                </div>
                <div class="app__bg__image card5image">
                    <img src="Images/prov/jaffna.png" alt="" />
                </div>
                <div class="app__bg__image card6image">
                    <img src="Images/prov/badulla.png" alt="" />
                </div>
                <div class="app__bg__image card7image">
                    <img src="Images/prov/northc.jpg" alt="" />
                </div>
                <div class="app__bg__image card8image">
                    <img src="Images/prov/northw.jpg" alt="" />
                </div>
                <div class="app__bg__image card9image">
                    <img src="Images/prov/sabara.png" alt="" />
                </div>
            </div>


            <!-- Information list with details about each province -->
            <div class="infoList">
                <div class="info__wrapper">
                    <!-- Info for Card 1, Info for Card 2, ..., Info for Card 9 -->
                    <div class="info card1info">
                        <h1 class="text name">Central Province</h1>
                        <p class="text description">Kandy <br> Nuwara Eliya <br> Matale <br><br>
                            <a href="cam_cp_details.php" class="blog-slider__button" id="readMoreButton1">VIEW</a>
                        </p>
                    </div>

                    <div class="info card2info">
                        <h1 class="text name">Western Province</h1>
                        <p class="text description">Colombo <br> Gampaha <br> Kalutara <br><br>
                            <a href="cam_cp_details.php" class="blog-slider__button" id="readMoreButton2">VIEW</a>
                        </p>
                    </div>

                    <div class="info card3info">
                        <h1 class="text name">Southern Province</h1>
                        <p class="text description">Galle <br> Matara <br> Hambantota <br><br>
                            <a href="cam_cp_details.php" class="blog-slider__button" id="readMoreButton3">VIEW</a>
                        </p>
                    </div>

                    <div class="info card4info">
                        <h1 class="text name">Eastern Province</h1>
                        <p class="text description">Ampara <br> batticaloa <br> Trincomalee <br><br>
                            <a href="cam_cp_details.php" class="blog-slider__button" id="readMoreButton4">VIEW</a>
                        </p>
                    </div>

                    <div class="info card5info">
                        <h1 class="text name">Northen Province</h1>
                        <p class="text description">Jaffna <br> Kilinochchi <br> Mannar <br> Mullaitivu <br> Vavuniya
                            <br><br>
                            <a href="cam_cp_details.php" class="blog-slider__button" id="readMoreButton5">VIEW</a>
                        </p>
                    </div>

                    <div class="info card6info">
                        <h1 class="text name">Uva Province </h1>
                        <p class="text description">Badulla <br> Moneragala <br><br>
                            <a href="cam_cp_details.php" class="blog-slider__button" id="readMoreButton6">VIEW</a>
                        </p>
                    </div>

                    <div class="info card7info">
                        <h1 class="text name">North Central <br>Province </h1>
                        <p class="text description">Anuradhapura <br> Polonnaruwa <br><br>
                            <a href="cam_cp_details.php" class="blog-slider__button" id="readMoreButton7">VIEW</a>
                        </p>
                    </div>

                    <div class="info card8info">
                        <h1 class="text name">North Western <br>Province </h1>
                        <p class="text description">Kurunegala <br> Puttalam <br><br>
                            <a href="cam_cp_details.php" class="blog-slider__button" id="readMoreButton8">VIEW</a>
                        </p>
                    </div>

                    <div class="info card9info">
                        <h1 class="text name">Sabaragamuwa <br>Province </h1>
                        <p class="text description">Ratnapura <br> Kegalle <br><br>
                            <a href="cam_cp_details.php" class="blog-slider__button" id="readMoreButton9">READ MORE</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer Section -->
    <footer class="footer-distributed">
        <!-- Left section with logo and links -->
        <div class="footer-left">
            <h3>Travel<span>Bug</span></h3>
            <p class="footer-links">
                <a href="index.php" class="link-1">Home</a>
                <a href="index.php#explore">Explore</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
                <a href="contact.php">Admin Panel</a>
            </p>
            <p class="footer-company-name">TravelBug © 2022</p>
        </div>


        <!-- Center section with contact information -->
        <div class="footer-center">
            <!-- Address, Phone, and Email details -->
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>No.20 Peradeniya Road,</span> Sri Lanka</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+94.775.973.066</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:travelbug.info.lk@gmail.com">travelbug.info.lk@gmail.com</a></p>
            </div>
        </div>


        <!-- Right section with about the team and social icons -->
        <div class="footer-right">
            <!-- About the Team information and social icons -->
            <p class="footer-company-about">
                <span>About the Team</span>
                As a group of Software Engineering undergraduates, we engage in coding, website and software
                application
                design while navigating our way through the vast IT field.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer>

    <!-- SVG icons definition -->
    <svg class="icons" style="display: none;">
        <symbol id="arrow-left" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
            <polyline points='328 112 184 256 328 400'
                style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
        </symbol>
        <symbol id="arrow-right" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
            <polyline points='184 112 328 256 184 400'
                style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
        </symbol>
    </svg>

    <!-- External JavaScript libraries and custom scripts -->
    <script type="text/javascript" src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js"></script>
    <script type="text/javascript" src="js/provinces_script.js"></script>
    <script src="js/mscript.js"></script>


    <!-- AOS (Animate On Scroll) library initialization -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>

