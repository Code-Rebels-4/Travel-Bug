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
    <link rel="stylesheet" type="text/css" href="css/details-styles.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="https://kit.fontawesome.com/b11fc013a7.js" crossorigin="anonymous"></script>
    <script src=" https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script type="text/javascript" src="js/navscroll.js"></script>

    <title>Hiking Places - CP</title>
</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    <!--Navigation Bar-->
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

    <!--Banner-->
    <div class="image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(Images/wall/hikewall.jpg);">
        <h1 data-aos="fade-right" data-aos-delay="300" data-aos-duration="800">
            Central Province
        </h1>

    </div>

    <!--Quote-->
    <div class="d1">
        <h1 class="text2" data-aos="flip-up" data-aos-delay="450" data-aos-duration="500">
            Traverse breathtaking trails and discover the allure of Central Province<br>through its enchanting and
            challenging hiking destinations.
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
                                                                            $specificImageID = 150;

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

                <p>Hanthana Mountain</p>
            </div>

            <div class="place" data-name="d-2" style="background-image: url(<?php

                                                                            // Assuming you want to display the image with ID = 2
                                                                            $specificImageID = 157;

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

                <p>Meemure</p>
            </div>

            <div class="place" data-name="d-3" style="background-image: url(<?php
                                                                            // Assuming you want to display the image with ID = 3
                                                                            $specificImageID = 164;

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

                <p>Knuckles </p>
            </div>

            <div class="place" data-name="d-4" style="background-image: url(<?php

                                                                            // Assuming you want to display the image with ID = 4
                                                                            $specificImageID = 171;

                                                                            $sql = "SELECT id, image_data FROM images WHERE id = $specificImageID";
                                                                            $result = $conn->query($sql);

                                                                            if ($result->num_rows > 0) {
                                                                                $row = $result->fetch_assoc();
                                                                                $imageData = base64_encode($row['image_data']);

                                                                                echo 'data:image/jpeg;base64,' . $imageData;
                                                                            } else {
                                                                                echo "Image not found.";
                                                                            }

                                                                            ?>)">

                <p>Pidurangala </p>
            </div>

            <div class="place" data-name="d-5" style="background-image: url(<?php

                                                                            // Assuming you want to display the image with ID = 5
                                                                            $specificImageID = 80;

                                                                            $sql = "SELECT id, image_data FROM images WHERE id = $specificImageID";
                                                                            $result = $conn->query($sql);

                                                                            if ($result->num_rows > 0) {
                                                                                $row = $result->fetch_assoc();
                                                                                $imageData = base64_encode($row['image_data']);

                                                                                echo 'data:image/jpeg;base64,' . $imageData;
                                                                            } else {
                                                                                echo "Image not found.";
                                                                            }

                                                                            ?>)">

                <p>Arangala Mountain Peak</p>
            </div>

            <div class="place" data-name="d-6" style="background-image: url(<?php

                                                                            // Assuming you want to display the image with ID = 31
                                                                            $specificImageID = 180;

                                                                            $sql = "SELECT id, image_data FROM images WHERE id = $specificImageID";
                                                                            $result = $conn->query($sql);

                                                                            if ($result->num_rows > 0) {
                                                                                $row = $result->fetch_assoc();
                                                                                $imageData = base64_encode($row['image_data']);

                                                                                echo 'data:image/jpeg;base64,' . $imageData;
                                                                            } else {
                                                                                echo "Image not found.";
                                                                            }

                                                                            ?>)">

                <p>Riverston </p>
            </div>

            <div class="place" data-name="d-7" style="background-image: url(<?php
                                                                            // Assuming you want to display the image with ID = 2
                                                                            $specificImageID = 185;

                                                                            $sql = "SELECT id, image_data FROM images WHERE id = $specificImageID";
                                                                            $result = $conn->query($sql);

                                                                            if ($result->num_rows > 0) {
                                                                                $row = $result->fetch_assoc();
                                                                                $imageData = base64_encode($row['image_data']);

                                                                                echo 'data:image/jpeg;base64,' . $imageData;
                                                                            } else {
                                                                                echo "Image not found.";
                                                                            }

                                                                            ?>)">

                <p>Hunnasgiriya Waterfall</p>
            </div>

            <div class="place" data-name="d-8" style="background-image: url(<?php

                                                                            // Assuming you want to display the image with ID = 3
                                                                            $specificImageID = 192;

                                                                            $sql = "SELECT id, image_data FROM images WHERE id = $specificImageID";
                                                                            $result = $conn->query($sql);

                                                                            if ($result->num_rows > 0) {
                                                                                $row = $result->fetch_assoc();
                                                                                $imageData = base64_encode($row['image_data']);

                                                                                echo 'data:image/jpeg;base64,' . $imageData;
                                                                            } else {
                                                                                echo "Image not found.";
                                                                            }

                                                                            ?>)">

                <p>Conical Hill</p>
            </div>

            <div class="place" data-name="d-9" style="background-image: url(<?php

                                                                            // Assuming you want to display the image with ID = 4
                                                                            $specificImageID = 199;

                                                                            $sql = "SELECT id, image_data FROM images WHERE id = $specificImageID";
                                                                            $result = $conn->query($sql);

                                                                            if ($result->num_rows > 0) {
                                                                                $row = $result->fetch_assoc();
                                                                                $imageData = base64_encode($row['image_data']);

                                                                                echo 'data:image/jpeg;base64,' . $imageData;
                                                                            } else {
                                                                                echo "Image not found.";
                                                                            }

                                                                            ?>)">

                <p>Piduruthalagala Mountain</p>
            </div>

            <div class="place" data-name="d-10" style="background-image: url(<?php

                                                                                // Assuming you want to display the image with ID = 5
                                                                                $specificImageID = 206;

                                                                                $sql = "SELECT id, image_data FROM images WHERE id = $specificImageID";
                                                                                $result = $conn->query($sql);

                                                                                if ($result->num_rows > 0) {
                                                                                    $row = $result->fetch_assoc();
                                                                                    $imageData = base64_encode($row['image_data']);

                                                                                    echo 'data:image/jpeg;base64,' . $imageData;
                                                                                } else {
                                                                                    echo "Image not found.";
                                                                                }

                                                                                ?>)">

                <p>Lovers Leap Waterfall</p>
            </div>
        </div>

        <!--Pop-Up Models-->
        <div class="places-preview" style="font-family:Arial, Helvetica, sans-serif;">
            <div class="preview" data-target="d-1">
                <i class="fas fa-times"></i>
                <img class="prewImg" src="data:image/jpeg;base64,<?php
                                                                    $specificImageID = 151;

                                                                    $sql = "SELECT id, image_data FROM images WHERE id = $specificImageID";
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
                                                                    $specificImageID = 152;

                                                                    $sql = "SELECT id, image_data FROM images WHERE id = $specificImageID";
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
                                                                    $specificImageID = 153;

                                                                    $sql = "SELECT id, image_data FROM images WHERE id = $specificImageID";
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
                                                                    $specificImageID = 154;

                                                                    $sql = "SELECT id, image_data FROM images WHERE id = $specificImageID";
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
                                                                    $specificImageID = 155;

                                                                    $sql = "SELECT id, image_data FROM images WHERE id = $specificImageID";
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
                                                                    $specificImageID = 156;

                                                                    $sql = "SELECT id, image_data FROM images WHERE id = $specificImageID";
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
                                                                    $specificImageID = 150;

                                                                    $sql = "SELECT id, image_data FROM images WHERE id = $specificImageID";
                                                                    $result = $conn->query($sql);

                                                                    if ($result->num_rows > 0) {
                                                                        $row = $result->fetch_assoc();
                                                                        $imageData = base64_encode($row['image_data']);
                                                                        echo $imageData;
                                                                    } else {
                                                                        echo "Image not found or an error occurred.";
                                                                    }

                                                                    ?>" alt="">




                <h3>Hanthana Mountain</h3>
                <h4>Central Province, Kandy</h4>

                <div class="div-slider">
                    <div class="tab-box">
                        <button class="tab-btn active2">Info</button>
                        <button class="tab-btn">Location</button>
                        <button class="tab-btn">Emergency Contacts</button>
                    </div>
                    <div class="slider-box">
                        <div class="slide active2">
                            <h2>Overview</h2>
                            <p>Start at Ceylon Tea Museum on Hantana Estate, once a tea factory. Easy ascent with
                                notable spots
                                like Hill Country Sport Shooting Club, Sugarcane Quarantine Station, and a Buddhist
                                temple. Panoramic
                                views of central tea plantations, Victoria Reservoir, and Knuckles Range. Highest point
                                at 1008m, total
                                gain 383m. Descend to Galaha, passing a Buddha statue, a lush forest, and residential
                                areas. Cross the
                                bridge at 10.8 km (754m), choose a track or road to Galaha Road. End at Galaha's Post
                                Office, 900 meters
                                away.<br>Ambuluwawa, Peacock Hills, Kukulagala, Alagalla, Bathalegala, Knuckles Mountain
                                Range, Pettigala,
                                and Dolosbage are some of the peaks that you can observe from the top of the Hanthana.
                            </p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d2980d63/kandy/" data-label_1="KANDY" data-label_2="WEATHER">KANDY WEATHER</a>
                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.082949503238!2d80.63617160000001!3d7.231379400000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae365b3f7ebf293%3A0xef81fb1241761734!2zSGFudGhhbmEgTW91bnRhaW4gUmFuZ2UgfCDgt4TgtrHgt4rgtq3gt4_gtrEg4Laa4Laz4LeUIOC2tOC2seC3iuC2reC3kuC2ug!5e0!3m2!1sen!2sus!4v1701177681553!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <div class="acc-item">
                                        <h5>Hotel Yo Kandy</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 81 206 2024">+94 81 206 2024</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            7.7km from Hanthana
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Oak Ray City Hotel</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 81 222 7727">+94 81 222 7727</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            6.2km from Hanthana
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Old Town Hotel</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 666 4446">+94 77 666 4446</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            8.1km from Hanthana
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
                                            <h3>Peradeniya Hospital</h3>
                                            <a href="tel:+94 81 238 8001">+94 81 238 8001</a><br>
                                            <a href="tel:+94 81 238 8005">+94 81 238 8005</a>
                                            <h3>Kandy General Hospital</h3>
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
                                            <h3>Peradeniya Police Station</h3>
                                            <a href="tel:+94 81 238 8222">+94 81 238 8222</a><br>
                                            <a href="tel:+94 81 238 8033">+94 81 238 8033</a>
                                            <h3>Kandy Police Station</h3>
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
                                                                    $specificImageID = 158;

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
                                                                    $specificImageID = 159;

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
                                                                    $specificImageID = 160;

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
                                                                    $specificImageID = 161;

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
                                                                    $specificImageID = 162;

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
                                                                    $specificImageID = 163;

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
                                                                    $specificImageID = 157;

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




                <h3>Meemure</h3>
                <h4>Central Province, Kandy</h4>

                <div class="div-slider">
                    <div class="tab-box">
                        <button class="tab-btn active2">Info</button>
                        <button class="tab-btn">Location</button>
                        <button class="tab-btn">Emergency Contacts</button>
                    </div>
                    <div class="slider-box">
                        <div class="slide active2">
                            <h2>Overview</h2>
                            <p>Meemure is a secluded village in Sri Lanka known for its traditional culture, stunning
                                natural beauty,
                                and remote location. The village is surrounded by lush green forests, waterfalls, and
                                eco-friendly houses
                                built with clay and 'Illuk' (a type of grass).<br>Meemure provides an authentic
                                experience of rural
                                mountain life and offers a glimpse into a society striving to preserve its unique
                                culture.</p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d3180d88/udadumbara/" data-label_1="UDADUMBARA" data-label_2="WEATHER">UDADUMBARA WEATHER</a>
                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31650.50672754918!2d80.84542745000002!3d7.430535900000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae4a72d0d2c4cd1%3A0x320831c36bcc0e6!2sMeemure%2C%20Sri%20Lanka!5e0!3m2!1sen!2sus!4v1701177776942!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <div class="acc-item">
                                        <h5>Hotel Meemure</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 71 044 5001">+94 71 044 5001</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            1.3km from Meemure
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Meemure Adventure Tours</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 692 0572">+94 77 692 0572</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            In Meemure
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Meemure Isabulana Resort</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 71 679 9124">+94 71 679 9124</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            2.3km from Meemure
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
                                            <h3>National Hospital Kandy</h3>
                                            <a href="tel:+94 81 222 2261">+94 81 222 2261</a>
                                            <h3>Peradeniya Hospital</h3>
                                            <a href="tel:+94 81 238 8001">+94 81 238 8001</a><br>
                                            <a href="tel:+94 81 238 8005">+94 81 238 8005</a>
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
                                            <h3>Peradeniya Police Station</h3>
                                            <a href="tel:+94 81 238 8222">+94 81 238 8222</a><br>
                                            <a href="tel:+94 81 238 8033">+94 81 238 8033</a>
                                            <h3>Kandy Police Station</h3>
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
                                                                    $specificImageID = 165;

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
                                                                    $specificImageID = 166;

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
                                                                    $specificImageID = 167;

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
                                                                    $specificImageID = 168;

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
                                                                    $specificImageID = 169;

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
                                                                    $specificImageID = 170;

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
                                                                    $specificImageID = 164;

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




                <h3>Knuckles</h3>
                <h4>Central Province, Matale</h4>

                <div class="div-slider">
                    <div class="tab-box">
                        <button class="tab-btn active2">Info</button>
                        <button class="tab-btn">Location</button>
                        <button class="tab-btn">Emergency Contacts</button>
                    </div>
                    <div class="slider-box">
                        <div class="slide active2">
                            <h2>Overview</h2>
                            <p>Embark on the Knuckles 5-Peak Hike via Bambarella, starting at a trailhead accessible
                                with an off-road
                                vehicle. The journey begins past Cargills Kist Knuckles Water Plant, transitioning from
                                pavement to a
                                rocky, muddy, and rough dirt road.<br>The entire trail, covering all 5 peaks, can be
                                completed in 5 hours.
                                This includes breaks for breathtaking views and snack pauses.</p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d4780d62/matale/" data-label_1="MATALE" data-label_2="WEATHER">MATALE WEATHER</a>
                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15824.825942472931!2d80.78096089999997!3d7.442392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae35f659beee899%3A0x3bf7cc23068a888d!2sKnuckles!5e0!3m2!1sen!2sus!4v1701177823348!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <div class="acc-item">
                                        <h5>Queens Mount Kandy</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 81 495 4599">+94 81 495 4599</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            36.1km from Knuckles
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Central City Hostel</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 76 705 9575">+94 76 705 9575</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            38km from Knuckles
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Kandy city house</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 75 787 6339">+94 75 787 6339</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            39.5km from Knuckles
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
                                            <h3>Madulkelle General Hospital</h3>
                                            <a href="tel:+94 81 236 3261">+94 81 236 3261</a>
                                            <h3>Katugastota Hospital</h3>
                                            <a href="tel:+94 81 249 9261">+94 81 249 9261</a>
                                            <h3>Peradeniya Hospital</h3>
                                            <a href="tel:+94 81 238 8001">+94 81 238 8001</a><br>
                                            <a href="tel:+94 81 238 8005">+94 81 238 8005</a>
                                            <h3>Kandy General Hospital</h3>
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
                                            <h3>Panwila police station </h3>
                                            <a href="tel:+94 81 247 2222">+94 81 247 2222</a>
                                            <h3>Katugasthota Police Station</h3>
                                            <a href="tel:+94 81 249 9222">+94 81 249 9222</a>

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
                                                                    $specificImageID = 172;

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
                                                                    $specificImageID = 173;

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
                                                                    $specificImageID = 174;

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
                                                                    $specificImageID = 175;

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
                                                                    $specificImageID = 176;

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
                                                                    $specificImageID = 177;

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
                                                                    $specificImageID = 171;

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




                <h3>Pidurangala</h3>
                <h4>Central Province, Matale</h4>

                <div class="div-slider">
                    <div class="tab-box">
                        <button class="tab-btn active2">Info</button>
                        <button class="tab-btn">Location</button>
                        <button class="tab-btn">Emergency Contacts</button>
                    </div>
                    <div class="slider-box">
                        <div class="slide active2">
                            <h2>Overview</h2>
                            <p>Pidurangala, the less-famous counterpart to the renowned Sigiriya Rock Fortress, may be
                                slightly shorter
                                in stature, but its ascent is more demanding. Along the climb, a staircase facilitates
                                the journey,
                                leading up to a temple nestled 500 meters above ground. Beyond this point, the ascent
                                requires navigating
                                boulders and rocky walls.<br>Enthusiasts of cultural exploration will find a sleeping
                                Buddha statue within
                                the rocky cavern, among the largest of its kind in the country. Despite the challenging
                                climb, the reward
                                lies in the breathtaking panoramic view of the countryside from the summit.
                            </p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d9580d75/sigiriya/" data-label_1="SIGIRIYA" data-label_2="WEATHER">SIGIRIYA WEATHER</a>
                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31610.35676692802!2d80.76542895!3d7.968476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afca11e2f54be0d%3A0x71eb27ad54b1c9d0!2sPidurangala%2C%20Dambulla%2C%20Sri%20Lanka!5e0!3m2!1sen!2sus!4v1701177858150!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <div class="acc-item">
                                        <h5>Pinthu Home Stay</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 71 916 9366">+94 71 916 9366</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            4.1km from Pidurangala
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>One More Night Hostel</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 70 254 7385">+94 70 254 7385</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            3.6km from Pidurangala
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>The Thick Forest</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 70 404 5006">+94 70 404 5006</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            1.2km from Pidurangala
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
                                            <h3>Divisional Hospital Sigiriya</h3>
                                            <a href="tel:+94 66 228 6261">+94 66 228 6261</a>
                                            <h3>Divisional Hospital Lenadora</h3>
                                            <a href="tel:+94 66 224 6568">+94 66 224 6568</a>
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
                                            <h3>Police Station Sigiriya</h3>
                                            <a href="tel:+94 66 228 6222">+94 66 228 6222</a>
                                            <h3>Police Station Habarana</h3>
                                            <a href="tel:+94 66 227 0022">+94 66 227 0022</a>
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
                                                                    $specificImageID = 81;

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
                                                                    $specificImageID = 82;

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
                                                                    $specificImageID = 83;

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
                                                                    $specificImageID = 84;

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
                                                                    $specificImageID = 85;

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
                                                                    $specificImageID = 86;

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
                                                                    $specificImageID = 80;

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
                <h3>Arangala Mountain Peak</h3>
                <h4>Central Province, Matale</h4>

                <div class="div-slider">
                    <div class="tab-box">
                        <button class="tab-btn active2">Info</button>
                        <button class="tab-btn">Location</button>
                        <button class="tab-btn">Emergency Contacts</button>
                    </div>
                    <div class="slider-box">
                        <div class="slide active2">
                            <h2>Overview</h2>
                            <p>Arangala stands as a favored hiking destination along the Kandy - Jaffna Highway in
                                Naula. Its name,
                                'Arangala,' is derived from its shape, reminiscent of 'arungal,' or earrings. Often
                                referred to as
                                'Nalanda Rock,' this mountain is closely linked to Nalanda village. Steeped in history,
                                Arangala
                                holds significance in the context of Weera Keppetipola and Gongale Goda Banda, who
                                assembled their
                                troops at this site. With three peaks, the highest reaching approximately 750 meters,
                                Arangala offers
                                both a scenic hike and a glimpse into historical narratives.<br>The hike to Arangala
                                peak takes around
                                3 hours. On the southern side, a pagoda, unfortunately damaged by visitors, offers a
                                viewpoint showcasing
                                Matale, Bowatenna reservoir, and Nalanda reservoir. Another peak provides a 360-degree
                                view. From the
                                summit, enjoy panoramic scenes of Matale, Dambulla, Kandy, Wiltshire, Etipola, Brandy
                                rock, Ambokka,
                                the entire Knuckles mountain range with Reverston peak, Karagahatenna peak, Bowatenna
                                reservoir, Nalanda
                                reservoir, Dolukanda Mountain, Galgamuwa peaks, Galgiriyawa, Hakwetuna Oya, Ibbagamuwa,
                                Wemedilla lake,
                                and more landmarks.</p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d6980d65/arangala/" data-label_1="ARANGALA" data-label_2="WEATHER">ARANGALA WEATHER</a>
                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.887131352626!2d80.63910340000001!3d7.695260599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afcad5a3b07756b%3A0x3055376d27326848!2sArangala%20Mountain%20Peak!5e0!3m2!1sen!2sus!4v1701177892790!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <div class="acc-item">
                                        <h5>Timber House Resort</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 537 2360">+94 77 537 2360</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            10.6km from Arangala Mountain Peak
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Golden Rainbow Guesthouse</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 307 9437">+94 77 307 9437</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            19.7km from Arangala Mountain Peak
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Kashyapa Kingdom View Home</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 71 447 7903">+94 71 447 7903</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            38.8km from Arangala Mountain Peak
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
                                            <h3>Nalanda Hospital</h3>
                                            <a href="tel:+94 66 224 6161">+94 66 224 6161</a>
                                            <h3>General Hospital Matale</h3>
                                            <a href="tel:+94 66 222 2261">+94 66 222 2261</a>
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
                                            <h3>Naula Police Station</h3>
                                            <a href="tel:+94 66 224 6222">+94 66 224 6222</a>
                                            <h3>Rattota Police Station</h3>
                                            <a href="tel:+94 66 225 5222">+94 66 225 5222</a>
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
                                                                    $specificImageID = 179;

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
                                                                    $specificImageID = 180;

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
                                                                    $specificImageID = 181;

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
                                                                    $specificImageID = 182;

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
                                                                    $specificImageID = 183;

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
                                                                    $specificImageID = 184;

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
                                                                    $specificImageID = 178;

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




                <h3>Riverston</h3>
                <h4>Central Province, Matale</h4>

                <div class="div-slider">
                    <div class="tab-box">
                        <button class="tab-btn active2">Info</button>
                        <button class="tab-btn">Location</button>
                        <button class="tab-btn">Emergency Contacts</button>
                    </div>
                    <div class="slider-box">
                        <div class="slide active2">
                            <h2>Overview</h2>
                            <p>Riverston, nestled within the Matale district and part of the esteemed Knuckles Mountain
                                Range,
                                is a cherished destination for hikers. Recognized as a UNESCO World Heritage site,
                                Riverston spans
                                the boundary between Matale and Kandy districts. Its renowned feature is the
                                ever-changing weather,
                                with locals often quipping that it shifts every five minutes. The summit, surpassing the
                                cloud line,
                                distinguishes Riverston as an untouched and unpolluted haven, capturing the fascination
                                of avid hikers.
                                Characterized by a serene atmosphere, crisp breezes, fresh air, lush greenery, and mist,
                                Riverston is
                                often likened to a slice of paradise. Its universal allure makes it a captivating
                                destination for both
                                locals and tourists alike.<br>To reach the Riverston viewpoint, a 2 km hike amidst misty
                                greenery leads
                                to the cliff. Along the way, small rocks line the road, offering natural resting spots.
                                Despite the
                                absence of facilities, tranquil spots provide rest during the journey.The forest of
                                Knuckles boasts
                                streams, freshwater springs, and waterfalls, enhancing the hike's allure. Cold weather
                                mitigates fatigue,
                                especially during the dry season. Exercise caution near streams, adhering to safety
                                signboards.While no
                                animal attacks are reported, daytime hikes are advisable. Solo hiking poses low risks,
                                but a companion
                                or guide is recommended. Be prepared for unpredictable weather with a cap, raincoat,
                                sweater, and
                                umbrella. Comfortable hiking shoes are essential, considering potential leeches in bushy
                                areas. <br>The
                                breathtaking 360-degree view from the top is worth the effort, and camping can enhance
                                the overall experience.</p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d5280d67/rattota/" data-label_1="RATTOTA" data-label_2="WEATHER">RATTOTA WEATHER</a>
                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.441996143849!2d80.7370517!3d7.526674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3574548c1552d%3A0x87dcbb639681b33!2sRiverston!5e0!3m2!1sen!2sus!4v1701177924326!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <div class="acc-item">
                                        <h5>Riverston Holiday Home Stay</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 76 044 4481">+94 76 044 4481</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            26.3km from Riverston
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Hotel Clover Grange</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 66 223 1144">+94 66 223 1144</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            28.2km from Riverston
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Paradise Forest Garden</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 66 312 4033">+94 66 312 4033</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            34.9km from Riverston
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
                                            <h3>District General Hospital Matale</h3>
                                            <a href="tel:+94 66 222 2261">+94 66 222 2261</a>
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
                                            <h3>Rattota Police Station</h3>
                                            <a href="tel:+94 66 225 5222">+94 66 225 5222</a>
                                            <h3>Matale Police Station</h3>
                                            <a href="tel:+94 66 222 2222">+94 66 222 2222</a>
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
                                                                    $specificImageID = 186;

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
                                                                    $specificImageID = 187;

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
                                                                    $specificImageID = 188;

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
                                                                    $specificImageID = 189;

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
                                                                    $specificImageID = 190;

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
                                                                    $specificImageID = 191;

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
                                                                    $specificImageID = 185;

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




                <h3>Hunnasgiriya Waterfall</h3>
                <h4>Central Province, Matale</h4>

                <div class="div-slider">
                    <div class="tab-box">
                        <button class="tab-btn active2">Info</button>
                        <button class="tab-btn">Location</button>
                        <button class="tab-btn">Emergency Contacts</button>
                    </div>
                    <div class="slider-box">
                        <div class="slide active2">
                            <h2>Overview</h2>
                            <p>Among the renowned waterfalls in Sri Lanka, the Hunnasgiriya Waterfall, also recognized
                                as Hunas Falls,
                                stands out. Nestled in Elkaduwa within the Kandy district, this waterfall boasts a
                                height of 48 meters,
                                cascading in two distinct parts. Popular among locals, it is not only a scenic
                                attraction but also a
                                well-known bathing spot.<br>Hunnasgiriya Waterfall, a man-made cascade affiliated with
                                the hotel of the
                                same name, is complemented by 32 hectares of hotel-owned land featuring an artificial
                                lake. Originating
                                from the nearby "Hunnasgiriya mountain," the waterfall holds a central position within
                                the Hunnasgiriya
                                Estate, experiencing diverse climate conditions. The journey to the waterfall offers a
                                picturesque drive
                                with captivating views. Popular among honeymooners due to its proximity, the waterfall
                                attracts both local
                                and international travelers seeking the unspoiled beauty of Sri Lanka, enhanced by
                                breathtaking mountain
                                views.<br>The surrounding woods harbor unique Sri Lankan trees and serve as a sanctuary
                                for diverse wildlife
                                and flora. Before visiting, checking the local rainfall is advisable, as water flow may
                                vary in the dry
                                season. Even with reduced water, the waterfall's natural splendor remains, making it a
                                highlight in the
                                Kandy district and a must-visit destination in Sri Lanka.</p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d3080d85/hunnasgiriya/" data-label_1="HUNNASGIRIYA" data-label_2="WEATHER">HUNNASGIRIYA WEATHER</a>
                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.5716212595366!2d80.6898511!3d7.4018004999999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae35c433096918d%3A0x8ef520ba342a0651!2zSHVubmFzZ2lyaXlhIFdhdGVyIEZhbGwgLSDgrrngr4Hgrqngr43grqngrrjgr43grpXgrr_grrDgrr_grq8!5e0!3m2!1sen!2sus!4v1701177969622!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <div class="acc-item">
                                        <h5>Green View Holiday Resort</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 781 1881">+94 77 781 1881</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            5.1km from Hunnasgiriya Waterfall
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Elkaduwa Bungalow</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 71 835 8353">+94 71 835 8353</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            3.3km from Hunnasgiriya Waterfall
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Hotel Elkaduwa Loft</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 710 6702">+94 77 710 6702</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            4.7km from Hunnasgiriya Waterfall
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
                                            <h3>Udadumbara General Hospital</h3>
                                            <a href="tel:+94 81 240 2461">+94 81 240 2461</a>
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
                                            <h3>Udadumbara Police Station</h3>
                                            <a href="tel:+94 81 240 2222">+94 81 240 2222</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="preview" data-target="d-8">
                <i class="fas fa-times"></i>
                <img class="prewImg" src="data:image/jpeg;base64,<?php
                                                                    $specificImageID = 193;

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
                                                                    $specificImageID = 194;

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
                                                                    $specificImageID = 195;

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
                                                                    $specificImageID = 192;

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
                                                                    $specificImageID = 197;

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
                                                                    $specificImageID = 196;

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
                                                                    $specificImageID = 198;

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




                <h3>Conical Hill</h3>
                <h4>Central Province, Nuwara Eliya</h4>

                <div class="div-slider">
                    <div class="tab-box">
                        <button class="tab-btn active2">Info</button>
                        <button class="tab-btn">Location</button>
                        <button class="tab-btn">Emergency Contacts</button>
                    </div>
                    <div class="slider-box">
                        <div class="slide active2">
                            <h2>Overview</h2>
                            <p>Conical is a mountain range housing two prominent peaks: Conical Hill and Waterfall
                                Point. Waterfall
                                Point, situated on the opposite side of Conical Hill, falls within the Nuwara Eliya
                                region.<br>Scaling
                                the summit is a challenging hike, marked by the absence of a clearly defined path to the
                                mountain's
                                peak. The Conical Hill mountain range is enveloped by a forest reserve, serving as a
                                natural habitat for
                                various wildlife, including leopards and wild bears. A captivating sight from the summit
                                includes the
                                picturesque Hakgala mountain.<br>From Nuwara Eliya, Blackpool Magastota road, and the
                                Blackpool Ambewela
                                Pattipola Horton Plane road to Meepilimana to reach Conical Mountain range.</p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/6d9580d79/nuwara-eliya/" data-label_1="NUWARA ELIYA" data-label_2="WEATHER">NUWARA ELIYA WEATHER</a>
                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8071544567433!2d80.77538489999999!3d6.9136465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3876145052017%3A0x2c117b4d83ccd6eb!2sConical%20Hill!5e0!3m2!1sen!2sus!4v1701178002654!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <div class="acc-item">
                                        <h5>Golden King Guest</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 76 665 5562">+94 76 665 5562</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            11.3km from Conical Hill
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Zion White House</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 734 3858">+94 77 734 3858</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            8.7km from Conical Hill
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Eco Creations Nuwaraeliya</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 773 3561">+94 77 773 3561</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            7.1km from Conical Hill
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
                                            <h3>Co-operative Hospital</h3>
                                            <a href="tel:+94 52 222 2487">+94 52 222 2487</a>
                                            <h3>District General Hospital Nuwara Eliya</h3>
                                            <a href="tel:+94 52 222 2261">+94 52 222 2261</a>
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
                                            <h3>Magasthota Police Post</h3>
                                            <a href="tel:+94 52 222 2222">+94 52 222 2222</a>
                                            <h3>Nuwara Eliya Police Station</h3>
                                            <a href="tel:+94 52 222 2222">+94 52 222 2222</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="preview" data-target="d-9">
                <i class="fas fa-times"></i>
                <img class="prewImg" src="data:image/jpeg;base64,<?php
                                                                    $specificImageID = 200;

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
                                                                    $specificImageID = 201;

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
                                                                    $specificImageID = 202;

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
                                                                    $specificImageID = 203;

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
                                                                    $specificImageID = 204;

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
                                                                    $specificImageID = 205;

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
                                                                    $specificImageID = 199;

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




                <h3>Piduruthalagala Mountain</h3>
                <h4>Central Province, Nuwara Eliya</h4>

                <div class="div-slider">
                    <div class="tab-box">
                        <button class="tab-btn active2">Info</button>
                        <button class="tab-btn">Location</button>
                        <button class="tab-btn">Emergency Contacts</button>
                    </div>
                    <div class="slider-box">
                        <div class="slide active2">
                            <h2>Overview</h2>
                            <p>Piduruthalagala Mountain and the accompanying Forest Reserve are located in close
                                proximity to the center
                                of Nuwara Eliya Town.<br>Nuwara Eliya, nestled within a mountain valley, features an
                                elliptically shaped
                                plateau. The mountains on this plateau rise to approximately 2000 feet, forming distinct
                                ridges. The plateau
                                itself, positioned at 6240 feet above sea level, is home to the highest mountain peak,
                                Pidurutalagala,
                                reaching an elevation of 8292 feet (2527 meters) above sea level.<br>Pidurutalagala's
                                summit differs from
                                typical rocky peaks, featuring a flattened top covered in pale green patna. The single
                                man-made path to the
                                summit winds through an untouched forest frequented by elephants for centuries. The
                                trees near the top appear
                                dwarfed due to high winds, displaying a flattened effect resembling well-trimmed hedges.
                                The forest showcases
                                cloud forest characteristics with gnarled trunks and moss-covered branches.Stone posts
                                mark the ascent at
                                intervals, indicating elevations like 7500 feet and 8000 feet. In the 1940s, the summit
                                housed a "Toposcope,"
                                a map pointing to distant landmarks like Colombo, Adam’s Peak, and Horton’s
                                Plains.<br>This allowed clear views
                                of faraway places such as Yala, Hambantota, Bintenna, Namunukula, Horabora Wewa, and the
                                Bay of Trincomalee.</p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/6d9580d79/nuwara-eliya/" data-label_1="NUWARA ELIYA" data-label_2="WEATHER">NUWARA ELIYA WEATHER</a>
                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.0706041766307!2d80.7735799!3d7.000967999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae38029c7c92d13%3A0x9bb8abf0e9787c75!2sPiduruthalagala%20Mountain!5e0!3m2!1sen!2sus!4v1701178028288!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <div class="acc-item">
                                        <h5>Namadi Nest</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 743 2683">+94 77 743 2683</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            9km from Piduruthalagala Mountain
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Omenco Hote</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 52 222 0848">+94 52 222 0848</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            8.4km from Piduruthalagala Mountain
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Shiny View</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 76 613 3069">+94 76 613 3069</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            9.2km from Piduruthalagala Mountain
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
                                            <h3>Co-operative Hospital</h3>
                                            <a href="tel:+94 52 222 2487">+94 52 222 2487</a>
                                            <h3>District General Hospital Nuwara Eliya</h3>
                                            <a href="tel:+94 52 222 2261">+94 52 222 2261</a>
                                            <h3>Divisional Hospital Gonapitiya</h3>
                                            <a href="tel:+94 52 353 2299">+94 52 353 2299</a>
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
                                            <h3>Nuwara Eliya Police Station</h3>
                                            <a href="tel:+94 52 222 222">+94 52 222 2222</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="preview" data-target="d-10">
                <i class="fas fa-times"></i>
                <img class="prewImg" src="data:image/jpeg;base64,<?php
                                                                    $specificImageID = 207;

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
                                                                    $specificImageID = 208;

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
                                                                    $specificImageID = 209;

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
                                                                    $specificImageID = 210;

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
                                                                    $specificImageID = 211;

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
                                                                    $specificImageID = 212;

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
                                                                    $specificImageID = 206;

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




                <h3>Lovers Leap Waterfall</h3>
                <h4>Central Province, Nuwara Eliya</h4>

                <div class="div-slider">
                    <div class="tab-box">
                        <button class="tab-btn active2">Info</button>
                        <button class="tab-btn">Location</button>
                        <button class="tab-btn">Emergency Contacts</button>
                    </div>
                    <div class="slider-box">
                        <div class="slide active2">
                            <h2>Overview</h2>
                            <p>Lovers Leap is a captivating waterfall renowned for its romantic folklore. Accessible by
                                navigating through
                                the tea factory and reaching the tea manager’s bungalow via a dirt road, visitors can
                                follow the signs to
                                reach a rock face and a Shiva shrine. Just beyond the shrine, the cascading waterfall
                                comes into view.
                                <br>According to legend, the name "Lovers Leap" originates from stories of lovers
                                leaping to their deaths from
                                this waterfall.
                            </p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/6d9580d79/nuwara-eliya/" data-label_1="NUWARA ELIYA" data-label_2="WEATHER">NUWARA ELIYA WEATHER</a>
                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.262850978862!2d80.7866097!3d6.978281099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3817127474d71%3A0x4f61d826176de317!2sLover&#39;s%20Leap%20Waterfall!5e0!3m2!1sen!2sus!4v1701178077718!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <div class="acc-item">
                                        <h5>Lovers Leap Guest House</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 75 701 6833">+94 75 701 6833</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            750m from Lovers Leap Waterfall
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Lover's Leap Cabin & Villa</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 71 996 6608">+94 71 996 6608</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            850m from Lovers Leap Waterfall
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>The Green Savanna Holiday Bungalow</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 71 923 6638">+94 71 923 6638</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            9.7km from Lovers Leap Waterfall
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
                                            <h3>Co-operative Hospital</h3>
                                            <a href="tel:+94 52 222 2487">+94 52 222 2487</a>
                                            <h3>District General Hospital Nuwara Eliya</h3>
                                            <a href="tel:+94 52 222 2261">+94 52 222 2261</a>
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
                                            <h3>Nuwara Eliya Police Station</h3>
                                            <a href="tel:+94 52 222 2222">+94 52 222 2222</a>
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

    <!--Function Scripts-->
    <script src="js/details_script.js"></script>

    <!--Animation Scripts-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>