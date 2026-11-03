<?php
$title = 'AMA Vision | Creative Production, Events, Films & Digital Content';
include 'includes/header.php';
?>
<!-- ================= HERO ================= -->
<section class="hero" id="top">
    <div class="hero-bg"></div>
    <div class="hero-media" style="background-image:url('assets/img/banner/banner-5.jpg')"></div>
    <div class="hero-orb orb1"></div>
    <div class="hero-orb orb2"></div>
    <div class="hero-orb orb3"></div>
    <div class="hero-scanlines"></div>

    <div class="wrap hero-content">
        <img src="assets/img/logo-mark.png" alt="AMA Vision" class="hero-logo">
        <div class="hero-tag"><span>Creative Production &nbsp;·&nbsp; Events &nbsp;·&nbsp; Films &nbsp;·&nbsp; Digital
                Content</span></div>
        <h1>
            <span class="line"><span>BRING YOUR VISION</span></span>
            <span class="line"><span>TO LIFE.</span></span>
        </h1>
        <p class="hero-sub">AMA Vision turns ideas into high-impact productions, experiences and content — from concept
            to execution.</p>
        <div class="hero-ctas">
            <a href="contact.php" class="btn btn-primary">Start a Project <span class="arrow">→</span></a>
            <a href="work.php" class="btn btn-ghost">View Our Work</a>
        </div>
        <div class="hero-ticker">
            <div class="track">
                <span>CREATIVE PRODUCTION</span><span class="dot">•</span><span>EVENTS</span><span
                    class="dot">•</span><span>FILMS</span><span class="dot">•</span><span>DIGITAL CONTENT</span><span
                    class="dot">•</span><span>EXPERIENCES</span><span class="dot">•</span>
                <span>CREATIVE PRODUCTION</span><span class="dot">•</span><span>EVENTS</span><span
                    class="dot">•</span><span>FILMS</span><span class="dot">•</span><span>DIGITAL CONTENT</span><span
                    class="dot">•</span><span>EXPERIENCES</span><span class="dot">•</span>
            </div>
        </div>
    </div>
    <div class="scroll-ind"><span>Scroll</span>
        <div class="stem"></div>
    </div>
</section>

<!-- ================= INTRO / POSITIONING ================= -->
<section class="section" id="about">
    <div class="wrap">
        <div class="eyebrow reveal">What we do</div>
        <div class="intro-grid">
            <h2 class="intro-statement reveal reveal-delay-1">ONE PARTNER. <em>ONE WORKFLOW.</em></h2>
            <div class="intro-copy reveal reveal-delay-2">
                <p>AMA Vision is an integrated creative production company based in Delhi-NCR with Pan-India execution
                    capability — across visual storytelling, event production, branded content and digital media.</p>
                <p>The core proposition is simple: bring creative thinking and real-world production execution together
                    under one accountable team — from idea and planning to production, post-production, delivery and
                    content distribution.</p>
            </div>
        </div>
    </div>
</section>

<!-- ================= Showreel ================= -->
<section class="section reel-section py-0">
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


<section class="section" id="services">
    <div class="wrap">
        <div class="services-head reveal">
            <h2>ONE VISION.<br><span class="grey">COMPLETE EXECUTION.</span></h2>
        </div>
        <div class="services-list" id="servicesList"></div>
        <div style="margin-top:40px"><a href="services.php" class="btn btn-gold">Explore all services <span
                    class="arrow">→</span></a></div>
    </div>
</section>

<!-- ================= AMA DIFFERENCE ================= -->
<section class="section diff-section">
    <div class="wrap">
        <div class="diff-head reveal">
            <div class="eyebrow" style="justify-content:center; margin-bottom:20px;">The AMA difference</div>
            <h2>ONE ACCOUNTABLE TEAM.</h2>
            <p style="color:var(--gray); margin-top:20px;">Creative, production and post-production under one roof —
                execution-led, scalable, content-first and client-focused, with Pan-India reach.</p>
        </div>
        <div class="diff-diagram reveal reveal-delay-1">
            <div class="diff-node"><span>Creative</span></div>
            <div class="diff-line"></div>
            <div class="diff-node"><span>Production</span></div>
            <div class="diff-line"></div>
            <div class="diff-node"><span>Technical</span></div>
            <div class="diff-line"></div>
            <div class="diff-node"><span>Content</span></div>
            <div class="diff-line"></div>
            <div class="diff-node"><span>Event</span></div>
            <div class="diff-line"></div>
            <div class="diff-node"><span>Post</span></div>
        </div>

    </div>
</section>

