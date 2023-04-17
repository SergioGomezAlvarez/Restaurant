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


if (isset($_POST['submit'])) {
    $titel = $_POST['titel'];
    $beschrijving = $_POST['beschrijving'];
    $prijs = $_POST['prijs'];
    $categorie = $_POST['categorie'];

    $sql = "INSERT INTO menu (titel, beschrijving, prijs, categorie) VALUES (:titel, :beschrijving, :prijs, :categorie)";

    $stmt = $connectie->prepare($sql);

    $stmt->bindParam(':titel', $titel);
    $stmt->bindParam(':beschrijving', $beschrijving);
    $stmt->bindParam(':prijs', $prijs);
    $stmt->bindParam(':categorie', $categorie);

    $stmt->execute();

    echo "Product toegevoegd!";
}


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
                    <a class="dropdown-links" href="contact.php">Contact</a>
                    <a class="dropdown-links" href="openingstijden.php">Openingstijden & Info</a>
                    <a class="dropdown-links" href="voorwaarden.php">Algemene Voorwaarden</a>
                </div>
            </div>
            <a class="back-menu-button" href="index.php">Menu</a>
        </div>
    </nav>

    <div class="admin-content-container">
        <div class="admin-edit-top">
            <div>
                <form class="form" method="POST">
                    <label class="edit-form" for="titel">Titel</label>
                    <input type="text" name="titel" placeholder="Titel ...">

                    <label class="edit-form" for="beschrijving">Beschrijving</label>
                    <input type="text" name="beschrijving" placeholder="Beschrijving ...">

                    <label class="edit-form" for="prijs">Prijs</label>
                    <input type="text" name="prijs" placeholder="Prijs ...">

                    <label class="edit-form" for="categorie">Categorie</label>
                    <input type="text" name="categorie" placeholder="Categorie ...">

                    <input type="hidden" name="id">

                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>

</html>