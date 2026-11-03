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

<!-- ══════════════════════════════════════════
     PER-CARD SLIDER STYLES
     ══════════════════════════════════════════ -->
<style>
    /* ── Per-card prev / next buttons ── */
    .wc-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-60%);
        /* slightly above centre so they clear the text overlay */
        z-index: 20;
        background: rgba(5, 5, 5, 0.62);
        border: 1px solid rgba(255, 255, 255, 0.14);
        color: #fff;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        font-size: 15px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background .22s, border-color .22s, transform .22s;
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
        line-height: 1;
        padding: 0;
    }

    .wc-btn:hover {
        background: rgba(217, 174, 94, .28);
        border-color: rgba(217, 174, 94, .55);
        transform: translateY(-60%) scale(1.08);
    }

    .wc-prev {
        left: 12px;
    }

    .wc-next {
        right: 12px;
    }

    /* ── Dot indicators ── */
    .wc-dots {
        position: absolute;
        bottom: 12px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        align-items: center;
        gap: 7px;
        z-index: 20;
    }

    .wc-dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.32);
        border: none;
        cursor: pointer;
        padding: 0;
        transition: background .22s, transform .22s;
    }

    .wc-dot.active {
        background: #d9ae5e;
        transform: scale(1.35);
    }

    .wc-dot:hover {
        background: rgba(255, 255, 255, .65);
    }

    /* ── Smooth image transition on .work-visual ── */
    .work-card .work-visual {
        transition: background-image .35s ease;
    }

    /* ── Responsive tweaks ── */
    @media (max-width: 640px) {
        .wc-btn {
            width: 32px;
            height: 32px;
            font-size: 12px;
        }

        .wc-dots {
            bottom: 8px;
            gap: 5px;
        }

        .wc-dot {
            width: 6px;
            height: 6px;
        }
    }
</style>

<!-- ══════════════════════════════════════════
     PER-CARD INDEPENDENT SLIDER — JAVASCRIPT
     Each card manages its own current index.
     Clicking Next on Card A only affects Card A.
     ══════════════════════════════════════════ -->
<script>
    (function () {
        'use strict';

        /* ── Initialise every card that has a data-gallery attribute ── */
        document.querySelectorAll('.work-card[data-gallery]').forEach(function (card, cardIdx) {

            /* Parse gallery JSON */
            var gallery;
            try {
                gallery = JSON.parse(card.getAttribute('data-gallery'));
            } catch (e) { return; }

            if (!Array.isArray(gallery) || gallery.length === 0) return;

            /* Single-image cards: nothing to do (controls not rendered by PHP) */
            if (gallery.length === 1) return;

            /* ── State ── */
            var cur = 0;
            var total = gallery.length;
            var visual = card.querySelector('.work-visual');
            var grad = card.getAttribute('data-grad') || '';
            var dots = Array.from(card.querySelectorAll('.wc-dot'));
            var prevBtn = card.querySelector('.wc-prev');
            var nextBtn = card.querySelector('.wc-next');

            /* ── Core: go to slide n ── */
            function goTo(n) {
                cur = ((n % total) + total) % total;
                /* Update background */
                visual.style.background =
                    "linear-gradient(0deg,rgba(5,5,5,.38),rgba(5,5,5,.08)),url('"
                    + gallery[cur]
                    + "') center/cover,"
                    + grad;
                /* Sync dots */
                dots.forEach(function (d, i) {
                    d.classList.toggle('active', i === cur);
                });
            }

            /* ── Controls ── */
            if (prevBtn) {
                prevBtn.addEventListener('click', function (e) {
                    e.stopPropagation();
                    goTo(cur - 1);
                    resetTimer();
                });
            }
            if (nextBtn) {
                nextBtn.addEventListener('click', function (e) {
                    e.stopPropagation();
                    goTo(cur + 1);
                    resetTimer();
                });
            }
            dots.forEach(function (dot) {
                dot.addEventListener('click', function (e) {
                    e.stopPropagation();
                    goTo(parseInt(dot.getAttribute('data-idx'), 10));
                    resetTimer();
                });
            });

            /* ── Auto-advance every 4 s (pauses on hover) ── */
            var timer = setInterval(function () { goTo(cur + 1); }, 4000);
            function resetTimer() {
                clearInterval(timer);
                timer = setInterval(function () { goTo(cur + 1); }, 4000);
            }
            card.addEventListener('mouseenter', function () { clearInterval(timer); });
            card.addEventListener('mouseleave', function () { resetTimer(); });

            /* ── Touch / swipe support ── */
            var touchX = 0;
            card.addEventListener('touchstart', function (e) {
                touchX = e.touches[0].clientX;
            }, { passive: true });
            card.addEventListener('touchend', function (e) {
                var dx = e.changedTouches[0].clientX - touchX;
                if (Math.abs(dx) > 40) {
                    goTo(dx < 0 ? cur + 1 : cur - 1);
                    resetTimer();
                }
            });
        });

        /* ── Category filter (show/hide cards in the grid) ── */
        var filtersEl = document.getElementById('wpFilters');
        if (filtersEl) {
            filtersEl.addEventListener('click', function (e) {
                var btn = e.target.closest('.filter-btn');
                if (!btn) return;
                filtersEl.querySelectorAll('.filter-btn').forEach(function (b) {
                    b.classList.remove('active');
                });
                btn.classList.add('active');
                var cat = btn.getAttribute('data-cat');
                document.querySelectorAll('#workGrid .work-card').forEach(function (card) {
                    var cats = (card.getAttribute('data-cats') || card.getAttribute('data-cat') || '')
                        .split(',').map(function (s) { return s.trim().toLowerCase(); });
                    var show = cat === 'All' || cats.indexOf(cat.toLowerCase()) > -1;
                    card.classList.toggle('hide', !show);
                });
            });
        }

    })();
</script>

<?php include 'includes/footer.php'; ?>