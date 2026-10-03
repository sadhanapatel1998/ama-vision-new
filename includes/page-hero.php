<section class="page-hero" style="background-image:linear-gradient(180deg,rgba(5,5,5,.55),rgba(5,5,5,.92)),url('<?= img($IMG[$heroImg ?? 'stage']) ?>')">
  <div class="wrap">
    <div class="crumb"><a href="index.php">Home</a> / <?= $crumb ?? $heroTitle ?></div>
    <h1><?= $heroTitle ?></h1>
    <?php if(!empty($heroSub)): ?><p><?= $heroSub ?></p><?php endif; ?>
  </div>
</section>
