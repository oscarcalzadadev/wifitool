<?php
    session_start();

    $host = "localhost";
    $username = "foots";
    $password = "FS1993x)";
    $DBname = "FakeDB";

    $DBconnect = new mysqli($host, $username, $password, $DBname);

    if ($DBconnect->connect_error) {
        die("Connection Failed" . $DBconnect->connect_error);
    }

    $locations = $_POST['locations'];
    $wifis = $_POST['wifis'];
    $passwords = $_POST['passwords'];
    $ratings = $_POST['ratings'];
    $notes = $_POST['notes'];
    $lastUsed = $_POST['lastUsed'];

    $sql = "INSERT INTO wifi(locations, wifis, passwords, ratings, notes, lastUsed)
            VALUES('$locations', '$wifis', '$passwords', '$ratings', '$notes', '$lastUsed')";

    $results = mysqli_query($DBconnect, $sql);

    if (!$results) {
        die('Query Failed');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="display: grid; place-items: center;">
    <h1 style="text-align: center;">Good Job Crew!</h1>
    <a href="form.html">Return to HomePage</a>
</body>
</html>