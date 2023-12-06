<?php
include "config.php";

// Check if the form is submitted using the POST method and the correct secret word is entered
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["secret_word"]) && $_POST["secret_word"] === "travelbug2022") {
    // Retrieve form data
    $email = $_POST["email"];
    $new_username = $_POST["new_username"];
    $position = $_POST["position"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    // Check if the email already exists
    $check_email_stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
    $check_email_stmt->bind_param("s", $email);
    $check_email_stmt->execute();
    $check_email_stmt->bind_result($email_count);
    $check_email_stmt->fetch();
    $check_email_stmt->close();

    if ($email_count > 0) {
        $error_message = "Email address is already in use. Please choose a different one.";
    } elseif ($new_password !== $confirm_password) {
        $error_message = "Passwords do not match.";
    } else {
        // Hash the new password using bcrypt algorithm
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Prepare SQL statement for inserting user data into the database
        $insert_stmt = $conn->prepare("INSERT INTO users (email, username, position, password) VALUES (?, ?, ?, ?)");
        $insert_stmt->bind_param("ssss", $email, $new_username, $position, $hashed_password);

        // Execute the prepared statement
        if ($insert_stmt->execute()) {
            // Redirect to the login page after successful registration
            header("Location: login.php");
            exit();
        } else {
            // Display an error message if the execution fails
            echo "Error: " . $insert_stmt->error;
        }

        // Close the prepared statement
        $insert_stmt->close();
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error_message = "Incorrect secret word. Registration requires a valid secret word.";
}

// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register-style.css">
    <link rel="icon" href="images/icon.png" type="image/x-icon" />
    <script src="js/Pass_validation.js"></script>
    <title>Register</title>
</head>

<body>

    <div class="Headline">
        <h1>Welcome to Admin Panel <br> TravelBug</h1>
    </div>

    <div class="container">
        <div class="form-container">
            <form action="register.php" method="post" onsubmit="return validatePassword();">
                <h2>Register</h2>
                <div id="error-popup" class="error-popup">
                    <span id="error-message"></span>
                    <div class="close-btn" onclick="closeErrorPopup()">OK</div>
                </div>
                <label for="email">Email Address:</label>
                <input type="email" name="email" required>
                <label for="new_username">Username:</label>
                <input type="text" name="new_username" required>
                <label for="position">Working Position:</label>
                <input type="text" name="position" required>
                <label for="new_password">Password:</label>
                <input type="password" name="new_password" required>
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" name="confirm_password" required>
                <label for="secret_word">Secret Word:</label>
                <input type="password" name="secret_word" required>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>

    <div class="addAccount">If You Have an Account ?<a href="login.php"> Login Here</a></div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Display error message if it exists
            var errorMessage = <?php echo isset($error_message) ? json_encode($error_message) : "null"; ?>;
            if (errorMessage) {
                document.getElementById("error-message").innerText = errorMessage;
                document.getElementById("error-popup").style.display = "block";
            }
        });

        function closeErrorPopup() {
            document.getElementById("error-popup").style.display = "none";
        }
    </script>

</body>

</html>