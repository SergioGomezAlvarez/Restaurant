<?php

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


$resultSet = $connectie->query("SELECT * FROM menu, klassieke");
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
        <div class="nav-under-bar1">
            <div class="logo-bg">
                <img class="logo01" src="images/pizza-chef.png">
            </div>
            <div class="name-bg">
                <h1>La Madrozo<h1>
            </div>
            <div class="mid-space">

            </div>
            <div class="log-in-bg">
                <a class="log-in-button" onclick="document.getElementById('id01').style.display='block'"
                    style="width:auto;">Log-In</a>

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
                                echo "Hoi " . $_SESSION['name'];
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
            <div class="cart-bg">
                <img class="cart-img" src="images/shopping-cart.png">
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
                <button class="btn_active" onclick="filterSelection('all')"> Show
                    all</button>
                <button class="categories-content">
                    <h2>Populaire gerechten</h2>
                </button>
                <button class="categories-content" onclick="location.href='?category=klassieke'">
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
            <div class="top-text">
                <h2>Onze populaire gerechten</h2>
            </div>
            <div class="content-container">
                <?php /* $resultSet = $connectie->prepare("SELECT * FROM menu");
                while ($item = $resultSet->fetch()) {
                    echo '<div class="menu-item">
                    <h2 class="tijdelijk">' . $item['titel'] . '</h2>
                    <div class="menu-content"> <p>' . $item['beschrijving'] . '</p>
                        <p>' . $item['prijs'] . '</p>
                        <a class="add-button">+ Voeg Toe</a>
                         </div> </div>';
                } */ ?> 
               
                <?php
                if(isset($_POST['zoekveld']) && $_POST['zoekveld'] != "") {
                    $zoekveld = $_POST['zoekveld'];
                    $resultSet = $connectie->prepare("SELECT * FROM menu WHERE titel LIKE '%$zoekveld%' ORDER BY categorie");

                }
                else {
                    $resultSet = $connectie->prepare("SELECT * FROM menu ORDER BY categorie");
                }
                $resultSet->execute(array());

                while ($item = $resultSet->fetch()) {
                    echo '<div class="menu-item">
                    <h2 class="tijdelijk">' . $item['titel'] . '</h2>
                    <div class="menu-content"> <p>' . $item['beschrijving'] . '</p>
                        <p>' . $item['prijs'] . '</p>
                        <a class="add-button">+ Voeg Toe</a>
                         </div> </div>';
                } ?>
                <div class="top-text">
                    <h2>Meat gerechten</h2>
                </div>
                <?php $resultSet = $connectie->prepare("SELECT * FROM meat");
                while ($item = $resultSet->fetch()) {
                    echo '<div class="menu-item">
                    <h2 class="tijdelijk">' . $item['titel'] . '</h2>
                    <div class="menu-content"> <p>' . $item['beschrijving'] . '</p>
                        <p>' . $item['prijs'] . '</p>
                        <a class="add-button">+ Voeg Toe</a>
                         </div> </div>';
                } ?>
            </div>
        </div>

    </div>
    </div>


    </div>

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