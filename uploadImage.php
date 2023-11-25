<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travelbug";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $imageData = file_get_contents($_FILES['image']['tmp_name']);
    $imageName = mysqli_real_escape_string($conn, $_FILES['image']['name']);

    $stmt = $conn->prepare("INSERT INTO images (image_data, image_name) VALUES (?, ?)");
    $stmt->bind_param("ss", $imageData, $imageName);

    try {
        // Attempt to execute the statement
        $stmt->execute();
        echo "Image uploaded successfully.";
    } catch (mysqli_sql_exception $e) {
        // Check if the error is due to MySQL server gone away
        if ($e->getCode() == 2006 || $e->getCode() == 2013) {
            // Reconnect and retry the operation
            $conn->close();
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Reconnection failed: " . $conn->connect_error);
            }

            // Prepare and bind the statement again
            $stmt = $conn->prepare("INSERT INTO images (image_data, image_name) VALUES (?, ?)");
            $stmt->bind_param("ss", $imageData, $imageName);

            // Retry the operation
            try {
                $stmt->execute();
                echo "Image uploaded successfully after reconnecting.";
            } catch (mysqli_sql_exception $e) {
                echo "Error uploading image after reconnecting: " . $e->getMessage();
            }
        } else {
            // Handle other SQL exceptions
            echo "Error uploading image: " . $e->getMessage();
        }
    }

    $stmt->close();
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Form</title>
</head>

<body>

    <h2>Upload Images</h2>

    <form action="uploadImage.php" method="post" enctype="multipart/form-data">
        <label for="image">Select Image:</label>
        <input type="file" name="image" id="image" accept="image/*" required>
        <br>
        <input type="submit" name="submit" value="Upload Image">
    </form>

    <!-- Display uploaded images -->
    <?php
    // You can fetch and display uploaded images here
    ?>

</body>

</html>