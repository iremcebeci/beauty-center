<?php
// Oturum başlat (giriş yapılacaksa)
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<?php
include_once __DIR__ . '/../config.php';
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlowLab</title>

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>/assets/images/logomini2.png">

</head>
</head>

<body>

<?php include 'navbar.php'; ?>
