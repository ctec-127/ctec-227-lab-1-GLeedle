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
    <title>Lab 1 - Read Session</title>
</head>

<body>
    <?php
    session_destroy();
    ?>
    <div class="container">
        <div class="wrapper bg-primary mt-5 rounded shadow">
            <div class="session-details p-5">
                <h1>Session Destroyed</h1>
                <hr>
            </div>
            <?php
            include "inc/footer.inc.php";
            ?>
        </div>
    </div>
</body>

</html>