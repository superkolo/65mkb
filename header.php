<?php
$currentPage = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
$englishHref = ($currentPage === 'index.php') ? 'en/' : 'en/' . $currentPage;
?>
<!DOCTYPE html>
<html lang="pl" >
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $title; ?> - 65. Międzynarodowy Kongres Bałtycki</title>
<link rel="stylesheet" href="style.css?t=<?php echo filemtime(__DIR__ . '/style.css'); ?>">
</head>
<body>

<header>
  <img src="mkb-logo.svg" alt="65. Międzynarodowy Kongres Bałtycki">
  <div class="menu-toggle" onclick="toggleMenu()">☰</div>
  <nav id="menu">
    <a href="./">Strona Główna</a>
    <a target="_blank" href="https://bridge.gda.pl/65mkb-szukam-partnera/">Szukam partnera</a>
    <a href="wpisowe.php">Wpisowe</a>
    <a href="nagrody.php">Nagrody</a>
    <a href="klasyfikacje.php">Klasyfikacje</a>
    <a href="sala.php">Sala gry</a>
    <a href="regulamin.php">Regulamin Kongresu</a>
    <a href="gppt.php">Regulamin GPPT</a>
    <a target="blank" href="https://www.facebook.com/pwzbs/photos">Zdjęcia</a>
    <a href="contact.php">Kontakt</a>
    <a href="archiwum.php">ARCHIWUM</a>
  </nav>
  <div class="language-switch" aria-label="Wybór języka">
    <span class="active">PL</span>
    <a href="<?php echo htmlspecialchars($englishHref, ENT_QUOTES); ?>">EN</a>
  </div>
</header>

<div class="container">
<h1>65. Międzynarodowy Kongres Bałtycki</h1>
