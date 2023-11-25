<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Image Display</title>
        <style>
        .place {
            width: 300px;
            height: 200px;
            background-size: cover;
            background-position: center;
            margin: 10px;
        }
        </style>
    </head>

</head>

<body>

    <h2>Image Gallery</h2>

    <div class="image-container">
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

    // Assuming you want to display the image with ID = 1
    $specificImageID = 2;

    $sql = "SELECT id, image_data, image_name FROM images WHERE id = $specificImageID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imageData = base64_encode($row['image_data']);
        $imageName = $row['image_name'];

        echo '<div class="place" style="background-image: url(data:image/jpeg;base64,' . $imageData . ')">
                  <p>' . $imageName . '</p>
              </div>';
    } else {
        echo "Image not found.";
    }

    $conn->close();
    ?>
    </div>

</body>

</html>