<!-- ================= WORK / PORTFOLIO ================= -->
<section class="section work-section">
    <div class="wrap">
        <div class="eyebrow reveal">Selected work</div>
        <h2 class="h2 reveal">
            From concept<br>
            <span class="muted">to delivery.</span>
        </h2>
        <!-- ─── Work Grid : ONLY FIRST 4 ─── -->
        <div class="work-grid" id="homeWorkGrid">
            <?php
            /*
             * Show ONLY first 4 works on homepage.
             * Full $works array remains available on work.php.
             */
            foreach (array_slice($works, 0, 4) as $_i => $_work):
                $_gallery = !empty($_work['gallery'])
                    ? $_work['gallery']
                    : (isset($_work['image']) ? [$_work['image']] : []);

                $_imgCount = count($_gallery);
                $_firstImg = $_imgCount > 0
                    ? htmlspecialchars($_gallery[0])
                    : '';
                $_grads = [
                    'linear-gradient(135deg,#24103D,#6D35A8)',
                    'linear-gradient(135deg,#111114,#24103D)',
                    'linear-gradient(135deg,#18181D,#6D35A8)',
                    'linear-gradient(135deg,#0A0A0D,#24103D)',
                    'linear-gradient(135deg,#24103D,#18181D)',
                    'linear-gradient(135deg,#111114,#6D35A8)',
                ];
                $_grad = $_grads[$_i % count($_grads)];
                $_cats = implode(',', $_work['categories']);
                $_galleryJson = htmlspecialchars(
                    json_encode($_gallery, JSON_UNESCAPED_SLASHES),
                    ENT_QUOTES
                );
                ?>
                <div class="work-card" data-cat="<?= htmlspecialchars($_work['category']) ?>"
                    data-cats="<?= htmlspecialchars($_cats) ?>" data-gallery="<?= $_galleryJson ?>"
                    data-grad="<?= htmlspecialchars($_grad) ?>">
                    <!-- Background visual -->
                    <div class="work-visual" style="background:
                            <?= $_firstImg
                                ? "linear-gradient(0deg,rgba(5,5,5,.38),rgba(5,5,5,.08)),url('{$_firstImg}') center/cover,"
                                : ''
                                ?>
                            <?= $_grad ?>;"></div>
                    <!-- Text overlay -->
                    <div class="work-overlay">

                        <div class="work-meta">
                            <span>
                                <?= htmlspecialchars($_work['category']) ?>
                            </span>
                            <span>
                                <?= htmlspecialchars($_work['year']) ?>
                            </span>
                        </div>
                        <div class="work-title">
                            <?= htmlspecialchars($_work['title']) ?>
                        </div>
                        <div class="work-meta" style="margin-bottom:0;">
                            <span>
                                <?= htmlspecialchars($_work['client']) ?>
                            </span>
                            <span>
                                <?= htmlspecialchars($_work['location']) ?>
                            </span>
                        </div>
                        <div class="work-desc">
                            <?= htmlspecialchars($_work['description']) ?>
                        </div>
                    </div>

                    <?php if ($_imgCount > 1): ?>
                        <!-- Previous -->
                        <button type="button" class="wc-btn wc-prev" aria-label="Previous image">
                            &#10094;
                        </button>
                        <!-- Next -->
                        <button type="button" class="wc-btn wc-next" aria-label="Next image">
                            &#10095;
                        </button>
                        <!-- Dots -->
                        <div class="wc-dots">
                            <?php for ($_d = 0; $_d < $_imgCount; $_d++): ?>

                                <button type="button" class="wc-dot<?= $_d === 0 ? ' active' : '' ?>" data-idx="<?= $_d ?>"
                                    aria-label="Image <?= $_d + 1 ?>"></button>

                            <?php endfor; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>


        <!-- VIEW ALL WORK -->
        <div style="margin-top:40px"><a href="work.php" class="btn btn-ghost">View all work</a></div>

    </div>
</section>
<!-- ================= EVENT PRODUCTION FEATURE ================= -->
<section class="section transform-section" id="events">
    <div class="wrap">
        <div class="eyebrow reveal">Event production</div>
        <h2 class="reveal reveal-delay-1"
            style="font-size:clamp(32px,6vw,72px); text-transform:uppercase; margin-top:18px;">FROM EMPTY VENUE<br><span
                style="color:var(--purple-light);">TO FULL EXPERIENCE.</span></h2>
        <p class="reveal reveal-delay-2" style="color:var(--gray); max-width:520px; margin-top:24px;">Design the event
            not only for the stage, but for audience movement, engagement, content generation and brand visibility.</p>

        <div class="transform-flow reveal reveal-delay-3" id="flowSteps">
            <div class="flow-track">
                <div class="fill" id="flowFill"></div>
            </div>
        </div>
    </div>
</section>

<!-- ================= PROCESS ================= -->
<section class="section" id="process">
    <div class="wrap">
        <div class="eyebrow reveal">How we work</div>
        <div class="process-list" id="processList"></div>
    </div>
</section>
<!-- =========================================================
     CLIENT & BRAND PORTFOLIO
========================================================= -->

