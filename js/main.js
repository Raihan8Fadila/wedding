/* ============================================================
   WEDDING INVITATION — MAIN JAVASCRIPT
   ============================================================ */

// ── LOADING SCREEN ────────────────────────────────────────
window.addEventListener('load', () => {
  setTimeout(() => {
    document.getElementById('loading-screen')?.classList.add('hidden');
  }, 2800);
});

// ── OPEN INVITATION ───────────────────────────────────────
function openInvitation() {
  const cover = document.getElementById('cover');
  const main  = document.getElementById('main-content');
  if (!cover || !main) return;

  cover.style.transition = 'opacity 0.9s ease, transform 0.9s ease';
  cover.style.opacity    = '0';
  cover.style.transform  = 'scale(1.04)';
  cover.style.pointerEvents = 'none';

  setTimeout(() => {
    cover.style.display = 'none';
    main.classList.add('visible');
    main.style.opacity = '0';
    main.style.transition = 'opacity 0.8s ease';
    requestAnimationFrame(() => { main.style.opacity = '1'; });
    initScrollReveal();
    initCountdown();
    tryAutoplayMusic();
    window.scrollTo({ top: 0, behavior: 'instant' });
  }, 900);
}

// ── PETAL PARTICLE SYSTEM ─────────────────────────────────
(function initPetals() {
  const canvas = document.getElementById('petals-canvas');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');
  let W, H, petals = [], rafId;
  const COUNT = window.innerWidth < 600 ? 22 : 38;

  function resize() {
    W = canvas.width  = window.innerWidth;
    H = canvas.height = window.innerHeight;
  }

  function randomPetal() {
    return {
      x:    Math.random() * W,
      y:    Math.random() * H - H,
      size: Math.random() * 7 + 4,
      speedY: Math.random() * 1.2 + 0.4,
      speedX: Math.random() * 0.6 - 0.3,
      rot:  Math.random() * Math.PI * 2,
      rotS: (Math.random() - 0.5) * 0.03,
      alpha: Math.random() * 0.35 + 0.1,
      hue:  Math.random() * 30 - 15,
    };
  }

  function drawPetal(p) {
    ctx.save();
    ctx.translate(p.x, p.y);
    ctx.rotate(p.rot);
    ctx.globalAlpha = p.alpha;
    const r = p.size;
    ctx.beginPath();
    ctx.ellipse(0, 0, r, r * 0.55, 0, 0, Math.PI * 2);
    // champagne-gold palette
    const lightness = 75 + p.hue;
    ctx.fillStyle = `hsl(43, 65%, ${lightness}%)`;
    ctx.fill();
    ctx.restore();
  }

  function tick() {
    ctx.clearRect(0, 0, W, H);
    petals.forEach(p => {
      p.y += p.speedY;
      p.x += p.speedX + Math.sin(p.y * 0.015) * 0.3;
      p.rot += p.rotS;
      if (p.y > H + 20) { Object.assign(p, randomPetal(), { y: -10, x: Math.random() * W }); }
      drawPetal(p);
    });
    rafId = requestAnimationFrame(tick);
  }

  resize();
  for (let i = 0; i < COUNT; i++) {
    const p = randomPetal();
    p.y = Math.random() * H; // scatter initial positions
    petals.push(p);
  }
  tick();
  window.addEventListener('resize', () => { resize(); });
})();

// ── SCROLL REVEAL ─────────────────────────────────────────
function initScrollReveal() {
  const els = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) { e.target.classList.add('revealed'); observer.unobserve(e.target); }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
  els.forEach(el => observer.observe(el));
}

// ── COUNTDOWN ─────────────────────────────────────────────
function initCountdown() {
  const target = document.getElementById('countdown-target');
  if (!target) return;
  const endDate = new Date(target.dataset.date).getTime();

  function update() {
    const now  = Date.now();
    const diff = endDate - now;
    if (diff <= 0) {
      document.getElementById('cd-days').textContent  = '00';
      document.getElementById('cd-hours').textContent = '00';
      document.getElementById('cd-mins').textContent  = '00';
      document.getElementById('cd-secs').textContent  = '00';
      return;
    }
    const days  = Math.floor(diff / 86400000);
    const hours = Math.floor((diff % 86400000) / 3600000);
    const mins  = Math.floor((diff % 3600000) / 60000);
    const secs  = Math.floor((diff % 60000) / 1000);
    const pad   = n => String(n).padStart(2, '0');
    document.getElementById('cd-days').textContent  = pad(days);
    document.getElementById('cd-hours').textContent = pad(hours);
    document.getElementById('cd-mins').textContent  = pad(mins);
    document.getElementById('cd-secs').textContent  = pad(secs);
  }
  update();
  setInterval(update, 1000);
}

// ── GALLERY LIGHTBOX ──────────────────────────────────────
function openLightbox(src, caption) {
  const lb  = document.getElementById('lightbox');
  const img = document.getElementById('lightbox-img');
  if (!lb || !img) return;
  img.src = src;
  img.alt = caption || '';
  lb.classList.add('active');
  document.body.style.overflow = 'hidden';
}
function closeLightbox() {
  const lb = document.getElementById('lightbox');
  if (!lb) return;
  lb.classList.remove('active');
  document.body.style.overflow = '';
}
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeLightbox(); });
document.addEventListener('click', e => {
  if (e.target.id === 'lightbox') closeLightbox();
});

// ── COPY TO CLIPBOARD ─────────────────────────────────────
function copyToClipboard(text, btn) {
  navigator.clipboard.writeText(text).then(() => {
    const original = btn.innerHTML;
    btn.classList.add('copied');
    btn.innerHTML = '✓ Tersalin';
    setTimeout(() => { btn.classList.remove('copied'); btn.innerHTML = original; }, 2000);
  }).catch(() => {
    // Fallback
    const ta = document.createElement('textarea');
    ta.value = text;
    document.body.appendChild(ta);
    ta.select(); document.execCommand('copy');
    document.body.removeChild(ta);
    const original = btn.innerHTML;
    btn.classList.add('copied');
    btn.innerHTML = '✓ Tersalin';
    setTimeout(() => { btn.classList.remove('copied'); btn.innerHTML = original; }, 2000);
  });
}

// ── MUSIC PLAYER ─────────────────────────────────────────
let musicStarted = false;
function tryAutoplayMusic() {
  const audio = document.getElementById('bg-music');
  if (!audio || !audio.src) return;
  audio.volume = 0.45;
  audio.play().catch(() => {}); // silent fail — interaction needed
}
function toggleMusic() {
  const audio = document.getElementById('bg-music');
  const btn   = document.getElementById('music-btn');
  if (!audio) return;
  if (audio.paused) {
    audio.play();
    btn.classList.add('playing');
    btn.innerHTML = '♪';
  } else {
    audio.pause();
    btn.classList.remove('playing');
    btn.innerHTML = '♫';
  }
}
