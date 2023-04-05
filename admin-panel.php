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


$resultSet = $connectie->query("SELECT * FROM menu");
00
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
        <div class="admin-nav">
            <div class="logo-bg">
                <img class="logo01" src="images/pizza-chef.png">
            </div>
            <div class="admin-name-bg">
                <h1>La Madrozo</h1>
            </div>
            <div class="admin-name">
                <h1>Admin Panel</h1>
            </div>
        </div>
        <div class="red-under-bar">
            <div class="menu-bg">
                <a class="menu-button" href="index.html">Meer ⬇</a>
                <div class="dropdown-content">
                    <a class="dropdown-links">Contact</a>
                    <a class="dropdown-links">Openingstijden & Info</a>
                    <a class="dropdown-links">Algemene Voorwaarden</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="wrapper">
        <div class="add-bg">

        </div>
        <div class="add-bg">
            <a class="admin-add-button">Voeg Toe +</a>
        </div>
    </div>

    <div class="admin-content-container">


        <div class="admin-content-container">


            <?php
            if (isset($_POST['zoekveld']) && $_POST['zoekveld'] != "") {
                $zoekveld = $_POST['zoekveld'];
                $resultSet = $connectie->prepare("SELECT * FROM menu WHERE titel LIKE '%$zoekveld%'");

            } else {
                $resultSet = $connectie->prepare("SELECT * FROM menu");
            }
            $resultSet->execute(array());

            $resultSet = $connectie->query("SELECT `categorie`, `titel`, `beschrijving`, `prijs` FROM menu");
            $data = $resultSet->fetchAll(PDO::FETCH_GROUP);

            echo '<div class="content-container">';

            foreach ($data as $categorie => $items) {
                echo "<div class='top-text'>
                   <h2>$categorie</h2>
               </div>";

                foreach ($items as $item) {
                    echo '<div class="menu-item">
                           <h2 class="menu-item-title">' . $item['titel'] . '</h2>
                           <div class="menu-content">
                               <p>' . $item['beschrijving'] . '</p>
                               <p class="menu-price">' . $item['prijs'] . '</p>
                               <a class="add-button">+ Voeg Toe</a>
                           </div>
                       </div>';
                }
            }

            echo '</div>';
            ?>
        </div>
    </div>