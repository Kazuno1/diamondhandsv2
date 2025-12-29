(() => {
  const toggle = document.querySelector('.dh-header-toggle');
  const mobileNav = document.getElementById('mobileNav');
  const backdrop = document.querySelector('.dh-mobile-backdrop');
  if (!toggle || !mobileNav) return;

  const closeMenu = () => {
    mobileNav.classList.remove('open');
    document.body.style.overflow = '';
    toggle.setAttribute('aria-expanded', 'false');
  };

  toggle.addEventListener('click', () => {
    const isOpen = mobileNav.classList.toggle('open');
    document.body.style.overflow = isOpen ? 'hidden' : '';
    toggle.setAttribute('aria-expanded', isOpen);
  });

  mobileNav.querySelectorAll('a').forEach(a =>
    a.addEventListener('click', closeMenu)
  );

  backdrop?.addEventListener('click', closeMenu);

  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeMenu();
  });
})();
