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
    <link rel="stylesheet" type="text/css" href="css/details-styles.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="https://kit.fontawesome.com/b11fc013a7.js" crossorigin="anonymous"></script>
    <script src=" https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="js/NavigationBar_scroll.js"></script>

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
    <div class="image"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(Images/wall/D-CP.jpg);">
        <h1 data-aos="fade-right" data-aos-delay="300" data-aos-duration="800">
            Central Province
        </h1>

    </div>

    <!--Back Arrow / Quote-->
    <div class="d1">
        <a href="destination_provinces.php" data-aos="fade-left" data-aos-delay="300" data-aos-duration="500"><img
                src="Images/arrow.png" title="Go back to Provinces"></a>

        <h1 class="text2" data-aos="flip-up" data-aos-delay="450" data-aos-duration="500">
            Embark on a journey of exploration and uncover the hidden gems <br> of travel destinations nestled in
            the
            heart of Central Province!
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

                <p>Royal Botanic Gardens,Peradeniya</p>
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

                <p>Gregory Lake</p>
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

                <p>Ambuluwawa Tower</p>
            </div>

            <div class="place" data-name="d-8" style="background-image: url(<?php

// Assuming you want to display the image with ID = 3
$specificImageID = 59;

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

            <div class="place" data-name="d-9" style="background-image: url(<?php

// Assuming you want to display the image with ID = 4
$specificImageID = 66;

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

            <div class="place" data-name="d-10" style="background-image: url(<?php

