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

$sql = "SELECT id, image_data, image_name FROM images";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" type="text/css" href="css/d-styles.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="https://kit.fontawesome.com/b11fc013a7.js" crossorigin="anonymous"></script>
    <script src=" https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="js/3.5.1.min.js"></script>

    <title>Travel Destinations - CP</title>
</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    <!--Navigation Bar-->
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

    <!--Banner-->
    <div class="image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(Images/wall/D-CP.jpg);">
        <h1 data-aos="fade-right" data-aos-delay="300" data-aos-duration="800">
            Central Province
        </h1>
    </div>

    <!--Back Arrow / Quote-->
    <div class="d1">
        <a href="d-provinces.php" data-aos="fade-left" data-aos-delay="300" data-aos-duration="500"><img src="Images/arrow.png" title="Go back to Provinces"></a>

        <h1 class="text2" data-aos="flip-up" data-aos-delay="450" data-aos-duration="500">
            Embark on a journey of exploration and uncover the hidden gems <br> of travel destinations nestled in the heart of Central Province!
        </h1>
    </div>

    <!--Container-->
    <section class="container">
        <!--Search Bar-->
        <div class="search" data-aos="fade" data-aos-delay="600" data-aos-duration="500">
            <input type="text" name="" id="find" placeholder="search here...." onkeyup="search()">
        </div>

        <!--Place Cards-->
        <div class="places-container" data-aos="fade-up" data-aos-delay="650" data-aos-duration="400">

            <div class="place" data-name="d-1" style="background-image: url(<?php
                                                                            // Assuming you want to display the image with ID = 2
                                                                            $specificImageID = 1;

                                                                            $sql = "SELECT id, image_data, image_name FROM images WHERE id = $specificImageID";
                                                                            $result = $conn->query($sql);

                                                                            if ($result->num_rows > 0) {
                                                                                $row = $result->fetch_assoc();
                                                                                $imageData = base64_encode($row['image_data']);
                                                                                $imageName = $row['image_name'];

                                                                                echo 'data:image/jpeg;base64,' . $imageData;
                                                                            } else {
                                                                                echo "Image not found.";
                                                                            }

                                                                            ?>)">

                <p>Temple of The Tooth Relic</p>
            </div>

            <div class="place" data-name="d-2" style="background-image: url(<?php

                                                                            // Assuming you want to display the image with ID = 2
                                                                            $specificImageID = 2;

                                                                            $sql = "SELECT id, image_data, image_name FROM images WHERE id = $specificImageID";
                                                                            $result = $conn->query($sql);

                                                                            if ($result->num_rows > 0) {
                                                                                $row = $result->fetch_assoc();
                                                                                $imageData = base64_encode($row['image_data']);
                                                                                $imageName = $row['image_name'];

                                                                                echo 'data:image/jpeg;base64,' . $imageData;
                                                                            } else {
                                                                                echo "Image not found.";
                                                                            }

                                                                            ?>)">

                <p>Horton Plains National Park</p>
            </div>

            <div class="place" data-name="d-3" style="background-image: url(<?php
                                                                            // Assuming you want to display the image with ID = 3
                                                                            $specificImageID = 3;

                                                                            $sql = "SELECT id, image_data, image_name FROM images WHERE id = $specificImageID";
                                                                            $result = $conn->query($sql);

                                                                            if ($result->num_rows > 0) {
                                                                                $row = $result->fetch_assoc();
                                                                                $imageData = base64_encode($row['image_data']);
                                                                                $imageName = $row['image_name'];

                                                                                echo 'data:image/jpeg;base64,' . $imageData;
                                                                            } else {
                                                                                echo "Image not found.";
                                                                            }

                                                                            ?>)">

                <p>Royal Botanic Gardens</p>
            </div>

            <div class="place" data-name="d-4" style="background-image: url(<?php

                                                                            // Assuming you want to display the image with ID = 4
                                                                            $specificImageID = 4;

                                                                            $sql = "SELECT id, image_data, image_name FROM images WHERE id = $specificImageID";
                                                                            $result = $conn->query($sql);

                                                                            if ($result->num_rows > 0) {
                                                                                $row = $result->fetch_assoc();
                                                                                $imageData = base64_encode($row['image_data']);
                                                                                $imageName = $row['image_name'];

                                                                                echo 'data:image/jpeg;base64,' . $imageData;
                                                                            } else {
                                                                                echo "Image not found.";
                                                                            }

                                                                            ?>)">

                <p>Kandy Viewpoint</p>
            </div>

            <div class="place" data-name="d-5" style="background-image: url(<?php

                                                                            // Assuming you want to display the image with ID = 5
                                                                            $specificImageID = 5;

                                                                            $sql = "SELECT id, image_data, image_name FROM images WHERE id = $specificImageID";
                                                                            $result = $conn->query($sql);

                                                                            if ($result->num_rows > 0) {
                                                                                $row = $result->fetch_assoc();
                                                                                $imageData = base64_encode($row['image_data']);
                                                                                $imageName = $row['image_name'];

                                                                                echo 'data:image/jpeg;base64,' . $imageData;
                                                                            } else {
                                                                                echo "Image not found.";
                                                                            }

                                                                            ?>)">

                <p>Bahirawakanda Temple</p>
            </div>

            <div class="place" data-name="d-6" style="background-image: url(<?php

                                                                            // Assuming you want to display the image with ID = 31
                                                                            $specificImageID = 31;

                                                                            $sql = "SELECT id, image_data, image_name FROM images WHERE id = $specificImageID";
                                                                            $result = $conn->query($sql);

                                                                            if ($result->num_rows > 0) {
                                                                                $row = $result->fetch_assoc();
                                                                                $imageData = base64_encode($row['image_data']);
                                                                                $imageName = $row['image_name'];

                                                                                echo 'data:image/jpeg;base64,' . $imageData;
                                                                            } else {
                                                                                echo "Image not found.";
                                                                            }

                                                                            ?>)">

                <p>Sigiriya Rock Fortress</p>
            </div>

            <div class="place" data-name="d-7" style="background-image: url(<?php
                                                                            // Assuming you want to display the image with ID = 2
                                                                            $specificImageID = 55;

                                                                            $sql = "SELECT id, image_data, image_name FROM images WHERE id = $specificImageID";
                                                                            $result = $conn->query($sql);

                                                                            if ($result->num_rows > 0) {
                                                                                $row = $result->fetch_assoc();
                                                                                $imageData = base64_encode($row['image_data']);
                                                                                $imageName = $row['image_name'];

                                                                                echo 'data:image/jpeg;base64,' . $imageData;
                                                                            } else {
                                                                                echo "Image not found.";
                                                                            }

                                                                            ?>)">

                <p>Aluvihare Rock Temple</p>
            </div>

            <div class="place" data-name="d-8" style="background-image: url(<?php

                                                                            // Assuming you want to display the image with ID = 3
                                                                            $specificImageID = 3;

                                                                            $sql = "SELECT id, image_data, image_name FROM images WHERE id = $specificImageID";
                                                                            $result = $conn->query($sql);

                                                                            if ($result->num_rows > 0) {
                                                                                $row = $result->fetch_assoc();
                                                                                $imageData = base64_encode($row['image_data']);
                                                                                $imageName = $row['image_name'];

                                                                                echo 'data:image/jpeg;base64,' . $imageData;
                                                                            } else {
                                                                                echo "Image not found.";
                                                                            }

                                                                            ?>)">

                <p>Dambulla Cave Temple</p>
            </div>

            <div class="place" data-name="d-9" style="background-image: url(<?php

                                                                            // Assuming you want to display the image with ID = 4
                                                                            $specificImageID = 4;

                                                                            $sql = "SELECT id, image_data, image_name FROM images WHERE id = $specificImageID";
                                                                            $result = $conn->query($sql);

                                                                            if ($result->num_rows > 0) {
                                                                                $row = $result->fetch_assoc();
                                                                                $imageData = base64_encode($row['image_data']);
                                                                                $imageName = $row['image_name'];

                                                                                echo 'data:image/jpeg;base64,' . $imageData;
                                                                            } else {
                                                                                echo "Image not found.";
                                                                            }

                                                                            ?>)">

                <p>Gregory Lake</p>
            </div>

            <div class="place" data-name="d-10" style="background-image: url(<?php

                                                                                // Assuming you want to display the image with ID = 5
                                                                                $specificImageID = 5;

                                                                                $sql = "SELECT id, image_data, image_name FROM images WHERE id = $specificImageID";
                                                                                $result = $conn->query($sql);

                                                                                if ($result->num_rows > 0) {
                                                                                    $row = $result->fetch_assoc();
                                                                                    $imageData = base64_encode($row['image_data']);
                                                                                    $imageName = $row['image_name'];

                                                                                    echo 'data:image/jpeg;base64,' . $imageData;
                                                                                } else {
                                                                                    echo "Image not found.";
                                                                                }

                                                                                ?>)">

                <p>Hakgala Botanical Garden</p>
            </div>
        </div>

        <!--Pop-Up Models-->
        <div class="places-preview" style="font-family:Arial, Helvetica, sans-serif;">
            <div class="preview" data-target="d-1">
                <i class="fas fa-times"></i>
                <img class="prewImg" src="data:image/jpeg;base64,<?php
                                                                    $specificImageID = 8;

                                                                    $sql = "SELECT id, image_data, image_name FROM images WHERE id = $specificImageID";
                                                                    $result = $conn->query($sql);

                                                                    if ($result->num_rows > 0) {
                                                                        $row = $result->fetch_assoc();
                                                                        $imageData = base64_encode($row['image_data']);
                                                                        echo $imageData;
                                                                    } else {
                                                                        echo "Image not found or an error occurred.";
                                                                    }

                                                                    ?>" alt="">

                <img class="prewImg" src="data:image/jpeg;base64,<?php
                                                                    $specificImageID = 9;

                                                                    $sql = "SELECT id, image_data, image_name FROM images WHERE id = $specificImageID";
                                                                    $result = $conn->query($sql);

                                                                    if ($result->num_rows > 0) {
                                                                        $row = $result->fetch_assoc();
                                                                        $imageData = base64_encode($row['image_data']);
                                                                        echo $imageData;
                                                                    } else {
                                                                        echo "Image not found or an error occurred.";
                                                                    }

                                                                    ?>" alt="">
                <img class="prewImg" src="data:image/jpeg;base64,<?php
                                                                    $specificImageID = 10;

                                                                    $sql = "SELECT id, image_data, image_name FROM images WHERE id = $specificImageID";
                                                                    $result = $conn->query($sql);

                                                                    if ($result->num_rows > 0) {
                                                                        $row = $result->fetch_assoc();
                                                                        $imageData = base64_encode($row['image_data']);
                                                                        echo $imageData;
                                                                    } else {
                                                                        echo "Image not found or an error occurred.";
                                                                    }

                                                                    ?>" alt="">
                <img class="prewImg" src="data:image/jpeg;base64,<?php
                                                                    $specificImageID = 11;

                                                                    $sql = "SELECT id, image_data, image_name FROM images WHERE id = $specificImageID";
                                                                    $result = $conn->query($sql);

                                                                    if ($result->num_rows > 0) {
                                                                        $row = $result->fetch_assoc();
                                                                        $imageData = base64_encode($row['image_data']);
                                                                        echo $imageData;
                                                                    } else {
                                                                        echo "Image not found or an error occurred.";
                                                                    }

                                                                    ?>" alt="">
                <img class="prewImg" src="data:image/jpeg;base64,<?php
                                                                    $specificImageID = 12;

                                                                    $sql = "SELECT id, image_data, image_name FROM images WHERE id = $specificImageID";
                                                                    $result = $conn->query($sql);

                                                                    if ($result->num_rows > 0) {
                                                                        $row = $result->fetch_assoc();
                                                                        $imageData = base64_encode($row['image_data']);
                                                                        echo $imageData;
                                                                    } else {
                                                                        echo "Image not found or an error occurred.";
                                                                    }

                                                                    ?>" alt="">
                <img class="prewImg" src="data:image/jpeg;base64,<?php
                                                                    $specificImageID = 13;

                                                                    $sql = "SELECT id, image_data, image_name FROM images WHERE id = $specificImageID";
                                                                    $result = $conn->query($sql);

                                                                    if ($result->num_rows > 0) {
                                                                        $row = $result->fetch_assoc();
                                                                        $imageData = base64_encode($row['image_data']);
                                                                        echo $imageData;
                                                                    } else {
                                                                        echo "Image not found or an error occurred.";
                                                                    }

                                                                    ?>" alt="">
                <img class="prewImg" src="data:image/jpeg;base64,<?php
                                                                    $specificImageID = 14;

                                                                    $sql = "SELECT id, image_data, image_name FROM images WHERE id = $specificImageID";
                                                                    $result = $conn->query($sql);

                                                                    if ($result->num_rows > 0) {
                                                                        $row = $result->fetch_assoc();
                                                                        $imageData = base64_encode($row['image_data']);
                                                                        echo $imageData;
                                                                    } else {
                                                                        echo "Image not found or an error occurred.";
                                                                    }

                                                                    ?>" alt="">




                <h3>Temple of The Tooth Relic</h3>
                <h4>Center Province, Kandy</h4>

                <div class="div-slider">
                    <div class="tab-box">
                        <button class="tab-btn active2">Info</button>
                        <button class="tab-btn">Location</button>
                        <button class="tab-btn">Emergency Contacts</button>
                    </div>
                    <div class="slider-box">
                        <div class="slide active2">
                            <h2>Overview</h2>
                            <p>The Temple of the Tooth Relic is one of the most notable destinations to visit in Kandy, Sri Lanka, and is regarded as one of
                                the most significant Buddhist temples in the country. It is situated to the north of Kandy Lake. One of the most well-known tourist
                                attractions in Kandy is the temple, which houses the precious tooth of Lord Buddha. Devotees are welcome to pray in the room where
                                the tooth is kept. The teeth, however, is hidden behind a stupa-like structure in a golden casket, so no one can see it.
                                The temple is located within the old Kingdom of Kandy's royal palace complex.
                                This temple, which is among the top attractions in Kandy, is very significant because of the national obsession with teeth.
                                Three times a day, the temple holds rites. In 1988, the temple received the UNESCO World Heritage Site designation.
                                To truly appreciate the architecture, visitors must go inside the temple in addition to the exterior. There are openings in the walls that house
                                lamps that are lit with coconut oil. Visitors should go between 5:30 AM and 8:00 PM and must pay the entrance fee.Two attacks later, the temple is
                                still standing strong.</p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d2980d63/kandy/" data-label_1="KANDY" data-theme="original">KANDY</a>
                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.53514320401!2d80.63875007473406!3d7.293608992713885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3662db149fbf5%3A0x8165d70ac115e887!2sSri%20Dalada%20Maligawa!5e0!3m2!1sen!2sus!4v1699954655823!5m2!1sen!2sus" width="100%" height="400" style="border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <div class="acc-item">
                                        <h5>Lotus Lake Residence</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 345 3277">+94 77 345 3277</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            0.6 km from Sri Dalada Maligawa
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Janora Hills</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1" style="font-size: 20px; color:#a1fff9"></iconify-icon>
                                            <a href="tel:+94 77 307 4575">+94 77 307 4575</a><br>

                                            <iconify-icon icon="game-icons:path-distance" style="font-size: 20px; color:#a1fff9"></iconify-icon>
                                            0.5 km from Sri Dalada Maligawa
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Townhouse Rest</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1" style="font-size: 20px; color:#a1fff9"></iconify-icon>
                                            <a href="tel:+94 77 600 9187">+94 77 600 9187</a><br>

                                            <iconify-icon icon="game-icons:path-distance" style="font-size: 20px; color:#a1fff9"></iconify-icon>
                                            0.8 km from Sri Dalada Maligawa<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="slide">
                            <div class="card">
                                <img src="Images/det/hospital.png">
                                <div class="cont">
                                    <div class="details">
                                        <h2>Hospitals</h2>
                                        <div class="data">
                                            <h3 style="color: #e20059;">Kandy General Hospital</h3>
                                            <a href="tel:+94 81 223 3337">+94 81 223 3337</a><br>
                                            <a href="tel:+94 81 222 2261">+94 81 222 2261</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <img src="Images/det/police.png">
                                <div class="cont">
                                    <div class="details">
                                        <h2>Police Stations</h2>
                                        <div class="data">
                                            <h3 style="color: #ffaa20;">Kandy Police Station</h3>
                                            <a href="tel:+94 81 222 2222">+94 81 222 2222</a><br>
                                            <a href="tel:+94 81 222 2223">+94 81 222 2223</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

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

    <!--Main Scripts-->
    <script src="js/mscript.js"></script>

    <!--Search Function-->
    <script type="text/javascript">
        function search() {
            let filter = document.getElementById('find').value.toUpperCase();
            let item = document.querySelectorAll('.place');
            let l = document.getElementsByTagName('p');
            for (var i = 0; i <= l.length; i++) {
                let a = item[i].getElementsByTagName('p')[0];
                let value = a.innerHTML || a.innerText || a.textContent;
                if (value.toUpperCase().indexOf(filter) > -1) {
                    item[i].style.display = "";
                } else {
                    item[i].style.display = "none";
                }
            }
        }
    </script>

    <!--Pop-Up Model-->
    <script type="text/javascript">
        let preveiwContainer = document.querySelector('.places-preview');
        let previewBox = preveiwContainer.querySelectorAll('.preview');

        document.querySelectorAll('.places-container .place').forEach(place => {
            place.onclick = () => {
                preveiwContainer.style.display = 'flex';
                let name = place.getAttribute('data-name');
                previewBox.forEach(preview => {
                    let target = preview.getAttribute('data-target');
                    if (name == target) {
                        preview.classList.add('active');
                    }
                });
            };
        });

        previewBox.forEach(close => {
            close.querySelector('.fa-times').onclick = () => {
                close.classList.remove('active');
                preveiwContainer.style.display = 'none';
            };
        });

        const tabs = document.querySelectorAll('.tab-btn');
        const all_slide = document.querySelectorAll('.slide');

        tabs.forEach((tab, index) => {
            tab.addEventListener('click', (e) => {
                tabs.forEach(tab => {
                    tab.classList.remove('active2')
                });
                tab.classList.add('active2');

                // var line = document.querySelector('.line');
                // line.style.width = e.target.offsetWidth + "px";
                // line.style.left = e.target.offsetLeft + "px";

                all_slide.forEach(slide => {
                    slide.classList.remove('active2')
                });

                all_slide[index].classList.add('active2');
            })
        })
    </script>

    <!--Animation Scripts-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
    <!--Weather Widget-->
    <script>
        !function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://weatherwidget.io/js/widget.min.js';
                fjs.parentNode.insertBefore(js, fjs);
            }
        }(document, 'script', 'weatherwidget-io-js');
    </script>

</body>

</html>