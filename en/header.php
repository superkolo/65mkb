<?php
$currentPage = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
$polishHref = ($currentPage === 'index.php') ? '../' : '../' . $currentPage;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $title; ?> - 65th International Baltic Congress</title>
<meta name="description" content="65th International Baltic Congress in Sopot, 22-30 July 2026.">
<meta property="og:type" content="website">
<meta property="og:site_name" content="65th International Baltic Congress">
<meta property="og:title" content="<?php echo htmlspecialchars($title, ENT_QUOTES); ?> - 65th International Baltic Congress">
<meta property="og:description" content="Sopot, 22-30 July 2026. Hala Stulecia, ul. Goyki 7.">
<meta property="og:image" content="https://wyniki.pzbs.pl/2026/baltycki/og-image.png">
<meta property="og:image:secure_url" content="https://wyniki.pzbs.pl/2026/baltycki/og-image.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="https://wyniki.pzbs.pl/2026/baltycki/og-image.png">
<link rel="stylesheet" href="../style.css?t=<?php echo filemtime(__DIR__ . '/../style.css'); ?>">
</head>
<body>

<header>
  <img src="../mkb-logo.svg" alt="65th International Baltic Congress">
  <div class="menu-toggle" onclick="toggleMenu()">☰</div>
  <nav id="menu">
    <a href="./">Home</a>
    <a target="_blank" href="https://bridge.gda.pl/65mkb-szukam-partnera/">Find a partner</a>
    <a href="wpisowe.php">Entry fees</a>
    <a href="nagrody.php">Prizes</a>
    <a href="klasyfikacje.php">Standings</a>
    <a href="sala.php">Venue</a>
    <a href="noclegi.php">Accommodation</a>
    <a href="regulamin.php">Congress Rules</a>
    <a href="gppt.php">GPPT Rules</a>
    <a target="blank" href="https://www.facebook.com/pwzbs/photos">Photos</a>
    <a href="contact.php">Contact</a>
    <a href="archiwum.php">Archive</a>
  </nav>
  <div class="language-switch" aria-label="Language selection">
    <a href="<?php echo htmlspecialchars($polishHref, ENT_QUOTES); ?>">PL</a>
    <span class="active">EN</span>
  </div>
</header>

<div class="container">
<h1>65th International Baltic Congress</h1>