// Assuming you want to display the image with ID = 73
$specificImageID = 73;

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

                ?>)">

                <p>Dambulla Cave Temple</p>
            </div>
        </div>


        <!----------------------------------------------------------Pop-Up Models----------------------------------------------------->


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
                            <p>The Temple of the Tooth Relic is one of the most notable destinations to visit in Kandy,
                                Sri Lanka, and is regarded as one of the most significant Buddhist temples in the
                                country. It is situated to the north of Kandy Lake. One of the most well-known tourist
                                attractions in Kandy is the temple, which houses the precious tooth of Lord Buddha.
                                Devotees are welcome to pray in the room where the tooth is kept. The teeth, however, is
                                hidden behind a stupa-like structure in a golden casket, so no one can see it. The
                                temple is located within the old Kingdom of Kandy's royal palace complex. This temple,
                                which is among the top attractions in Kandy, is very significant because of the national
                                obsession with teeth. Three times a day, the temple holds rites. In 1988, the temple
                                received the UNESCO World Heritage Site designation. To truly appreciate the
                                architecture, visitors must go inside the temple in addition to the exterior. There are
                                openings in the walls that house lamps that are lit with coconut oil. Visitors should go
                                between 5:30 AM and 8:00 PM and must pay the entrance fee.Two attacks later, the temple
                                is still standing strong.</p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d2980d63/kandy/"
                                data-label_1="KANDY" data-label_2="WEATHER">KANDY WEATHER</a>
                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.53514320401!2d80.63875007473406!3d7.293608992713885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3662db149fbf5%3A0x8165d70ac115e887!2sSri%20Dalada%20Maligawa!5e0!3m2!1sen!2sus!4v1699954655823!5m2!1sen!2sus"
                                            width="100%" height="400" style="border-radius: 10px;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 307 4575">+94 77 307 4575</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            0.5 km from Sri Dalada Maligawa
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Townhouse Rest</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 600 9187">+94 77 600 9187</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
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
                            <p>Horton Plains National Park, nestled in the Central Province of Nuwara Eliya, Sri Lanka,
                                is a breathtaking expanse of natural beauty. Spread across over 3,000 hectares, the park
                                is characterized by its undulating landscapes, mist-covered grasslands, and unique
                                biodiversity. A key highlight within the park is World's End, a sheer cliff that plunges
                                880 meters, offering awe-inspiring panoramic views of the surrounding plains. The park
                                is also home to Baker's Falls, a cascading waterfall that adds to the park's scenic
                                allure. Nature enthusiasts can explore the park's diverse ecosystems, which range from
                                montane forests to open grasslands, providing a habitat for various species of flora and
                                fauna, including the elusive sambar deer and endemic bird species. The challenging trek
                                to World's End and Baker's Falls rewards visitors with a sense of accomplishment and a
                                close connection to nature. Conservation efforts are evident in the park's commitment to
                                preserving its pristine environment. Horton Plains National Park is a UNESCO World
                                Heritage Site, attracting visitors seeking a tranquil escape into Sri Lanka's natural
                                wonders.</p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/6d9580d79/nuwara-eliya/"
                                data-label_1="NUWARA ELIYA" data-label_2="WEATHER">NUWARA ELIYA WEATHER</a>
                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6740385671706!2d80.79975837472918!3d6.809445993188075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3882edb4b78ef%3A0xcebca89153777249!2sHorton%20Plains%20National%20Park!5e0!3m2!1sen!2sus!4v1700999949696!5m2!1sen!2sus"
                                            width="100%" height="450" style="border-radius: 10px;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <div class="acc-item">
                                        <h5>Hill Safari</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 74 347 2451">+94 74 347 2451</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            5.4 km from Horton Plains National Park
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>The Capoe House</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 887 2992">+94 77 887 2992</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            18.5 km from Horton Plains National Park
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Eco Wild Glamping</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 600 9187">+94 77 600 9187</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            12.7 km from Horton Plains National Park<br>
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
                                            <h3 style="color: #e20059;">General Hospital Nuwara Eliya</h3>
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
                                            <h3 style="color: #ffaa20;">Nuwara Eliya police Station</h3>
                                            <a href="tel:+94 52 222 2222">+94 52 222 2222</a>
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




                <h3>Royal Botanic Garden, Peradeniya</h3>
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
                            <p>One of the top Kandy attractions is this location. The Royal Botanic Garden, which covers
                                more than 60 hectares, is one of the best sites to visit in Kandy and has a secret charm
                                to discover. The area is found in Peradeniya and is quite close to the Mahaweli River.
                                This Botanical Garden contains more than 4000 different plant types in addition to the
                                most stunning orchids. The National Herbarium of Sri Lanka, which is a part of this
                                Royal Botanical Garden, is unquestionably worth a visit. The entire 147 acres of the
                                garden are open for visitors to explore during their day. The garden was established in
                                1821 and originally featured mostly plants for coffee and cinnamon. The garden is a
                                great location for a picnic with friends and family. However, the garden area is where
                                you'll typically find amorous couples hanging around. When making a Kandy sightseeing
                                trip, the cab drivers frequently offer to include the Botanical Garden, the Kandy
                                temple, and the Pinnawala Elephant Orphanage. From 7:30 AM until 5 PM, the park is still
                                open. This is one of the most romantic sites in Kandy to visit with your significant
                                other.</p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d2980d63/kandy/"
                                data-label_1="KANDY" data-label_2="WEATHER">KANDY WEATHER</a>
                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15830.90199499824!2d80.58447954337349!3d7.272045069228514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae36890ae2f95fd%3A0x92ce8ec2bf791233!2sRoyal%20Botanic%20Gardens%2C%20Peradeniya!5e0!3m2!1sen!2sus!4v1701068613598!5m2!1sen!2sus"
                                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <div class="acc-item">
                                        <h5>Delight Reich Hotel</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 76 267 6200">+94 76 267 6200</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            1.5 km from Kandy Royal Botanic Gardens
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Kandy Green Mount Villa</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 199 0715">+94 77 199 0715</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            1.7 km from Kandy Royal Botanic Gardens
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>GT Homes</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 787 2280">+94 77 787 2280</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            2.2 km from Kandy Royal Botanic Gardens
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
                                            <h3 style="color: #e20059;">Peradeniya Hospital</h3>
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
                                            <h3 style="color: #ffaa20;">Peradeniya Police Station</h3>
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




                <h3>Gregory Lake</h3>
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
                            <p>Gregory Lake is the solution to the question of where in Nuwara Eliya tourists should go.
                                It is a little bit outside of the town's core. One of Nuwara Eliya's most picturesque
                                locations, where you may go rowing and play a few kid-friendly games. Additionally,
                                there are snack stands and houseboat facilities. Here, Sunday feels like a wonderful
                                day. People come here to unwind, possibly have a little picnic, and just take in the
                                positive energy. The natural beauty is also stunning. It is one of the most intriguing
                                undiscovered destinations in Nuwara Eliya.</p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/6d9580d79/nuwara-eliya/"
                                data-label_1="NUWARA ELIYA" data-label_2="WEATHER">NUWARA ELIYA WEATHER</a>
                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15841.7817365575!2d80.768033543501!3d6.956666438697951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae380f70b675859%3A0x3362d6f28dc32189!2sLake%20Gregory!5e0!3m2!1sen!2sus!4v1701082662791!5m2!1sen!2sus"
                                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <div class="acc-item">
                                        <h5>Mirage Kings Cottage</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 52 222 2102">+94 52 222 2102</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            0.8 km from Gregory Lake
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Lakeside Cottages</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 70 244 0514">+94 70 244 0514</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            350 m from Gregory Lake
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Nuwaraeliya Holiday Bungalow</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 399 7504">+94 77 399 7504</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            0.5 km from Gregory Lake
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
                                            <h3 style="color: #e20059;">General Hospital Nuwara Eliya</h3>
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
                                            <h3 style="color: #ffaa20;">Nuwara Eliya police</h3>
                                            <a href="tel:+94 52 222 2222">+94 52 222 2222</a>
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




                <h3>Bahirawakanda Temple</h3>
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
                            <p>The Bahirawakanda Temple is a significant landmark and distinctive building located
                                within one kilometer from Kandy city. The location is a favorite among Buddhists, and
                                many meetings about international Buddhist relations take place here. As a result, it is
                                a well-known attraction in Kandy. The gorgeous building is enormous and clearly visible
                                from all throughout the city. The location is also a significant monastery where several
                                Buddhist activities are held. Starting in 1972 and finishing in 1993, the statue. To get
                                to the temple grounds, all that is required is to climb the hill via the steps or to
                                take a tuk-tuk.Don't miss this architectural marvel while visiting Kandy if you are
                                traveling there. Although the Buddha statue can be seen from all across the city, it is
                                best to visit it in person to appreciate its beauty up close. The trip to the statue
                                costs roughly 200 LKR. Make sure to include Kandy in your itinerary if you plan to
                                travel there in August.</p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d2980d63/kandy/"
                                data-label_1="KANDY" data-label_2="WEATHER">KANDY WEATHER</a>
                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.518568686891!2d80.62869597473404!3d7.29548359271207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae368804222a85d%3A0xbe9691c716dc1fc4!2zU3LEqyBNYWjEgSBCxY1kaGkgVGVtcGxl!5e0!3m2!1sen!2sus!4v1701068669840!5m2!1sen!2sus"
                                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <div class="acc-item">
                                        <h5>Cafe Aroma Inn</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 276 3753">+94 77 276 3753</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            0.7km from Bahirawakanda Temple
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Windy Ridge Kandy</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 304 7771">+94 77 304 7771</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            300m from Bahirawakanda Temple
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Sevana City Hotel</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 81 222 2861">+94 81 222 2861</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            450m from Bahirawakanda Temple
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




                <h3>Sigiriya Rock Fortress</h3>
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
                            <p>Sigiriya is a historic site that dates back a long time in Sri Lanka. It is known by its
                                other name, the Lion Rock, and is situated in the Northern Matale region of Sri Lanka's
                                Central Province. The Culavamsa claim that King Kashyapa (477–495 CE) chose the location
                                as his new capital. The King proceeded to fresco one of the rock's sides after
                                constructing the palace above it. The name "Lion Rock" comes from a massive lion that
                                was constructed on a plateau next to this rock, which portrays a gateway. This rock,
                                which was left in a desolate state when the King passed away, was used as a Buddhist
                                monastery until around the 14th century. Sigiriya, a historical rock, is now recognized
                                as a World Heritage Site by UNESCO.</p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d8780d65/dambulla/"
                                data-label_1="DAMBULLA" data-label_2="WEATHER">DAMBULLA WEATHER</a>
                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31611.421459545043!2d80.72363573970044!3d7.95467769245764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afca0dfa73179d1%3A0x1e04c1150cff0edf!2sSigiriya%2C%20Sri%20Lanka!5e0!3m2!1sen!2sus!4v1701069064310!5m2!1sen!2sus"
                                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <div class="acc-item">
                                        <h5>Fresco Water Villa</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 66 228 6161">+94 66 228 6161</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            1km from Sigiriya Rock Fortress
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Sigiriya Village Home Hostel</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 76 582 2358">+94 76 582 2358</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            1km from Sigiriya Rock Fortress
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>EKHO Sigiriya</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 66 228 62997">+94 66 228 6299</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            800m from Sigiriya Rock Fortress
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
                                            <h3 style="color: #e20059;">Matale General Hospital</h3>
                                            <a href="tel:+94 66 222 2261">+94 66 222 2261</a><br>
                                            <a href="tel:+94 66 222 3627">+94 66 222 3627</a>
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
                                            <h3 style="color: #ffaa20;">Matale Police Station</h3>
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

