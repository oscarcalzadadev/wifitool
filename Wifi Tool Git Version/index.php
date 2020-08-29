<?php
    session_start();
    
    $host = "localhost";
    $username = "foots";
    $password = "FS1993x)";
    $DBname = "FakeDB";

    $DBconnect = new mysqli($host, $username, $password, $DBname);

    if ($DBconnect->connect_error) {
        die('Connection Failed' . $DBconnect->connect_error);
    }

    $SQL_WIFI = "SELECT * FROM wifi";
    $result = $DBconnect->query($SQL_WIFI);

?>
<!DOCTYPE html>
<html>
<head>
<title>Wifi Tool</title>
<meta name="robots" content="noindex">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Domine&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="wifi-tool.css">
</head>
<body>
    <h1>Wifi Tool</h1>
    <table>
        <tr>
          <th>LocationName</th>
          <th>WifiName</th>
          <th>Password</th>
          <th>Rating</th>
          <th>Notes</th>
          <th>LastUsed</th>
        </tr>
        <?php
           while($row = $result->fetch_assoc()){
                echo "<tr>
                    <td>${row['locations']}</td>
                    <td>${row['wifis']}</td>
                    <td>${row['passwords']}</td>
                    <td>${row['ratings']}</td>
                    <td>${row['notes']}</td>
                    <td>${row['lastUsed']}</td>
                    </tr>";
            }
        ?>
    </table>
</body>
</html>