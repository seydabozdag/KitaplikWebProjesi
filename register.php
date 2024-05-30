<?php
session_start();

// Veritabanı bağlantı bilgileri
$servername = "localhost";
$username = "seyda";
$password = "1234";
$database = "kitaplik";

// Veritabanına bağlan
$conn = new mysqli($servername, $username, $password, $database);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Hata mesajı için bir değişken tanımla
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password']; 
    $inputRole = $_POST['role'];

    // Girişlerin boş olmadığını kontrol et
    if (!empty($inputUsername) && !empty($inputPassword) && !empty($inputRole)) {
        // Şifreyi hashleyin
        $hashedPassword = md5($inputPassword);

        // Kullanıcıyı veritabanına eklemek için SQL sorgusu hazırla
        $sql = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $inputUsername, $hashedPassword, $inputRole);

        // Sorguyu çalıştır ve sonucu kontrol et
        if ($stmt->execute()) {
            echo "Kayıt başarılı!";
            header("Location: login.php");
            exit;
        } else {
            $error = "Kayıt sırasında hata oluştu: " . $stmt->error;
        }

        $stmt->close();
    } else {
        $error = "Lütfen tüm alanları doldurun.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye Kayıt</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Üye Kayıt</h2>
    <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>
    <form action="register.php" method="post">
        <div class="form-group">
            <label for="username">Kullanıcı Adı</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Şifre</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="role">Rol</label>
            <select name="role" id="role" class="form-control" required>
                <option value="user">Kullanıcı</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Kayıt Ol</button>
    </form>
</div>
</body>
</html>
