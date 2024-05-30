<?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "seyda";
$password = "1234";
$database = "kitaplik";

// Bağlantıyı oluşturma
$conn = new mysqli($servername, $username, $password, $database);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Veritabanı bağlantı hatası: " . $conn->connect_error);
}

// Kullanıcı listesini sorgulama
$sql = "SELECT id, username, role FROM users";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Üye Listesi</title>
<link rel="stylesheet" href="styles.css">
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #34495e;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #ecf0f1;
    border: 2px solid #2c3e50;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

h1 {
    text-align: center;
    color: #2c3e50;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
}
</style>
</head>
<body>
<div class="container">
    <h1>Üye Listesi</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Kullanıcı Adı</th>
            <th>Rol</th>
        </tr>
        <?php
        // Sorgu sonuçlarını işleme
        if ($result->num_rows > 0) {
            // Her bir kullanıcı için verileri al
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>" . $row["role"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Hiçbir kullanıcı bulunamadı.</td></tr>";
        }
        ?>
    </table>
</div>

</body>
</html>

<?php
// Bağlantıyı kapatma
$conn->close();
?>

