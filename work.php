<?php
$title = 'Work & Case Studies | AMA Vision';
include 'includes/header.php';
$heroTitle = 'Work / Case Studies';
$heroSub = 'Selected productions across government, energy, corporate and experiential environments.';
$heroImg = 'concert';
include 'includes/page-hero.php';

/* ─── Build unique filter categories from $works ─── */
$_filterCats = ['All'];
foreach ($works as $_w) {
    foreach ($_w['categories'] as $_c) {
        if (!in_array($_c, $_filterCats))
            $_filterCats[] = $_c;
    }
}

/* ─── Gradient palette (cycles automatically) ─── */
$_grads = [
    'linear-gradient(135deg,#24103D,#6D35A8)',
    'linear-gradient(135deg,#111114,#24103D)',
    'linear-gradient(135deg,#18181D,#6D35A8)',
    'linear-gradient(135deg,#0A0A0D,#24103D)',
    'linear-gradient(135deg,#24103D,#18181D)',
    'linear-gradient(135deg,#111114,#6D35A8)',
];
?>

<!-- ================= WORK / PORTFOLIO ================= -->
<section class="section work-section">
    <div class="wrap">
        <div class="eyebrow reveal">Selected work</div>
        <h2 class="h2 reveal">From concept<br><span class="muted">to delivery.</span></h2>

        <!-- Filter buttons (auto-built from PHP categories) -->
        <div class="filters reveal" id="wpFilters">
            <?php foreach ($_filterCats as $_ci => $_cat): ?>
                <button class="filter-btn<?= $_ci === 0 ? ' active' : '' ?>" data-cat="<?= htmlspecialchars($_cat) ?>">
                    <?= htmlspecialchars($_cat) ?>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- ─── Work Grid ─── -->
        <div class="work-grid" id="workGrid">
            <?php foreach ($works as $_i => $_work):
                /* Resolve gallery: use 'gallery' key if available, else fall back to single 'image' */
                $_gallery = !empty($_work['gallery'])
                    ? $_work['gallery']
                    : (isset($_work['image']) ? [$_work['image']] : []);
                $_imgCount = count($_gallery);
                $_firstImg = $_imgCount > 0 ? htmlspecialchars($_gallery[0]) : '';
                $_grad = $_grads[$_i % count($_grads)];
                $_cats = implode(',', $_work['categories']);

                /* Encode gallery for JS (escaped for HTML attribute safety) */
                $_galleryJson = htmlspecialchars(
                    json_encode($_gallery, JSON_UNESCAPED_SLASHES),
                    ENT_QUOTES
                );
                ?>
                <div class="work-card" data-cat="<?= htmlspecialchars($_work['category']) ?>"
                    data-cats="<?= htmlspecialchars($_cats) ?>" data-gallery="<?= $_galleryJson ?>"
                    data-grad="<?= htmlspecialchars($_grad) ?>">

                    <!-- Background visual (first image shown by default) -->
                    <div class="work-visual" style="background:<?= $_firstImg
                        ? "linear-gradient(0deg,rgba(5,5,5,.38),rgba(5,5,5,.08)),url('{$_firstImg}') center/cover,"
                        : '' ?><?= $_grad ?>;"></div>

                    <!-- Text overlay -->
                    <div class="work-overlay">
                        <div class="work-meta">
                            <span><?= htmlspecialchars($_work['category']) ?></span>
                            <span><?= htmlspecialchars($_work['year']) ?></span>
                        </div>
                        <div class="work-title"><?= htmlspecialchars($_work['title']) ?></div>
                        <div class="work-meta" style="margin-bottom:0;">
                            <span><?= htmlspecialchars($_work['client']) ?></span>
                            <span><?= htmlspecialchars($_work['location']) ?></span>
                        </div>
                        <div class="work-desc"><?= htmlspecialchars($_work['description']) ?></div>
                    </div>

                    <?php if ($_imgCount > 1): ?>
                        <!-- ─── Per-card image slider controls (only when >1 image) ─── -->
                        <button type="button" class="wc-btn wc-prev" aria-label="Previous image">&#10094;</button>
                        <button type="button" class="wc-btn wc-next" aria-label="Next image">&#10095;</button>
                        <div class="wc-dots">
                            <?php for ($_d = 0; $_d < $_imgCount; $_d++): ?>
                                <button type="button" class="wc-dot<?= $_d === 0 ? ' active' : '' ?>" data-idx="<?= $_d ?>"
                                    aria-label="Image <?= $_d + 1 ?>"></button>
                            <?php endfor; ?>
                        </div>
                    <?php endif; ?>

                </div><!-- /.work-card -->

            <?php endforeach; ?>

        </div><!-- /#workGrid -->
    </div>
</section>

<!-- ================= SHOWREEL ================= -->
<section class="section reel-section">
    <div class="wrap">
        <div class="eyebrow reveal">Showreel</div>
        <h2 class="h2 reveal">
            See the vision<br>
            <span class="muted">in motion.</span>
        </h2>
        <div class="reel-player reveal" id="reelPlayer">
            <video id="reelVideo" class="reel-video" preload="auto" playsinline webkit-playsinline>
                <source src="assets/img/ama-vision-video.mp4" type="video/mp4">
            </video>
            <div class="reel-overlay"></div>
            <button type="button" class="reel-play-button" id="reelPlayButton" aria-label="Play video">
                <span class="reel-play-icon"></span>
            </button>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>