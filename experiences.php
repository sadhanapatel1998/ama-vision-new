<?php $title='Experiences & Activations | AMA Vision'; include 'includes/header.php';
$heroTitle='Experiences'; $heroSub='Brand activations, experiential formats, mall and retail moments, launches and audience engagement.'; $heroImg='party'; include 'includes/page-hero.php';
$s=$SERVICES['experiences-activations']; ?>
<section class="section"><div class="wrap split">
  <div class="photo reveal" style="background-image:url('<?= img($IMG['concert'],1000) ?>')"></div>
  <div class="reveal reveal-delay-1">
    <div class="eyebrow">Experiential formats</div>
    <h2 class="h2">Moments people<br>walk into.</h2>
    <ul class="list-cols" style="columns:1"><?php foreach($s[3] as $i): ?><li><?= $i ?></li><?php endforeach; ?></ul>
  </div>
</div></section>
<section class="section"><div class="wrap">
  <div class="eyebrow reveal">Featured experience</div>
  <div class="split" style="margin-top:30px">
    <div class="reveal"><h2 class="h2" style="margin:0 0 20px">Times Black × ICICI Bank — Red Fort</h2><p class="muted">A luxury experiential evening in one of India's most iconic heritage settings — designed for guest flow, brand visibility and content.</p></div>
    <div class="photo wide reveal reveal-delay-1" style="background-image:url('<?= img($IMG['party'],1200) ?>')"></div>
  </div>
</div></section>
<?php include 'includes/footer.php'; ?>
