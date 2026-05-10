/* ===== SCROLL PROGRESS BAR ===== */
(function () {
  const bar = document.getElementById('progress-bar');
  if (!bar) return;
  window.addEventListener('scroll', () => {
    const max  = document.documentElement.scrollHeight - window.innerHeight;
    bar.style.width = (window.scrollY / max * 100) + '%';
  }, { passive: true });
})();

/* ===== STICKY HEADER ===== */
(function () {
  const header = document.getElementById('header');
  if (!header) return;
  window.addEventListener('scroll', () => {
    header.classList.toggle('scrolled', window.scrollY > 60);
  }, { passive: true });
})();

/* ===== HAMBURGER ===== */
(function () {
  const btn = document.querySelector('.hamburger');
  const nav = document.getElementById('main-nav');
  if (!btn || !nav) return;

  btn.addEventListener('click', () => {
    const open = btn.classList.toggle('open');
    nav.classList.toggle('open', open);
    btn.setAttribute('aria-expanded', open);
  });

  nav.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', () => {
      btn.classList.remove('open');
      nav.classList.remove('open');
      btn.setAttribute('aria-expanded', 'false');
    });
  });
})();

/* ===== ACTIVE NAV LINK ===== */
(function () {
  const sections = document.querySelectorAll('section[id]');
  const links    = document.querySelectorAll('nav a[href^="#"]');
  if (!links.length) return;

  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        links.forEach(l => l.classList.remove('active'));
        const a = document.querySelector(`nav a[href="#${e.target.id}"]`);
        if (a) a.classList.add('active');
      }
    });
  }, { rootMargin: '-40% 0px -50% 0px' });

  sections.forEach(s => obs.observe(s));
})();

/* ===== SCROLL REVEAL ===== */
(function () {
  const els = document.querySelectorAll('.reveal, .reveal-l, .reveal-r');
  if (!els.length) return;

  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        obs.unobserve(e.target);
      }
    });
  }, { threshold: 0.1 });

  els.forEach(el => obs.observe(el));
})();

/* ===== TYPEWRITER ===== */
(function () {
  const el = document.getElementById('typewriter-text');
  if (!el) return;

  const words = ['Software Developer', 'Full Stack Developer', 'UI Designer', 'PHP Developer'];
  let wi = 0, ci = 0, deleting = false;

  function step() {
    const word = words[wi];
    if (!deleting) {
      el.textContent = word.slice(0, ++ci);
      if (ci === word.length) {
        setTimeout(() => { deleting = true; tick(); }, 2200);
        return;
      }
    } else {
      el.textContent = word.slice(0, --ci);
      if (ci === 0) {
        deleting = false;
        wi = (wi + 1) % words.length;
      }
    }
    tick();
  }

  function tick() { setTimeout(step, deleting ? 55 : 110); }
  setTimeout(tick, 800);
})();

/* ===== CONSTELLATION CANVAS (fixed, full-page) ===== */
(function () {
  const canvas = document.getElementById('constellation-canvas');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');

  const DOTS    = 100;
  const MAX_D   = 155;
  const DOT_R   = 2.2;
  const DOT_COL = 'rgba(56, 189, 248, 0.8)';
  const LINE    = 'rgba(56, 189, 248, ';

  let dots = [], W = 0, H = 0;

  function resize() {
    W = canvas.width  = window.innerWidth;
    H = canvas.height = window.innerHeight;
  }

  function mkDot() {
    return {
      x:  Math.random() * W,
      y:  Math.random() * H,
      vx: (Math.random() - 0.5) * 0.4,
      vy: (Math.random() - 0.5) * 0.4,
    };
  }

  function init() { resize(); dots = Array.from({ length: DOTS }, mkDot); }

  function draw() {
    ctx.clearRect(0, 0, W, H);

    dots.forEach((a, i) => {
      a.x += a.vx; a.y += a.vy;
      if (a.x < 0 || a.x > W) a.vx *= -1;
      if (a.y < 0 || a.y > H) a.vy *= -1;

      ctx.beginPath();
      ctx.arc(a.x, a.y, DOT_R, 0, Math.PI * 2);
      ctx.fillStyle = DOT_COL;
      ctx.fill();

      for (let j = i + 1; j < dots.length; j++) {
        const b  = dots[j];
        const dx = a.x - b.x, dy = a.y - b.y;
        const d  = Math.sqrt(dx * dx + dy * dy);
        if (d < MAX_D) {
          ctx.beginPath();
          ctx.moveTo(a.x, a.y);
          ctx.lineTo(b.x, b.y);
          ctx.strokeStyle = LINE + ((1 - d / MAX_D) * 0.5) + ')';
          ctx.lineWidth   = 0.6;
          ctx.stroke();
        }
      }
    });

    requestAnimationFrame(draw);
  }

  let resizeTimer;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(resize, 150);
  });

  init();
  draw();
})();

/* ===== SMOOTH SCROLL ===== */
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', function (e) {
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth' });
    }
  });
});

/* ===== CONTACT FORM VALIDATION ===== */
(function () {
  const form = document.getElementById('contactForm');
  if (!form) return;

  form.addEventListener('submit', e => {
    const name    = form.querySelector('[name="name"]').value.trim();
    const email   = form.querySelector('[name="email"]').value.trim();
    const message = form.querySelector('[name="message"]').value.trim();

    if (!name || !email || !message) {
      e.preventDefault();
      showErr('Please fill in all required fields (name, email, message).');
      return;
    }
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      e.preventDefault();
      showErr('Please enter a valid email address.');
    }
  });

  function showErr(msg) {
    let el = form.querySelector('.client-err');
    if (!el) {
      el = document.createElement('p');
      el.className = 'flash err client-err';
      form.prepend(el);
    }
    el.textContent = msg;
  }
})();
