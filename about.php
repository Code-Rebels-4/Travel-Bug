<?php

// Include your database connection code here
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travelbug";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="Images/logo.png" type="image/x-icon" />

    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" type="text/css" href="css/a-styles.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="https://kit.fontawesome.com/b11fc013a7.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="js/NavigationBar_scroll.js"></script>

    <title>About</title>
</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><i class="fa-solid fa-tents"></i>&nbsp;Travel Bug</div>
            <ul class="menu">

                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#explore">Explore</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>

            </ul>

            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <div class="image">
        <br><br><br>
        <h1 data-aos="fade-right" data-aos-delay="300" data-aos-duration="800">About</h1>
        <p data-aos="fade-left" data-aos-delay="600" data-aos-duration="800">Who We Are...</p><br>

        <div data-aos="fade" data-aos-delay="1300" data-aos-duration="1600">Designers, Thinkers & Collaborators</div>

    </div>

    <div class="d1">
        <h1 class="text2" data-aos="flip-up" data-aos-delay="300" data-aos-duration="800">Meet Our Team</h1>
        <div class="main">
            <div class="ani" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                <div class="profile-card">
                    <div class="img">
                        <img src="Images\team\tharindu.png">
                    </div>
                    <div class="caption">
                        <h3>T.N. Hettige</h3>
                        <p>BSE (Hons) Undergraduate</p>
                        <h4>The Open University of<br>Sri Lanka</h4>
                    </div>
                </div>
                <div class="profile-card">
                    <div class="img">
                        <img src="Images\team\ishara.png">
                    </div>
                    <div class="caption">
                        <h3>I.T. Stanley</h3>
                        <p>BSE (Hons) Undergraduate</p>
                        <h4>The Open University of<br>Sri Lanka</h4>
                    </div>
                </div>
                <div class="profile-card">
                    <div class="img">
                        <img src="Images/team/arun.png">
                    </div>
                    <div class="caption">
                        <h3>K. Arun Kanai</h3>
                        <p>BSE (Hons) Undergraduate</p>
                        <h4>The Open University of<br>Sri Lanka</h4>
                    </div>
                </div>
                <div class="profile-card">
                    <div class="img">
                        <img src="Images\team\imesha.png">
                    </div>
                    <div class="caption">
                        <h3>I.G. Prasantha</h3>
                        <p>BSE (Hons) Undergraduate</p>
                        <h4>The Open University of<br>Sri Lanka</h4>
                    </div>
                </div>
            </div>
        </div>
        <script src="./Font-Awesome/all.min.js"></script>
    </div>

    <!--Footer-->
    <footer class="footer-distributed">
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

        <div class="footer-center">
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

        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the Team</span>
                As a group of Software Engineering undergraduates, we engage in coding, website and software application
                design while navigating our way through the vast IT field.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>

            </div>
        </div>
    </footer>

    <script src="js/mscript.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>