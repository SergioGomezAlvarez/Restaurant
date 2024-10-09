<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escape-room";

// Maak verbinding
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}

$button_id = 'button_id_leuk';  // Vervang dit door de werkelijke button_id

// Bijwerken van het aantal klikken (bij elke klik)
$sqlUpdate = "UPDATE `button-hits` SET hits = hits + 1 WHERE button_id = '$button_id'";
$conn->query($sqlUpdate);

$button_id_leuk = 'button_id_leuk';
$button_id_niet_leuk = 'button_id_niet_leuk';

// Bijwerken van het aantal klikken voor de tweede set knoppen
$sqlUpdateLeuk = "UPDATE `button-hits` SET hits = hits + 1 WHERE button_id = '$button_id_leuk'";
$conn->query($sqlUpdateLeuk);

// Herhaal dit voor andere knoppen en feedbackvragen

// Sluit de verbinding nadat alle query's zijn uitgevoerd
$conn->close();
?>