<section id="client" class="av-client-marquee-section">
    <div class="wrap">
        <div class="av-client-marquee-wrap">

            <!-- Heading -->
            <div class="eyebrow reveal av-client-eyebrow">
                Client & Brand Portfolio
            </div>

            <h2 class="reveal reveal-delay-1 av-client-title text-start">
                Brands We Have Worked With.
            </h2>

            <div class="av-client-marquee av-client-marquee-row-1">

                <div class="av-client-marquee-track" id="avClientRow1"></div>

            </div>
            <div class="av-client-marquee av-client-marquee-row-2">

                <div class="av-client-marquee-track" id="avClientRow2"></div>

            </div>

        </div>
    </div>
</section>

<!-- ================= CAPABILITIES ================= -->
<section class="section">
    <div class="wrap">
        <div class="eyebrow reveal">Built by creatives. Executed by a team.</div>
        <h2 class="reveal reveal-delay-1"
            style="font-size:clamp(30px,4.6vw,54px); text-transform:uppercase; margin-top:18px;">A MULTIDISCIPLINARY
            TEAM.</h2>
        <div class="cap-grid reveal reveal-delay-2" id="capGrid"></div>
    </div>
</section>

<!-- ================= FOUNDER ================= -->
<section class="section">
    <div class="wrap">
        <div class="eyebrow reveal">Founder's note</div>
        <div class="founder-grid">
            <!-- <div class="founder-portrait reveal reveal-delay-1" style="background:url('<?= img($IMG['cam3'], 900) ?>') center/cover"></div> -->
            <div class="reveal reveal-delay-2">
                <h2 class="founder-name">AMAN SINGH</h2>
                <div class="founder-title">Founder &amp; Creative Director</div>
                <div class="founder-bio">
                    <p>Aman leads AMA Vision with a production-first mindset, combining cinematography, editing,
                        creative direction and hands-on execution.</p>
                    <p>His experience spans high-visibility government and corporate environments — G20, India Energy
                        Week, GRIDCON, government documentary work, corporate events, brand campaigns and lifestyle
                        productions.</p>
                </div>
                <div class="founder-quote">"Great ideas deserve great execution."<a href="about.php"
                        class="btn btn-ghost" style="margin-top:30px">About AMA Vision</a></div>
            </div>
        </div>
    </div>
</section>

<!-- ================= CLIENTS ================= -->
<section class="section" id="clients">
    <div class="wrap">
        <div class="eyebrow reveal">Trusted to create</div>
        <h2 class="reveal reveal-delay-1"
            style="font-size:clamp(30px,4.6vw,54px); text-transform:uppercase; margin-top:18px;">BUILT TO DELIVER.</h2>
        <div class="client-wall reveal reveal-delay-2" id="clientWall"></div>
        <div style="margin-top:30px"><a href="clients.php" class="btn btn-ghost">Client &amp; brand ecosystem</a></div>
    </div>
</section>

<!-- ================= INDUSTRIES ================= -->
<section class="section">
    <div class="wrap">
        <div class="eyebrow reveal">Where we work</div>
        <h2 class="reveal reveal-delay-1"
            style="font-size:clamp(30px,4.6vw,54px); text-transform:uppercase; margin-top:18px;">BUILT FOR DIFFERENT
            WORLDS.</h2>
        <p class="muted" style="max-width:560px;margin-top:16px">15+ industries — from high-protocol government summits
            to lifestyle, retail and entertainment.</p>
        <div class="ww-grid reveal reveal-delay-2">
            <?php foreach ($INDUSTRIES as $n => $i): ?>
                <a href="industries.php" class="ww-tile<?= $n === 0 ? ' big' : '' ?>"
                    style="background-image:url('<?= isset($IMG[$i[2]]) ? img($IMG[$i[2]], 800) : img($i[2], 800) ?>')">
                    <span class="ww-no"><?= str_pad($n + 1, 2, '0', STR_PAD_LEFT) ?></span>
                    <div>
                        <h3><?= $i[0] ?></h3>
                        <p><?= $i[1] ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        <div style="margin-top:36px"><a href="industries.php" class="btn btn-ghost">Explore industries</a></div>
    </div>
</section>

<!-- ================= SHOWREEL ================= -->
<!-- <section class="section reel-section">
    <div class="wrap">
        <div class="eyebrow reveal">Showreel</div>
        <h2 class="reveal reveal-delay-1"
            style="font-size:clamp(30px,4.6vw,54px); text-transform:uppercase; margin-top:18px;">SEE THE VISION<br><span
                style="color:var(--gray);">IN MOTION.</span></h2>
        <div class="reel-player reveal reveal-delay-2" id="reelPlayer"
            style="background-image: url(assets/img/banner/banner-2.jpg);">
            <div class="play-btn"></div>
        </div>
    </div>
</section> -->

<?php include 'includes/footer.php'; ?>