<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle other form fields
    $province = $_POST["province"];
    $placeName = $_POST["placeName"];

    // Connect to your database (replace these values with your database credentials)
    $mysqli = new mysqli("localhost", "root", "", "travelbug");

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Handle file uploads
    $targetDirectory = "uploads/"; // Specify your target directory for uploads
    $uploadedFiles = $_FILES['imageUpload'];

    foreach ($uploadedFiles['name'] as $key => $name) {
        $targetFile = $targetDirectory . basename($name);

        if (move_uploaded_file($uploadedFiles['tmp_name'][$key], $targetFile)) {
            // File upload success, insert data into the database
            $photoData = file_get_contents($targetFile);
            $photoData = base64_encode($photoData);

            // Insert data into the database
            $insertQuery = "INSERT INTO camping_grounds (photo_id, photo_data, province, place_name) VALUES (NULL, ?, ?, ?)";
            $stmt = $mysqli->prepare($insertQuery);
            $stmt->bind_param("sss", $photoData, $province, $placeName);
            $stmt->execute();
            $stmt->close();

            echo "File $name has been uploaded and data inserted into the database successfully.<br>";

            unlink($targetFile);
        } else {
            echo "Error uploading $name.<br>";
        }
    }

    // Close the database connection
    $mysqli->close();
} else {
    echo "Invalid request.";
}
