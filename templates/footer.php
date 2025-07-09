<?php
include_once __DIR__ . '/../config.php';
?>

<footer class="site-footer">
  <div class="footer-content">
    <div class="footer-section about">
      <h3>GlowLab</h3>
      <p>GlowLab, güzelliğinizi ortaya çıkaran modern bir merkezdir. Kendinize zaman ayırın, ışıldayın!</p>
    </div>
    <div class="footer-section links">
      <h4>Hızlı Linkler</h4>
      <ul>
        <li><a href="<?php echo BASE_URL; ?>/index.php">Ana Sayfa</a></li>
        <li><a href="<?php echo BASE_URL; ?>/services.php">Hizmetler</a></li>
        <li><a href="<?php echo BASE_URL; ?>/about.php">Hakkımızda</a></li>
        <li><a href="<?php echo BASE_URL; ?>/contact.php">İletişim</a></li>
      </ul>
    </div>
    <div class="footer-section contact">
      <h4>İletişim</h4>
      <p>📞 +90 555 555 5555</p>
      <p>📧 info@glowlab.com</p>
      <p>📍 İstanbul, Türkiye</p>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; <?php echo date('Y'); ?> GlowLab. Tüm hakları saklıdır.</p>
  </div>
</footer>
