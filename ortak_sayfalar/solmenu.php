<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && $_SESSION['role'] === 'admin') {
    echo '
    <li class="nav-item">
        <a href="uye_ekle.php" class="nav-link">
            <i class="nav-icon fas fa-user-plus"></i>
            <p>Üye Ekle</p>
        </a>
    </li>';
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Menü</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/your/css/style.css">
</head>
<body>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex"> 
  <a href="index3.html" class="brand-link">
    <span class="brand-mini"><b>GF</b></span>
    <span class="brand-text font-weight-light">Gully Foyle</span>
  </a>
  <div class="info">
    <a href="#" class="d-block">User</a>
  </div>
  <div class="image">
    <img src="https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg" class="img-circle elevation-2" alt="User Image">
  </div>
</div> 

<a href="index.php" class="brand-link">
  <span class="brand-text font-weight-light">Ana Sayfa</span>
</a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Üye İşlemleri -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Üyeler
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && $_SESSION['role'] === 'admin') {
            } ?>
            <li class="nav-item">
                <a href="uye_ekle.php" class="nav-link">
                  <i class="nav-icon fas fa-user-plus"></i>
                  <p>Üye Ekle</p>
                </a>
              </li>
              <li class="nav-item">
              </li>
              <li class="nav-item">
                <a href="uyelistesi.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Üye Listesi</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Kitap İşlemleri -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Kitaplar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php if (isset($_SESSION['login']) && $_SESSION['login'] == "true" && $_SESSION['yetki'] == 2): ?>
                <li class="nav-item">
                  <a href="kitapekleme.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kitap Ekleme</p>
                  </a>
                </li>
              <?php endif; ?>
              <li class="nav-item">
                <a href="kitaplistesi.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kitap Listesi</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Listeler -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Listeler
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="cok_okuyanlar.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Çok Okuyanlar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="giris.php" class="nav-link">
              <i class="nav-icon fas fa-sign-in-alt"></i>
              <p>
                Giriş Yap
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="cikis.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Çıkış
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</body>
</html>
