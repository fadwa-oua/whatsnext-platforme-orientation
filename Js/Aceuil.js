/* ── NAV SCROLL ── */
  const nav = document.getElementById('nav');
  window.addEventListener('scroll', () => nav.classList.toggle('scrolled', scrollY > 60));
  function toggleNav() { document.getElementById('navLinks').classList.toggle('open'); }

  /* ── SCROLL REVEAL ── */
  const io = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.style.opacity = '1';
        e.target.style.transform = 'translateY(0)';
        io.unobserve(e.target);
      }
    });
  }, { threshold: 0.1 });
  document.querySelectorAll('.dom-row, .eval-box').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(26px)';
    el.style.transition = 'opacity .6s ease, transform .6s ease';
    io.observe(el);
  });


  function toggleAccord(btn) {
    const body = btn.nextElementSibling;
    const isOpen = body.classList.contains('open');
    // close all others
    document.querySelectorAll('.accord-body.open').forEach(b => {
      b.classList.remove('open');
      b.previousElementSibling.classList.remove('open');
    });
    if (!isOpen) {
      // Re-trigger li animations by replacing ul
      const ul = body.querySelector('ul');
      const clone = ul.cloneNode(true);
      ul.replaceWith(clone);
      body.classList.add('open');
      btn.classList.add('open');
    }
  }

  const user = JSON.parse(localStorage.getItem('user'));
  if (user) {
    document.getElementById('username').textContent = user.nom;
  }
  function toggleContent(id) {
    let content = document.getElementById(id);

    if (content.style.display === "block") {
        content.style.display = "none";
    } else {
        content.style.display = "block";
    }
}