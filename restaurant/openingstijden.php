<?php
session_start();

$dsn = 'mysql:dbname=restaurant;host=127.0.0.1';

$user = 'root';
$password = '';

try {
    $connectie = new PDO($dsn, $user, $password);
    echo "Verbinding wel gelukt";
} catch (PDOException $e) {
    echo "Verbinding niet gelukt: " . $e;
}

$stmt = $connectie->prepare("UPDATE menu SET titel = :titel WHERE id = :id");
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,600&family=Roboto+Condensed&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav>
        <div class="nav-container">
            <div class="logo-bg">
                <img class="logo01" src="images/pizza-chef.png">
            </div>
            <div class="name-bg">
                <h1>La Madrozo</h1>
            </div>
            <div class="mid-space">

            </div>

            <div class="log-in-bg">
                <a class="log-in-button" onclick="document.getElementById('id01').style.display='block'">Log-In</a>
            </div>
        </div>
        <div class="red-under-bar">
            <div class="menu-bg">
                <button class="menu-button" href="index.html">Meer ⬇</button>
                <div class="dropdown-content">
                    <a class="dropdown-links" href="contact.php">Contact</a>
                    <a class="dropdown-links" href="openingstijden.php">Openingstijden & Info</a>
                    <a class="dropdown-links" href="voorwaarden.php">Algemene Voorwaarden</a>
                </div>
            </div>
            <a class="back-menu-button" href="index.php">Menu</a>

            <div class="space-red-under-bar">

            </div>
    </nav>
    <div class="openingstijden-container">
        <table id="customers">
            <tr>
                <th>Dag</th>
                <th>Bezorgtijd</th>
                <th>Restaurant</th>
            </tr>
            <tr>
                <td>Maandag</td>
                <td>16:00 - 22:00</td>
                <td>15:00 - 23:00</td>
            </tr>
            <tr>
                <td>Dinsdag</td>
                <td>15:00 - 22:00</td>
                <td>14:00 - 00:00</td>
            </tr>
            <tr>
                <td>Woensdag</td>
                <td>15:00 - 22:00</td>
                <td>14:00 - 00:00</td>
            </tr>
            <tr>
                <td>Donderdag</td>
                <td>15:00 - 22:00</td>
                <td>14:00 - 00:00</td>
            </tr>
            <tr>
                <td>Vrijdag</td>
                <td>15:00 - 22:00</td>
                <td>14:00 - 00:00</td>
            </tr>
            <tr>
                <td>Zaterdag</td>
                <td>15:00 - 22:00</td>
                <td>14:00 - 00:00</td>
            </tr>
            <tr>
                <td>Zondag</td>
                <td>15:00 - 22:00</td>
                <td>14:00 - 00:00</td>
            </tr>
        </table>
    </div>