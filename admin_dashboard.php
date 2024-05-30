<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['role'] != 'admin') {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <p>Hoş geldiniz, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
    <p>Bu sayfa sadece admin kullanıcıları içindir.</p>
    <a href="cikis.php">Çıkış Yap</a>
</body>
</html>