?>" alt="">




                <h3>Ambuluwawa Tower</h3>
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
                            <p>Perched atop the enchanting hills of the Central Province in Kandy, Sri Lanka, Ambuluwawa
                                Tower stands as a captivating testament to architectural splendor and natural beauty.
                                Situated amidst the lush greenery of the Ambuluwawa Mountain, this iconic tower serves
                                as a multifaceted marvel—a harmonious blend of religious diversity and panoramic vistas.
                                Rising 48 meters into the sky, the tower's unique design fuses elements of various world
                                religions, symbolizing Sri Lanka's cultural harmony. Visitors ascending the tower's
                                spiral staircase are rewarded with breathtaking views of Kandy, its verdant
                                surroundings, and the picturesque Victoria Reservoir. The complex surrounding the tower
                                encompasses a diverse array of attractions, including a Buddhist temple, a mosque, a
                                Hindu kovil, and a Christian church, fostering a spirit of unity and coexistence. As a
                                popular pilgrimage site and tourist destination, Ambuluwawa Tower encapsulates the
                                cultural richness and scenic allure of the Central Province, providing a serene escape
                                for those seeking both spiritual reflection and natural tranquility.</p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d1380d56/gampola/"
                                data-label_1="GAMPOLA" data-label_2="WEATHER">GAMPOLA WEATHER</a>
                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1979.3457123670553!2d80.54641390020605!3d7.161627499337373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae371f92e975b5d%3A0xa383ec30d0ad2ef6!2sAmbuluwawa%20Tower!5e0!3m2!1sen!2sus!4v1701069355466!5m2!1sen!2sus"
                                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <div class="acc-item">
                                        <h5>La Pinchi Restaurant</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 75 591 6143">+94 75 591 6143</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            4.5km from Ambuluwawa
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Leaf Holiday Resort</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 343 4428">+94 77 343 4428</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            8.3km from Ambuluwawa
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Villa Nilmalee</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 954 2117">+94 77 954 2117</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            7.8km from Ambuluwawa
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
                                            <h3 style="color: #e20059;">Gampola General Hospital</h3>
                                            <a href="tel:+94 81 235 2261">+94 81 235 2261</a>
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
                                            <h3 style="color: #ffaa20;">Gampola Police Station</h3>
                                            <a href="tel:+94 81 235 2222">+94 81 235 2222</a>
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
$specificImageID = 60;

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
$specificImageID = 61;

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
$specificImageID = 62;

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
$specificImageID = 63;

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
$specificImageID = 64;

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
$specificImageID = 65;

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
$specificImageID = 59;

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




                <h3>Hakgala Botanical Garden</h3>
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
                            <p>Nature lovers should come here. There are 28 acres of nature there, with all of its hues
                                and tones. Exotic plants and a wide range of flowers can be found in the garden. These
                                plants are divided into a number of smaller gardens, such as the Upper Flower Garden,
                                Fernery, Rock Garden, Arboretum, Rose Garden, and Glass House, among other places, and
                                are a must-see when visiting Nuwara Eliya.</p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/6d9280d83/hakgala/"
                                data-label_1="HAKGALA" data-label_2="WEATHER">HAKGALA WEATHER</a>
                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.698600625171!2d80.81895347473035!3d6.926584893073201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae47f4e2989ad8f%3A0xd9ed0d9523eaca78!2sHakgala%20Botanical%20Garden!5e0!3m2!1sen!2sus!4v1701086949882!5m2!1sen!2sus"
                                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <div class="acc-item">
                                        <h5>The Green Savanna Holiday Bungalow</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 71 923 6638">+94 71 923 6638</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            1.4km from Hakgala Botanical Garden
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Akiko Rest</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 761 0997">+94 77 761 0997</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            1.7km from Hakgala Botanical Garden
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Miliya Guest House</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 123 6688">+94 77 123 6688</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            1.8km from Hakgala Botanical Garden
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
                                            <h3 style="color: #e20059;">General Hospital Nuwara Eliya</h3>
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
                                            <h3 style="color: #ffaa20;">Nuwara Eliya police</h3>
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
$specificImageID = 67;

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
$specificImageID = 68;

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
$specificImageID = 69;

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
$specificImageID = 70;

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
$specificImageID = 71;

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
$specificImageID = 72;

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
$specificImageID = 66;

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




                <h3>Aluvihare Rock Temple</h3>
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
                            <p>The Matale Alu Viharaya, commonly referred to as the Aluvihare Rock Temple, is a Buddhist
                                temple that can be found in the Central Province of Sri Lanka at Aluvihare, Matale
                                District. The temple is situated 30 km north of Kandy and is surrounded by hills. The
                                history of the temple dates from the third century BC up until the time of King
                                Devanampiya Tissa. It is said that he constructed the dagoba, planted the Bo-sapling,
                                and established the temple after introducing Buddhism to the nation while serving as
                                King.</p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d4780d62/matale/"
                                data-label_1="MATALE" data-label_2="WEATHER">MATALE WEATHER</a>
                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.705492738849!2d80.61920897462957!3d7.497730911076802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afcf5459de99697%3A0x61d8f01aa0e120b1!2sAluviharaya%20Rock%20Cave%20Temple!5e0!3m2!1sen!2sus!4v1701089144531!5m2!1sen!2sus"
                                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <div class="acc-item">
                                        <h5>Ama Residence</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 66 205 0505">+94 66 205 0505</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            800m from Aluvihare Rock Temple
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Man Mountain Villa</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 76 838 0480">+94 76 838 0480</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            4.2km from Aluvihare Rock Temple
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Hilltop Retreat</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 66 223 0015">+94 66 223 0015</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            4.6km from Aluvihare Rock Temple
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
                                            <h3 style="color: #e20059;">Matale General Hospital</h3>
                                            <a href="tel:+94 66 222 2261">+94 66 222 2261</a><br>
                                            <a href="tel:+94 66 222 3627">+94 66 222 3627</a>
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
                                            <h3 style="color: #ffaa20;">Matale Police Station</h3>
                                            <a href="tel:+94 66 222 2222">+94 66 222 2222</a>
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
$specificImageID = 74;

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
$specificImageID = 75;

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
$specificImageID = 76;

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
$specificImageID = 77;

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
$specificImageID = 78;

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
$specificImageID = 79;

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
$specificImageID = 73;

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




                <h3>Dambulla Cave Temple</h3>
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
                            <p>The Golden Cave of Dambulla, also known as the Dambulla Cave Temple, was named a World
                                Heritage Site in 1991. The Temple Complex, which dates to the first century BC, is known
                                for its caverns that are tucked away beneath an overhanging rock and have drip lines to
                                prevent water from penetrating them. The Lord Buddha and several Bodhisattvas are shown
                                in the Dambulla Cave Temple. The Temple is still highly regarded as the oldest building
                                in Sri Lankan history and is carefully conserved. This stunning representation of
                                ancient elegance goes back to the second and third century BC. It already bragged about
                                being one of the biggest and most significant monasteries in the nation at the time.</p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d8780d65/dambulla/"
                                data-label_1="DAMBULLA" data-label_2="WEATHER">DAMBULLA WEATHER</a>
                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.3830466465124!2d80.647994974632!3d7.85491940626182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afca558c5bd3669%3A0xd1daa5c0936b764c!2sDambulla%20Royal%20Cave%20Temple%20and%20Golden%20Temple!5e0!3m2!1sen!2sus!4v1701089626146!5m2!1sen!2sus"
                                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
                                </div>
                                <div class="acc">
                                    <h2>Accommodation</h2>
                                    <div class="acc-item">
                                        <h5>Golden Rainbow Guest House</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 77 307 9437">+94 77 307 9437</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            450m from Dambulla Cave Temple
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Heritage Rangiri Villa</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 71 396 4599">+94 71 396 4599</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            260m from Dambulla Cave Temple
                                        </p>
                                    </div>
                                    <div class="acc-item">
                                        <h5>Sundaras Resort & Spa</h5>
                                        <p>
                                            <iconify-icon inline icon="tdesign:call-1"></iconify-icon>
                                            <a href="tel:+94 72 708 6000">+94 72 708 6000</a><br>

                                            <iconify-icon icon="game-icons:path-distance"></iconify-icon>
                                            400m from Dambulla Cave Temple
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
                                            <h3 style="color: #e20059;">Dambulla General Hospital</h3>
                                            <a href="tel:+94 66 228 4761">+94 66 228 4761</a>
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
                                            <h3 style="color: #ffaa20;">Dambulla Police Station</h3>
                                            <a href="tel:+94 66 228 4703">+94 66 228 4703</a>
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
    ! function(d, s, id) {
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