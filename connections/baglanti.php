<?php

$servername = "localhost";
$username = "seyda";
$password = "1234";
$dbname = "kitaplik";

$baglan = new mysqli($servername, $username, $password, $dbname);

if ($baglan->connect_error) {
    die("Bağlantı hatası: " . $baglan->connect_error);
}

echo "Başarıyla bağlanıldı.";

?>
