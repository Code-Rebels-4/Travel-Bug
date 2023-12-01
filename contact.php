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
    <link rel="stylesheet" type="text/css" href="css/c-styles.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="https://kit.fontawesome.com/b11fc013a7.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script type="text/javascript" src="js/navscroll.js"></script>
    <title>Contact</title>
</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><i class="fa-solid fa-tents fa-bounce" style="color: #08c1e4;"></i>&nbsp;TravelBug</div>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#explore">Explore</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    </div>

    <div class="back">
        <br><br><br>
        <h1 data-aos="fade-right" data-aos-delay="300" data-aos-duration="400">Contact Us...</h1>
        <p data-aos="fade-left" data-aos-delay="300" data-aos-duration="400">If you have a question...</p>
        <h5 data-aos="fade" data-aos-delay="600" data-aos-duration="700">
            Our team is available to assist you<br>with any inquiries or concerns you may have!</h5>
    </div>

    <div class="image">
        <section>
            <h1 class="text2" data-aos="flip-up" data-aos-delay="300" data-aos-duration="800">Check our Socials</h1>
            <div class="main">
                <div class="ani" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                    <div class="profile-card">
                        <div class="img">
                            <img src="Images\contact\telephone.png">
                        </div>
                        <div class="caption">
                            <h3 class="tele">Phone</h3>
                            <p><a href="tel:081-2058572"><img src="Images/page icons/landline.jpg">081-2058572</a></p>
                            <p><a href="tel:077-5973066"><img src="Images/page icons/mobile.png">077-5973066</a></p>
                        </div>
                    </div>
                    <div class="profile-card">
                        <div class="img">
                            <img src="Images\contact\email.png">
                        </div>
                        <div class="caption">
                            <h3>Email</h3>

                            <p><a href="mailto:travelbug.info.lk@gmail.com"><img
                                        src="Images/page icons/email.png">travelbug.info.lk@gmail.com</a><br>

                            </p>
                        </div>
                    </div>
                    <div class="profile-card">
                        <div class="img">
                            <img src="Images\contact\audience.png">
                        </div>
                        <div class="caption">
                            <h3>Social Media</h3>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook" id="fb"></i></a>
                                <a href="#"><i class="fab fa-instagram" id="ins"></i></a>
                                <a href="#"><i class="fab fa-youtube" id="you"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h1 class="text3" data-aos="flip-up" data-aos-delay="450" data-aos-duration="500">Reach Us</h1>
            <div id="email" data-aos="fade-up" data-aos-delay="600" data-aos-duration="500">
                <table>
                    <tr>

                        <td><img src="Images/contact/mail9.gif" alt="mailgif" width="300px" data-aos="fade-right"
                                data-aos-delay="600" data-aos-duration="300"></td>
                        <td>
                            <div style="padding: 10px; text-align: left;">
                                <form action="mail.php" method="post">
                                    <input type="text" name="name" class="input-field" placeholder="Type your name here..."
                                        required><br>
                                    <input type="email" name="email" class="input-field"
                                        placeholder="Type your email address here..." required><br>
                                    <input type="text" name="subject" class="input-field" placeholder="Type the subject here..."
                                        required><br>
                                    <textarea type="text" name="message" class="input-field textarea-field"
                                        placeholder="Type your message here..." required></textarea><br>

                                    <button type="submit" class="btn" id="bt">Send Message
                                        <span class="popuptext" id="myPopup">Thank you for your response!</span>
                                    </button>
                                    <button type="reset" class="btn">Reset</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </section>
    </div>

    <!-- <footer class="copyright">&copy; 2022 Code Rebels. All rigths reserved.</footer> -->
    <!--Footer-->
    <footer class="footer-distributed">
        <div class="footer-center" style="text-align: center; margin-left: 30%;">
            <h3>Travel<span>Bug</span></h3>
            <p class="footer-links">
                <a href="index.php" class="link-1">Home</a>
                <a href="index.php#explore">Explore</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
            </p><br>
            <p class="footer-company-name">TravelBug © 2022</p>
        </div>
    </footer>

    <script src="js/mscript.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

</body>

</html>