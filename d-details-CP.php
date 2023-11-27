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

                <p>Horton Plains</p>
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

                <p>Pinnawala Elephant Orphanage</p>
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

                <p>Sigiriya</p>
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

                <p>Ambuluwawa Tower</p>
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

                <p>Pinnawala Elephant Orphanage</p>
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
                <h4>Center Province, Kandy City</h4>

                <div class="div-slider">
                    <div class="tab-box">
                        <button class="tab-btn active2">Info</button>
                        <button class="tab-btn">Location</button>
                        <button class="tab-btn">Emergency Contacts</button>
                        <div class="line"></div>
                    </div>
                    <div class="slider-box">
                        <div class="slide active2">
                            <h2>Overview</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta harum eius
                                nesciunt
                                molestiae impedit
                                pariatur laborum nam consequatur aperiam quibusdam, omnis voluptatem quaerat
                                neque,
                                illum dolorem
                                laudantium doloremque praesentium inventore.</p>

                            </br>
                            <h1>Current Weather</h1>
                            <div id="ww_6c16ac5251888" v='1.3' loc='id' a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":["wl11753"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>
                                More forecasts: <a href="https://weatherlabs.in/हिंदी/दिल्ली_का_मौसम/कल/" id="ww_6c16ac5251888_u" target="_blank">दिल्ली में कल मौसम</a></div>

                        </div>



                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.53514320401!2d80.63875007473406!3d7.293608992713885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3662db149fbf5%3A0x8165d70ac115e887!2sSri%20Dalada%20Maligawa!5e0!3m2!1sen!2sus!4v1699954655823!5m2!1sen!2sus" width="100%" height="450" class="map" style="border:2px solid black; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <ul class="accordian">
                                        <li>
                                            <input type="radio" name="accordian" id="first" checked>
                                            <label for="first">Hotel 1</label>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Dolorum
                                                    ipsa quis enim provident
                                                    praesentium ipsum, facere minus ducimus maxime recusandae
                                                    accusamus
                                                    saepe alias beatae
                                                    nihil.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="radio" name="accordian" id="second">
                                            <label for="second">Hotel 2</label>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Dolorum
                                                    ipsa quis enim provident
                                                    praesentium ipsum, facere minus ducimus maxime recusandae
                                                    accusamus
                                                    saepe alias beatae
                                                    nihil.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="radio" name="accordian" id="third">
                                            <label for="third">Hotel 3</label>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Dolorum
                                                    ipsa quis enim provident
                                                    praesentium ipsum, facere minus ducimus maxime recusandae
                                                    accusamus
                                                    saepe alias beatae
                                                    nihil.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
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

            <div class="preview" data-target="d-2">
                <i class="fas fa-times"></i>
                <img class="prewImg" src="data:image/jpeg;base64,<?php
                $specificImageID = 17;

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
                $specificImageID = 18;

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
                $specificImageID = 19;

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
                $specificImageID = 20;

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
                $specificImageID = 21;

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
                $specificImageID = 22;

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
                $specificImageID = 23;

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




                <h3>Horton Plains National Park</h3>
                <h4>Center Province, Nuwara Eliya City</h4>

                <div class="div-slider">
                    <div class="tab-box">
                        <button class="tab-btn active2">Info</button>
                        <button class="tab-btn">Location</button>
                        <button class="tab-btn">Emergency Contacts</button>
                        <div class="line"></div>
                    </div>
                    <div class="slider-box">
                        <div class="slide active2">
                            <h2>Overview</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta harum eius
                                nesciunt
                                molestiae impedit
                                pariatur laborum nam consequatur aperiam quibusdam, omnis voluptatem quaerat
                                neque,
                                illum dolorem
                                laudantium doloremque praesentium inventore.</p>

                            </br>
                            <h1>Current Weather</h1>
                            <div id="ww_6c16ac5251888" v='1.3' loc='id' a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":["wl11753"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>
                                More forecasts: <a href="https://weatherlabs.in/हिंदी/दिल्ली_का_मौसम/कल/" id="ww_6c16ac5251888_u" target="_blank">दिल्ली में कल मौसम</a></div>

                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Derections</h2>
                                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.53514320401!2d80.63875007473406!3d7.293608992713885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3662db149fbf5%3A0x8165d70ac115e887!2sSri%20Dalada%20Maligawa!5e0!3m2!1sen!2sus!4v1699954655823!5m2!1sen!2sus" width="100%" height="450" class="map" style="border:2px solid black; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <ul class="accordian">
                                        <li>
                                            <input type="radio" name="accordian" id="first" checked>
                                            <label for="first">Hotel 1</label>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Dolorum
                                                    ipsa quis enim provident
                                                    praesentium ipsum, facere minus ducimus maxime recusandae
                                                    accusamus
                                                    saepe alias beatae
                                                    nihil.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="radio" name="accordian" id="second">
                                            <label for="second">Hotel 2</label>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Dolorum
                                                    ipsa quis enim provident
                                                    praesentium ipsum, facere minus ducimus maxime recusandae
                                                    accusamus
                                                    saepe alias beatae
                                                    nihil.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="radio" name="accordian" id="third">
                                            <label for="third">Hotel 3</label>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Dolorum
                                                    ipsa quis enim provident
                                                    praesentium ipsum, facere minus ducimus maxime recusandae
                                                    accusamus
                                                    saepe alias beatae
                                                    nihil.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
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

            <div class="preview" data-target="d-3">
                <i class="fas fa-times"></i>
                <img class="prewImg" src="data:image/jpeg;base64,<?php

                $specificImageID = 24;

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
                $specificImageID = 25;

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
                $specificImageID = 26;

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
                $specificImageID = 27;

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
                $specificImageID = 28;

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
                $specificImageID = 29;

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
                $specificImageID = 30;

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


                <h3>Royal Botanic Garden</h3>
                <h4>Center Province, Kandy City</h4>

                <div class="div-slider">
                    <div class="tab-box">
                        <button class="tab-btn active2">Info</button>
                        <button class="tab-btn">Location</button>
                        <button class="tab-btn">Emergency Contacts</button>
                        <div class="line"></div>
                    </div>
                    <div class="slider-box">
                        <div class="slide active2">
                            <h2>Overview</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta harum eius
                                nesciunt
                                molestiae impedit
                                pariatur laborum nam consequatur aperiam quibusdam, omnis voluptatem quaerat
                                neque,
                                illum dolorem
                                laudantium doloremque praesentium inventore.</p>

                            </br>
                            <h1>Current Weather</h1>
                            <div id="ww_6c16ac5251888" v='1.3' loc='id' a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":["wl11753"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>
                                More forecasts: <a href="https://weatherlabs.in/हिंदी/दिल्ली_का_मौसम/कल/" id="ww_6c16ac5251888_u" target="_blank">दिल्ली में कल मौसम</a></div>

                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Derections</h2>
                                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.53514320401!2d80.63875007473406!3d7.293608992713885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3662db149fbf5%3A0x8165d70ac115e887!2sSri%20Dalada%20Maligawa!5e0!3m2!1sen!2sus!4v1699954655823!5m2!1sen!2sus" width="100%" height="450" class="map" style="border:2px solid black; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <ul class="accordian">
                                        <li>
                                            <input type="radio" name="accordian" id="first" checked>
                                            <label for="first">Hotel 1</label>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Dolorum
                                                    ipsa quis enim provident
                                                    praesentium ipsum, facere minus ducimus maxime recusandae
                                                    accusamus
                                                    saepe alias beatae
                                                    nihil.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="radio" name="accordian" id="second">
                                            <label for="second">Hotel 2</label>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Dolorum
                                                    ipsa quis enim provident
                                                    praesentium ipsum, facere minus ducimus maxime recusandae
                                                    accusamus
                                                    saepe alias beatae
                                                    nihil.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="radio" name="accordian" id="third">
                                            <label for="third">Hotel 3</label>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Dolorum
                                                    ipsa quis enim provident
                                                    praesentium ipsum, facere minus ducimus maxime recusandae
                                                    accusamus
                                                    saepe alias beatae
                                                    nihil.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
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

            <div class="preview" data-target="d-4">
                <i class="fas fa-times"></i>
                <img class="prewImg" src="data:image/jpeg;base64,<?php

                $specificImageID = 38;

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
                $specificImageID = 39;

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
                $specificImageID = 40;

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
                $specificImageID = 41;

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
                $specificImageID = 42;

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
                $specificImageID = 43;

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
                $specificImageID = 44;

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



                <h3>Pinnawala Elephant Orphanage</h3>
                <h4>Center Province, Pinnawala City</h4>

                <div class="div-slider">
                    <div class="tab-box">
                        <button class="tab-btn active2">Info</button>
                        <button class="tab-btn">Location</button>
                        <button class="tab-btn">Emergency Contacts</button>
                        <div class="line"></div>
                    </div>
                    <div class="slider-box">
                        <div class="slide active2">
                            <h2>Overview</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta harum eius
                                nesciunt
                                molestiae impedit
                                pariatur laborum nam consequatur aperiam quibusdam, omnis voluptatem quaerat
                                neque,
                                illum dolorem
                                laudantium doloremque praesentium inventore.</p>

                            </br>
                            <h1>Current Weather</h1>
                            <div id="ww_6c16ac5251888" v='1.3' loc='id' a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":["wl11753"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>
                                More forecasts: <a href="https://weatherlabs.in/हिंदी/दिल्ली_का_मौसम/कल/" id="ww_6c16ac5251888_u" target="_blank">दिल्ली में कल मौसम</a></div>

                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Derections</h2>
                                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.53514320401!2d80.63875007473406!3d7.293608992713885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3662db149fbf5%3A0x8165d70ac115e887!2sSri%20Dalada%20Maligawa!5e0!3m2!1sen!2sus!4v1699954655823!5m2!1sen!2sus" width="100%" height="450" class="map" style="border:2px solid black; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <ul class="accordian">
                                        <li>
                                            <input type="radio" name="accordian" id="first" checked>
                                            <label for="first">Hotel 1</label>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Dolorum
                                                    ipsa quis enim provident
                                                    praesentium ipsum, facere minus ducimus maxime recusandae
                                                    accusamus
                                                    saepe alias beatae
                                                    nihil.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="radio" name="accordian" id="second">
                                            <label for="second">Hotel 2</label>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Dolorum
                                                    ipsa quis enim provident
                                                    praesentium ipsum, facere minus ducimus maxime recusandae
                                                    accusamus
                                                    saepe alias beatae
                                                    nihil.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="radio" name="accordian" id="third">
                                            <label for="third">Hotel 3</label>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Dolorum
                                                    ipsa quis enim provident
                                                    praesentium ipsum, facere minus ducimus maxime recusandae
                                                    accusamus
                                                    saepe alias beatae
                                                    nihil.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
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

            <div class="preview" data-target="d-5">
                <i class="fas fa-times"></i>
                <img class="prewImg" src="data:image/jpeg;base64,<?php
                $specificImageID = 45;

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
                $specificImageID = 46;

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
                $specificImageID = 47;

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
                $specificImageID = 48;

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
                $specificImageID = 49;

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
                $specificImageID = 50;

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
                $specificImageID = 51;

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



                <h3>Bahirawakanda</h3>
                <h4>Center Province, Kandy City</h4>

                <div class="div-slider">
                    <div class="tab-box">
                        <button class="tab-btn active2">Info</button>
                        <button class="tab-btn">Location</button>
                        <button class="tab-btn">Emergency Contacts</button>
                        <div class="line"></div>
                    </div>
                    <div class="slider-box">
                        <div class="slide active2">
                            <h2>Overview</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta harum eius
                                nesciunt
                                molestiae impedit
                                pariatur laborum nam consequatur aperiam quibusdam, omnis voluptatem quaerat
                                neque,
                                illum dolorem
                                laudantium doloremque praesentium inventore.</p>

                            </br>
                            <h1>Current Weather</h1>
                            <div id="ww_6c16ac5251888" v='1.3' loc='id' a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":["wl11753"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>
                                More forecasts: <a href="https://weatherlabs.in/हिंदी/दिल्ली_का_मौसम/कल/" id="ww_6c16ac5251888_u" target="_blank">दिल्ली में कल मौसम</a></div>

                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Derections</h2>
                                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.53514320401!2d80.63875007473406!3d7.293608992713885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3662db149fbf5%3A0x8165d70ac115e887!2sSri%20Dalada%20Maligawa!5e0!3m2!1sen!2sus!4v1699954655823!5m2!1sen!2sus" width="100%" height="450" class="map" style="border:2px solid black; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <ul class="accordian">
                                        <li>
                                            <input type="radio" name="accordian" id="first" checked>
                                            <label for="first">Hotel 1</label>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Dolorum
                                                    ipsa quis enim provident
                                                    praesentium ipsum, facere minus ducimus maxime recusandae
                                                    accusamus
                                                    saepe alias beatae
                                                    nihil.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="radio" name="accordian" id="second">
                                            <label for="second">Hotel 2</label>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Dolorum
                                                    ipsa quis enim provident
                                                    praesentium ipsum, facere minus ducimus maxime recusandae
                                                    accusamus
                                                    saepe alias beatae
                                                    nihil.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="radio" name="accordian" id="third">
                                            <label for="third">Hotel 3</label>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Dolorum
                                                    ipsa quis enim provident
                                                    praesentium ipsum, facere minus ducimus maxime recusandae
                                                    accusamus
                                                    saepe alias beatae
                                                    nihil.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
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

            <div class="preview" data-target="d-6">
                <i class="fas fa-times"></i>
                
                <img class="prewImg" src="data:image/jpeg;base64,<?php

                $specificImageID = 31;

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
                $specificImageID = 32;

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
                $specificImageID = 33;

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
                $specificImageID = 34;

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
                $specificImageID = 35;

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
                $specificImageID = 36;

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
                $specificImageID = 37;

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

                

                <h3>Sigiriya</h3>
                <h4>Center Province, Dambulla City</h4>

                <div class="div-slider">
                    <div class="tab-box">
                        <button class="tab-btn active2">Info</button>
                        <button class="tab-btn">Location</button>
                        <button class="tab-btn">Emergency Contacts</button>
                        <div class="line"></div>
                    </div>
                    <div class="slider-box">
                        <div class="slide active2">
                            <h2>Overview</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta harum eius
                                nesciunt
                                molestiae impedit
                                pariatur laborum nam consequatur aperiam quibusdam, omnis voluptatem quaerat
                                neque,
                                illum dolorem
                                laudantium doloremque praesentium inventore.</p>

                            </br>
                            <h1>Current Weather</h1>
                            <div id="ww_6c16ac5251888" v='1.3' loc='id' a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":["wl11753"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>
                                More forecasts: <a href="https://weatherlabs.in/हिंदी/दिल्ली_का_मौसम/कल/" id="ww_6c16ac5251888_u" target="_blank">दिल्ली में कल मौसम</a></div>

                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Derections</h2>
                                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.53514320401!2d80.63875007473406!3d7.293608992713885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3662db149fbf5%3A0x8165d70ac115e887!2sSri%20Dalada%20Maligawa!5e0!3m2!1sen!2sus!4v1699954655823!5m2!1sen!2sus" width="100%" height="450" class="map" style="border:2px solid black; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <ul class="accordian">
                                        <li>
                                            <input type="radio" name="accordian" id="first" checked>
                                            <label for="first">Hotel 1</label>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Dolorum
                                                    ipsa quis enim provident
                                                    praesentium ipsum, facere minus ducimus maxime recusandae
                                                    accusamus
                                                    saepe alias beatae
                                                    nihil.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="radio" name="accordian" id="second">
                                            <label for="second">Hotel 2</label>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Dolorum
                                                    ipsa quis enim provident
                                                    praesentium ipsum, facere minus ducimus maxime recusandae
                                                    accusamus
                                                    saepe alias beatae
                                                    nihil.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="radio" name="accordian" id="third">
                                            <label for="third">Hotel 3</label>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Dolorum
                                                    ipsa quis enim provident
                                                    praesentium ipsum, facere minus ducimus maxime recusandae
                                                    accusamus
                                                    saepe alias beatae
                                                    nihil.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
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

            <div class="preview" data-target="d-7">
                <i class="fas fa-times"></i>
                <img class="prewImg" src="data:image/jpeg;base64,<?php

                $specificImageID = 52;

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
                $specificImageID = 53;

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
                $specificImageID = 54;

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
                $specificImageID = 55;

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
                $specificImageID = 56;

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
                $specificImageID = 57;

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
                $specificImageID = 58;

                $sql = "SELECT id, image_data, image_name FROM images WHERE id = $specificImageID";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $imageData = base64_encode($row['image_data']);
                    echo $imageData;
                } else {
                    echo "Image not found or an error occurred.";
                }

                $conn->close();
                ?>" alt="">



                <h3>Ambuluwawa Tower</h3>
                <h4>Center Province, Gampola City</h4>

                <div class="div-slider">
                    <div class="tab-box">
                        <button class="tab-btn active2">Info</button>
                        <button class="tab-btn">Location</button>
                        <button class="tab-btn">Emergency Contacts</button>
                        <div class="line"></div>
                    </div>
                    <div class="slider-box">
                        <div class="slide active2">
                            <h2>Overview</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta harum eius
                                nesciunt
                                molestiae impedit
                                pariatur laborum nam consequatur aperiam quibusdam, omnis voluptatem quaerat
                                neque,
                                illum dolorem
                                laudantium doloremque praesentium inventore.</p>

                            </br>
                            <h1>Current Weather</h1>
                            <div id="ww_6c16ac5251888" v='1.3' loc='id' a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":["wl11753"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>
                                More forecasts: <a href="https://weatherlabs.in/हिंदी/दिल्ली_का_मौसम/कल/" id="ww_6c16ac5251888_u" target="_blank">दिल्ली में कल मौसम</a></div>

                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Derections</h2>
                                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.53514320401!2d80.63875007473406!3d7.293608992713885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3662db149fbf5%3A0x8165d70ac115e887!2sSri%20Dalada%20Maligawa!5e0!3m2!1sen!2sus!4v1699954655823!5m2!1sen!2sus" width="100%" height="450" class="map" style="border:2px solid black; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <ul class="accordian">
                                        <li>
                                            <input type="radio" name="accordian" id="first" checked>
                                            <label for="first">Hotel 1</label>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Dolorum
                                                    ipsa quis enim provident
                                                    praesentium ipsum, facere minus ducimus maxime recusandae
                                                    accusamus
                                                    saepe alias beatae
                                                    nihil.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="radio" name="accordian" id="second">
                                            <label for="second">Hotel 2</label>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Dolorum
                                                    ipsa quis enim provident
                                                    praesentium ipsum, facere minus ducimus maxime recusandae
                                                    accusamus
                                                    saepe alias beatae
                                                    nihil.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="radio" name="accordian" id="third">
                                            <label for="third">Hotel 3</label>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Dolorum
                                                    ipsa quis enim provident
                                                    praesentium ipsum, facere minus ducimus maxime recusandae
                                                    accusamus
                                                    saepe alias beatae
                                                    nihil.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
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

                var line = document.querySelector('.line');
                line.style.width = e.target.offsetWidth + "px";
                line.style.left = e.target.offsetLeft + "px";

                all_slide.forEach(slide => {
                    slide.classList.remove('active2')
                });
                all_slide[index].classList.add('active2');
            })
        })
    </script>

    <!--Animation Scripts-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script> AOS.init();</script>

    <!--Weather Widget-->
    <script async src="https://app2.weatherwidget.org/js/?id=ww_6c16ac5251888"></script>

</body>

</html>