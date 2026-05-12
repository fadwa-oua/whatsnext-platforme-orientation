<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Connexion — What's Next ?</title>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
  <script src="https://accounts.google.com/gsi/client" async defer></script>
  <link rel="stylesheet" href="../styles/login.css">
</head>
<body>

  <!-- LOGO — haut à gauche, hors du cadre -->
  <div class="top-logo">
    <img src="../template//static/LOGO2.png" alt="What's Next ?"/>
  </div>

  <!-- LE GRAND CADRE PLEINE LARGEUR -->
  <div class="main-card">

    <!-- 1. IMAGE PLEINE LARGEUR EN HAUT -->
    <div class="img-zone">
        <div class="hero-text">
            <div class="hero-line1">Our Legacy</div>
            <div class="hero-line2">is your Future</div>
            <div class="hero-sub">Chaque pas vous rapproche de votre destin</div>
        </div>
    </div>
    <!-- 2. FORMULAIRE LOGIN -->
    <div class="inner form-zone">
      <form id="loginForm" action="/login" method="POST" novalidate>

        <div class="field-box">
          <label for="email">Adresse e-mail</label>
          <div class="field-inner">
            <input type="email" id="email" name="email"
                   placeholder="exemple@email.com" autocomplete="email"/>
          </div>
          <span class="field-error" id="emailErr">Email invalide</span>
        </div>

        <div class="field-box">
          <label for="password">Mot de passe</label>
          <div class="field-inner">
            <input type="password" id="password" name="password"
                   placeholder="••••••••" autocomplete="current-password"/>
            <button type="button" class="toggle-pw" onclick="togglePw()">
              <svg id="eyeIco" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                <circle cx="12" cy="12" r="3"/>
              </svg>
            </button>
          </div>
          <span class="field-error" id="pwErr">Mot de passe requis</span>
        </div>

        <a href="forgot.html" class="forgot-link">Récupérer mot de passe</a>

        <button type="submit" class="btn-connect">Se connecter</button>

        <div class="divider">ou</div>

        <button type="button" class="btn-google" onclick="loginWithGoogle()">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/>
            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
          </svg>
          Continuer avec Google
        </button>

        <p class="rgpd-mini">
            En vous connectant, vous acceptez nos
            <a href="conditionutilisation.html">Conditions d'utilisation</a> et notre
            <a href="politique.html">Politique de confidentialité</a>.
        </p>

        <div class="bottom-btns">
          <a href="../template/Aceuil.html" class="btn-bas">Annuler</a>
          <a href="../template/creercompte.php" class="btn-bas">Créer un compte</a>
        </div>

      </form>
    </div>

    <!-- Séparateur -->
    <div class="inner-sep">
      <div class="inner-sep-line"></div>
    </div>

    <!-- 3. TEXTE MOTIVANT EN BAS -->
    <div class="motivation-zone">
      <div class="motiv-tag">Orientation &amp; Réussite</div>
      <div class="motiv-title">Trouvez votre voie,<br/>construisez votre succès.</div>
      <div class="motiv-stars">
        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
        <small>+2 400 étudiants accompagnés</small>
      </div>
      <p class="motiv-desc">
        Connectez-vous pour accéder à vos recommandations personnalisées et découvrir les meilleures opportunités qui correspondent à votre profil.
      </p>
      <a href="Aceuil.html" class="motiv-cta">
        Commencer maintenant
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <path d="M5 12h14M12 5l7 7-7 7"/>
        </svg>
      </a>
    </div>

    <!-- Barre violette bas -->
    <div class="card-footer-bar"></div>

  </div><!-- /main-card -->

<script>
  function loginWithGoogle() {
    google.accounts.id.initialize({
      client_id: '615162946126-1ftm8recpo1v122dup7ntdi0jmhag7jj.apps.googleusercontent.com',
      callback: handleCredentialResponse
    });
    google.accounts.id.prompt();
  }

  function handleCredentialResponse(response) {
    const payload = JSON.parse(atob(response.credential.split('.')[1]));
    const sessionUser = {
      name: payload.name,
      nom: payload.name,
      email: payload.email,
      photo: payload.picture,
      photo_url: payload.picture,
      provider: 'google',
      loginAt: new Date().toISOString()
    };
    localStorage.setItem('user', JSON.stringify(sessionUser));
    localStorage.setItem('wn_user', JSON.stringify(sessionUser));
    window.location.href = 'Aceuil.html';
  }

  function togglePw() {
    const input = document.getElementById('password');
    const ico   = document.getElementById('eyeIco');
    const isText = input.type === 'text';
    input.type = isText ? 'password' : 'text';
    ico.innerHTML = isText
      ? `<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>`
      : `<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/>`;
  }

  document.getElementById('loginForm').addEventListener('submit', function(e) {
    let ok = true;
    const email = document.getElementById('email');
    const pw    = document.getElementById('password');
    if (!email.value || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
      document.getElementById('emailErr').classList.add('show'); ok = false;
    } else { document.getElementById('emailErr').classList.remove('show'); }
    if (!pw.value) {
      document.getElementById('pwErr').classList.add('show'); ok = false;
    } else { document.getElementById('pwErr').classList.remove('show'); }
    if (!ok) e.preventDefault();
  });
</script>
<script src="static/rgpd.js"></script>
</body>
</html>
