<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="places.css">
    <link rel="icon" href="images/icon.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Welcome to Hiking Places!</title>

    <script src="js/date.js"></script>
    <script src="js/upload_image.js"></script>
</head>

<body>

    <!--------------------------------------------------------->
    <!------------------------Heder---------------------------->
    <div class="header">
        <div id="dateDisplay"></div>
        <div id="siteName">TravelBug</div>
        <div class="user-info">
            <span class="username"></span>
            <span class="user-position"></span>
        </div>
        <?php
        // Include the configuration file
        include "config.php";

        // SQL query to fetch user data
        $sql = "SELECT username, position FROM users";
        $result = $conn->query($sql);

        // Check if any rows are returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                // Display user information in the specified container
                echo '<div class="user-info">';
                echo '<span class="username">' . htmlspecialchars($row["username"]) . '</span>';
                echo '<span class="user-position">' . htmlspecialchars($row["position"]) . '</span>';
                echo '</div>';
            }
        } else {
            echo "No users found.";
        }

        // Close connection
        $conn->close();
        ?>
    </div>
    <!------------------------Heder---------------------------->
    <!--------------------------------------------------------->

    <div class="container">

        <!--------------------------------------------------------->
        <!---------------------Side Category----------------------->
        <div class="options">
            <h2><a href="dashboard.php">Dashboard</a></h2>

            <div class="option">
                <a href="travel_destination_edit.php">
                    <img src="images/Travel_Destination.png" alt="Option 1 Icon">Travel Destinations
                </a>
            </div>

            <div class="option">
                <a href="building.php">
                    <img src="images/hiking.png" alt="Option 1 Icon">Hiking Places
                </a>
            </div>

            <div class="option"><a href="camping_grounds_edit.php">
                    <img src="images/camping.png" alt="Option 1 Icon">Camping Grounds
                </a>
            </div>
        </div>
        <!---------------------Side Category----------------------->
        <!--------------------------------------------------------->




        <!--------------------------------------------------------->
        <!---------------------main Category----------------------->
        <!--------------------------------------------------------->
        <div class="display-container">

            <div class="Header-container">
                <div class="header-left">
                    <h2>Hiking Places</h2>
                </div>
                <div class="header-right">
                    <button id="openPopup">Upload Image</button>

                    <div id="popup" class="popup">
                        <div class="popup-content">
                            <div class="popup-header"></div>
                            <span class="close" id="closePopup">&times;</span>

                            <form id="addItemForm" method="post" action="hiking_places_upload.php" enctype="multipart/form-data">

                                <label for="imageUpload">Upload Image(s):</label>
                                <input type="file" id="imageUpload" name="imageUpload[]" multiple accept="image/*">

                                <label for="provinceSelect">Select a Province:</label>
                                <select id="provinceSelect" name="province">
                                    <option value="" disabled selected>Select a Province</option>
                                    <option value="central">Central</option>
                                    <option value="eastern">Eastern</option>
                                    <option value="northern">Northern</option>
                                    <option value="north-central">North Central</option>
                                    <option value="north-western">North Western</option>
                                    <option value="sabaragamuwa">Sabaragamuwa</option>
                                    <option value="southern">Southern</option>
                                    <option value="uva">Uva</option>
                                    <option value="western">Western</option>
                                </select>

                                <label for="placeName">Place Name:</label>
                                <input type="text" class="textDropdown" id="placeName" name="placeName" required>

                                <button type="submit" onclick="return mess();">Upload Image</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <!---------------------------------------------------------------------------------------------------------->

            <div class="function-container">

                <div class="photoContainer">

                    <div class="item">
                        <?php
                        // Connect to your database (replace these values with your database credentials)
                        $mysqli = new mysqli("localhost", "root", "", "travelbug");

                        // Check connection
                        if ($mysqli->connect_error) {
                            die("Connection failed: " . $mysqli->connect_error);
                        }

                        // Retrieve images, province, and place name for a specific place name (replace 'your_place_name' with the actual place name)
                        $placeName = 'Hanthana Mountain';
                        $selectQuery = "SELECT photo_data, province, place_name FROM hiking_places WHERE place_name = ?";
                        $stmt = $mysqli->prepare($selectQuery);
                        $stmt->bind_param("s", $placeName);
                        $stmt->execute();
                        $stmt->bind_result($photoData, $fetchedProvince, $fetchedPlaceName);

                        // Fetch all images into an array
                        $images = [];
                        while ($stmt->fetch()) {
                            $images[] = 'data:image/jpeg;base64,' . $photoData;
                        }

                        // Display province and place name
                        echo '<h2>Province: ' . $fetchedProvince . '</h2>';
                        echo '<h3>Place Name: ' . $fetchedPlaceName . '</h3>';

                        // Display all images in one row
                        echo '<div style="display: flex;">';
                        foreach ($images as $image) {
                            echo '<img src="' . $image . '" style="max-width: 160px; margin: 6px; max-hight: 100px;">';
                        }
                        echo '</div>';

                        // Close the database connection
                        $stmt->close();
                        $mysqli->close();

                        ?>
                    </div>

                    <div class="item">
                        <?php
                        // Connect to your database (replace these values with your database credentials)
                        $mysqli = new mysqli("localhost", "root", "", "travelbug");

                        // Check connection
                        if ($mysqli->connect_error) {
                            die("Connection failed: " . $mysqli->connect_error);
                        }

                        // Retrieve images, province, and place name for a specific place name (replace 'your_place_name' with the actual place name)
                        $placeName = 'Meemure';
                        $selectQuery = "SELECT photo_data, province, place_name FROM hiking_places WHERE place_name = ?";
                        $stmt = $mysqli->prepare($selectQuery);
                        $stmt->bind_param("s", $placeName);
                        $stmt->execute();
                        $stmt->bind_result($photoData, $fetchedProvince, $fetchedPlaceName);

                        // Fetch all images into an array
                        $images = [];
                        while ($stmt->fetch()) {
                            $images[] = 'data:image/jpeg;base64,' . $photoData;
                        }

                        // Display province and place name
                        echo '<h2>Province: ' . $fetchedProvince . '</h2>';
                        echo '<h3>Place Name: ' . $fetchedPlaceName . '</h3>';

                        // Display all images in one row
                        echo '<div style="display: flex;">';
                        foreach ($images as $image) {
                            echo '<img src="' . $image . '" style="max-width: 160px; margin: 6px; max-hight:100px;">';
                        }
                        echo '</div>';

                        // Close the database connection
                        $stmt->close();
                        $mysqli->close();

                        ?>
                    </div>


                    <div class="item">
                        <?php
                        // Connect to your database (replace these values with your database credentials)
                        $mysqli = new mysqli("localhost", "root", "", "travelbug");

                        // Check connection
                        if ($mysqli->connect_error) {
                            die("Connection failed: " . $mysqli->connect_error);
                        }

                        // Retrieve images, province, and place name for a specific place name (replace 'your_place_name' with the actual place name)
                        $placeName = 'Knuckles';
                        $selectQuery = "SELECT photo_data, province, place_name FROM hiking_places WHERE place_name = ?";
                        $stmt = $mysqli->prepare($selectQuery);
                        $stmt->bind_param("s", $placeName);
                        $stmt->execute();
                        $stmt->bind_result($photoData, $fetchedProvince, $fetchedPlaceName);

                        // Fetch all images into an array
                        $images = [];
                        while ($stmt->fetch()) {
                            $images[] = 'data:image/jpeg;base64,' . $photoData;
                        }

                        // Display province and place name
                        echo '<h2>Province: ' . $fetchedProvince . '</h2>';
                        echo '<h3>Place Name: ' . $fetchedPlaceName . '</h3>';

                        // Display all images in one row
                        echo '<div style="display: flex;">';
                        foreach ($images as $image) {
                            echo '<img src="' . $image . '" style="max-width: 160px; margin: 6px; max-hight: 100px;">';
                        }
                        echo '</div>';

                        // Close the database connection
                        $stmt->close();
                        $mysqli->close();

                        ?>
                    </div>


                    <div class="item">
                        <?php
                        // Connect to your database (replace these values with your database credentials)
                        $mysqli = new mysqli("localhost", "root", "", "travelbug");

                        // Check connection
                        if ($mysqli->connect_error) {
                            die("Connection failed: " . $mysqli->connect_error);
                        }

                        // Retrieve images, province, and place name for a specific place name (replace 'your_place_name' with the actual place name)
                        $placeName = 'Pidurangala';
                        $selectQuery = "SELECT photo_data, province, place_name FROM hiking_places WHERE place_name = ?";
                        $stmt = $mysqli->prepare($selectQuery);
                        $stmt->bind_param("s", $placeName);
                        $stmt->execute();
                        $stmt->bind_result($photoData, $fetchedProvince, $fetchedPlaceName);

                        // Fetch all images into an array
                        $images = [];
                        while ($stmt->fetch()) {
                            $images[] = 'data:image/jpeg;base64,' . $photoData;
                        }

                        // Display province and place name
                        echo '<h2>Province: ' . $fetchedProvince . '</h2>';
                        echo '<h3>Place Name: ' . $fetchedPlaceName . '</h3>';

                        // Display all images in one row
                        echo '<div style="display: flex;">';
                        foreach ($images as $image) {
                            echo '<img src="' . $image . '" style="max-width: 160px; margin: 6px; max-hight:100px;">';
                        }
                        echo '</div>';

                        // Close the database connection
                        $stmt->close();
                        $mysqli->close();

                        ?>
                    </div>



                    <div class="item">
                        <?php
                        // Connect to your database (replace these values with your database credentials)
                        $mysqli = new mysqli("localhost", "root", "", "travelbug");

                        // Check connection
                        if ($mysqli->connect_error) {
                            die("Connection failed: " . $mysqli->connect_error);
                        }

                        // Retrieve images, province, and place name for a specific place name (replace 'your_place_name' with the actual place name)
                        $placeName = 'Arangala Mountain Peak';
                        $selectQuery = "SELECT photo_data, province, place_name FROM hiking_places WHERE place_name = ?";
                        $stmt = $mysqli->prepare($selectQuery);
                        $stmt->bind_param("s", $placeName);
                        $stmt->execute();
                        $stmt->bind_result($photoData, $fetchedProvince, $fetchedPlaceName);

                        // Fetch all images into an array
                        $images = [];
                        while ($stmt->fetch()) {
                            $images[] = 'data:image/jpeg;base64,' . $photoData;
                        }

                        // Display province and place name
                        echo '<h2>Province: ' . $fetchedProvince . '</h2>';
                        echo '<h3>Place Name: ' . $fetchedPlaceName . '</h3>';

                        // Display all images in one row
                        echo '<div style="display: flex;">';
                        foreach ($images as $image) {
                            echo '<img src="' . $image . '" style="max-width: 160px; margin: 6px; max-hight:100px;">';
                        }
                        echo '</div>';

                        // Close the database connection
                        $stmt->close();
                        $mysqli->close();

                        ?>
                    </div>


                    <div class="item">
                        <?php
                        // Connect to your database (replace these values with your database credentials)
                        $mysqli = new mysqli("localhost", "root", "", "travelbug");

                        // Check connection
                        if ($mysqli->connect_error) {
                            die("Connection failed: " . $mysqli->connect_error);
                        }

                        // Retrieve images, province, and place name for a specific place name (replace 'your_place_name' with the actual place name)
                        $placeName = 'Riverston';
                        $selectQuery = "SELECT photo_data, province, place_name FROM hiking_places WHERE place_name = ?";
                        $stmt = $mysqli->prepare($selectQuery);
                        $stmt->bind_param("s", $placeName);
                        $stmt->execute();
                        $stmt->bind_result($photoData, $fetchedProvince, $fetchedPlaceName);

                        // Fetch all images into an array
                        $images = [];
                        while ($stmt->fetch()) {
                            $images[] = 'data:image/jpeg;base64,' . $photoData;
                        }

                        // Display province and place name
                        echo '<h2>Province: ' . $fetchedProvince . '</h2>';
                        echo '<h3>Place Name: ' . $fetchedPlaceName . '</h3>';

                        // Display all images in one row
                        echo '<div style="display: flex;">';
                        foreach ($images as $image) {
                            echo '<img src="' . $image . '" style="max-width: 160px; margin: 6px; max-hight:50px;">';
                        }
                        echo '</div>';

                        // Close the database connection
                        $stmt->close();
                        $mysqli->close();

                        ?>
                    </div>




                    <div class="item">
                        <?php
                        // Connect to your database (replace these values with your database credentials)
                        $mysqli = new mysqli("localhost", "root", "", "travelbug");

                        // Check connection
                        if ($mysqli->connect_error) {
                            die("Connection failed: " . $mysqli->connect_error);
                        }

                        // Retrieve images, province, and place name for a specific place name (replace 'your_place_name' with the actual place name)
                        $placeName = 'Hunnasgiriya Waterfall';
                        $selectQuery = "SELECT photo_data, province, place_name FROM hiking_places WHERE place_name = ?";
                        $stmt = $mysqli->prepare($selectQuery);
                        $stmt->bind_param("s", $placeName);
                        $stmt->execute();
                        $stmt->bind_result($photoData, $fetchedProvince, $fetchedPlaceName);

                        // Fetch all images into an array
                        $images = [];
                        while ($stmt->fetch()) {
                            $images[] = 'data:image/jpeg;base64,' . $photoData;
                        }

                        // Display province and place name
                        echo '<h2>Province: ' . $fetchedProvince . '</h2>';
                        echo '<h3>Place Name: ' . $fetchedPlaceName . '</h3>';

                        // Display all images in one row
                        echo '<div style="display: flex;">';
                        foreach ($images as $image) {
                            echo '<img src="' . $image . '" style="max-width: 160px; margin: 6px; max-hight:50px;">';
                        }
                        echo '</div>';

                        // Close the database connection
                        $stmt->close();
                        $mysqli->close();

                        ?>
                    </div>



                    <div class="item">
                        <?php
                        // Connect to your database (replace these values with your database credentials)
                        $mysqli = new mysqli("localhost", "root", "", "travelbug");

                        // Check connection
                        if ($mysqli->connect_error) {
                            die("Connection failed: " . $mysqli->connect_error);
                        }

                        // Retrieve images, province, and place name for a specific place name (replace 'your_place_name' with the actual place name)
                        $placeName = 'Conical Hill';
                        $selectQuery = "SELECT photo_data, province, place_name FROM hiking_places WHERE place_name = ?";
                        $stmt = $mysqli->prepare($selectQuery);
                        $stmt->bind_param("s", $placeName);
                        $stmt->execute();
                        $stmt->bind_result($photoData, $fetchedProvince, $fetchedPlaceName);

                        // Fetch all images into an array
                        $images = [];
                        while ($stmt->fetch()) {
                            $images[] = 'data:image/jpeg;base64,' . $photoData;
                        }

                        // Display province and place name
                        echo '<h2>Province: ' . $fetchedProvince . '</h2>';
                        echo '<h3>Place Name: ' . $fetchedPlaceName . '</h3>';

                        // Display all images in one row
                        echo '<div style="display: flex;">';
                        foreach ($images as $image) {
                            echo '<img src="' . $image . '" style="max-width: 160px; margin: 6px; max-hight:50px;">';
                        }
                        echo '</div>';

                        // Close the database connection
                        $stmt->close();
                        $mysqli->close();

                        ?>
                    </div>


                    <div class="item">
                        <?php
                        // Connect to your database (replace these values with your database credentials)
                        $mysqli = new mysqli("localhost", "root", "", "travelbug");

                        // Check connection
                        if ($mysqli->connect_error) {
                            die("Connection failed: " . $mysqli->connect_error);
                        }

                        // Retrieve images, province, and place name for a specific place name (replace 'your_place_name' with the actual place name)
                        $placeName = 'Piduruthalagala Mountain';
                        $selectQuery = "SELECT photo_data, province, place_name FROM hiking_places WHERE place_name = ?";
                        $stmt = $mysqli->prepare($selectQuery);
                        $stmt->bind_param("s", $placeName);
                        $stmt->execute();
                        $stmt->bind_result($photoData, $fetchedProvince, $fetchedPlaceName);

                        // Fetch all images into an array
                        $images = [];
                        while ($stmt->fetch()) {
                            $images[] = 'data:image/jpeg;base64,' . $photoData;
                        }

                        // Display province and place name
                        echo '<h2>Province: ' . $fetchedProvince . '</h2>';
                        echo '<h3>Place Name: ' . $fetchedPlaceName . '</h3>';

                        // Display all images in one row
                        echo '<div style="display: flex;">';
                        foreach ($images as $image) {
                            echo '<img src="' . $image . '" style="max-width: 160px; margin: 6px; max-hight:50px;">';
                        }
                        echo '</div>';

                        // Close the database connection
                        $stmt->close();
                        $mysqli->close();

                        ?>
                    </div>


                    <div class="item">
                        <?php
                        // Connect to your database (replace these values with your database credentials)
                        $mysqli = new mysqli("localhost", "root", "", "travelbug");

                        // Check connection
                        if ($mysqli->connect_error) {
                            die("Connection failed: " . $mysqli->connect_error);
                        }

                        // Retrieve images, province, and place name for a specific place name (replace 'your_place_name' with the actual place name)
                        $placeName = 'Lovers Leap Waterfall';
                        $selectQuery = "SELECT photo_data, province, place_name FROM hiking_places WHERE place_name = ?";
                        $stmt = $mysqli->prepare($selectQuery);
                        $stmt->bind_param("s", $placeName);
                        $stmt->execute();
                        $stmt->bind_result($photoData, $fetchedProvince, $fetchedPlaceName);

                        // Fetch all images into an array
                        $images = [];
                        while ($stmt->fetch()) {
                            $images[] = 'data:image/jpeg;base64,' . $photoData;
                        }

                        // Display province and place name
                        echo '<h2>Province: ' . $fetchedProvince . '</h2>';
                        echo '<h3>Place Name: ' . $fetchedPlaceName . '</h3>';

                        // Display all images in one row
                        echo '<div style="display: flex;">';
                        foreach ($images as $image) {
                            echo '<img src="' . $image . '" style="max-width: 160px; margin: 6px; max-hight:50px;">';
                        }
                        echo '</div>';

                        // Close the database connection
                        $stmt->close();
                        $mysqli->close();

                        ?>
                    </div>
                    <!-- Repeat more items as needed -->
                </div>
            </div>


</body>

</html>