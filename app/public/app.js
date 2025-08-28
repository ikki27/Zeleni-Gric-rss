// ====== APP.JS ======
document.addEventListener('DOMContentLoaded', () => {

  // 2) “Nazaj na vrh” gumb + smooth scroll
  const topBtn = document.getElementById('backToTop');
  const onScroll = () => {
    if (!topBtn) return;
    const show = window.scrollY > 200;
    topBtn.classList.toggle('show', show);
  };
  if (topBtn) {
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
    topBtn.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // 3) Dark mode (shrani v localStorage)
  const applyTheme = (t) => {
    document.documentElement.classList.toggle('dark', t === 'dark');
  };
  const savedTheme = localStorage.getItem('theme')
    || (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
  applyTheme(savedTheme);
  const themeBtn = document.getElementById('themeToggle');
  if (themeBtn) {
    themeBtn.addEventListener('click', () => {
      const newT = document.documentElement.classList.contains('dark') ? 'light' : 'dark';
      applyTheme(newT);
      localStorage.setItem('theme', newT);
    });
  }

  // 4) Iskalnik v trgovini (jQuery) – filtrira .product-card po vsebini
  if (window.jQuery) {
    const $ = window.jQuery;
    const $search = $('#productSearch');
    if ($search.length) {
      $search.on('input', function () {
        const q = $(this).val().toString().toLowerCase();
        $('.product-card').each(function () {
          const txt = $(this).text().toLowerCase();
          $(this).toggle(txt.includes(q));
        });
      });
    }
  }
});