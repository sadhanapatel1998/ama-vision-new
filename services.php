<?php 
$title = 'Services | AMA Vision';
include 'includes/header.php';
$heroTitle = 'Our Services';
$heroSub = 'Event production, creative production, content, post-production, experiences and production management — under one roof.';
$heroImg = 'cam';
include 'includes/page-hero.php'; 
require_once __DIR__ . '/includes/data.php';
?>

<section class="section">
  <div class="wrap">
    <div class="eyebrow reveal">What AMA Vision provides</div>
    <h2 class="h2 reveal">One vision.<br><span class="muted">Complete execution.</span></h2>
    <div class="svc-grid">
      <?php foreach ($SERVICES as $k => $s): ?>
        <a href="<?= $k ?>.php" class="svc-card reveal" style="background-image:url('<?= img($IMG[$s[1]], 900) ?>')">
          <h3><?= $s[0] ?></h3>
          <p><?= $s[2] ?></p><span class="more">Explore service →</span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<section class="section">
  <div class="wrap">
    <div class="eyebrow reveal">Capabilities at a glance</div>
    <div class="services-list" id="servicesList"></div>
  </div>
</section>
<?php include 'includes/footer.php'; ?>