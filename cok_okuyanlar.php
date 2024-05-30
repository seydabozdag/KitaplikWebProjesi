<?php
$servername = "localhost";
$username = "seyda";
$password = "1234";
$dbname = "kitaplik";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}

$search = isset($_GET['search']) ? $_GET['search'] : '';

$sql = "SELECT username, COUNT(*) AS email FROM cokokuyanlar GROUP BY username";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Çok Okuyanlar</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #ffc0cb;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 80%;
        margin: auto;
        padding: 20px;
        background-color: #008080;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #333;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        font-size: 50px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        border: #333;
    }

    th, td {
        padding: 10px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    td {
        background-color: #fff;
    }

    p {
        margin: 0;
        padding: 5px 0;
    }

    .search-box {
        width: 100%;
        max-width: 300px;
        margin: 20px auto;
        text-align: center;
    }

    .search-box input[type="text"] {
        width: 80%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    .search-box input[type="submit"] {
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        background-color: #333;
        color: #fff;
        cursor: pointer;
    }
    .footer-image {
        display: block;
        margin: 20px auto;
        max-width: 100%;
        height: auto;
    }
    
</style>

</head>
<body>
<div class="container">
    <h1>Çok Okuyanlar</h1>
    <div class="search-box">
        <form method="get" action="">
            <input type="text" name="search" placeholder="Kullanıcı adı ara..." value="<?php echo htmlspecialchars($search); ?>">
            <input type="submit" value="Ara">
        </form>
    </div>
    <table>
        <thead>
            <tr>
                <th>Kullanıcı Adı</th>
                <th>Okunan Kitap Sayısı</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            if ($result) {
                
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["username"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "</tr>";
                    }
                    $result->free_result();
                } else {
                    echo "<tr><td colspan='2'>Kullanıcı bulunamadı.</td></tr>";
                }
            } else {
                echo "<tr><td colspan='2'>Sorgu çalıştırılırken bir hata oluştu: " . $conn->error . "</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
    <img src="https://cdn-icons-png.flaticon.com/256/2961/2961436.png" alt="Kitap Görseli" class="footer-image">
</div>
</body>
</html>
