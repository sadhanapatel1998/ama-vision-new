<?php $title = 'Experiences & Activations | AMA Vision';
include 'includes/header.php';
$heroTitle = 'Experiences';
$heroSub = 'Brand activations, experiential formats, mall and retail moments, launches and audience engagement.';
$heroImg = 'party';
include 'includes/page-hero.php';
$s = $SERVICES['experiences-activations']; ?>
<section class="section">
  <div class="wrap split">
    <div class="photo reveal" style="background-image:url('assets/img/banner/collage-img.jpg')"></div>
    <div class="reveal reveal-delay-1">
      <div class="eyebrow">Experiential formats</div>
      <h2 class="h2">Moments people<br>walk into.</h2>
      <ul class="list-cols" style="columns:1"><?php foreach ($s[3] as $i): ?><li><?= $i ?></li><?php endforeach; ?></ul>
    </div>
  </div>
</section>
<!-- <section class="section">
  <div class="wrap">
    <div class="eyebrow reveal">Featured experience</div>
    <div class="split" style="margin-top:30px">
      <div class="reveal">
        <h2 class="h2" style="margin:0 0 20px">Times Black × ICICI Bank — Red Fort</h2>
        <p class="muted">A luxury experiential evening in one of India's most iconic heritage settings — designed for guest flow, brand visibility and content.</p>
      </div>
      <div class="photo wide reveal reveal-delay-1" style="background-image:url('<?= img($IMG['party'], 1200) ?>')"></div>
    </div>
  </div>
</section> -->
<section class="section">
  <div class="wrap">

    <div class="eyebrow reveal">Featured Experience</div>

    <div class="featured-grid" style="margin-top:30px">

      <!-- Card 1 -->
      <div class="featured-card reveal">
        <div class="featured-image"
          style="background-image:url('assets/img/portfolio/g20.jpg')">
        </div>

        <div class="featured-content">
          <h2>G20 Summit</h2>
          <p>
            High-protocol international summit experience designed for
            seamless production, guest flow, visibility and content.
          </p>
        </div>
      </div>


      <!-- Card 2 -->
      <div class="featured-card reveal reveal-delay-1">
        <div class="featured-image"
          style="background-image:url('assets/img/portfolio/red-fort.jpg')">
        </div>

        <div class="featured-content">
          <h2>Times Black × ICICI Bank — Red Fort</h2>
          <p>
            A luxury experiential evening in one of India's most iconic
            heritage settings — designed for guest flow, brand visibility
            and content.
          </p>
        </div>
      </div>


      <!-- Card 3 -->
      <div class="featured-card reveal reveal-delay-2">
        <div class="featured-image"
          style="background-image:url('assets/img/portfolio/iew-2026.jpg')">
        </div>

        <div class="featured-content">
          <h2>India Energy Week</h2>
          <p>
            2024, 2025 &amp; 2026 — Large-scale energy events, conference production, live experiences and on-ground execution.
          </p>
        </div>
      </div>


      <!-- Card 4 -->
      <div class="featured-card reveal reveal-delay-3">
        <div class="featured-image"
          style="background-image:url('assets/img/portfolio/brics.jpg')">
        </div>

        <div class="featured-content">
          <h2>BRICS Summit</h2>
          <p>
            High-profile international summit production with a focus on
            protocol, visual communication and seamless execution.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>
<?php include 'includes/footer.php'; ?>