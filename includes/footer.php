<?php
require_once __DIR__ . '/data.php';
?>
</main>
<section class="section cta-section">
  <div class="hero-orb orb2" style="left:50%; top:-100px;"></div>
  <div class="wrap">
    <h2 class="reveal">HAVE AN IDEA?</h2>
    <p class="reveal reveal-delay-1">Let's bring your vision to life — from the first conversation to the final frame.
    </p>
    <div class="cta-buttons reveal reveal-delay-2">
      <a href="contact.php" class="btn btn-gold">Start a Project <span class="arrow">→</span></a>
      <a href="contact.php" class="btn btn-ghost">Talk to AMA Vision</a>
    </div>
  </div>
</section>
<footer>
  <div class="wrap">
    <div class="footer-top">
      <div>
        <img src="assets/img/logo-full.png" alt="AMA Vision — Bring your vision to life" class="footer-logo">
        <p class="footer-tag" style="max-width:300px">Integrated creative production — events, films, digital content
          and experiences.</p>
      </div>
      <div class="footer-cols">
        <div class="footer-col">
          <h4>Company</h4>
          <ul>
            <li><a href="about.php">About Us</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="work.php">Work</a></li>
            <li><a href="clients.php">Clients</a></li>
            <li><a href="industries.php">Industries</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Services</h4>
          <ul>
            <?php foreach ($SERVICES as $k => $s): ?>
              <li><a href="<?= $k ?>.php"><?= $s[0] ?></a></li><?php endforeach; ?>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Contact</h4>
          <ul>
            <li><a href="mailto:<?= $site['email'] ?>"><?= $site['email'] ?></a></li>
            <li><a href="mailto:<?= $site['email2'] ?>"><?= $site['email2'] ?></a></li>
            <li><a href="<?= $site['instagram'] ?>" target="_blank" rel="noopener"><?= $site['instagram_handle'] ?></a>
            </li>
            <li><span style="font-size:14px;color:var(--gray)"><?= $site['location'] ?></span></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom"><span>© <?= date('Y') ?> AMA Vision. All Rights Reserved.</span><span>Bring your vision
        to life.</span></div>
  </div>
</footer>
<script src="assets/js/data.js?v=<?= filemtime(__DIR__ . "/../assets/js/data.js") ?>"></script>
<script src="assets/js/main.js?v=<?= filemtime(__DIR__ . "/../assets/js/main.js") ?>"></script>

<script>

document.addEventListener("DOMContentLoaded", function () {

    const player = document.getElementById("reelPlayer");
    const video = document.getElementById("reelVideo");
    const testButton = document.getElementById("testSound");
    const status = document.getElementById("soundStatus");

    if (!player || !video) return;

    let isVisible = false;

    // Auto audio activator — tries to unmute without any tap
    function activateAudio() {
        if (!isVisible) return;
        if (video.muted) {
            video.muted = false;
            video.volume = 1;
        }
        if (video.paused) {
            video.play().catch(function () {
                // If browser blocks unmuted play, fallback to muted so video doesn't stop
                video.muted = true;
                video.play().catch(function () {});
            });
        }
    }

    // Har scroll, swipe, touch, wheel ya mouse motion par bina tap audio chalu karo
    ["scroll", "wheel", "touchmove", "touchstart", "touchend", "pointermove", "pointerdown", "mousemove"].forEach(function (evt) {
        window.addEventListener(evt, activateAudio, { passive: true });
    });

    if (testButton) {
        testButton.addEventListener("click", activateAudio);
    }
    player.addEventListener("click", activateAudio);

    // Scroll Observer: Screen me aane par Play + Sound, Screen se bahar jane par Pause + Mute
    const observer = new IntersectionObserver(function (entries) {

        entries.forEach(function (entry) {

            isVisible = entry.isIntersecting;

            if (isVisible) {

                // Screen pe aate hi seedha audio ke saath play karo
                video.muted = false;
                video.volume = 1;

                video.play().catch(function () {
                    // Agar browser ne bina gesture audio block kiya toh muted chalu rakho
                    video.muted = true;
                    video.play().catch(function () {});
                });

            } else {

                // Screen se bahar jate hi video aur audio dono pause aur stop
                video.pause();
                video.muted = true;

            }

        });

    }, {
        threshold: 0.25
    });

    observer.observe(player);

    // Events
    video.addEventListener("play", function () {
        player.classList.add("is-playing");
    });

    video.addEventListener("pause", function () {
        player.classList.remove("is-playing");
    });

    // Error handling
    video.addEventListener("error", function () {
        if (status) status.textContent = "Video file could not be loaded.";
        console.error(video.error);
    });

});

</script>
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
</body>

</html>
