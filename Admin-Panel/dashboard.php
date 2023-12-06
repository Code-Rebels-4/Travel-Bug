<?php
// Include the configuration file
include "config.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard-style.css">
    <link rel="icon" href="images/icon.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Welcom to Admin Panel</title>

    <script src="js/date.js"></script>
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
                <a href="travel_destination_edit.php">
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

            <div class="option"><a href="../index.php">
                    <img src="images/camping.png" alt="Option 1 Icon">Logout
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

            <div class="new_bottom_container">

                <!-- <div class="bottom_container_text">
                    <h2>Travel Bug</h2>
                </div> -->

                <div class="new_right_column">

                    <div class="new_column_item">
                        <div class="left">
                            <div class="icon">
                                <img src="images/web-traffic.jpg" alt="Icon">
                            </div>
                        </div>
                        <div class="right">
                            <div class="text"> Website Reach</div>
                            <div class="price"><?php echo number_format(25000); ?></div>
                        </div>
                        <!-- Content for the top-right div -->
                    </div>

                    <div class="new_column_item">
                        <div class="left">
                            <div class="icon">
                                <img src="images/accounts.png" alt="Icon">
                            </div>
                        </div>
                        <div class="right">
                            <div class="text"> Total Accounts </div>
                            <div class="price"><?php echo number_format(45000); ?></div>
                        </div>
                        <!-- Content for the top-right div -->
                    </div>

                    <div class="new_column_item">
                        <div class="left">
                            <div class="icon">
                                <img src="images/employee.png" alt="Icon">
                            </div>
                        </div>
                        <div class="right">
                            <div class="text"> Total Employee </div>
                            <div class="price"><?php echo number_format(10500); ?></div>
                        </div>
                        <!-- Content for the bottom-right div -->
                    </div>

                    <div class="new_column_item">
                        <div class="left">
                            <div class="icon">
                                <img src="images/notifications.png" alt="Icon">
                            </div>
                        </div>
                        <div class="right">
                            <div class="text"> Notifications </div>
                            <div class="price"><?php echo number_format(10200); ?></div>
                        </div>
                        <!-- Content for the bottom-right div -->
                    </div>
                </div>

            </div>


            <!-- --------------------------------------------------------- -->

            <div class="function-container">

                <div class="pricecontainer">


                    <!-- Repeat more items as needed -->

                </div>
            </div>


        </div>
    </div>

</body>

</html>