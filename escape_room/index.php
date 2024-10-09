<?php

include('db.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam&family=Montserrat&family=Protest+Strike&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav id="sticky-nav">
        <div class="nav-bar-main">
            <img class="logo-img" src="images/logo witte rand.png">
        </div>
    </nav>
    <div class="black-line"></div>

    <div class="container">
        <div class="feedback-question-container">
            <h1 class="feedback-question">Wat vond je van puzzels in de Escape Room?</h1>
        </div>
        <div class="button-group">
            <a class="button-keuze" id="button_leuk">
                Leuk
            </a>
            <a class="button-keuze" id="button_niet_leuk">
                Niet Leuk
            </a>
        </div>

        <div class="feedback-question-container">
            <h1 class="feedback-question">Hoe was de moeilijkheidsgraad van puzzels/spellen in de Escape Room</h1>
        </div>
        <div class="button-group">
            <a class="button-keuze" id="button_selected">
                Makkelijk
            </a>
            <a class="button-keuze" id="button_selected">
                Normaal
            </a>
            <a class="button-keuze" id="button_selected">
                Moeilijk
            </a>
        </div>
        <div class="feedback-question-container">
            <h1 class="feedback-question">Wat vonden je van de belichting in de Escape Room?</h1>
        </div>
        <div class="button-group">
            <a class="button-keuze" id="button_selected">
                Goed
            </a>
            <a class="button-keuze" id="button_selected">
                Voldoende
            </a>
            <a class="button-keuze" id="button_selected">
                Slecht
            </a>
        </div>
        <div class="feedback-question-container">
            <h1 class="feedback-question">Wat vonden je van de geluidseffecten in de Escape Room?</h1>
        </div>
        <div class="button-group">
            <a class="button-keuze" id="button_selected">
                Goed
            </a>
            <a class="button-keuze" id="button_selected">
                Voldoende
            </a>
            <a class="button-keuze" id="button_selected">
                Slecht
            </a>
        </div>
        <div class="feedback-question-container">
            <h1 class="feedback-question">Had je het gevoel dat er te veel, niet genoeg of voldoende tijd was?</h1>
        </div>
        <div class="button-group">
            <a class="button-keuze" id="button_selected">
                Te veel
            </a>
            <a class="button-keuze" id="button_selected">
                Genoeg
            </a>
            <a class="button-keuze" id="button_selected">
                Niet genoeg
            </a>
        </div>
        <div class="feedback-question-container">
            <h1 class="feedback-question">Werkten alle puzzels zoals ze hoorde te werken?</h1>
        </div>
        <div class="button-group">
            <a class="button-keuze" id="button_selected">
                Ja
            </a>
            <a class="button-keuze" id="button_selected">
                Soms wel/Soms niet
            </a>
            <a class="button-keuze" id="button_selected">
                Nee
            </a>
        </div>
        <div class="feedback-question-container">
            <h1 class="feedback-question">Op een schaal van 1 tot 10, hoe zou je de originaliteit van de puzzels
                beoordelen?</h1>
        </div>
        <div class="button-group">
            <a class="button-keuze" id="button_selected">
                1
            </a>
            <a class="button-keuze" id="button_selected">
                2
            </a>
            <a class="button-keuze" id="button_selected">
                3
            </a>
            <a class="button-keuze" id="button_selected">
                4
            </a>
            <a class="button-keuze" id="button_selected">
                5
            </a>
            <a class="button-keuze" id="button_selected">
                6
            </a>
            <a class="button-keuze" id="button_selected">
                7
            </a>
            <a class="button-keuze" id="button_selected">
                8
            </a>
            <a class="button-keuze" id="button_selected">
                9
            </a>
            <a class="button-keuze" id="button_selected">
                10
            </a>
        </div>
        <div class="feedback-question-container">
            <h1 class="feedback-question">Welke puzzel vond je het meest uitdagend en waarom?</h1>
        </div>`
        <form action="index.php">
            <input type="text" id="fname" class="inp" name="fname"><br>
            <input type="submit" class="button-keuze" value="Submit">
        </form>


    </div>
    <script>
        window.onscroll = function () {
            stickyHeader();
        };

        function stickyHeader() {
            var nav = document.getElementById("sticky-nav");

            if (window.pageYOffset > 0) {
                nav.classList.add("sticky");
            } else {
                nav.classList.remove("sticky");
            }
        }

        const buttons = document.querySelectorAll('.button-keuze');

        buttons.forEach(button => {
            button.addEventListener('click', function () {
                button.classList.toggle('selected');
            });
        });

    </script>
</body>

</html>