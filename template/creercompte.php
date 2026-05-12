<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Créer un compte — What's Next ?</title>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="../styles/creercompte.css">
</head>
<body>
<div class="card">

  <!-- LOGO -->
  <div class="logo-wrap">
    <img src="../assets/Abrid.png" alt="What's Next ?"/>
  </div>

  <p class="page-title">Créer un compte</p>

  <form id="registerForm" action="/register" method="POST" novalidate style="width:100%;display:contents">

    <!-- PRÉNOM + NOM -->
    <div class="row2">
      <div class="field-box">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" placeholder="Yassine" autocomplete="given-name"/>
        <span class="field-error" id="prenomErr">Requis</span>
      </div>
      <div class="field-box">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" placeholder="El Amrani" autocomplete="family-name"/>
        <span class="field-error" id="nomErr">Requis</span>
      </div>
    </div>

    <!-- EMAIL -->
    <div class="field-box">
      <label for="email">Adresse e mail</label>
      <input type="email" id="email" name="email" placeholder="exemple@email.com" autocomplete="email"/>
      <span class="field-error" id="emailErr">Email invalide</span>
    </div>

    <!-- MOT DE PASSE -->
    <div class="field-box">
      <label for="password">Mot de pass</label>
      <div class="field-inner">
        <input type="password" id="password" name="password"
               placeholder="Min. 8 caractères" autocomplete="new-password"
               oninput="checkStrength(this.value)"/>
        <button type="button" class="toggle-pw" onclick="togglePw('password','eye1')">
          <svg id="eye1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>
          </svg>
        </button>
      </div>
      <div class="pw-strength" id="pwMeter" style="display:none">
        <div class="pw-bars">
          <div class="pw-bar" id="b1"></div><div class="pw-bar" id="b2"></div>
          <div class="pw-bar" id="b3"></div><div class="pw-bar" id="b4"></div>
        </div>
        <span class="pw-label" id="pwLabel"></span>
      </div>
      <span class="field-error" id="pwErr">Min. 8 caractères requis</span>
    </div>

    <!-- CONFIRMER MDP -->
    <div class="field-box">
      <label for="password2">Confirmer mot de pass</label>
      <div class="field-inner">
        <input type="password" id="password2" name="password2" placeholder="••••••••" autocomplete="new-password"/>
        <button type="button" class="toggle-pw" onclick="togglePw('password2','eye2')">
          <svg id="eye2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>
          </svg>
        </button>
      </div>
      <span class="field-error" id="pw2Err">Les mots de passe ne correspondent pas</span>
    </div>

    <!-- ══ CASE STATUT ══ -->
    <div class="field-box">
      <label for="statut">Statut du compte</label>
      <div class="select-wrap">
        <select id="statut" name="statut" onchange="onStatutChange(this.value)">
          <option value="">-- Choisir votre statut --</option>
          <option value="user">  Utilisateur — Étudiant / Chercheur d'orientation</option>
          <option value="specialist"> Spécialiste — Conseiller / Professionnel</option>
          <option value="admin"> Administrateur — Demande d'accès</option>
        </select>
      </div>
      <span class="field-error" id="statutErr">Veuillez choisir un statut</span>
    </div>

    <!-- ══ CHAMPS USER ══ -->
    <div id="userFields" class="extra">
      <div class="field-box">
        <label for="niveau">Niveau d'études</label>
        <div class="select-wrap">
          <select id="niveau" name="niveau">
            <option value="">-- Choisir --</option>
            <option value="college">Collège</option>
            <option value="lycee_1">Lycée — 1ère année</option>
            <option value="lycee_2">Lycée — 2ème année (Bac)</option>
            <option value="bac">Baccalauréat obtenu</option>
            <option value="bac1">Bac +1</option>
            <option value="bac2">Bac +2</option>
            <option value="bac3">Bac +3</option>
            <option value="bac4">Bac +4 et plus</option>
          </select>
        </div>
        <span class="field-error" id="niveauErr">Requis</span>
      </div>
      <div class="field-box">
        <label for="filiere">Filière souhaitée</label>
        <div class="select-wrap">
          <select id="filiere" name="filiere">
            <option value="">-- Choisir --</option>
            <option value="sciences_techno">Sciences &amp; Technologie</option>
            <option value="eco_gestion">Sciences Économiques &amp; Gestion</option>
            <option value="medecine">Médecine &amp; Santé</option>
            <option value="droit">Droit &amp; Sciences Politiques</option>
            <option value="communication">Communication &amp; Médias</option>
            <option value="agriculture">Agriculture &amp; Environnement</option>
            <option value="arts">Arts &amp; Créativité</option>
            <option value="lettres">Lettres, Langues &amp; Sciences Humaines</option>
            <option value="autre">Autre / Je ne sais pas encore</option>
          </select>
        </div>
      </div>
    </div>

    <!-- ══ CHAMPS SPÉCIALISTE ══ -->
    <div id="specialistFields" class="extra">
      <div class="banner">
        <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
        Votre profil sera vérifié par notre équipe avant d'être visible aux étudiants.
      </div>
      <div class="field-box">
        <label for="telephone">Numéro de téléphone</label>
        <input type="tel" id="telephone" name="telephone" placeholder="+212 6XX XXX XXX"/>
        <span class="field-error" id="telErr">Numéro requis</span>
      </div>
      <div class="field-box">
        <label for="metier">Métier / Spécialité</label>
        <input type="text" id="metier" name="metier" placeholder="Ex: Conseiller d'orientation, Médecin..."/>
        <span class="field-error" id="metierErr">Métier requis</span>
      </div>
      <div class="field-box">
        <label for="description">Description du profil</label>
        <textarea id="description" name="description" rows="4"
          placeholder="Décrivez votre expérience et ce que vous pouvez apporter aux étudiants..."></textarea>
        <span class="field-error" id="descErr">Description requise (min. 20 caractères)</span>
      </div>
    </div>

    <!-- ══ CHAMPS ADMIN ══ -->
    <div id="adminFields" class="extra">
      <div class="banner">
        <svg viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
        L'accès admin nécessite une validation manuelle. Une demande sera envoyée à l'équipe What's Next ? après votre inscription.
      </div>
      <div class="field-box">
        <label for="adminRaison">Raison de la demande</label>
        <textarea id="adminRaison" name="admin_raison" rows="3"
          placeholder="Expliquez pourquoi vous avez besoin d'un accès administrateur..."></textarea>
        <span class="field-error" id="adminRaisonErr">Veuillez expliquer votre demande</span>
      </div>
      <div class="field-box">
        <label for="adminCode">Code d'invitation (si disponible)</label>
        <input type="text" id="adminCode" name="admin_code" placeholder="Optionnel"/>
      </div>
    </div>

    <!-- ══ RGPD — navy ══ -->
    <div class="rgpd-block">
      <div class="rgpd-title">
        <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        Consentement RGPD
      </div>
      <div class="rgpd-check">
        <input type="checkbox" id="rgpd1" name="rgpd1" required/>
        <label for="rgpd1"><strong>Obligatoire :</strong> J'accepte les <a href="conditionutilisation.html">CGU</a> et la <a href="politique.html">Politique de confidentialité</a>. Données traitées conformément au RGPD.</label>
      </div>
      <div class="rgpd-check">
        <input type="checkbox" id="rgpd2" name="rgpd2"/>
        <label for="rgpd2"><strong>Optionnel :</strong> J'accepte de recevoir des emails d'orientation de What's Next ?</label>
      </div>
    </div>
    <span class="field-error-center" id="rgpdErr">Vous devez accepter les CGU pour continuer</span>

    <!-- BOUTON SUBMIT -->
    <button type="submit" class="btn-connect" id="submitBtn">Créer mon compte</button>

    <div class="divider">ou</div>

    <!-- GOOGLE -->
    <a href="/login/google" class="btn-google">
      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/>
        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
      </svg>
      S'inscrire avec Google
    </a>

    <!-- ANNULER / SE CONNECTER -->
    <div class="bottom-btns">
      <a href="../template/Aceuil.html" class="btn-bas">Annuler</a>
      <a href="login.html" class="btn-bas">Se connecter</a>
    </div>

  </form>
</div>

<script>
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
</script>
</body>
</html>
