/* =====================================================================
   RENDER
   ===================================================================== */
function el(tag, cls, html) {
  const e = document.createElement(tag);
  if (cls) e.className = cls;
  if (html !== undefined) e.innerHTML = html;
  return e;
}

try {
  // Services accordion
  const servicesList = document.getElementById("servicesList");
  SERVICES.forEach((s, i) => {
    const row = el("div", "service-row");
    row.innerHTML = `
    <div class="service-row-head">
      <span class="service-num">${String(i + 1).padStart(2, "0")}</span>
      <span class="service-title">${s.title}</span>
      <span class="service-plus"></span>
    </div>
    <div class="service-body">
      <p style="padding-left:62px;">${s.desc}</p>
      <div class="capability-chips">${s.caps.map((c) => `<span class="chip">${c}</span>`).join("")}</div>
    </div>`;
    row.addEventListener("click", () => {
      const wasOpen = row.classList.contains("open");
      document
        .querySelectorAll(".service-row.open")
        .forEach((r) => r.classList.remove("open"));
      if (!wasOpen) row.classList.add("open");
    });
    servicesList.appendChild(row);
  });
} catch (e) {}
try {
  // Portfolio
  const CATS = [
    "All",
    "Events",
    "Brand Films",
    "Campaigns",
    "Content",
    "Experiences",
    "Documentaries",
  ];
  const filtersEl = document.getElementById("filters");
  CATS.forEach((c, i) => {
    const b = el("button", "filter-btn" + (i === 0 ? " active" : ""), c);
    b.dataset.cat = c;
    filtersEl.appendChild(b);
  });
  const workGrid = document.getElementById("workGrid");

  const gradients = [
    "linear-gradient(135deg,#24103D,#6D35A8)",
    "linear-gradient(135deg,#111114,#24103D)",
    "linear-gradient(135deg,#18181D,#6D35A8)",
    "linear-gradient(135deg,#0A0A0D,#24103D)",
    "linear-gradient(135deg,#24103D,#18181D)",
    "linear-gradient(135deg,#111114,#6D35A8)",
  ];

  // Check current page
  const isWorkPage = window.location.pathname.includes("work.php");

  // Home = only 4
  // Work page = all
  const projectsToShow = isWorkPage ? PROJECTS : PROJECTS.slice(0, 4);

  projectsToShow.forEach((p, i) => {
    const card = el("div", "work-card");

    card.dataset.cat = p.category;
    card.dataset.cats = (p.tags || [p.category]).join(",");

    card.innerHTML = `
    <div
      class="work-visual"
      style="background:${
        p.img
          ? `linear-gradient(0deg,rgba(5,5,5,.35),rgba(5,5,5,.1)),url('${p.img}') center/cover,`
          : ""
      }${gradients[i % gradients.length]};"
    ></div>

    <div class="work-overlay">
      <div class="work-meta">
        <span>${p.category}</span>
        <span>${p.year}</span>
      </div>

      <div class="work-title">${p.title}</div>

      <div class="work-meta" style="margin-bottom:0;">
        <span>${p.client}</span>
        <span>${p.location}</span>
      </div>

      <div class="work-desc">${p.desc}</div>
    </div>
  `;

    workGrid.appendChild(card);
  });
  filtersEl.addEventListener("click", (e) => {
    const btn = e.target.closest(".filter-btn");
    if (!btn) return;
    filtersEl
      .querySelectorAll(".filter-btn")
      .forEach((b) => b.classList.remove("active"));
    btn.classList.add("active");
    const cat = btn.dataset.cat;
    document.querySelectorAll(".work-card").forEach((card) => {
      const cardCats = (card.dataset.cats || card.dataset.cat || "")
        .split(",")
        .map((s) => s.trim().toLowerCase());
      const matches = cat === "All" || cardCats.includes(cat.toLowerCase());
      card.classList.toggle("hide", !matches);
    });
  });
} catch (e) {}
try {
  // Flow (event production)
  const flowSteps = document.getElementById("flowSteps");
  FLOW.forEach((f) => {
    const step = el("div", "flow-step");
    step.innerHTML = `<div class="flow-dot"></div><span>${f}</span>`;
    flowSteps.appendChild(step);
  });
} catch (e) {}
try {
  // Process
  const processList = document.getElementById("processList");
  PROCESS.forEach((p, i) => {
    const item = el("div", "process-item reveal");
    item.innerHTML = `<div class="process-num">${String(i + 1).padStart(2, "0")}</div><div><h3>${p.title}</h3><p>${p.desc}</p></div>`;
    processList.appendChild(item);
  });
} catch (e) {}
try {
  // Capabilities
  const capGrid = document.getElementById("capGrid");
  CAPABILITIES.forEach((c) => {
    const cell = el("div", "cap-cell");
    cell.innerHTML = `<span>${c}</span>`;
    capGrid.appendChild(cell);
  });
} catch (e) {}
try {
  // Clients
  const clientWall = document.getElementById("clientWall");
  CLIENTS.forEach((c) => {
    const cell = el("div", "client-cell");
    cell.innerHTML = `<span>${c}</span>`;
    clientWall.appendChild(cell);
  });
} catch (e) {}
try {
  // Testimonials
  const testiWrap = document.getElementById("testiWrap");
  TESTIMONIALS.forEach((t, i) => {
    const slide = el("div", "testi-slide" + (i === 0 ? " active" : ""));
    slide.innerHTML = `<div class="testi-quote">"${t.quote}"</div><div class="testi-person">${t.person}<small>${t.title}</small></div>`;
    testiWrap.appendChild(slide);
  });
  const dotsWrap = el("div", "testi-dots");
  TESTIMONIALS.forEach((_, i) => {
    const d = el("div", "testi-dot" + (i === 0 ? " active" : ""));
    d.dataset.i = i;
    dotsWrap.appendChild(d);
  });
  testiWrap.appendChild(dotsWrap);
  let testiIndex = 0;
  function showTesti(i) {
    document
      .querySelectorAll(".testi-slide")
      .forEach((s, idx) => s.classList.toggle("active", idx === i));
    document
      .querySelectorAll(".testi-dot")
      .forEach((d, idx) => d.classList.toggle("active", idx === i));
    testiIndex = i;
  }
  dotsWrap.addEventListener("click", (e) => {
    if (e.target.classList.contains("testi-dot"))
      showTesti(+e.target.dataset.i);
  });
  setInterval(() => {
    showTesti((testiIndex + 1) % TESTIMONIALS.length);
  }, 6000);
} catch (e) {}
try {
  // Numbers
  const numbersGrid = document.getElementById("numbersGrid");
  NUMBERS.forEach((n) => {
    const item = el("div", "num-item");
    item.innerHTML = `<strong data-target="${n.value}" data-suffix="${n.suffix}">0${n.suffix}</strong><span>${n.label}</span>`;
    numbersGrid.appendChild(item);
  });
} catch (e) {}
try {
  // Industries
  const industriesWrap = document.getElementById("industriesWrap");
  INDUSTRIES.forEach((ind, i) => {
    const row = el("div", "industry-row");
    row.innerHTML = `<span>${ind}</span><small>0${i + 1}</small>`;
    row.addEventListener("mouseenter", () => {
      document.body.style.setProperty("--hover-hue", i);
    });
    industriesWrap.appendChild(row);
  });

  /* =====================================================================
   INTERACTIONS
   ===================================================================== */
} catch (e) {}
try {
  // Preloader
  window.addEventListener("load", () => {
    setTimeout(
      () => document.getElementById("preloader").classList.add("hide"),
      500,
    );
  });
} catch (e) {}
try {
  // Header scroll state
  const header = document.getElementById("siteHeader");
  window.addEventListener(
    "scroll",
    () => {
      header.classList.toggle("scrolled", window.scrollY > 40);
    },
    { passive: true },
  );
} catch (e) {}
try {
  // Mobile menu
  const burger = document.getElementById("burger");
  const mobileMenu = document.getElementById("mobileMenu");
  const closeMenu = () => {
    burger.classList.remove("open");
    mobileMenu.classList.remove("open");
    document.body.classList.remove("menu-open");
  };
  burger.addEventListener("click", () => {
    const o = burger.classList.toggle("open");
    mobileMenu.classList.toggle("open", o);
    document.body.classList.toggle("menu-open", o);
  });
  mobileMenu
    .querySelectorAll("a")
    .forEach((a) => a.addEventListener("click", closeMenu));
  mobileMenu.querySelectorAll(".m-dd-btn").forEach((btn) =>
    btn.addEventListener("click", () => {
      const li = btn.parentElement,
        open = !li.classList.contains("open");
      mobileMenu.querySelectorAll(".m-dd.open").forEach((x) => {
        x.classList.remove("open");
        x.querySelector(".m-dd-btn").setAttribute("aria-expanded", "false");
      });
      li.classList.toggle("open", open);
      btn.setAttribute("aria-expanded", open);
    }),
  );
  window.addEventListener("resize", () => {
    if (window.innerWidth > 1180) closeMenu();
  });
} catch (e) {}
try {
  // Custom cursor (desktop / fine pointer only)
  const isFine =
    window.matchMedia("(pointer:fine)").matches && window.innerWidth > 900;
  const dot = document.querySelector(".cursor-dot");
  const ring = document.querySelector(".cursor-ring");
  if (!isFine) {
    document.body.classList.add("no-cursor");
  } else {
    let mx = 0,
      my = 0,
      rx = 0,
      ry = 0;
    window.addEventListener("mousemove", (e) => {
      mx = e.clientX;
      my = e.clientY;
      dot.style.left = mx + "px";
      dot.style.top = my + "px";
    });
    function loop() {
      rx += (mx - rx) * 0.16;
      ry += (my - ry) * 0.16;
      ring.style.left = rx + "px";
      ring.style.top = ry + "px";
      requestAnimationFrame(loop);
    }
    loop();
    document
      .querySelectorAll("a, button, .work-card, .service-row, .industry-row")
      .forEach((node) => {
        node.addEventListener("mouseenter", () => ring.classList.add("big"));
        node.addEventListener("mouseleave", () => ring.classList.remove("big"));
      });
  }
} catch (e) {}
try {
  // Reveal on scroll
  const revealEls = document.querySelectorAll(".reveal");
  const revealObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("in");
          revealObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.15 },
  );
  revealEls.forEach((e) => revealObserver.observe(e));
} catch (e) {}
try {
  // Process step highlight
  document.querySelectorAll(".process-item").forEach((item) => {
    const obs = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) entry.target.classList.add("in");
        });
      },
      { threshold: 0.4 },
    );
    obs.observe(item);
  });
} catch (e) {}
try {
  // Flow steps sequential activation
  const flowStepEls = document.querySelectorAll(".flow-step");
  const flowFill = document.getElementById("flowFill");
  let flowActivated = false;
  new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting && !flowActivated) {
          flowActivated = true;
          flowFill.style.width = "100%";
          flowFill.style.height = window.innerWidth <= 900 ? "100%" : "";
          flowStepEls.forEach((s, i) =>
            setTimeout(() => s.classList.add("active"), i * 220),
          );
        }
      });
    },
    { threshold: 0.3 },
  ).observe(document.getElementById("flowSteps"));
} catch (e) {}
try {
  // Number counters
  const numObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const strong = entry.target.querySelector("strong");
          const target = +strong.dataset.target,
            suffix = strong.dataset.suffix;
          let cur = 0;
          const step = Math.max(1, Math.ceil(target / 60));
          const t = setInterval(() => {
            cur += step;
            if (cur >= target) {
              cur = target;
              clearInterval(t);
            }
            strong.textContent = cur + suffix;
          }, 25);
          numObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.5 },
  );
  document.querySelectorAll(".num-item").forEach((n) => numObserver.observe(n));
} catch (e) {}

try {
  // Reel player placeholder click
  document.getElementById("reelPlayer").addEventListener("click", function () {
    this.querySelector(".play-btn").style.transform = "scale(0.9)";
    setTimeout(
      () => (this.querySelector(".play-btn").style.transform = ""),
      200,
    );
  });
} catch (e) {}
document.querySelectorAll(".has-dd > button").forEach((b) =>
  b.addEventListener("click", (e) => {
    const li = b.parentElement;
    const o = li.classList.contains("open");
    document
      .querySelectorAll(".has-dd.open")
      .forEach((x) => x.classList.remove("open"));
    if (!o) li.classList.add("open");
    e.stopPropagation();
  }),
);
document.addEventListener("click", () =>
  document
    .querySelectorAll(".has-dd.open")
    .forEach((x) => x.classList.remove("open")),
);
