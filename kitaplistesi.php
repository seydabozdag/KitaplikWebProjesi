<?php
session_start();   

$servername = "localhost";
$username = "seyda";
$password = "1234";
$dbname = "kitaplik";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

$sql = "SELECT id, baslik, yazar FROM kitaplar";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kitap Listesi</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #192a56;
        animation: backgroundScroll 20s linear infinite;
        overflow-x: hidden;
    }
    
    @keyframes backgroundScroll {
        0% {
            background-position: 0% 0%;
        }
        100% {
            background-position: 100% 0%;
        }
    }
    
    .container {
        max-width: 800px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fffafa;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    }
    
    h1 {
        text-align: center;
        color: #fff;
    }
    
    .book-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    
    .book-item {
        width: 30%;
        margin-bottom: 30px;
        padding: 20px;
        border-radius: 10px;
        background-color: #34495e;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    }
    
    .book-img {
        width: 100%;
        height: auto;
        border-radius: 5px;
        border: 2px solid #fff; 
    }

    .book-title {
        color: #fff;
        font-size: 18px;
        margin-top: 10px;
    }
    
    .book-author {
        color: #bbb;
        font-size: 14px;
    }
</style>
</head>
<body>

<div class="container">
    <h1>Kitap Listesi</h1>
    <div class="book-list">
        <?php
        
        $resimler = array(
            "https://img.kitapyurdu.com/v1/getImage/fn:1109383/wh:true/wi:500",
            "https://i.dr.com.tr/cache/600x600-0/originals/0000000064038-1.jpg",
            "https://www.iskultur.com.tr/webp/2021/04/beyazzambaklarulkesinde-1.jpg",
            "https://cdn1.dokuzsoft.com/u/pusluyayincilik/img/c/b/i/bilinmeyen-bir-kadinin-mektubu-1531205079.jpg",
            "https://pz0fpvezntt4.merlincdn.net/productimages/119436/big/9789750739545_front_cover.jpg",
            "https://i.dr.com.tr/cache/500x400-0/originals/0000000411500-1.jpg"
        );

        $basliklar = array("Harry Potter ve Felsefe Taşı", "1984", "Beyaz Zambaklar Ülkesinde", "Bilinmeyen Bir Kadının Mektubu", "Savaş ve Barış", "Fareler ve İnsanlar");
        $yazarlar = array("J. K. Rowling", "George Orwell", "Grigori Petrov", "Stefan Zweig", "Lev Tolstoy", "John Steinbeck");

        for ($i = 0; $i < count($resimler); $i++) {
            echo "<div class='book-item'>";
            echo "<img src='" . $resimler[$i] . "' alt='Kitap Resmi' class='book-img'>";
            echo "<div class='book-details'>";
            echo "<div class='book-title'>" . $basliklar[$i] . "</div>";
            echo "<div class='book-author'>" . $yazarlar[$i] . "</div>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
</div>

</body>
</html>

<?php
$conn->close();
?>
