<?php 
$title = 'Work & Case Studies | AMA Vision';
include 'includes/header.php';
$heroTitle = 'Work / Case Studies';
$heroSub = 'Selected productions across government, energy, corporate and experiential environments.';
$heroImg = 'concert';
include 'includes/page-hero.php'; 
?>
<section class="section work-section">
    <div class="wrap">
        <div class="eyebrow reveal">Selected work</div>
        <h2 class="h2 reveal">From concept<br><span class="muted">to delivery.</span></h2>
        <div class="filters reveal" id="filters"></div>
        <div class="work-grid" id="workGrid"></div>
    </div>
</section>
<section class="section reel-section">
    <div class="wrap">
        <div class="eyebrow reveal">Showreel</div>
        <h2 class="h2 reveal">See the vision<br><span class="muted">in motion.</span></h2>
        <div class="reel-player reveal" id="reelPlayer"
            style="background:linear-gradient(0deg,rgba(5,5,5,.5),rgba(5,5,5,.2)),url('<?= img($IMG['film'], 1800) ?>') center/cover">
            <div class="play-btn"></div>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>