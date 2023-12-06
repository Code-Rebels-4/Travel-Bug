<?php
session_start();
include "config.php";

// Check if the form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Prepare a SQL query to select a user with the provided email
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    // Get the result of the query
    $result = $stmt->get_result();

    // Check if a user with the provided email exists
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Verify the provided password against the hashed password in the database
        if (password_verify($password, $row['password'])) {
            // Password is correct, set session and redirect to the dashboard
            $_SESSION['user_id'] = $row['id']; // Assuming you have an 'id' column in your 'users' table
            header("Location: dashboard.php");
            exit();
        } else {
            $error_message = "Invalid email or password";
        }
    } else {
        $error_message = "Invalid email or password";
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login-style.css">
    <link rel="icon" href="images/icon.png" type="image/x-icon" />
    <title>Login</title>
</head>

<body>
    <div class="Headline">
        <h1>Welcome to Admin Panel of <br> TravelBug</h1>
    </div>

    <div class="container">
        <div class="form-container">
            <form action="login.php" method="post">
                <h2>Login</h2>
                <div id="error-popup" class="error-popup">
                    <span id="error-message"></span>
                    <div class="close-btn" onclick="closeErrorPopup()">OK</div>
                </div>
                <label for="email">Email Address:</label>
                <input type="email" name="email" required>
                <label for="password">Password:</label>
                <input type="password" name="password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <div class="addAccount">If You Don't Have an Account ?<a href="register.php"> Register Here</a></div>

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