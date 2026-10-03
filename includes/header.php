<?php require_once __DIR__ . '/data.php';
$cur = basename($_SERVER['PHP_SELF'], '.php');
$title = $title ?? 'AMA Vision | Creative Production, Events & Experiences';
$desc = $desc ?? 'AMA Vision turns ideas into high-impact productions, experiences and content — from concept to execution. Delhi-NCR based, Pan-India execution.';
function act($p)
{
  global $cur;
  return in_array($cur, (array)$p) ? ' class="active"' : '';
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($desc) ?>">
  <meta property="og:title" content="<?= htmlspecialchars($title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($desc) ?>">
  <meta property="og:image" content="assets/img/logo-full.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&family=Inter:wght@300..600&family=Cormorant+Garamond:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css?v=<?= filemtime(__DIR__ . "/../assets/css/style.css") ?>">
  <link rel="stylesheet" href="assets/css/custom.css?v=<?= filemtime(__DIR__ . "/../assets/css/custom.css") ?>">
</head>

<body>
  <div class="grain"></div>
  <div class="cursor-dot"></div>
  <div class="cursor-ring"></div>
  <div id="preloader"><img src="assets/img/logo-mark.png" alt="" class="pre-logo">
    <div class="pre-bar"><span></span></div>
  </div>

  <header id="siteHeader">
    <div class="wrap nav-bar">
      <a href="index.php" class="logo"><img src="assets/img/logo-mark.png" alt="AMA Vision"><span>AMA VISION</span></a>
      <nav class="main-nav">
        <ul>
          <li><a href="index.php" <?= act('index') ?>>Home</a></li>
          <li><a href="about.php" <?= act('about') ?>>About Us</a></li>
          <li class="has-dd"><button type="button" <?= act(array_merge(['services'], array_keys($SERVICES))) ?>>Our Services <i class="chev"></i></button>
            <div class="dd"><a href="services.php">All Services</a><?php foreach ($SERVICES as $k => $s): ?><a href="<?= $k ?>.php"><?= $s[0] ?></a><?php endforeach; ?></div>
          </li>
          <li class="has-dd"><button type="button" <?= act(['events', 'work', 'clients']) ?>>Work <i class="chev"></i></button>
            <div class="dd"><a href="events.php">Events</a><a href="work.php">Work / Case Studies</a><a href="clients.php">Clients</a></div>
          </li>
          <li><a href="industries.php" <?= act('industries') ?>>Industries</a></li>
          <li class="has-dd"><button type="button" <?= act(['content', 'experiences']) ?>>Content <i class="chev"></i></button>
            <div class="dd"><a href="content.php">Content &amp; Digital</a><a href="experiences.php">Experiences</a></div>
          </li>
          <li><a href="contact.php" <?= act('contact') ?>>Contact Us</a></li>
        </ul>
      </nav>
      <a href="contact.php" class="btn btn-gold nav-cta">Start a Project</a>
      <button class="burger" id="burger" aria-label="Open menu"><span></span><span></span><span></span></button>
    </div>
  </header>

  <div class="mobile-menu" id="mobileMenu">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li class="m-dd"><button type="button" class="m-dd-btn" aria-expanded="false">Our Services <i class="chev"></i></button>
        <div class="m-sub">
          <div><a href="services.php">All Services</a><?php foreach ($SERVICES as $k => $s): ?><a href="<?= $k ?>.php"><?= $s[0] ?></a><?php endforeach; ?></div>
        </div>
      </li>
      <li class="m-dd"><button type="button" class="m-dd-btn" aria-expanded="false">Work <i class="chev"></i></button>
        <div class="m-sub">
          <div><a href="events.php">Events</a><a href="work.php">Work / Case Studies</a><a href="clients.php">Clients</a></div>
        </div>
      </li>
      <li><a href="industries.php">Industries</a></li>
      <li class="m-dd"><button type="button" class="m-dd-btn" aria-expanded="false">Content <i class="chev"></i></button>
        <div class="m-sub">
          <div><a href="content.php">Content &amp; Digital</a><a href="experiences.php">Experiences</a></div>
        </div>
      </li>
      <li><a href="contact.php">Contact Us</a></li>
    </ul>
    <a href="contact.php" class="btn btn-gold">Start a Project</a>
  </div>
  <main>