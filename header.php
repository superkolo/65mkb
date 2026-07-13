<?php
$currentPage = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
$englishHref = ($currentPage === 'index.php') ? 'en/' : 'en/' . $currentPage;
?>
<!DOCTYPE html>
<html lang="pl" >
<head>
<meta charset="UTF-8">

	<!-- realfavicongenerator.net generated favicon code -->
	<link rel="apple-touch-icon" sizes="180x180" href="_favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="_favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="_favicon/favicon-16x16-2.png">
	<link rel="manifest" href="_favicon/manifest.json"> 
	<link rel="mask-icon" href="_favicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="_favicon/favicon.ico">
	<meta name="apple-mobile-web-app-title" content="Kongres Bałtycki">
	<meta name="application-name" content="Kongres Bałtycki">
	<meta name="msapplication-config" content="_favicon/browserconfig.xml">
	<meta name="theme-color" content="#038fb2"> 	


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $title; ?> - 65. Międzynarodowy Kongres Bałtycki</title>
<meta name="description" content="65. Międzynarodowy Kongres Bałtycki w Sopocie, 22-30 lipca 2026.">
<meta property="og:type" content="website">
<meta property="og:site_name" content="65. Międzynarodowy Kongres Bałtycki">
<meta property="og:title" content="<?php echo htmlspecialchars($title, ENT_QUOTES); ?> - 65. Międzynarodowy Kongres Bałtycki">
<meta property="og:description" content="Sopot, 22-30 lipca 2026. Hala Stulecia, ul. Goyki 7.">
<meta property="og:image" content="https://wyniki.pzbs.pl/2026/baltycki/og-image.png">
<meta property="og:image:secure_url" content="https://wyniki.pzbs.pl/2026/baltycki/og-image.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="https://wyniki.pzbs.pl/2026/baltycki/og-image.png">
<link rel="stylesheet" href="style.css?t=<?php echo filemtime(__DIR__ . '/style.css'); ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <a href="noclegi.php">Noclegi</a>
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
