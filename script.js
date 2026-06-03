/* ============================================================
   FLYER COURIER — 3D SCROLL ANIMATION ENGINE + INTERACTIONS
   ============================================================ */

document.addEventListener('DOMContentLoaded', () => {

  /* ── Scroll Progress Bar ────────────────────────────────── */
  const progressBar = document.createElement('div');
  progressBar.className = 'scroll-progress';
  document.body.prepend(progressBar);

  window.addEventListener('scroll', () => {
    const scrollTop = window.scrollY;
    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    const pct = (scrollTop / docHeight) * 100;
    progressBar.style.width = pct + '%';
  }, { passive: true });

  /* ── Navbar Scroll Behaviour ────────────────────────────── */
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    window.addEventListener('scroll', () => {
      navbar.classList.toggle('scrolled', window.scrollY > 60);
    }, { passive: true });
  }

  /* ── 3D Scroll Animation via IntersectionObserver ───────── */
  const animEls = document.querySelectorAll('[data-anim]');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
        // Don't unobserve — so re-entering re-animates is handled by CSS
      } else {
        // Optional: remove class so it animates again on scroll back
        // entry.target.classList.remove('in-view');
      }
    });
  }, {
    threshold: 0.12,
    rootMargin: '0px 0px -60px 0px'
  });

  animEls.forEach(el => observer.observe(el));

  /* ── Parallax 3D Tilt on Mouse Move ─────────────────────── */
  document.querySelectorAll('.hero-cards, .service-card, .offer-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = (e.clientX - rect.left) / rect.width  - 0.5;
      const y = (e.clientY - rect.top)  / rect.height - 0.5;
      card.style.transform = `perspective(800px) rotateY(${x * 14}deg) rotateX(${-y * 14}deg) scale(1.02)`;
    });
    card.addEventListener('mouseleave', () => {
      card.style.transform = '';
    });
  });

  /* ── Hero Particle Canvas ───────────────────────────────── */
  const canvas = document.getElementById('particles-canvas');
  if (canvas) {
    const ctx = canvas.getContext('2d');
    let particles = [];
    let animFrame;

    function resize() {
      canvas.width  = canvas.offsetWidth;
      canvas.height = canvas.offsetHeight;
    }
    resize();
    window.addEventListener('resize', resize, { passive: true });

    class Particle {
      constructor() { this.reset(); }
      reset() {
        this.x = Math.random() * canvas.width;
        this.y = Math.random() * canvas.height;
        this.r = Math.random() * 2.5 + 0.5;
        this.vx = (Math.random() - 0.5) * 0.5;
        this.vy = (Math.random() - 0.5) * 0.5 - 0.3;
        this.life = 1;
        this.decay = Math.random() * 0.003 + 0.001;
        this.color = Math.random() > 0.5
          ? `rgba(26,184,216,${this.life})`
          : `rgba(240,192,64,${this.life})`;
      }
      update() {
        this.x += this.vx;
        this.y += this.vy;
        this.life -= this.decay;
        if (this.life <= 0) this.reset();
      }
      draw() {
        ctx.save();
        ctx.globalAlpha = this.life * 0.6;
        ctx.fillStyle = this.color;
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
        ctx.fill();
        ctx.restore();
      }
    }

    for (let i = 0; i < 80; i++) particles.push(new Particle());

    function loop() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      particles.forEach(p => { p.update(); p.draw(); });
      animFrame = requestAnimationFrame(loop);
    }
    loop();
  }

  /* ── Active Nav Link ────────────────────────────────────── */
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.nav-links a').forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPage || (currentPage === '' && href === 'index.html')) {
      link.classList.add('active');
    }
  });

  /* ── Contact Form ───────────────────────────────────────── */
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const alert = document.getElementById('formAlert');
      alert.style.display = 'block';
      alert.className = 'alert alert-success';
      alert.textContent = '✅ Message sent! We\'ll get back to you within 24 hours.';
      contactForm.reset();
      setTimeout(() => { alert.style.display = 'none'; }, 5000);
    });
  }

  /* ── Tracking Form ──────────────────────────────────────── */
  const trackForm = document.getElementById('trackForm');
  if (trackForm) {
    trackForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const input = document.getElementById('trackInput');
      const result = document.getElementById('trackResult');
      const code = input.value.trim().toUpperCase();
      if (!code) return;

      result.style.display = 'block';
      result.className = 'alert alert-warning';
      result.innerHTML = `🔍 Searching for <strong>${code}</strong>... <br><em style="font-size:0.85rem">Live tracking available once shipment is processed. Contact support for assistance.</em>`;
    });
  }

  /* ── Newsletter Form ────────────────────────────────────── */
  document.querySelectorAll('.newsletter-form').forEach(form => {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const btn = form.querySelector('button');
      btn.textContent = '✓ Subscribed!';
      btn.style.background = '#22a06b';
      setTimeout(() => { btn.textContent = 'Subscribe'; btn.style.background = ''; form.reset(); }, 3000);
    });
  });

  /* ── Smooth Section Reveal on Scroll (3D depth) ─────────── */
  // Add continuous parallax depth feel while scrolling
  let ticking = false;
  const parallaxEls = document.querySelectorAll('.parallax-slow');

  window.addEventListener('scroll', () => {
    if (!ticking) {
      requestAnimationFrame(() => {
        const scrollY = window.scrollY;
        parallaxEls.forEach(el => {
          const speed = parseFloat(el.dataset.speed || 0.15);
          el.style.transform = `translateY(${scrollY * speed}px)`;
        });
        ticking = false;
      });
      ticking = true;
    }
  }, { passive: true });

  /* ── Counter Animation ──────────────────────────────────── */
  const counters = document.querySelectorAll('[data-count]');
  const countObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const target = parseInt(el.dataset.count);
        let current = 0;
        const step = target / 60;
        const timer = setInterval(() => {
          current = Math.min(current + step, target);
          el.textContent = Math.floor(current) + (el.dataset.suffix || '');
          if (current >= target) clearInterval(timer);
        }, 16);
        countObserver.unobserve(el);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(c => countObserver.observe(c));

  /* ── 3D Card Flip Hover ─────────────────────────────────── */
  document.querySelectorAll('.flip-card-inner').forEach(card => {
    card.parentElement.addEventListener('mouseenter', () => {
      card.style.transform = 'rotateY(180deg)';
    });
    card.parentElement.addEventListener('mouseleave', () => {
      card.style.transform = '';
    });
  });

  /* ── Page Entrance Animation ────────────────────────────── */
  document.body.classList.add('page-enter');

  /* ── Hero 3D Cards Parallax on Mouse ────────────────────── */
  const heroSection = document.querySelector('.hero');
  if (heroSection) {
    heroSection.addEventListener('mousemove', (e) => {
      const rect = heroSection.getBoundingClientRect();
      const x = (e.clientX - rect.left) / rect.width  - 0.5;
      const y = (e.clientY - rect.top)  / rect.height - 0.5;

      document.querySelectorAll('.hero-card').forEach((card, i) => {
        const depth = (i + 1) * 6;
        card.style.transform =
          `rotateY(${x * depth}deg) rotateX(${-y * depth * 0.5}deg) translateZ(${i * 20}px)`;
      });
    });
    heroSection.addEventListener('mouseleave', () => {
      document.querySelectorAll('.hero-card').forEach((card, i) => {
        card.style.transform = '';
      });
    });
  }

});
