<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Lab 1 - Garth Leedle Starting Session</title>
</head>

<body>
    <div class="container">
        <?php
        if (!isset($_SESSION['views'])) {
            $_SESSION['views'] = 0;
        }
        if (!isset($_SESSION['browser'])) {
            $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
        }
        if (!isset($_SESSION['role'])) {
            $_SESSION['role'] = 'admin';
        }
        ?>

        <div class="wrapper bg-primary mt-5 rounded shadow">
            <div class="session-details p-5">
                <h1>Session Details</h1>
                <hr>
                <?php

                echo '<p>Your session ID is: <br><span class="info">' . session_id() . '</span></p>';
                echo '<p>Your current browser version is: <br><span class="info">' . $_SESSION['browser'] . '</span>';
                echo '<p>Your current login role is: <br><span class="info">' . $_SESSION['role'] . '</span>';


                $_SESSION['views'] += 1;
                echo '<p>The current page views is: <br><span class="info">' . $_SESSION['views'] . '</span></p>';


                ?>

            </div>
            <footer>
                <p>Ver 1.0 - &copy; Garth Leedle</p>
            </footer>
        </div>
    </div>

</body>

</html>