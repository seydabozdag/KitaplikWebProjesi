<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['role'] != 'user') {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
</head>
<body>
    <h1>User Dashboard</h1>
    <p>Hoş geldiniz, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
    <p>Bu sayfa sadece normal kullanıcılar içindir.</p>
    <a href="cikis.php">Çıkış Yap</a>
</body>
</html>
