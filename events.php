<?php $title='Events | AMA Vision — Event Production & Execution'; include 'includes/header.php';
$heroTitle='One Vision. Complete Execution.'; $crumb='Events'; $heroSub='An execution-led event production partner — we understand the brief, build the plan, coordinate every moving part, execute on-ground and create the content the event generates.'; $heroImg='conf3'; include 'includes/page-hero.php'; ?>
<section class="section transform-section"><div class="wrap">
  <div class="eyebrow reveal">Event production</div>
  <h2 class="h2 reveal">From empty venue<br><span style="color:var(--purple-light)">to full experience.</span></h2>
  <div class="transform-flow reveal" id="flowSteps"><div class="flow-track"><div class="fill" id="flowFill"></div></div></div>
</div></section>
<section class="section"><div class="wrap">
  <div class="eyebrow reveal">Our event process</div>
  <div class="process-list" id="processList"></div>
</div></section>
<section class="section"><div class="wrap">
  <div class="eyebrow reveal">Selected event &amp; production experience</div>
  <h2 class="h2 reveal">High-visibility.<br><span class="muted">High-pressure. Delivered.</span></h2>
  <table class="ev-table reveal"><?php foreach($EVENTS as $e): ?><tr><td><?= $e[0] ?></td><td><?= $e[1] ?></td><td><?= $e[2] ?></td></tr><?php endforeach; ?></table>
</div></section>
<section class="section"><div class="wrap split">
  <div class="photo wide reveal" style="background-image:url('<?= img($IMG['lights'],1200) ?>')"></div>
  <div class="reveal reveal-delay-1">
    <div class="eyebrow">Execution principle</div>
    <p class="lead" style="margin-top:20px">Design the event not only for the stage, but for audience movement, engagement, content generation and brand visibility.</p>
    <a href="contact.php" class="btn btn-gold" style="margin-top:30px">Discuss Your Event <span class="arrow">→</span></a>
  </div>
</div></section>
<?php include 'includes/footer.php'; ?>
