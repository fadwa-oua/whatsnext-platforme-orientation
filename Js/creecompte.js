function onStatutChange(val) {
    document.getElementById('userFields').classList.toggle('show',       val === 'user');
    document.getElementById('specialistFields').classList.toggle('show', val === 'specialist');
    document.getElementById('adminFields').classList.toggle('show',      val === 'admin');
    const btn = document.getElementById('submitBtn');
    if      (val === 'user')       btn.textContent = 'Créer mon compte';
    else if (val === 'specialist') btn.textContent = 'Soumettre mon profil';
    else if (val === 'admin')      btn.textContent = "Envoyer la demande d'accès";
    else                           btn.textContent = 'Créer mon compte';
  }

  function togglePw(id, iconId) {
    const input = document.getElementById(id);
    const ico   = document.getElementById(iconId);
    const isText = input.type === 'text';
    input.type = isText ? 'password' : 'text';
    ico.innerHTML = isText
      ? `<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>`
      : `<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/>`;
  }

  function checkStrength(pw) {
    const meter = document.getElementById('pwMeter');
    const label = document.getElementById('pwLabel');
    const bars  = ['b1','b2','b3','b4'].map(id => document.getElementById(id));
    bars.forEach(b => b.className = 'pw-bar');
    if (!pw) { meter.style.display = 'none'; return; }
    meter.style.display = 'block';
    let score = 0;
    if (pw.length >= 8)  score++;
    if (pw.length >= 12) score++;
    if (/[A-Z]/.test(pw) && /[0-9]/.test(pw)) score++;
    if (/[^A-Za-z0-9]/.test(pw)) score++;
    const lvls = [{cls:'weak',txt:'Faible',n:1},{cls:'weak',txt:'Faible',n:1},{cls:'medium',txt:'Moyen',n:2},{cls:'strong',txt:'Fort',n:4}];
    const l = lvls[Math.min(score,3)];
    for (let i = 0; i < l.n; i++) bars[i].classList.add(l.cls);
    label.textContent = l.txt;
    label.style.color = l.cls==='weak'?'#e74c3c':l.cls==='medium'?'#f39c12':'#27ae60';
  }

  document.getElementById('registerForm').addEventListener('submit', function(e) {
    let ok = true;
    const role = document.getElementById('statut').value;

    const validate = (id, errId, test) => {
      const el = document.getElementById(id);
      if (!test(el.value)) {
        el.closest('.field-box').style.borderColor = '#c0392b';
        document.getElementById(errId).classList.add('show'); ok = false;
      } else {
        el.closest('.field-box').style.borderColor = '';
        document.getElementById(errId).classList.remove('show');
      }
    };

    validate('prenom',   'prenomErr', v => v.trim().length >= 2);
    validate('nom',      'nomErr',    v => v.trim().length >= 2);
    validate('email',    'emailErr',  v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v));
    validate('password', 'pwErr',     v => v.length >= 8);
    validate('statut',   'statutErr', v => v !== '');

    const pw  = document.getElementById('password');
    const pw2 = document.getElementById('password2');
    if (pw.value !== pw2.value || pw2.value === '') {
      pw2.closest('.field-box').style.borderColor = '#c0392b';
      document.getElementById('pw2Err').classList.add('show'); ok = false;
    } else {
      pw2.closest('.field-box').style.borderColor = '';
      document.getElementById('pw2Err').classList.remove('show');
    }

    if (role === 'user')       validate('niveau',      'niveauErr',      v => v !== '');
    if (role === 'specialist') {
      validate('telephone',   'telErr',     v => v.trim().length >= 8);
      validate('metier',      'metierErr',  v => v.trim().length >= 2);
      validate('description', 'descErr',    v => v.trim().length >= 20);
    }
    if (role === 'admin')      validate('adminRaison', 'adminRaisonErr', v => v.trim().length >= 10);

    if (!document.getElementById('rgpd1').checked) {
      document.getElementById('rgpdErr').classList.add('show'); ok = false;
    } else {
      document.getElementById('rgpdErr').classList.remove('show');
    }

    if (!ok) {
      e.preventDefault();
      return;
    }
    localStorage.setItem('wn_rgpd_registration', JSON.stringify({
      acceptedTerms: true,
      marketing: document.getElementById('rgpd2').checked,
      role,
      savedAt: new Date().toISOString()
    }));
  });