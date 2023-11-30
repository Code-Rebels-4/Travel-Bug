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

    <title>Camping Grounds - CP</title>
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
        </div>
    </nav>

    <!--Banner-->
    <div class="image"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(Images/wall/C-CP.jpg);">
        <h1 data-aos="fade-right" data-aos-delay="300" data-aos-duration="800">
            Central Province
        </h1>

    </div>

    <!--Back Arrow / Quote-->
    <div class="d1">
        <a href="camping_provinces.php" data-aos="fade-left" data-aos-delay="300" data-aos-duration="500"><img
                src="Images/arrow.png" title="Go back to Provinces"></a>

        <h1 class="text2" data-aos="flip-up" data-aos-delay="450" data-aos-duration="500">
            Set up camp in Central Province's serene grounds, where nature's embrace<br> and starlit skies create
            unforgettable camping experiences.
        </h1>
    </div>

    <!--Container-->
    <section class="container">
        <!--Search Bar-->
        <div class="search" data-aos="fade" data-aos-delay="600" data-aos-duration="500">
            <input type="text" name="" id="find" placeholder="search here...." onkeyup="search()">
        </div>


        <!------------------------------------------------------------------------------------------------------------------------------->
        <!-----------------------------------------------------Place Cards--------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------------------->

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

                <p>Yahangala</p>
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

                <p>Kabaragala</p>
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

                <p>Raksagala</p>
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

                <p>Kalugala Gerandi Ella Waterfall</p>
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

                <p>Bellwood </p>
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

                <p>Knuckles</p>
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

                <p>Arangala Mountain Peak</p>
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

                <p>Manigala</p>
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

                <p>Haritha Kanda</p>
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

                <p>Great Western Mountain</p>
            </div>
        </div>


        <!------------------------------------------------------------------------------------------------------------------------------->
        <!---------------------------------------------------Pop-Up Models--------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------------------->


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




                <h3>Yahangala</h3>
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
                            <p>Yahangala is situated in the Udailuka Grama Sevaka Division within the picturesque village of Kalugala. As an integral part of the Knuckles Reserve, 
                               this captivating terrain originally belonged to the Forest Department. Nestled in the enchanting Knuckles Mountains, Yahangala earns its name due to 
                               its distinctive bed-like formation. Positioned southeast of Knuckles, this locale boasts a rich legend associated with King Ravana. According to folklore, 
                               it is believed that King Ravana concealed Goddess Sita on this mountain.
                               Engaging in camping on Yahangala Mountain poses inherent risks, and we strongly advise against it. The primary concerns include intense lightning, high winds, 
                               and a belief among some that these hazards are linked to the mountain itself. Nevertheless, there is a designated flat area for camping, and an alternative site is 
                               available at Kehelpathdoruwa. However, we caution against pursuing camping activities further. Camping during the dry season carries a perilous threat of fire due 
                               to the arid conditions and elevated wind speeds.</p>

                            </br>
                            <h2>Current Weather</h2>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d2980d63/kandy/" data-label_1="KANDY" data-label_2="WEATHER">KANDY WEATHER</a>
                        </div>



                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Directions</h2>
                                    <p>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15826.033175410475!2d80.9055519!3d7.408856349999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae4a3ddecb39897%3A0xffb7f2988f73fa3e!2sYahangala!5e0!3m2!1sen!2slk!4v1701272358636!5m2!1sen!2slk" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
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
                                            <h3 style="color: #ffaa20;">Kandy Police Station</h3>
                                            <a href="tel:+94 81 222 2222">+94 81 222 2222</a><br>
                                            <a href="tel:+94 81 222 2223">+94 81 222 2223</a>
                                            <h3 style="color: #ffaa20;">Peradeniya Police Station</h3>
                                            <a href="tel:+94 81 238 8222">+94 81 238 8222</a><br>
                                            <a href="tel:+94 81 238 8033">+94 81 238 8033</a>
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




                <h3>Kabaragala</h3>
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
                            <p>Starting at Maryville Junction, the hike takes you through a Kovil, a concrete road, a tea estate, and a narrow footpath leading to a pine tree forest. After an hour, 
                               you'll reach the first viewpoint with stunning scenery. While many end their journey here, continuing to the summit is recommended. The terrain is reminiscent of Horton Plains, 
                               featuring Mana trees and a savannah-like landscape. The descent offers a breathtaking view, akin to the end of the world. Watch the video for more details on the surrounding beauty. 
                               The summit is the ultimate destination.Kabaragala is an excellent camping destination, attracting numerous local tourists in search of adventure. The mountain's summit provides ample space for camping, surrounded by woods. 
                               The area buzzes with activity, especially during holidays, as many locals choose this spot for camping. The cool and breezy nights add to the charm, offering a serene atmosphere. 
                               The nighttime view, with lights from surrounding places, enhances the scenic beauty of the experience.</p>

                            </br>
                            <h1>Current Weather</h1>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d2980d63/kandy/" data-label_1="KANDY" data-label_2="WEATHER">KANDY WEATHER</a>

                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Derections</h2>
                                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15848.34583070817!2d80.23763882936633!3d6.759311550505008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3b0e9eccdbefb%3A0x5e7540e279813db8!2sKabaragala!5e0!3m2!1sen!2slk!4v1701274762504!5m2!1sen!2slk" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
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
                                            <h3 style="color: #e20059;">Nawalapitiya District General Hospital</h3>
                                            <a href="tel:+94 81 223 3337">0542 222 261</a><br>
                                    
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
                                            <h3 style="color: #ffaa20;">Nawalapitiya Police Station</h3>
                                            <a href="tel:+94 81 222 2222">054-2222222</a><br>
                                            
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


                <h3>Raksagala</h3>
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
                            <p>Raksagala, the second-highest peak in the Dolosbage range, goes by various names such as Kinihira, Paththini Amma Kanda, and Wangedi Molgas Gala among the locals. Situated near Kabaragala, 
                               it's an excellent location for both hiking and camping. While the road to Raksagala is challenging and narrow, the views along the way are breathtaking. The hiking experience, though more 
                               challenging than Kabaragala, is rewarded at the mountain's summit, where the beauty of nature unfolds in all its glory.
                            </p>

                            </br>
                            <h1>Current Weather</h1>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d2980d63/kandy/" data-label_1="KANDY" data-label_2="WEATHER">KANDY WEATHER</a>

                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Derections</h2>
                                    <p>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.46680043738!2d80.48853547384957!3d7.0717515165519025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae374859de3dbb5%3A0x986bfbe846e9d063!2sRaksagala%20-%20Kinihira%20Kanda!5e0!3m2!1sen!2slk!4v1701274803244!5m2!1sen!2slk" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
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



                <h3>Kalugala Gerandi Ella Waterfall</h3>
                <h4>Center Province, Ududumbara City</h4>

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
                            <p>Gerandi Ella stands as a captivating waterfall nestled in Kalugala, Ududumbara, within the Kandy District. Aptly named, the waterfall resembles a snake, adding a unique touch to its allure. 
                               The journey to reach this scenic cascade is an adventurous undertaking. Situated in Kalugala Village, this isn't a singular waterfall but a series of approximately seven cascades that 
                               collectively create a breathtaking spectacl.Beyond its waterfall charm, the area surrounding Gerandi Ella is a haven for outdoor enthusiasts. It serves as an ideal location for camping, hiking, and trekking, offering more than just a 
                               visual treat of waterfalls. The adventure extends beyond the falls, making it a comprehensive destination for nature lovers.</p>

                            </br>
                            <h1>Current Weather</h1>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d3180d88/udadumbara/"data-label_1="Ududumbara" data-label_2="WEATHER">UDUDUMBARA WEATHER</a>

                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Derections</h2>
                                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.7744575155903!2d80.86867117385198!3d7.379155612631361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae4a10ae07f4c93%3A0xf30669426fdd6d3a!2sKalugala%20Gerandi%20Ella%20Waterfall!5e0!3m2!1sen!2slk!4v1701274835644!5m2!1sen!2slk" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
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
                                            <a href="tel:+94 81 223 3337">081 223 3337</a><br>
                                            <a href="tel:+94 81 222 2261">081 222 2261</a>
                                            <h3 style="color: #e20059;">Udadumbara General Hospital</h3>
                                            <a href="tel:+94 81 223 3337">0812 402 461</a><br>
                                            
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
                                            <a href="tel:+94 81 222 2222">081 222 2222</a><br>
                                            <a href="tel:+94 81 222 2223">081 222 2223</a>
                                            <h3 style="color: #ffaa20;">Udadumbara Police Station</h3>
                                            <a href="tel:+94 81 222 2222">0812 402 222</a><br>
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



                <h3>Bellwood </h3>
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
                            <p>This stunning viewpoint is conveniently located not far from Kandy city limits. To reach this magnificent spot, take the route from Kandy city to Thalathuoya through Ampitiya town and then head to 
                               the Bellwood area. Recognized as a camping site, it's highly recommended to witness the sunrise if you decide to spend a night camping. Adding to the allure, "Muthukelina Wewa" is situated near the campsite, 
                               contributing to the lush greenery that surrounds the area.</p>

                            </br>
                            <h1>Current Weather</h1>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d2980d63/kandy/" data-label_1="KANDY" data-label_2="WEATHER">KANDY WEATHER</a>

                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Derections</h2>
                                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7916.375395771247!2d80.6708339250318!3d7.219419451298689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae364539e8d108d%3A0x1936c9e63dae4008!2sBellwood%2C%20Moragolla!5e0!3m2!1sen!2slk!4v1701274950707!5m2!1sen!2slk" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
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
                                            <a href="tel:+94 81 223 3337">081 223 3337</a><br>
                                            <a href="tel:+94 81 222 2261">081 222 2261</a>
                                            <h3 style="color: #e20059;">Thalathuoya Divisional Hospital</h3>
                                            <a href="tel:+94 81 223 3337">0812 404 261</a>
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
                                            <a href="tel:+94 81 222 2222">081 222 2222</a><br>
                                            <a href="tel:+94 81 222 2223">081 222 2223</a>
                                            <h3 style="color: #ffaa20;">Thalathuoya Police Station</h3>
                                            <a href="tel:+94 81 222 2222">0812 404 384</a>
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



                <h3>Knuckles</h3>
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
                            <p>If you have a fondness for montane environments, the Knuckles mountain range is a perfect destination. Offering an intermediate climate, rich traditional local culture, spontaneous biodiversity, and breathtaking vistas, 
                               Knuckles makes for an ideal holiday spot. The range, also known locally as 'Dumbara Mitiyawatha' or simply 'Knuckles,' earned its official name from British surveyors who noted its resemblance to the five peaks of a 
                               clenched fist. Therefore, it's evident that Knuckles boasts five peaks: Kirigalpoththa, Gombaniya, Knuckles, Koboneegala, and Dotulugala.
                            </p>

                            </br>
                            <h1>Current Weather</h1>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d2980d63/kandy/" data-label_1="KANDY" data-label_2="WEATHER">KANDY WEATHER</a>

                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Derections</h2>
                                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15824.825179098936!2d80.77066112945106!3d7.442413158180637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae35f659beee899%3A0x3bf7cc23068a888d!2sKnuckles!5e0!3m2!1sen!2slk!4v1701275034782!5m2!1sen!2slk" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
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
                                            <h3 style="color: #e20059;">Madulkelle General Hospital</h3>
                                            <a href="tel:+94 81 223 3337">081-236-3261</a>
                                            <h3 style="color: #e20059;">Katugastota Hospital</h3>
                                            <a href="tel:+94 81 223 3337">081-249-9261 </a>
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
                                        <h3 style="color: #ffaa20;">Panwila police station </h3>
                                            <a href="tel:+94 81 222 2222">0812 472 222</a>
                                            <h3 style="color: #ffaa20;">Katugasthota Police Station</h3>
                                            <a href="tel:+94 81 222 2222">0812 499 222</a>
                                            
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



                <h3>Arangala Mountain Peak </h3>
                <h4>Center Province, Naula City</h4>

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
                            <p>Embarking on this camping and hiking adventure provides an incredible experience, although it may pose challenges for beginners. Start your journey at the Naula bus stand, then walk 2.5km towards the Kandy side 
                               on the Kandy-Jaffna Highway, following "Yaya Road" past the Naula police station, Naula Cultural Center, and Naula National Youth Corps. As you proceed, the mountain comes into view on your left side. Continue 
                               along "Yaya Road" until it concludes, leading you to the base of the mountain.</p>

                            </br>
                            <h1>Current Weather</h1>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d7180d65/naula/"data-label_1="NAULA" data-label_2="WEATHER">NAULA WEATHER</a>

                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Derections</h2>
                                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.8870818541454!2d80.63652847385468!3d7.69526590844095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afcad5a3b07756b%3A0x3055376d27326848!2sArangala%20Mountain%20Peak!5e0!3m2!1sen!2slk!4v1701275258686!5m2!1sen!2slk" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
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
                                            <h3 style="color: #e20059;">Nalanda Divisional Hospital</h3>
                                            <a href="tel:+94 81 223 3337">066 2246161</a>
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
                                            <h3 style="color: #ffaa20;">Naula Police Station</h3>
                                            <a href="tel:+94 81 222 2222">0662 246 222</a>
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



                <h3>Manigala </h3>
                <h4>Center Province, Matale City</h4>

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
                            <p>Manigala, situated within the Knuckles Mountain Range, is a sought-after destination for travelers seeking the beauty of the Knuckles range and the enchanting Thelgamu-Oya. Renowned as a popular hill station in 
                               this range, the Manigala Climb Road meanders from the Knuckles Conservation Center to Illukkumbura, offering a journey through mountains, plains, and parks.
                               The Manigala Range, nestled in the Dumbara or Knuckles Range spanning Kandy and Matale Districts, stands as an ecosystem rich in biodiversity. Referred to as 'Batadadukanda,' the Dumbara Range in Manigala earned 
                               its name from the dense covering of reeds on its western slope. Embarking on the climb from the picturesque Rathinda village enhances the journey, providing glimpses of authentic rural life with paddy fields, 
                               plantations, and the overall rustic charm of the countryside.</p>

                            </br>
                            <h1>Current Weather</h1>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/7d4780d62/matale/" data-label_1="MATALE" data-label_2="WEATHER">MATALE WEATHER</a>

                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Derections</h2>
                                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7911.059551161756!2d80.76182843671776!3d7.517044406660674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3577f4ed2d779%3A0x9fcbbce8b165f9ce!2sManigala!5e0!3m2!1sen!2slk!4v1701275287379!5m2!1sen!2slk" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
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
                                            <h3 style="color: #e20059;">Matale District General Hospital </h3>
                                            <a href="tel:+94 81 223 3337">0662 222 261</a>
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
                                            <a href="tel:+94 81 222 2222">0662 222 222</a>
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



                <h3>Haritha Kanda </h3>
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
                            <p>Haritha Kanda, or Green Mountain, is a prominent hiking spot and camping destination nestled between Agarapathana and Bopaththalawa plains in the central highlands. Rising to an elevation of around 1800 meters, 
                               this rocky mountain is enveloped by lush greenery, offering breathtaking panoramic views. Renowned for its scenic beauty, Haritha Kanda is a favored site for both hiking and camping, attracting adventure enthusiasts 
                               seeking an immersive experience in the heart of nature.

                            </p>

                            </br>
                            <h1>Current Weather</h1>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/6d9580d79/nuwara-eliya/"data-label_1="NUWARA ELIYA" data-label_2="WEATHER">NUWARA ELIYA WEATHER</a>

                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Derections</h2>
                                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15846.758642344375!2d80.6774659793719!3d6.8075536476132275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae38f133e3dc071%3A0x6c72f8edb36c3da!2sGreen%20Mountain%20%2F%20Haritha%20Kanda%20%2F%20Bopath%20Thalawa!5e0!3m2!1sen!2slk!4v1701275332348!5m2!1sen!2slk" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
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
                                            <h3 style="color: #e20059;"> Bagawanthalawa Divisional Hospital </h3>
                                            <a href="tel:+94 81 223 3337"> 0522 267 561</a>
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
                                            <h3 style="color: #ffaa20;">Bagawantalawa Police Station</h3>
                                            <a href="tel:+94 81 222 2222">0522 267 522</a>
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



                <h3> Great Western Mountain</h3>
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
                            <p>Ranked as the seventh highest mountainous challenge in Sri Lanka, the Great Western Mountain Hike offers a demanding yet accessible ascent, even for novice climbers. Nestled in the scenic surroundings of Nuwara Eliya, 
                               the Great Western Mountain range provides an exceptional experience for nature enthusiasts and is hailed as an excellent hiking destination.
                               Standing as the seventh tallest peak in Sri Lanka, the trailhead for the Great Western Mountain climb is located approximately 1.5 km from the Great Western railway station, near the iron bridge on the Nanu Oya side. 
                               The journey to the summit typically takes about 3-4 hours, and while the trail can be slippery at certain points, caution is advised for a safe ascent. It's important to note that there are no water sources at the summit 
                               or consistent ones along the trail.
                            </p>

                            </br>
                            <h1>Current Weather</h1>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/6d9580d79/nuwara-eliya/"data-label_1="NUWARA ELIYA" data-label_2="WEATHER">NUWARA ELIYA WEATHER</a>

                        </div>

                        <div class="slide">
                            <div class="div1">
                                <div class="dir">
                                    <h2>Derections</h2>
                                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63364.63968001724!2d80.65391725905685!3d6.975073712844701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae382413f5cf14b%3A0xa55560811c29af87!2sGreat%20Western%20Mountain!5e0!3m2!1sen!2slk!4v1701335491703!5m2!1sen!2slk" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
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
                                            <h3 style="color: #e20059;"> Nuwara Eliya District General Hospital   </h3>
                                            <a href="tel:+94 81 223 3337">0522 222 261</a>
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
                                            <h3 style="color: #ffaa20;">Nuwara Eliya Police Station</h3>
                                            <a href="tel:+94 81 222 2222"> 0522 222 222</a>
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