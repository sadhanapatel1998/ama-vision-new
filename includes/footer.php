<?php
require_once __DIR__ . '/data.php';
?>
</main>
<section class="section cta-section">
  <div class="hero-orb orb2" style="left:50%; top:-100px;"></div>
  <div class="wrap">
    <h2 class="reveal">HAVE AN IDEA?</h2>
    <p class="reveal reveal-delay-1">Let's bring your vision to life — from the first conversation to the final frame.</p>
    <div class="cta-buttons reveal reveal-delay-2">
      <a href="contact.php" class="btn btn-gold">Start a Project <span class="arrow">→</span></a>
      <a href="contact.php" class="btn btn-ghost">Talk to AMA Vision</a>
    </div>
  </div>
</section>
<footer>
  <div class="wrap">
    <div class="footer-top">
      <div>
        <img src="assets/img/logo-full.png" alt="AMA Vision — Bring your vision to life" class="footer-logo">
        <p class="footer-tag" style="max-width:300px">Integrated creative production — events, films, digital content and experiences.</p>
      </div>
      <div class="footer-cols">
        <div class="footer-col">
          <h4>Company</h4>
          <ul>
            <li><a href="about.php">About Us</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="work.php">Work</a></li>
            <li><a href="clients.php">Clients</a></li>
            <li><a href="industries.php">Industries</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Services</h4>
          <ul>
            <?php foreach ($SERVICES as $k => $s): ?><li><a href="<?= $k ?>.php"><?= $s[0] ?></a></li><?php endforeach; ?></ul>
        </div>
        <div class="footer-col">
          <h4>Contact</h4>
          <ul>
            <li><a href="mailto:<?= $site['email'] ?>"><?= $site['email'] ?></a></li>
            <li><a href="tel:<?= preg_replace('/\s/', '', $site['phone']) ?>"><?= $site['phone'] ?></a></li>
            <li><a href="<?= $site['instagram'] ?>" target="_blank" rel="noopener">Instagram</a></li>
            <li><span style="font-size:14px;color:var(--gray)"><?= $site['location'] ?></span></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom"><span>© <?= date('Y') ?> AMA Vision. All Rights Reserved.</span><span>Bring your vision to life.</span></div>
  </div>
</footer>
<script src="assets/js/data.js?v=<?= filemtime(__DIR__ . "/../assets/js/data.js") ?>"></script>
<script src="assets/js/main.js?v=<?= filemtime(__DIR__ . "/../assets/js/main.js") ?>"></script>
</body>

</html>