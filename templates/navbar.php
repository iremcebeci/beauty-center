<?php
include_once __DIR__ . '/../includes/auth.php';
?>

<?php
include_once __DIR__ . '/../config.php';
?>

<nav class="navbar">
  <div class="nav-left">

  </div>
  
  <div class="logo">
    <img src="<?php echo BASE_URL; ?>/assets/images/logo169.jpg" alt="GlowLab Logo" />
  </div>
  
  <div class="nav-right">
    <?php if (isLoggedIn()): ?>
      <div class="account-menu" id="accountMenu">
        <i class="fa fa-user-circle"></i>
        <div class="dropdown" id="accountDropdown">
          <!-- Profil linkleri sonra -->
          <a href="/user/profile.php">Profilim</a>
          <a href="/logout.php">Çıkış Yap</a>
        </div>
      </div>
    <?php else: ?>
      <a href="/login.php" class="login-btn"><i class="fa fa-sign-in-alt"></i> Giriş Yap</a>
    <?php endif; ?>
    <a href="/cart.php" class="cart-icon"><i class="fa fa-shopping-cart"></i></a>
  </div>
</nav>

<div class="nav-menu">
  <ul>
    <li><a href="<?php echo BASE_URL; ?>/index.php">Ana Sayfa</a></li>
    <li><a href="<?php echo BASE_URL; ?>/services.php">Hizmetler</a></li>
    <li><a href="<?php echo BASE_URL; ?>/about.php">Hakkımızda</a></li>
    <li><a href="<?php echo BASE_URL; ?>/contact.php">İletişim</a></li>
    <li><a href="<?php echo BASE_URL; ?>/book_appointment.php">Randevu Al</a></li>
  </ul>
</div>