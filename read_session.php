<?php
session_start();
require "inc/functions.inc.php";
session_views();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Lab 1 - Read Session</title>
</head>

<body>
    <div class="container">
        <div class="wrapper bg-primary mt-5 rounded shadow">
            <div class="session-details p-5">
                <h1>Session Details</h1>
                <hr>

                <?php
                if (!isset($_SESSION['browser'])) {
                    $_SESSION['browser'] = "";
                }
                if (!isset($_SESSION['role'])) {
                    $_SESSION['role'] = "";
                }
                echo '<p>Your session ID is: <br><span class="info">' . session_id() . '</span></p>';
                echo '<p>Your current browser version is: <br><span class="info">' . $_SESSION['browser'] . '</span>';
                echo '<p>Your current login role is: <br><span class="info">' . $_SESSION['role'] . '</span>';
                echo '<p>The current page views is: <br><span class="info">' . $_SESSION['views'] . '</span></p>';
                ?>
            </div>
            <?php
            include "inc/footer.inc.php"
            ?>
        </div>
    </div>
</body>

</html>