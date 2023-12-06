<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="places.css">
    <link rel="icon" href="images/icon.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Welcom to Travel Destination</title>

    <script src="js/date.js"></script>
    <script src="js/upload_image.js"></script>
</head>

<body>

    <!--------------------------------------------------------->
    <!------------------------Heder---------------------------->
    <div class="header">
        <div id="dateDisplay"></div>
        <div id="siteName">Travel Bug</div>
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
            <h2>Dashboard</h2>

            <div class="option">
                <a href="">
                    <img src="images/Travel_Destination.png" alt="Option 1 Icon">Travel Destination
                </a>
            </div>

            <div class="option">
                <a href="hiking_places_edit.php">
                    <img src="images/hiking.png" alt="Option 1 Icon">Hiking Places
                </a>
            </div>

            <div class="option"><a href="camping_grounds_edit.php">
                    <img src="images/camping.png" alt="Option 1 Icon">Camping Grounds
                </a>
            </div>
            <!-- Add more options here -->
        </div>
        <!---------------------Side Category----------------------->
        <!--------------------------------------------------------->




        <!--------------------------------------------------------->
        <!---------------------main Category----------------------->
        <!--------------------------------------------------------->
        <div class="display-container">

            <div class="Header-container">
                <div class="header-left">
                    <h2>Travel Destination</h2>
                </div>
                <div class="header-right">
                    <button id="openPopup">Upload Image</button>

                    <div id="popup" class="popup">
                        <div class="popup-content">
                            <div class="popup-header"></div>
                            <span class="close" id="closePopup">&times;</span>

                            <form id="addItemForm" method="post" action="travel_dest_upload.php" enctype="multipart/form-data">

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
                                    <!-- Add more options as needed -->
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
                        $placeName = 'Temple of The Tooth Relic';
                        $selectQuery = "SELECT photo_data, province, place_name FROM travel_destination WHERE place_name = ?";
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
                            echo '<img src="' . $image . '" style="max-width: 160px; margin: 6px; max: hight 100px;">';
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
                        $placeName = 'Horton Plains National Park';
                        $selectQuery = "SELECT photo_data, province, place_name FROM travel_destination WHERE place_name = ?";
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
                            echo '<img src="' . $image . '" style="max-width: 160px; margin: 6px; max: hight 100px;">';
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
                        $placeName = 'Royal Botanic Garden';
                        $selectQuery = "SELECT photo_data, province, place_name FROM travel_destination WHERE place_name = ?";
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
                            echo '<img src="' . $image . '" style="max-width: 160px; margin: 6px; max: hight 100px;">';
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
                        $placeName = 'Gregory Lake';
                        $selectQuery = "SELECT photo_data, province, place_name FROM travel_destination WHERE place_name = ?";
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
                            echo '<img src="' . $image . '" style="max-width: 160px; margin: 6px; max: hight 100px;">';
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
                        $placeName = 'Bahirawakanda Temple';
                        $selectQuery = "SELECT photo_data, province, place_name FROM travel_destination WHERE place_name = ?";
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
                            echo '<img src="' . $image . '" style="max-width: 160px; margin: 6px; max: hight 100px;">';
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
                        $placeName = 'Sigiriya Rock Fortress';
                        $selectQuery = "SELECT photo_data, province, place_name FROM travel_destination WHERE place_name = ?";
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
                            echo '<img src="' . $image . '" style="max-width: 160px; margin: 6px; max: hight 100px;">';
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
                        $placeName = 'Ambuluwawa Tower';
                        $selectQuery = "SELECT photo_data, province, place_name FROM travel_destination WHERE place_name = ?";
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
                            echo '<img src="' . $image . '" style="max-width: 160px; margin: 6px; max: hight 100px;">';
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
                        $placeName = 'Hakgala Botanical Garden';
                        $selectQuery = "SELECT photo_data, province, place_name FROM travel_destination WHERE place_name = ?";
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
                            echo '<img src="' . $image . '" style="max-width: 160px; margin: 6px; max: hight 100px;">';
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
                        $placeName = 'Aluvihare Rock Temple';
                        $selectQuery = "SELECT photo_data, province, place_name FROM travel_destination WHERE place_name = ?";
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
                            echo '<img src="' . $image . '" style="max-width: 160px; margin: 6px; max: hight 100px;">';
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
                        $placeName = 'Dambulla Cave Temple';
                        $selectQuery = "SELECT photo_data, province, place_name FROM travel_destination WHERE place_name = ?";
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
                            echo '<img src="' . $image . '" style="max-width: 160px; margin: 6px; max: hight 100px;">';
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