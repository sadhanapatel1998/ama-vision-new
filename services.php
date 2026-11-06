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
      <!-- 1. Event Production & Execution -->
      <a href="event-production.php" class="svc-card reveal"
        style="background-image:url('assets/img/services/event-production-execution.jpg')">
        <h3>Event Production &amp; Execution</h3>
        <p>Execution-led event production — from brief and run of show to stage, AV and the content the event generates.
        </p>
        <span class="more">Explore service →</span>
      </a>

      <!-- 2. Creative Production -->
      <a href="creative-production.php" class="svc-card reveal"
        style="background-image:url('assets/img/banner/banner-6.jpg')">
        <h3>Creative Production</h3>
        <p>Ideas shaped into a clear creative direction, a production plan and a visual treatment the whole crew can
          execute.</p>
        <span class="more">Explore service →</span>
      </a>

      <!-- 3. Content Production -->
      <a href="content-production.php" class="svc-card reveal"
        style="background-image:url('assets/img/portfolio/mela-mela-anime-japan.jpg')">
        <h3>Content Production</h3>
        <p>Films, photography and social-first packages — one shoot planned to feed every platform.</p>
        <span class="more">Explore service →</span>
      </a>

      <!-- 4. Post-Production -->
      <a href="post-production.php" class="svc-card reveal"
        style="background-image:url('assets/img/portfolio/g20.jpg')">
        <h3>Post-Production</h3>
        <p>From first frame to final master — edit, grade, sound and versioning, including same-day event edits.</p>
        <span class="more">Explore service →</span>
      </a>

      <!-- 5. Experiences & Activations -->
      <a href="experiences-activations.php" class="svc-card reveal"
        style="background-image:url('assets/img/portfolio/tb-icici-bank-2.jpg')">
        <h3>Experiences &amp; Activations</h3>
        <p>Brand moments people walk into, interact with and share — designed for the room and for social.</p>
        <span class="more">Explore service →</span>
      </a>

      <!-- 6. Production Management -->
      <a href="production-management.php" class="svc-card reveal"
        style="background-image:url('assets/img/portfolio/gridcon-4.jpg')">
        <h3>Production Management</h3>
        <p>The engine behind every project — crew, equipment, vendors, logistics and quality control under one
          accountable team.</p>
        <span class="more">Explore service →</span>
      </a>
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