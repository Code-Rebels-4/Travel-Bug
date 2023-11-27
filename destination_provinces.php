<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags for character set, compatibility, and viewport -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Title for the webpage -->
    <title>Travel Destinations Provinces</title>

    <!-- External CSS and Font Awesome stylesheets -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/province_styles.css" />
    <link rel="stylesheet" href="css/styles.css" />

    <!-- Font Awesome script -->
    <script src="https://kit.fontawesome.com/b11fc013a7.js" crossorigin="anonymous"></script>

    <!-- jQuery script -->
    <script type="text/javascript" src="js/3.5.1.min.js"></script>

    <!-- Favicon for the webpage -->
    <link rel="icon" href="Images/logo.png" type="image/x-icon" />
</head>

<!-- --------------------------------------- -->


<body>
    <!-- Scroll Up Button -->
    <div class=" scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><i class="fa-solid fa-tents"></i>&nbsp;Travel Bug</div>
            <!-- Navigation menu items -->
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#explore">Explore</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>

            <!-- Menu button for small screens -->
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>


    <!-- Main Content Section -->
    <div class="back"
        style="background-image: url('Images/wall/travel.jpg'); background-size: cover; background-repeat: no-repeat; height: 100vh;">
        <br><br><br>
        <!-- Main heading and subheading -->
        <h1 data-aos="fade-right" data-aos-delay="150" data-aos-duration="400">Travel Destinations</h1>
        <p data-aos="fade-left" data-aos-delay="300" data-aos-duration="400">Explore the wonders of your treasured
            travel spots, <br> neatly organized by their respective provinces!</p><br>
    </div>

    <!-- Additional content sections with animations -->

    <!-- Information box at the top -->
    <br><br><br><br><br><br>
    <div id="information-box" class="information-box" data-aos="fade-down" data-aos-delay="450" data-aos-duration="400">
        <p><b>Embark on an unforgettable journey through the mesmerizing travel destinations of Sri Lanka, a land where
                ancient wonders and natural beauty converge in perfect harmony. Brace yourself for an adventure that
                transcends time and captivates your soul.</b></p>
    </div>

    <!-- Three boxes in the container section -->
    <div class="container">
        <!-- Left box -->
        <div class="left-box information-box" data-aos="fade-right" data-aos-delay="450" data-aos-duration="400">
            <h1>Discover Historical and Cultural Odyssey:</h1>
            <p>Uncover the secrets of Sri Lanka's rich heritage as you explore the ancient marvels of Sigiriya and the
                cultural significance of Kandy's Temple of the Tooth Relic. Immerse yourself in centuries-old stories
                etched in stone and tradition.</p>
        </div>

        <!-- Animated image -->
        <div class="animated-image" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="400">
            <img src="Images/prov/elephant.gif" alt="Animated Image">
        </div>

        <!-- Right box -->
        <div class="right-box information-box" data-aos="fade-left" data-aos-delay="450" data-aos-duration="400">
            <h1>Traverse Diverse Landscapes and Tranquil Escapes:</h1>
            <p>Traverse the emerald hills of Ella, breathe in the crisp mountain air, and lose yourself in the
                mist-covered beauty of Ella Gap. From rolling hills to tropical beaches, Sri Lanka's landscapes promise
                a symphony of visual delights and tranquil retreats.</p>
        </div>
    </div>

    <!-- Bottom box with coastal allure and wildlife adventures -->
    <div class="bottom-box information-box" data-aos="fade-up" data-aos-delay="450" data-aos-duration="400">
        <h1>Observe Coastal Allure and Wildlife Adventures:</h1>
        <p>Immerse yourself in the colonial charm of Galle, where cobbled streets wind through a historic fort, offering
            boutique shops and the scent of the sea. Then, relax on Mirissa's golden sands and embark on a wildlife
            adventure in Yala National Park, where untamed beauty and exotic creatures await.</p>
    </div>

    <!-- Additional heading -->
    <h1 class="text2" data-aos="flip-up" data-aos-delay="900" data-aos-duration="800">Discover the wonders of each
        province with just a click!</h1>


    <!-- Main application section with cards and information -->
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
                            <a href="dest_cp_details.php" class="blog-slider__button" id="readMoreButton1">VIEW</a>
                        </p>
                    </div>


                    <div class="info card2info">
                        <h1 class="text name">Western Province</h1>
                        <p class="text description">Colombo <br> Gampaha <br> Kalutara <br><br>
                            <a href="dest_cp_details.php" class="blog-slider__button" id="readMoreButton2">VIEW</a>
                        </p>
                    </div>


                    <div class="info card3info">
                        <h1 class="text name">Southern Province</h1>
                        <p class="text description">Galle <br> Matara <br> Hambantota <br><br>
                            <a href="dest_cp_details.php" class="blog-slider__button" id="readMoreButton3">VIEW</a>
                        </p>
                    </div>


                    <div class="info card4info">
                        <h1 class="text name">Eastern Province</h1>
                        <p class="text description">Ampara <br> batticaloa <br> Trincomalee <br><br>
                            <a href="dest_cp_details.php" class="blog-slider__button" id="readMoreButton4">VIEW</a>
                        </p>
                        </p>
                    </div>


                    <div class="info card5info">
                        <h1 class="text name">Northen Province</h1>
                        <p class="text description">Jaffna <br> Kilinochchi <br> Mannar <br> Mullaitivu <br> Vavuniya
                            <br><br>
                            <a href="dest_cp_details.php" class="blog-slider__button" id="readMoreButton5">VIEW</a>
                        </p>
                        </p>
                    </div>

                    <div class="info card6info">
                        <h1 class="text name">Uva Province </h1>
                        <p class="text description">Badulla <br> Moneragala <br><br>
                            <a href="dest_cp_details.php" class="blog-slider__button" id="readMoreButton6">VIEW</a>
                        </p>
                        </p>
                    </div>


                    <div class="info card7info">
                        <h1 class="text name">North Central <br>Province </h1>
                        <p class="text description">Anuradhapura <br> Polonnaruwa <br><br>
                            <a href="dest_cp_details.php" class="blog-slider__button" id="readMoreButton7">VIEW</a>
                        </p>
                        </p>
                    </div>


                    <div class="info card8info">
                        <h1 class="text name">North Western <br>Province </h1>
                        <p class="text description">Kurunegala <br> Puttalam <br><br>
                            <a href="dest_cp_details.php" class="blog-slider__button" id="readMoreButton8">VIEW</a>
                        </p>
                        </p>
                    </div>


                    <div class="info card9info">
                        <h1 class="text name">Sabaragamuwa <br>Province </h1>
                        <p class="text description">Ratnapura <br> Kegalle <br><br>
                            <a href="dest_cp_details.php" class="blog-slider__button" id="readMoreButton9">VIEW</a>
                        </p>
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
    <script type="text/javascript" src="js/p.script.js"></script>
    <script src="js/mscript.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Add a click event listener to the "View More Details" button in Card 1
        const button1 = document.getElementById("viewDetailsBtn1");

        button1.addEventListener("click", function() {
            // Navigate to page1 (replace 'd-details-CP.php' with the actual URL)
            window.location.href = 'd-details-CP.php';
        });
    });

    // If you have Card 2, you can add similar code for its button
    document.addEventListener("DOMContentLoaded", function() {
        const button2 = document.getElementById("viewDetailsBtn2");

        button2.addEventListener("click", function() {
            window.location.href = 'd-details-CP.php';
        });
    });
    </script>



    <script>
    // Example: Adding a click event listener to the button
    document.addEventListener('DOMContentLoaded', function() {
        var readMoreButton = document.getElementById('readMoreButton');

        if (readMoreButton) {
            readMoreButton.addEventListener('click', function() {
                // Handle the click event
                window.location.href = 'd-details-CP.php';
            });
        }
    });
    </script>



    <!-- AOS (Animate On Scroll) library initialization -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

</body>

</html>



<!-- <a href="d-details-CP.php" class="blog-slider__button" id="readMoreButton">READ MORE</a> -->
<!-- <button id="viewDetailsBtn1" class="view-details-btn">View More </button> -->
