<?php include __DIR__.'/header.php'; $s=$SERVICES[$slug];
$heroTitle=$s[0]; $heroSub=$s[2]; $heroImg=$s[1]; $crumb='<a href="services.php">Services</a> / '.$s[0]; include __DIR__.'/page-hero.php'; ?>
<section class="section"><div class="wrap split" style="align-items:start">
  <div class="reveal">
    <div class="eyebrow">What's included</div>
    <h2 class="h2">Scope of work</h2>
    <ul class="list-cols" style="columns:1"><?php foreach($s[3] as $i): ?><li><?= $i ?></li><?php endforeach; ?></ul>
  </div>
  <div class="reveal reveal-delay-1">
    <div class="photo" style="background-image:url('<?= img($IMG[$s[1]],1000) ?>')"></div>
    <p class="quote" style="font-size:24px">Design not only for the stage — but for audience movement, engagement, content generation and brand visibility.</p>
  </div>
</div></section>
<section class="section"><div class="wrap">
  <div class="eyebrow reveal">Other services</div>
  <div class="svc-grid" style="margin-top:30px">
  <?php $n=0; foreach($SERVICES as $k=>$o): if($k===$slug || $n++>=3) continue; ?>
    <a href="<?= $k ?>.php" class="svc-card reveal" style="min-height:300px;background-image:url('<?= img($IMG[$o[1]],800) ?>')"><h3><?= $o[0] ?></h3><span class="more">View →</span></a>
  <?php endforeach; ?>
  </div>
</div></section>
<?php include __DIR__.'/footer.php'; ?>
