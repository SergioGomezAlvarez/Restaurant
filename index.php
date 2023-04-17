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
            <div class="mid-space"></div>
            <div class="admin-panel-wrapper">
                <?php if (isset($_SESSION['name'])) { ?>
                    <a href="admin-panel.php">
                        <button>Admin Panel</button>
                    </a>
                <?php } ?>
            </div>
            <div class="log-in-bg">
                <a class="log-in-button" onclick="document.getElementById('id01').style.display='block'">Log-In</a>
            </div>
        </div>
    </nav>

    <div id="id01" class="modal">
        <form action="index.php" method="POST" class="modal-content animate">
            <div class="imgcontainer">
                <?php

                if (isset($_POST['username'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];


                    if ($username == "Osama" && $password == "123") {
                        $_SESSION['name'] = $username;
                    } else {
                        echo "Wachtwoord verkeerd";
                    }
                }


                if (isset($_SESSION['name']) && $_SESSION['name'] != "") {
                    echo "<div style=\"font-family: 'Roboto Condensed', sans-serif; font-size: 22px; color: black;\">Hoi " . $_SESSION['name'] . "</div>";
                }

                ?>
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                <img class="avatar" src="images/pizza-avatar.png">
            </div>

            <div class="container-log-in">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button class="log-in-confirm" type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>

            <div class="container-bg">

            </div>
        </form>
    </div>
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

        <div class="space-red-under-bar">

        </div>
        <form method="post" action="index.php">
            <input type="text" name="zoekveld" placeholder="Zoek naar een gerecht. .">
            <input type="submit" name="submit-button" value="Zoeken">
        </form>
    </div>
    </nav>
    <div class="container">
        <div class="categories">
            <div class="categories-content-bg">
                <button class="categories-content">
                    <h2>Populaire gerechten</h2>
                </button>
                <button class="categories-content">
                    <h2>Klassieke Pizza's</h2>
                </button>
                <button class="categories-content">
                    <h2>Meat Pizza's</h2>
                </button>
                <button class="categories-content">
                    <h2>Vegan Pizza's</h2>
                </button>
                <button class="categories-content">
                    <h2>Combi Deals</h2>
                </button>
                <button class="categories-content">
                    <h2>Sandwiches</h2>
                </button>
                <button class="categories-content">
                    <h2>Dranken</h2>
                </button>
                <button class="categories-content">
                    <h2>Bijgerechten</h2>
                </button>
                <button class="categories-content">
                    <h2>Desserts</h2>
                </button>
            </div>
        </div>
        <div class="dishes">



            <?php

            if (isset($_POST['zoekveld'])) {
                $statement = $connectie->prepare("SELECT categorie, titel, beschrijving, prijs FROM Menu WHERE Titel LIKE ?");
                $statement->execute(['%' . $_POST['zoekveld'] . '%']);
            } else {
                $statement = $connectie->query("SELECT categorie, titel, beschrijving, prijs FROM Menu");
            }
            $data = $statement->fetchAll(PDO::FETCH_GROUP);
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

            ?>
        </div>

    </div>




    <script>
        window.onscroll = function () { myFunction() };

        var header = document.getElementById("categories");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
        var modal = document.getElementById('id01');

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>