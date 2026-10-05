<?php
$brandLogoDir = __DIR__ . '/../assets/img/brand-logo';
$allBrandLogos = [];
if (is_dir($brandLogoDir)) {
  $scanned = scandir($brandLogoDir);
  $validFiles = [];
  foreach ($scanned as $f) {
    if ($f !== '.' && $f !== '..' && preg_match('/\.(png|jpe?g|svg|webp)$/i', $f)) {
      $validFiles[] = $f;
    }
  }
  natsort($validFiles);
  foreach ($validFiles as $f) {
    $allBrandLogos[] = 'assets/img/brand-logo/' . $f;
  }
}

// Fallback in case scandir finds nothing
if (empty($allBrandLogos)) {
  for ($i = 1; $i <= 56; $i++) {
    $allBrandLogos[] = "assets/img/brand-logo/{$i}.png";
  }
}

$total = count($allBrandLogos);
$perRow = (int)ceil($total / 3);
$brandRows = [
  array_slice($allBrandLogos, 0, $perRow),
  array_slice($allBrandLogos, $perRow, $perRow),
  array_slice($allBrandLogos, $perRow * 2)
];
$animations = ['marquee-left', 'marquee-right', 'marquee-left-alt'];
?>

<style>
/* Client & Brand Portfolio Section */
.brand-portfolio-section {
  padding: 120px 0 110px;
  position: relative;
  overflow: hidden;
  background: var(--black, #050505);
}

.brand-portfolio-head {
  margin-bottom: 48px;
}

.brand-marquee-wrap {
  position: relative;
  width: 100%;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  gap: 18px;
  padding: 12px 0;
  -webkit-mask-image: linear-gradient(to right, transparent 0%, black 7%, black 93%, transparent 100%);
  mask-image: linear-gradient(to right, transparent 0%, black 7%, black 93%, transparent 100%);
}

.brand-marquee-row {
  display: flex;
  width: 100%;
  overflow: hidden;
  user-select: none;
}

.brand-marquee-track {
  display: flex;
  width: max-content;
  flex-shrink: 0;
  will-change: transform;
}

.brand-marquee-group {
  display: flex;
  align-items: center;
  gap: 18px;
  padding-right: 18px;
  flex-shrink: 0;
}

.brand-card {
  width: 190px;
  height: 96px;
  background: #0d0d12;
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 16px 24px;
  flex-shrink: 0;
  box-shadow: 0 4px 18px rgba(0, 0, 0, 0.28);
  transition: transform 0.3s cubic-bezier(.22,.7,.2,1), border-color 0.3s cubic-bezier(.22,.7,.2,1), background 0.3s cubic-bezier(.22,.7,.2,1), box-shadow 0.3s cubic-bezier(.22,.7,.2,1);
  cursor: pointer;
  box-sizing: border-box;
}

.brand-card img {
  max-width: 100%;
  max-height: 52px;
  width: auto;
  height: auto;
  object-fit: contain;
  display: block;
  filter: brightness(0.96) contrast(1.05);
  transition: transform 0.3s cubic-bezier(.22,.7,.2,1), filter 0.3s cubic-bezier(.22,.7,.2,1);
  pointer-events: none;
}

.brand-card:hover {
  border-color: rgba(217, 174, 94, 0.45);
  background: #14141b;
  transform: translateY(-3px) scale(1.02);
  box-shadow: 0 12px 28px rgba(0, 0, 0, 0.45), 0 0 20px rgba(217, 174, 94, 0.12);
}

.brand-card:hover img {
  transform: scale(1.05);
  filter: brightness(1.15) contrast(1.08);
}

/* Marquee Animations */
@keyframes brandMarqueeLeft {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}

@keyframes brandMarqueeRight {
  0% { transform: translateX(-50%); }
  100% { transform: translateX(0); }
}

.marquee-left {
  animation: brandMarqueeLeft 44s linear infinite;
}

.marquee-right {
  animation: brandMarqueeRight 50s linear infinite;
}

.marquee-left-alt {
  animation: brandMarqueeLeft 40s linear infinite;
}

/* Pause animation on hover */
.brand-marquee-wrap:hover .brand-marquee-track {
  animation-play-state: paused;
}

/* Responsive Styles */
@media (max-width: 900px) {
  .brand-portfolio-section {
    padding: 80px 0 70px;
  }
  .brand-portfolio-head {
    margin-bottom: 36px;
  }
  .brand-marquee-wrap {
    gap: 14px;
    -webkit-mask-image: linear-gradient(to right, transparent 0%, black 5%, black 95%, transparent 100%);
    mask-image: linear-gradient(to right, transparent 0%, black 5%, black 95%, transparent 100%);
  }
  .brand-marquee-group {
    gap: 14px;
    padding-right: 14px;
  }
  .brand-card {
    width: 155px;
    height: 82px;
    border-radius: 14px;
    padding: 12px 18px;
  }
  .brand-card img {
    max-height: 42px;
  }
}

@media (max-width: 600px) {
  .brand-portfolio-section {
    padding: 60px 0 50px;
  }
  .brand-portfolio-head {
    margin-bottom: 28px;
  }
  .brand-marquee-wrap {
    gap: 10px;
    -webkit-mask-image: linear-gradient(to right, transparent 0%, black 4%, black 96%, transparent 100%);
    mask-image: linear-gradient(to right, transparent 0%, black 4%, black 96%, transparent 100%);
  }
  .brand-marquee-group {
    gap: 10px;
    padding-right: 10px;
  }
  .brand-card {
    width: 130px;
    height: 70px;
    border-radius: 12px;
    padding: 10px 14px;
  }
  .brand-card img {
    max-height: 34px;
  }
}

@media (prefers-reduced-motion: reduce) {
  .brand-marquee-track {
    animation-play-state: paused !important;
  }
}
</style>

<section class="section brand-portfolio-section" id="client">
  <div class="wrap">
    <div class="brand-portfolio-head">
      <div class="eyebrow reveal">Client &amp; Brand Portfolio</div>
      <h2 class="reveal reveal-delay-1" style="font-size:clamp(30px,4.6vw,54px); text-transform:uppercase; margin-top:18px;">
        TRUSTED BY INDUSTRY LEADERS.
      </h2>
      <p class="reveal reveal-delay-2" style="color:var(--gray); max-width:640px; font-size:16px; margin-top:18px;">
        High-impact creative production, event coverage and branded experiences delivered for leading enterprises, government summits, global institutions and consumer brands.
      </p>
    </div>
  </div>

  <div class="brand-marquee-wrap">
    <?php foreach ($brandRows as $rIdx => $rowLogos): ?>
      <div class="brand-marquee-row">
        <div class="brand-marquee-track <?= $animations[$rIdx] ?>">
          <div class="brand-marquee-group">
            <?php foreach ($rowLogos as $logo): ?>
              <div class="brand-card">
                <img src="<?= htmlspecialchars($logo) ?>" alt="Brand Logo" loading="lazy">
              </div>
            <?php endforeach; ?>
          </div>
          <div class="brand-marquee-group" aria-hidden="true">
            <?php foreach ($rowLogos as $logo): ?>
              <div class="brand-card">
                <img src="<?= htmlspecialchars($logo) ?>" alt="" loading="lazy">
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="wrap" style="margin-top:40px;">
    <a href="clients.php" class="btn btn-ghost reveal reveal-delay-1">Explore all clients &amp; projects <span class="arrow">→</span></a>
  </div>
</section>
