(()=> {
  const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const bar = document.querySelector('.scroll-line i');
  let pending = false;

  const updateProgress = () => {
    if (!bar) return;
    const max = document.documentElement.scrollHeight - window.innerHeight;
    bar.style.width = (max > 0 ? window.scrollY / max * 100 : 0) + '%';
    pending = false;
  };
  window.addEventListener('scroll', () => {
    if (!pending) {
      window.requestAnimationFrame(updateProgress);
      pending = true;
    }
  }, { passive: true });
  window.addEventListener('resize', updateProgress, { passive: true });
  updateProgress();

  const hero = document.querySelector('.hero-grid');
  const items = [...document.querySelectorAll('.service, .intro-grid, .service-index, .process-grid, .closing-inner')];

  if (reduce || !('IntersectionObserver' in window)) {
    if (hero) hero.classList.add('is-visible');
    items.forEach(item => item.classList.add('is-visible'));
    return;
  }

  if (hero) {
    requestAnimationFrame(() => hero.classList.add('is-visible'));
  }

  const observer = new IntersectionObserver((entries, currentObserver) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('is-visible');
      currentObserver.unobserve(entry.target);
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -36px 0px' });

  items.forEach((item, index) => {
    item.style.setProperty('--stagger', Math.min(index % 4, 3) * 85 + 'ms');
    item.classList.add('reveal');
    observer.observe(item);
  });
})();