<?php
session_start();

$dsn = 'mysql:dbname=restaurant;host=127.0.0.1';

$user = 'root';
$password = '';
$id = $_GET['id'];

try {
    $connectie = new PDO($dsn, $user, $password);
    echo "Verbinding wel gelukt";
} catch (PDOException $e) {
    echo "Verbinding niet gelukt: " . $e;
}

$stmt = $connectie->query("SELECT * FROM menu WHERE id = $id");
$menu_item = $stmt->fetch();

if (isset($_POST['submit'])) {

    $titel = $_POST['titel'];
    $beschrijving = $_POST['beschrijving'];
    $prijs = $_POST['prijs'];
    $categorie = $_POST['categorie'];
    $connectie->query("UPDATE menu SET beschrijving = '$beschrijving' WHERE id = $id");

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
                    <input type="text" name="titel" placeholder="Titel ..." value="<?php echo $menu_item['titel'] ?>">

                    <label class="edit-form" for="beschrijving">Beschrijving</label>
                    <input type="text" name="beschrijving" placeholder="Beschrijving ..."
                        value="<?php echo $menu_item['beschrijving'] ?>">

                    <label class="edit-form" for="prijs">Prijs</label>
                    <input type="text" name="prijs" placeholder="Prijs ..." value="<?php echo $menu_item['prijs'] ?>">

                    <label class="edit-form" for="categorie">Categorie</label>
                    <input type="text" name="categorie" placeholder="Categorie ..."
                        value="<?php echo $menu_item['categorie'] ?>">

                    <!-- include the ID of the menu item being edited as a hidden input field -->
                    <input type="hidden" name="id">

                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>

</html>