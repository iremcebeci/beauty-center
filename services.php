<?php
include_once __DIR__ . '/templates/header.php';
?>

<main class="services">
  <section class="services-hero">
    <h1>Hizmetlerimiz</h1>
    <p>Güzelliğinizi ortaya çıkaracak özenle seçilmiş hizmetlerimiz</p>
  </section>

  <section class="services-list">
    <div class="service-card">
      <img src="assets/images/service1.jpg" alt="Cilt Bakımı">
      <h3>Cilt Bakımı</h3>
      <p>Cildiniz için en iyi bakımı profesyonel uzmanlarımızla keşfedin.</p>
      <a href="book_appointment.php" class="button">Randevu Al</a>
    </div>

    <div class="service-card">
      <img src="assets/images/service2.jpg" alt="Lazer Epilasyon">
      <h3>Lazer Epilasyon</h3>
      <p>Pürüzsüz bir cilt için ileri teknoloji lazer uygulamalarımız.</p>
      <a href="book_appointment.php" class="button">Randevu Al</a>
    </div>

    <div class="service-card">
      <img src="assets/images/sacbakimi.jpg" alt="Saç Bakımı">
      <h3>Saç Bakımı</h3>
      <p>Canlı, sağlıklı ve ışıldayan saçlar için özel bakımlar.</p>
      <a href="book_appointment.php" class="button">Randevu Al</a>
    </div>
  </section>
</main>

<?php
include_once __DIR__ . '/templates/footer.php';
?>
