<?php
$title = 'Creative Production | AMA Vision';
include 'includes/header.php';
?>

<!-- =========================================================
     PAGE HERO / BREADCRUMB
     Change the hero/breadcrumb background image URL below:
========================================================= -->
<section class="page-hero"
  style="background-image:linear-gradient(180deg,rgba(5,5,5,.55),rgba(5,5,5,.92)),url('assets/img/banner/banner-6.jpg');">
  <div class="wrap">
    <div class="crumb"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Creative Production</div>
    <h1>Creative Production</h1>
    <p>Ideas shaped into a clear creative direction, a production plan and a visual treatment the whole crew can
      execute.</p>
  </div>
</section>

<!-- =========================================================
     SCOPE OF WORK & SERVICE PHOTO
     Change the service photo URL in .photo div below:
========================================================= -->
<section class="section">
  <div class="wrap split" style="align-items:start">
    <div class="reveal">
      <div class="eyebrow">What's included</div>
      <h2 class="h2">Scope of work</h2>
      <ul class="list-cols" style="columns:1">
        <li>Creative direction</li>
        <li>Concept development</li>
        <li>Campaign ideation</li>
        <li>Event concepts and experience design</li>
        <li>Scriptwriting and storyboarding</li>
        <li>Visual treatment and production design</li>
        <li>Creative decks and production planning</li>
      </ul>
    </div>
    <div class="reveal reveal-delay-1">
      <!-- SERVICE PHOTO IMAGE -->
      <div class="photo" style="background-image:url('assets/img/portfolio/exl-2.jpg');"></div>
      <p class="quote" style="font-size:20px;font-family: 'Space Grotesk';">Design not only for the stage — but for
        audience movement, engagement, content generation and brand visibility.</p>
    </div>
  </div>
</section>

<!-- =========================================================
     OTHER SERVICES
========================================================= -->
<section class="section">
  <div class="wrap">
    <div class="eyebrow reveal">Other services</div>
    <div class="svc-grid" style="margin-top:30px">
      <a href="event-production.php" class="svc-card reveal"
        style="min-height:300px;background-image:url('assets/img/services/event-production-execution.jpg');">
        <h3>Event Production &amp; Execution</h3>
        <span class="more">View →</span>
      </a>
      <a href="content-production.php" class="svc-card reveal"
        style="min-height:300px;background-image:url('assets/img/services/content-production.jpg');">
        <h3>Content Production</h3>
        <span class="more">View →</span>
      </a>
      <a href="post-production.php" class="svc-card reveal"
        style="min-height:300px;background-image:url('assets/img//services/post-production.jpg');">
        <h3>Post-Production</h3>
        <span class="more">View →</span>
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>