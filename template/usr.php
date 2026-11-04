<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Espace Étudiant</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,400;1,600;1,700&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../styles/usr.css">
</head>
<body>
<!-- ══ MAIN PAGE ══ -->
<div id="mainPage">
  <header class="topbar">
    <div class="topbar-logo">
      <img class="logo-img" src="../assets/abridc.png" onerror="this.style.display='none';this.nextElementSibling.style.display='block'" alt="What's Next?">
      <span class="logo-text" style="display:none">AbridCarrer</span>
    </div>
    <nav class="topbar-nav">
      <button class="nav-btn consult" onclick="openConsultPage()">
        <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
        Consultation
      </button>
      <button class="nav-btn logout" onclick="showToast('Déconnexion en cours…')">
        <svg viewBox="0 0 24 24"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
        Déconnexion
      </button>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-content">
      <div class="hero-eyebrow">Espace Étudiant</div>
      <h1>Choisissez votre avenir avec confiance</h1>
      <p>Explorez les domaines d'études, découvrez les établissements du Maroc et trouvez l'école qui correspond à votre projet.</p>
      <div class="hero-inspire" aria-label="Le futur appartient à ceux qui osent tracer leur propre chemin.">
        <div class="book-page left">
          <span class="book-text">Le futur appartient à ceux qui osent</span>
        </div>
        <div class="book-page right">
          <span class="book-mark"></span>
          <span class="book-text right-line">tracer leur propre chemin.</span>
        </div>
      </div>
    </div>
  </section>

  <div class="search-wrap">
    <div class="search-box">
      <svg class="search-icon" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
      <input class="search-input" type="text" placeholder="Rechercher une école, une filière…" oninput="filterCards(this.value)">
    </div>
  </div>

  <div class="filter-bar">
    <button class="filter-pill active" onclick="setFilter(this,'all')">Toutes</button>
    <button class="filter-pill" onclick="setFilter(this,'ing')">
      <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>Ingénierie
    </button>
    <button class="filter-pill" onclick="setFilter(this,'health')">
      <svg viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>Santé
    </button>
    <button class="filter-pill" onclick="setFilter(this,'edu')">
      <svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2zM22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>Éducation
    </button>
    <button class="filter-pill" onclick="setFilter(this,'law')">
      <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>Droit
    </button>
    <button class="filter-pill" onclick="setFilter(this,'eco')">
      <svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>Commerce
    </button>
    <button class="filter-pill" onclick="setFilter(this,'tech')">
      <svg viewBox="0 0 24 24"><path d="M14.7 6.3a4 4 0 00-5.66 5.66l-5.66 5.66 2.83 2.83 5.66-5.66a4 4 0 005.66-5.66l-2.12 2.12-2.83-2.83 2.12-2.12z"/></svg>Technique
    </button>
    <button class="filter-pill" onclick="setFilter(this,'arch')">
      <svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>Architecture
    </button>
    <button class="filter-pill" onclick="setFilter(this,'mil')">
      <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>Militaire
    </button>
  </div>

  <main class="schools-section">
    <div class="section-title">Les Sous domaines</div>
    <div class="section-divider"></div>
    <div class="schools-grid" id="schoolsGrid">
        <?php
          include '../Config_db/db.php';
          $Query="SELECT domain_id,name,description) FROM subdomains";
          $stmt=$conn->prepare($Query);
          $stmt->execute();
          while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            echo '<div class="school-card" data-domain="'.$row['domain_id'].'" onclick="openDomainPage('.$row['domain_id'].')">
                    <div class="school-card-content">
                      <h3>'.$row['name'].'</h3>
                      <p>'.$row['description'].'</p>
                    </div>
                  </div>';
          }
        ?>


    </div>
  </main>

  <footer class="site-footer">© 2025 What's Next ? · Plateforme d'orientation pour les bacheliers marocains</footer>
</div>

<!-- ══ DOMAIN DETAIL PAGE ══ -->
<div id="domainPage">
  <header class="dp-topbar">
    <button class="dp-back" onclick="closeDomainPage()">
      <svg viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"/></svg>Retour
    </button>
    <img height="46" src="static/LOGO2.png" onerror="this.style.display='none'" alt="What's Next?" style="object-fit:contain">
    <div style="width:110px"></div>
  </header>
  <div class="dp-banner" id="dpBanner">
    <div class="dp-banner-fallback" id="dpBannerFallback">
      <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
    </div>
    <img id="dpBannerImg" src="" alt="" style="display:none" onerror="this.style.display='none';document.getElementById('dpBannerFallback').style.display='flex'">
    <video id="dpBannerVideo" muted autoplay loop playsinline style="display:none"></video>
    <div class="dp-banner-overlay">
      <div class="dp-domain-icon" id="dpDomainIcon"></div>
      <div class="dp-domain-title" id="dpDomainTitle"></div>
      <div class="dp-domain-sub" id="dpDomainSub"></div>
    </div>
  </div>
  <div class="dp-content" id="dpContent"></div>
</div>

<!-- ══ CONSULTATION PAGE (lecture seule) ══ -->
<div id="consultPage">
  <header class="cp-topbar">
    <button class="cp-back" onclick="closeConsultPage()">
      <svg viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"/></svg>Retour
    </button>
    <img height="46" src="static/logo.png" onerror="this.style.display='none'" alt="What's Next?" style="object-fit:contain">
    <div style="width:110px"></div>
  </header>
  <section class="cp-hero">
    <h2>Experts à votre écoute</h2>
    <p>Consultez nos spécialistes pour vous orienter dans votre choix d'études.</p>
  </section>

  <!-- Bandeau informatif pour l'utilisateur -->
  <div class="cp-info-banner" style="padding:1rem 2rem;max-width:860px;margin:0 auto 1rem;">
    <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
    Les consultants sont des professionnels diplômés inscrits sur la plateforme. Pour devenir consultant, contactez l'administration de What's Next.
  </div>

  <div class="cp-main">
    <div class="cp-panel-title">Spécialistes disponibles</div>
    <div class="cp-metier-tabs" id="cpMetierTabs"></div>
    <div id="cpSpecsList"><div class="cp-loading"><div class="spinner"></div>Chargement…</div></div>
  </div>
</div>

<div class="consultant-profile-modal" id="consultantProfileModal">
  <div class="consultant-profile-panel">
    <div class="consultant-profile-head" id="consultantProfileHead"></div>
    <div class="consultant-posts" id="consultantProfilePosts"></div>
  </div>
</div>

<div class="toast" id="toast"></div>

<script src=".../Js/usr.js"></script>
</body>
</html>
