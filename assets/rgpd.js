(function () {
  'use strict';

  const CONSENT_KEY = 'wn_rgpd_consent';
  const CONSENT_VERSION = '2026-05-07';
  const PERSONAL_PREFIXES = ['wn_', 'user'];
  const RETENTION_DAYS = 90;

  function nowIso() {
    return new Date().toISOString();
  }

  function getConsent() {
    try { return JSON.parse(localStorage.getItem(CONSENT_KEY) || 'null'); }
    catch { return null; }
  }

  function setConsent(value) {
    localStorage.setItem(CONSENT_KEY, JSON.stringify({
      version: CONSENT_VERSION,
      necessary: true,
      preferences: !!value.preferences,
      media: !!value.media,
      marketing: !!value.marketing,
      savedAt: nowIso()
    }));
  }

  function hasConsent() {
    const c = getConsent();
    return c && c.version === CONSENT_VERSION;
  }

  function style() {
    if (document.getElementById('wnRgpdStyle')) return;
    const s = document.createElement('style');
    s.id = 'wnRgpdStyle';
    s.textContent = `
      .wn-rgpd-banner{position:fixed;left:1rem;right:1rem;bottom:1rem;z-index:5000;display:none;max-width:980px;margin:auto;padding:1rem;background:#fff;border:1px solid rgba(26,37,64,.16);border-radius:14px;box-shadow:0 18px 60px rgba(10,18,40,.24);font-family:system-ui,-apple-system,Segoe UI,sans-serif;color:#1a2540}
      .wn-rgpd-banner.show{display:block}
      .wn-rgpd-title{font-weight:800;margin-bottom:.35rem}
      .wn-rgpd-text{font-size:.86rem;line-height:1.55;color:#52627a;margin-bottom:.75rem}
      .wn-rgpd-actions{display:flex;gap:.55rem;flex-wrap:wrap}
      .wn-rgpd-btn{border:1.5px solid #3b5080;background:#3b5080;color:#fff;border-radius:999px;padding:.55rem .9rem;font-weight:700;font-size:.78rem;cursor:pointer}
      .wn-rgpd-btn.secondary{background:#fff;color:#3b5080}
      .wn-rgpd-btn.ghost{background:transparent;color:#52627a;border-color:rgba(82,98,122,.28)}
      .wn-rgpd-float{position:fixed;left:1rem;bottom:1rem;z-index:4999;width:42px;height:42px;border-radius:50%;border:1px solid rgba(255,255,255,.55);background:#1a2540;color:#fff;box-shadow:0 10px 30px rgba(10,18,40,.25);cursor:pointer;font-weight:800}
      .wn-rgpd-modal{position:fixed;inset:0;z-index:5100;display:none;align-items:center;justify-content:center;background:rgba(10,18,40,.58);backdrop-filter:blur(4px);padding:1rem}
      .wn-rgpd-modal.open{display:flex}
      .wn-rgpd-panel{width:min(680px,96vw);max-height:88vh;overflow:auto;background:#fff;border-radius:16px;padding:1.2rem;box-shadow:0 28px 90px rgba(10,18,40,.35);font-family:system-ui,-apple-system,Segoe UI,sans-serif;color:#1a2540}
      .wn-rgpd-panel h2{font-size:1.25rem;margin:0 0 .5rem}
      .wn-rgpd-panel p{font-size:.88rem;line-height:1.55;color:#52627a;margin:.45rem 0 .9rem}
      .wn-rgpd-row{display:flex;gap:.7rem;align-items:flex-start;padding:.75rem 0;border-top:1px solid rgba(26,37,64,.1)}
      .wn-rgpd-row input{margin-top:.2rem}
      .wn-rgpd-row strong{display:block;font-size:.9rem}
      .wn-rgpd-row span{display:block;font-size:.78rem;color:#62718a;line-height:1.45;margin-top:.15rem}
      .wn-rgpd-tools{display:flex;gap:.55rem;flex-wrap:wrap;margin-top:1rem;padding-top:1rem;border-top:1px solid rgba(26,37,64,.1)}
      .wn-rgpd-danger{border-color:#c0392b;background:#c0392b}
    `;
    document.head.appendChild(s);
  }

  function personalKeys() {
    const keys = [];
    for (let i = 0; i < localStorage.length; i += 1) {
      const key = localStorage.key(i);
      if (PERSONAL_PREFIXES.some(prefix => key === prefix || key.startsWith(prefix))) keys.push(key);
    }
    return keys.sort();
  }

  function exportData() {
    const payload = {
      exportedAt: nowIso(),
      app: "What's Next",
      data: {}
    };
    personalKeys().forEach(key => {
      try { payload.data[key] = JSON.parse(localStorage.getItem(key)); }
      catch { payload.data[key] = localStorage.getItem(key); }
    });
    const blob = new Blob([JSON.stringify(payload, null, 2)], {type:'application/json'});
    const a = document.createElement('a');
    a.href = URL.createObjectURL(blob);
    a.download = `whats-next-donnees-${new Date().toISOString().slice(0,10)}.json`;
    a.click();
    URL.revokeObjectURL(a.href);
  }

  function clearPersonalData() {
    if (!confirm('Supprimer les donnees personnelles stockees sur ce navigateur ?')) return;
    personalKeys().forEach(key => localStorage.removeItem(key));
    setConsent({preferences:false, media:false, marketing:false});
    location.reload();
  }

  function cleanupRetention() {
    const maxAge = Date.now() - RETENTION_DAYS * 24 * 60 * 60 * 1000;
    personalKeys().forEach(key => {
      if (!key.includes('profile_views')) return;
      try {
        const list = JSON.parse(localStorage.getItem(key) || '[]');
        if (!Array.isArray(list)) return;
        const filtered = list.filter(item => !item.time || new Date(item.time).getTime() >= maxAge).slice(0, 40);
        localStorage.setItem(key, JSON.stringify(filtered));
      } catch {}
    });
  }

  function modal() {
    let m = document.getElementById('wnRgpdModal');
    if (m) return m;
    m = document.createElement('div');
    m.id = 'wnRgpdModal';
    m.className = 'wn-rgpd-modal';
    m.innerHTML = `
      <div class="wn-rgpd-panel" role="dialog" aria-modal="true" aria-labelledby="wnRgpdTitle">
        <h2 id="wnRgpdTitle">Confidentialite et donnees</h2>
        <p>Vous gardez le controle de vos donnees. Les donnees necessaires servent a faire fonctionner le compte, les publications, les messages et les favoris. Les choix optionnels peuvent etre retires a tout moment.</p>
        <label class="wn-rgpd-row"><input type="checkbox" checked disabled><span><strong>Necessaire</strong><span>Connexion, securite, session locale et fonctionnement de base.</span></span></label>
        <label class="wn-rgpd-row"><input id="wnRgpdPreferences" type="checkbox"><span><strong>Preferences</strong><span>Conserver les choix d'interface et certains filtres sur ce navigateur.</span></span></label>
        <label class="wn-rgpd-row"><input id="wnRgpdMedia" type="checkbox"><span><strong>Medias du profil</strong><span>Conserver localement les photos de profil, couvertures et medias publies.</span></span></label>
        <label class="wn-rgpd-row"><input id="wnRgpdMarketing" type="checkbox"><span><strong>Communication optionnelle</strong><span>Autoriser les messages d'orientation ou nouveautes si cette option est proposee.</span></span></label>
        <div class="wn-rgpd-tools">
          <button class="wn-rgpd-btn" id="wnRgpdSave">Enregistrer mes choix</button>
          <button class="wn-rgpd-btn secondary" id="wnRgpdExport">Exporter mes donnees</button>
          <button class="wn-rgpd-btn wn-rgpd-danger" id="wnRgpdDelete">Supprimer mes donnees</button>
          <button class="wn-rgpd-btn ghost" id="wnRgpdClose">Fermer</button>
        </div>
      </div>`;
    document.body.appendChild(m);
    m.addEventListener('click', e => { if (e.target === m) m.classList.remove('open'); });
    m.querySelector('#wnRgpdClose').onclick = () => m.classList.remove('open');
    m.querySelector('#wnRgpdExport').onclick = exportData;
    m.querySelector('#wnRgpdDelete').onclick = clearPersonalData;
    m.querySelector('#wnRgpdSave').onclick = () => {
      setConsent({
        preferences: m.querySelector('#wnRgpdPreferences').checked,
        media: m.querySelector('#wnRgpdMedia').checked,
        marketing: m.querySelector('#wnRgpdMarketing').checked
      });
      banner().classList.remove('show');
      m.classList.remove('open');
    };
    return m;
  }

  function openModal() {
    const c = getConsent() || {};
    const m = modal();
    m.querySelector('#wnRgpdPreferences').checked = !!c.preferences;
    m.querySelector('#wnRgpdMedia').checked = !!c.media;
    m.querySelector('#wnRgpdMarketing').checked = !!c.marketing;
    m.classList.add('open');
  }

  function banner() {
    let b = document.getElementById('wnRgpdBanner');
    if (b) return b;
    b = document.createElement('div');
    b.id = 'wnRgpdBanner';
    b.className = 'wn-rgpd-banner';
    b.innerHTML = `
      <div class="wn-rgpd-title">Respect de votre vie privee</div>
      <div class="wn-rgpd-text">What's Next utilise uniquement les donnees necessaires au service par defaut. Vous pouvez accepter les options, les refuser, exporter vos donnees ou les supprimer depuis le centre RGPD.</div>
      <div class="wn-rgpd-actions">
        <button class="wn-rgpd-btn" id="wnRgpdAccept">Tout accepter</button>
        <button class="wn-rgpd-btn secondary" id="wnRgpdReject">Necessaire seulement</button>
        <button class="wn-rgpd-btn ghost" id="wnRgpdSettings">Parametrer</button>
      </div>`;
    document.body.appendChild(b);
    b.querySelector('#wnRgpdAccept').onclick = () => { setConsent({preferences:true, media:true, marketing:true}); b.classList.remove('show'); };
    b.querySelector('#wnRgpdReject').onclick = () => { setConsent({preferences:false, media:false, marketing:false}); b.classList.remove('show'); };
    b.querySelector('#wnRgpdSettings').onclick = openModal;
    return b;
  }

  function floatButton() {
    if (document.getElementById('wnRgpdFloat')) return;
    const btn = document.createElement('button');
    btn.id = 'wnRgpdFloat';
    btn.className = 'wn-rgpd-float';
    btn.type = 'button';
    btn.title = 'Confidentialite et donnees';
    btn.textContent = 'RG';
    btn.onclick = openModal;
    document.body.appendChild(btn);
  }

  function init() {
    style();
    cleanupRetention();
    modal();
    floatButton();
    if (!hasConsent()) banner().classList.add('show');
  }

  window.WNRGPD = { open: openModal, exportData, clearPersonalData, getConsent };
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init);
  else init();
})();
