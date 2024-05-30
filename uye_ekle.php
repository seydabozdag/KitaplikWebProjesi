<?php
session_start();

// Admin değilse giriş sayfasına yönlendir
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

$servername = "localhost";
$username = "seyda";
$password = "1234";
$dbname = "kitaplik";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newUsername = $_POST['username'];
    $newPassword = md5($_POST['password']); // şifreyi hashleyin
    $newRole = $_POST['role'];

    $sql = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $newUsername, $newPassword, $newRole);

    if ($stmt->execute()) {
        $success = "Yeni üye başarıyla eklendi.";
    } else {
        $error = "Üye ekleme sırasında bir hata oluştu: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Üye Ekle</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #B0C4DE;
        }
        .container {
            display: flex;
            align-items: center;
            background-color: #708090;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 100px;
        }
        .container img {
            max-width: 200px; 
            max-height: 200px; 
            margin-right: 30px;
            border-radius: 15px;
        }
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        form label {
            margin: 5px 0;
            font-size: 1.2em;
        }
        form input, form select {
            margin: 5px 0;
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 1em;
        }
        button {
            margin-top: 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            background-color: #28a745;
            color: white;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #218838;
        }
        .message {
            font-size: 1.2em;
            color: #155724;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://static.vecteezy.com/system/resources/thumbnails/025/325/396/small_2x/office-worker-people-icons-animation-smiling-business-people-happy-employees-animated-flat-outline-character-facial-expressions-4k-pack-on-white-background-with-alpha-channel-transparency-video.jpg" alt="User Image">
        <div class="form-container">
            <h2>Yeni Üye Ekle</h2>
            <?php if (isset($success)) echo "<div class='message'>$success</div>"; ?>
            <?php if (isset($error)) echo "<div class='message'>$error</div>"; ?>
            <form action="uye_ekle.php" method="post">
                <label for="username">Kullanıcı Adı:</label>
                <input type="text" name="username" id="username" required>
                <label for="password">Şifre:</label>
                <input type="password" name="password" id="password" required>
                <label for="role">Yetki:</label>
                <select name="role" id="role">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                <button type="submit">Ekle</button>
            </form>
        </div>
    </div>
</body>
</html>
