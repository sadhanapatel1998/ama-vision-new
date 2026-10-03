<?php $title='About AMA Vision | Creative Production Company, Delhi-NCR'; include 'includes/header.php';
$heroTitle='About AMA Vision'; $heroSub='One partner. One workflow. One accountable team — from idea and planning to production, post-production, delivery and distribution.'; $heroImg='conf'; include 'includes/page-hero.php'; ?>
<section class="section"><div class="wrap split">
  <div class="reveal">
    <div class="eyebrow">Our story</div>
    <h2 class="h2">Creative thinking.<br>Real-world execution.</h2>
    <p class="lead">AMA Vision is an integrated creative production company based in Delhi-NCR with Pan-India execution capability.</p>
    <p class="muted" style="margin-top:20px">We work across visual storytelling, event production, branded content, digital media and end-to-end production. With more than four years of production experience, the team has worked across government and public-sector environments, energy and infrastructure, corporate events, branded experiences, fashion and lifestyle, hospitality, retail, education, real estate, FMCG, technology and entertainment.</p>
  </div>
  <div class="photo reveal reveal-delay-1" style="background-image:url('<?= img($IMG['crowd'],1000) ?>')"></div>
</div></section>

<section class="section" style="padding-top:0"><div class="wrap">
  <div class="num-strip reveal">
    <div><strong>4+</strong><span>Years of production experience</span></div>
    <div><strong>6</strong><span>Integrated service lines</span></div>
    <div><strong>11</strong><span>Industries served</span></div>
    <div><strong>Pan-India</strong><span>Delhi-NCR base, national execution</span></div>
  </div>
</div></section>

<section class="section"><div class="wrap">
  <div class="eyebrow reveal">Founder</div>
  <div class="founder-grid">
    <div class="founder-portrait reveal reveal-delay-1" style="background:url('<?= img($IMG['cam3'],900) ?>') center/cover"></div>
    <div class="reveal reveal-delay-2">
      <h2 class="founder-name">AMAN SINGH</h2>
      <div class="founder-title">Founder &amp; Creative Director</div>
      <div class="founder-bio">
        <p>Aman leads AMA Vision with a production-first mindset, combining cinematography, editing, creative direction and hands-on execution.</p>
        <p>His experience spans high-visibility government and corporate environments, including G20, India Energy Week, GRIDCON, government documentary work, corporate events, brand campaigns and lifestyle productions.</p>
      </div>
      <p class="quote">“AMA Vision was built around a simple belief: great ideas deserve great execution. We bring creative thinking, production discipline and visual storytelling together so clients have one team that can take a project from the first conversation to the final frame.”</p>
    </div>
  </div>
</div></section>

<section class="section"><div class="wrap">
  <div class="eyebrow reveal">Why AMA Vision</div>
  <h2 class="h2 reveal">Built to deliver.</h2>
  <div class="why-grid reveal"><?php foreach($WHY as $w): ?><div><h3><?= $w[0] ?></h3><p><?= $w[1] ?></p></div><?php endforeach; ?></div>
</div></section>

<section class="section"><div class="wrap">
  <div class="eyebrow reveal">How we work</div>
  <div class="process-list" id="processList"></div>
</div></section>

<section class="section"><div class="wrap">
  <div class="eyebrow reveal">Built by creatives. Executed by a team.</div>
  <h2 class="h2 reveal">A multidisciplinary team.</h2>
  <div class="cap-grid reveal" id="capGrid"></div>
</div></section>
<?php include 'includes/footer.php'; ?>
