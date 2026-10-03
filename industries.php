<?php $title='Industries | AMA Vision'; include 'includes/header.php';
$heroTitle='Built for Different Worlds'; $crumb='Industries'; $heroSub='Eleven sectors, one production discipline.'; $heroImg='conf2'; include 'includes/page-hero.php'; ?>
<section class="section"><div class="wrap">
  <div class="eyebrow reveal">Industries &amp; sectors</div>
  <h2 class="h2 reveal">Where we work</h2>
  <div class="ind-grid">
  <?php foreach($INDUSTRIES as $i): ?>
    <div class="ind-card reveal"><div style="overflow:hidden"><div class="ph" style="background-image:url('<?= isset($IMG[$i[2]]) ? img($IMG[$i[2]],700) : img($i[2],700) ?>')"></div></div><div class="tx"><h3><?= $i[0] ?></h3><p><?= $i[1] ?></p></div></div>
  <?php endforeach; ?>
  </div>
</div></section>
<?php include 'includes/footer.php'; ?>
