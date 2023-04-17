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
    <div class="voorwaarden-container">
        <div class="voorwaarden-bg">
            <h1 class="algemene-voorwaarden">2. Levering<br></br>

                2.1 Voor bezorging van een bestelling geldt een minimumbedrag welke tijdens het bestelproces wordt
                aangegeven. De prijzen die vermeld staan op de website zijn inclusief BTW eventuele bezorgkosten worden
                apart vermeld.<br></br>

                2.2 Bestellingen kunnen via internet geplaatst worden tot uiterlijk 5 minuten voor sluitingstijd voor
                bezorging van de desbetreffende winkel. De openingstijden staan vermeld bij
                'Openingstijden en Info'.<br></br>

                2.3 Acties en aanbiedingen zijn niet geldig in combinatie met meerdere acties of aanbiedingen en niet
                geldig feestdagen.<br></br>

                2.4 Alhoewel er naar gestreeft wordt uw bestelling binnen 30 minuten op het door u gewenste adres af te
                leveren, zijn er altijd omstandigheden, zoals weer en verkeer, die ertoe bijdragen dat deze indicatie
                niet gehaald kan halen.<br></br>

                2.5. Het risico voor wat betreft de bestelling gaat over op u nadat de bestelling is geleverd en
                betaald.<br></br>

                3. Betaling<br></br>

                Voorafgaande betaling is mogelijk op de wijze zoals dit aangeboden wordt bij
                La Madrozo. Indien de on-line betaalmethode niet beschikbaar is of u wilt uw
                bestelling bij voorkeur bij aflevering betalen dan kunt u uiteraard ook betalen aan de bezorger, echter
                de bezorger heeft uit veiligheidsoverwegingen nooit meer dan € 15,-wisselgeld bij zich en u dient dan
                ook zoveel mogelijk gepast te betalen.
            </h1>
        </div>
    </div>