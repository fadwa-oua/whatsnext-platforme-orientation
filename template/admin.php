<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>What's Next — Administration</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,700&family=DM+Sans:wght@300;400;500;600&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.min.js"></script>
<link rel="stylesheet" href="../styles/admin.css">
</head>
<body>

<!-- ══ SIDEBAR ══ -->
<aside class="sidebar" id="sidebar">
  <div class="sb-logo">
    <div class="sb-logo-icon">W</div>
    <div>
      <div class="sb-logo-text">What's Next ?</div>
      <div class="sb-logo-sub">Administration</div>
    </div>
  </div>

  <div class="sb-admin-badge">
    <div class="sb-avatar">AD</div>
    <div>
      <div class="sb-admin-name">Admin Principal</div>
      <div class="sb-admin-role">Super Admin</div>
    </div>
  </div>

  <nav class="sb-nav">
    <div class="sb-section">Vue générale</div>
    <a class="sb-item active" onclick="showSection('dashboard',this)">
      <svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
      Tableau de bord
    </a>
    <a class="sb-item" onclick="showSection('stats',this)">
      <svg viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
      Statistiques
    </a>

    <div class="sb-section">Gestion</div>
    <a class="sb-item" onclick="showSection('etudiants',this)">
      <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
      Étudiants
      <span class="sb-badge" id="sb-etud-count">—</span>
    </a>
    <a class="sb-item" onclick="showSection('consultants',this)">
      <svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
      Consultants
      <span class="sb-badge" id="sb-cons-count">—</span>
    </a>
    <a class="sb-item" onclick="showSection('ecoles',this)">
      <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
      Établissements
    </a>

    <div class="sb-section">Base de données</div>
    <a class="sb-item" onclick="showSection('database',this)">
      <svg viewBox="0 0 24 24"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg>
      Base de données
    </a>
    <a class="sb-item" onclick="showSection('logs',this)">
      <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><line x1="8" y1="13" x2="16" y2="13"/><line x1="8" y1="17" x2="16" y2="17"/><polyline points="14 2 14 8 20 8"/></svg>
      Journaux d'activité
    </a>
  </nav>

  <div class="sb-footer">
    <button class="sb-footer-btn">
      <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93A10 10 0 1 0 4.93 19.07"/></svg>
      Paramètres
    </button>
    <button class="sb-footer-btn danger" onclick="showToast('Déconnexion…','info')">
      <svg viewBox="0 0 24 24"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
      Déconnexion
    </button>
  </div>
</aside>

<!-- ══ MAIN ══ -->
<div class="main">

  <!-- TOPBAR -->
  <div class="topbar">
    <div class="tb-left">
      <div class="tb-page-title" id="tbTitle">Tableau de bord</div>
    </div>
    <div class="tb-right">
      <div class="tb-date" id="tbDate"></div>
      <button class="tb-icon-btn" onclick="showSection('logs',document.querySelector('[onclick*=logs]'))">
        <svg viewBox="0 0 24 24"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 01-3.46 0"/></svg>
        <span class="tb-notif-dot"></span>
      </button>
      <button class="tb-icon-btn">
        <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 10-16 0"/></svg>
      </button>
    </div>
  </div>

  <!-- ══════════════════════════════════
       SECTION : DASHBOARD
  ══════════════════════════════════ -->
  <div class="content">

  <div class="section active" id="sec-dashboard">
    <div class="sec-hdr">
      <div class="sec-hdr-left">
        <h2>Vue d'ensemble</h2>
        <p>Données en temps réel de la plateforme What's Next</p>
      </div>
      <div class="sec-hdr-right">
        <button class="btn btn-outline" onclick="refreshData()">
          <svg viewBox="0 0 24 24"><polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 11-2.12-9.36L23 10"/></svg>
          Actualiser
        </button>
        <button class="btn btn-primary" onclick="exportData()">
          <svg viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Exporter
        </button>
      </div>
    </div>

    <!-- KPI -->
    <div class="kpi-grid">
      <div class="kpi-card blue">
        <div class="kpi-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
        <div class="kpi-val" id="kpi-etudiants">248</div>
        <div class="kpi-label">Étudiants inscrits</div>
        <div class="kpi-trend up"><svg viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>+12% ce mois</div>
      </div>
      <div class="kpi-card green">
        <div class="kpi-icon"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
        <div class="kpi-val" id="kpi-consultants">34</div>
        <div class="kpi-label">Consultants actifs</div>
        <div class="kpi-trend up"><svg viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>+5 nouveaux</div>
      </div>
      <div class="kpi-card orange">
        <div class="kpi-icon"><svg viewBox="0 0 24 24"><path d="M4 7h16M4 12h16M4 17h16"/></svg></div>
        <div class="kpi-val" id="kpi-domaines">8</div>
        <div class="kpi-label">Domaines gérés</div>
        <div class="kpi-trend up"><svg viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>Couverture complète</div>
      </div>
      <div class="kpi-card red">
        <div class="kpi-icon"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div>
        <div class="kpi-val" id="kpi-consultations">0</div>
        <div class="kpi-label">Consultations</div>
        <div class="kpi-trend neutral"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/></svg>Suivi activité</div>
      </div>
      <div class="kpi-card purple">
        <div class="kpi-icon"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg></div>
        <div class="kpi-val" id="kpi-ecoles">32</div>
        <div class="kpi-label">Établissements</div>
        <div class="kpi-trend neutral"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/></svg>Stable</div>
      </div>
    </div>

    <!-- CHARTS ROW 1 -->
    <div class="charts-grid">
      <div class="chart-card">
        <div class="chart-hdr">
          <div>
            <div class="chart-title">Inscriptions mensuelles</div>
            <div class="chart-sub">Étudiants + Consultants — 2025</div>
          </div>
        </div>
        <div class="chart-wrap"><canvas id="chartInscriptions"></canvas></div>
      </div>
      <div class="chart-card">
        <div class="chart-hdr">
          <div>
            <div class="chart-title">Répartition par domaine</div>
            <div class="chart-sub">Intérêt des étudiants</div>
          </div>
        </div>
        <div class="chart-wrap"><canvas id="chartDomaines"></canvas></div>
      </div>
      <div class="chart-card wide">
        <div class="chart-hdr">
          <div>
            <div class="chart-title">Activité hebdomadaire</div>
            <div class="chart-sub">Connexions, consultations et publications</div>
          </div>
        </div>
        <div class="chart-wrap tall"><canvas id="chartActivite"></canvas></div>
      </div>
    </div>

    <!-- BOTTOM ROW -->
    <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:1.2rem;">

      <!-- Top régions -->
      <div class="chart-card">
        <div class="chart-hdr"><div class="chart-title">Top villes</div></div>
        <div class="regions-list" id="regionsList"></div>
      </div>

      <!-- Répartition statut consultants -->
      <div class="chart-card">
        <div class="chart-hdr"><div><div class="chart-title">Statut consultants</div></div></div>
        <div class="chart-wrap"><canvas id="chartConsStatus"></canvas></div>
      </div>

      <!-- Activité récente -->
      <div class="activity-card">
        <div class="chart-hdr" style="margin-bottom:.4rem"><div class="chart-title">Activité récente</div></div>
        <div id="activityFeed"></div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════
       SECTION : STATISTIQUES
  ══════════════════════════════════ -->
  <div class="section" id="sec-stats">
    <div class="sec-hdr">
      <div class="sec-hdr-left">
        <h2>Statistiques avancées</h2>
        <p>Analyses détaillées de la plateforme</p>
      </div>
      <div class="sec-hdr-right">
        <button class="btn btn-primary" onclick="exportData()">
          <svg viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Rapport PDF
        </button>
      </div>
    </div>

    <div class="stat-grid">
      <div class="stat-box"><div class="stat-box-icon" style="background:linear-gradient(135deg,#5b7fc5,#3b5080)"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><div><div class="stat-val">248</div><div class="stat-lbl">Total étudiants</div></div></div>
      <div class="stat-box"><div class="stat-box-icon" style="background:linear-gradient(135deg,#2ecc71,#27ae60)"><svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div><div><div class="stat-val">94%</div><div class="stat-lbl">Taux activation</div></div></div>
      <div class="stat-box"><div class="stat-box-icon" style="background:linear-gradient(135deg,#f7ca74,#f39c12)"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="stat-val">4.7</div><div class="stat-lbl">Note moyenne</div></div></div>
      <div class="stat-box"><div class="stat-box-icon" style="background:linear-gradient(135deg,#bb8fce,#8e44ad)"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><div><div class="stat-val">1 204</div><div class="stat-lbl">Consultations</div></div></div>
      <div class="stat-box"><div class="stat-box-icon" style="background:linear-gradient(135deg,#ff6b6b,#e74c3c)"><svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div><div><div class="stat-val">18 min</div><div class="stat-lbl">Durée moy. session</div></div></div>
      <div class="stat-box"><div class="stat-box-icon" style="background:linear-gradient(135deg,#5dade2,#2980b9)"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg></div><div><div class="stat-val">32</div><div class="stat-lbl">Établissements</div></div></div>
    </div>

    <div class="charts-grid">
      <div class="chart-card">
        <div class="chart-hdr"><div><div class="chart-title">Croissance des inscrits</div><div class="chart-sub">Évolution cumulée 2025</div></div></div>
        <div class="chart-wrap tall"><canvas id="chartCroissance"></canvas></div>
      </div>
      <div class="chart-card">
        <div class="chart-hdr"><div><div class="chart-title">Filières les plus consultées</div></div></div>
        <div class="chart-wrap tall"><canvas id="chartFilieres"></canvas></div>
      </div>
    </div>

    <!-- Progression par domaine -->
    <div class="chart-card" style="margin-bottom:1.2rem">
      <div class="chart-hdr"><div class="chart-title">Popularité par domaine</div></div>
      <div id="domaineProgress"></div>
    </div>

    <!-- Taux conversion -->
    <div class="chart-card wide">
      <div class="chart-hdr"><div><div class="chart-title">Entonnoir de conversion</div><div class="chart-sub">Visite → Inscription → Consultation → Abonnement</div></div></div>
      <div class="chart-wrap"><canvas id="chartEntonnoir"></canvas></div>
    </div>
  </div>

  <!-- ══════════════════════════════════
       SECTION : ÉTUDIANTS
  ══════════════════════════════════ -->
  <div class="section" id="sec-etudiants">
    <div class="sec-hdr">
      <div class="sec-hdr-left">
        <h2>Gestion des étudiants</h2>
        <p><span id="etud-count-label">248</span> étudiants enregistrés</p>
      </div>
      <div class="sec-hdr-right">
        <button class="btn btn-outline" onclick="openModal('modal-add-etudiant')">
          <svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          Ajouter
        </button>
        <button class="btn btn-primary" onclick="exportData()">
          <svg viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/></svg>
          Exporter CSV
        </button>
      </div>
    </div>

    <div class="table-card">
      <div class="table-toolbar">
        <div class="table-title">Liste des étudiants</div>
        <div style="display:flex;gap:.5rem;flex-wrap:wrap;">
          <div class="table-search">
            <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
            <input type="text" placeholder="Rechercher…" oninput="filterTable(this,'etud-tbody')">
          </div>
          <select class="btn btn-outline btn-sm" style="cursor:pointer;background:var(--off);" onchange="filterByStatus(this,'etud-tbody')">
            <option value="">Tous statuts</option>
            <option value="Actif">Actif</option>
            <option value="Inactif">Inactif</option>
            <option value="Suspendu">Suspendu</option>
          </select>
        </div>
      </div>
      <div style="overflow-x:auto;">
      <table>
        <thead><tr>
          <th>Étudiant</th><th>Ville</th><th>Domaine d'intérêt</th><th>Inscription</th><th>Statut</th><th>Actions</th>
        </tr></thead>
        <tbody id="etud-tbody"></tbody>
      </table>
      </div>
      <div class="table-footer">
        <span id="etud-count-footer">Affichage de 10 sur 248</span>
        <div class="pagination">
          <button class="page-btn active">1</button>
          <button class="page-btn">2</button>
          <button class="page-btn">3</button>
          <button class="page-btn">›</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════
       SECTION : CONSULTANTS
  ══════════════════════════════════ -->
  <div class="section" id="sec-consultants">
    <div class="sec-hdr">
      <div class="sec-hdr-left">
        <h2>Gestion des consultants</h2>
        <p><span id="cons-count-label">34</span> consultants sur la plateforme</p>
      </div>
      <div class="sec-hdr-right">
        <button class="btn btn-outline" onclick="openModal('modal-add-consultant')">
          <svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          Ajouter
        </button>
      </div>
    </div>

    <div class="table-card">
      <div class="table-toolbar">
        <div class="table-title">Liste des consultants</div>
        <div class="table-search">
          <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
          <input type="text" placeholder="Rechercher…" oninput="filterTable(this,'cons-tbody')">
        </div>
      </div>
      <div style="overflow-x:auto;">
      <table>
        <thead><tr>
          <th>Consultant</th><th>Métier</th><th>École</th><th>Consultations</th><th>Statut</th><th>Actions</th>
        </tr></thead>
        <tbody id="cons-tbody"></tbody>
      </table>
      </div>
      <div class="table-footer">
        <span>Affichage de 10 sur 34</span>
        <div class="pagination">
          <button class="page-btn active">1</button>
          <button class="page-btn">2</button>
          <button class="page-btn">›</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════
       SECTION : CANDIDATURES
  ══════════════════════════════════ -->
  <div class="section" id="sec-applications">
    <div class="sec-hdr">
      <div class="sec-hdr-left">
        <h2>Candidatures consultants</h2>
        <p>Demandes d'intégration à valider</p>
      </div>
    </div>

    <div class="table-card">
      <div class="table-toolbar">
        <div class="table-title">Candidatures reçues</div>
        <div style="display:flex;gap:.5rem;">
          <span class="badge badge-warn">19 en attente</span>
          <span class="badge badge-success">68 approuvées</span>
        </div>
      </div>
      <div style="overflow-x:auto;">
      <table>
        <thead><tr>
          <th>Candidat</th><th>Domaine</th><th>École</th><th>Date</th><th>Statut</th><th>Actions</th>
        </tr></thead>
        <tbody id="app-tbody"></tbody>
      </table>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════
       SECTION : ÉTABLISSEMENTS
  ══════════════════════════════════ -->
  <div class="section" id="sec-ecoles">
    <div class="sec-hdr">
      <div class="sec-hdr-left"><h2>Établissements & domaines</h2><p><span id="ecole-count-label">0</span> établissements organisés par domaine</p></div>
      <div class="sec-hdr-right">
        <button class="btn btn-primary" onclick="openModal('modal-add-ecole')">
          <svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          Ajouter une école
        </button>
      </div>
    </div>
    <div class="domain-admin-grid" id="domainAdminGrid"></div>
    <div class="ecole-domain-filter" id="domainFilterBar"></div>
    <div class="table-card">
      <div class="table-toolbar">
        <div class="table-title">Liste des établissements</div>
        <div class="table-search">
          <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
          <input type="text" placeholder="Rechercher…" oninput="filterTable(this,'ecole-tbody')">
        </div>
      </div>
      <div style="overflow-x:auto;">
      <table>
        <thead><tr><th>École</th><th>Domaine</th><th>Villes</th><th>Durée</th><th>Actions</th></tr></thead>
        <tbody id="ecole-tbody"></tbody>
      </table>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════
       SECTION : BASE DE DONNÉES
  ══════════════════════════════════ -->
  <div class="section" id="sec-database">
    <div class="sec-hdr">
      <div class="sec-hdr-left"><h2>Gestion base de données</h2><p>Opérations CRUD et maintenance</p></div>
      <div class="sec-hdr-right">
        <button class="btn btn-warn" onclick="showToast('Sauvegarde démarrée…','info')">
          <svg viewBox="0 0 24 24"><path d="M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h11l5 5v11a2 2 0 01-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/></svg>
          Sauvegarder
        </button>
        <button class="btn btn-danger" onclick="openModal('modal-reset-db')">
          <svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/></svg>
          Réinitialiser
        </button>
      </div>
    </div>

    <!-- DB Stats -->
    <div class="kpi-grid" style="margin-bottom:1.4rem;">
      <div class="kpi-card blue">
        <div class="kpi-icon"><svg viewBox="0 0 24 24"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg></div>
        <div class="kpi-val">4.2 MB</div>
        <div class="kpi-label">Taille de la base</div>
        <div class="kpi-trend up"><svg viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>+0.3 MB</div>
      </div>
      <div class="kpi-card green">
        <div class="kpi-icon"><svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
        <div class="kpi-val">5</div>
        <div class="kpi-label">Tables actives</div>
        <div class="kpi-trend neutral"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/></svg>Stable</div>
      </div>
      <div class="kpi-card orange">
        <div class="kpi-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div class="kpi-val">99.8%</div>
        <div class="kpi-label">Disponibilité</div>
        <div class="kpi-trend up"><svg viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/></svg>Excellente</div>
      </div>
      <div class="kpi-card purple">
        <div class="kpi-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
        <div class="kpi-val">2h</div>
        <div class="kpi-label">Dernière sauvegarde</div>
        <div class="kpi-trend neutral"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/></svg>Auto</div>
      </div>
    </div>

    <!-- Tables -->
    <div class="table-card">
      <div class="table-toolbar"><div class="table-title">Tables de la base de données</div></div>
      <table>
        <thead><tr><th>Table</th><th>Entrées</th><th>Taille</th><th>Dernière modif.</th><th>Actions</th></tr></thead>
        <tbody id="db-tbody"></tbody>
      </table>
    </div>
  </div>

  <!-- ══════════════════════════════════
       SECTION : JOURNAUX
  ══════════════════════════════════ -->
  <div class="section" id="sec-logs">
    <div class="sec-hdr">
      <div class="sec-hdr-left"><h2>Journaux d'activité</h2><p>Historique complet des actions admin</p></div>
      <div class="sec-hdr-right">
        <button class="btn btn-outline" onclick="showToast('Journaux exportés','success')">
          <svg viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/></svg>
          Exporter
        </button>
      </div>
    </div>
    <div class="table-card">
      <div class="table-toolbar"><div class="table-title">Logs récents</div></div>
      <table>
        <thead><tr><th>Horodatage</th><th>Utilisateur</th><th>Action</th><th>Entité</th><th>IP</th><th>Statut</th></tr></thead>
        <tbody id="logs-tbody"></tbody>
      </table>
    </div>
  </div>

  </div><!-- /content -->
</div><!-- /main -->

<!-- ════════════════════
     MODALS
════════════════════ -->

<!-- Add Étudiant -->
<div class="modal-overlay" id="modal-add-etudiant" onclick="closeModal(event,this)">
  <div class="modal" onclick="event.stopPropagation()">
    <div class="modal-hdr">
      <div class="modal-title">Ajouter un étudiant</div>
      <button class="modal-close" onclick="closeModal(null,document.getElementById('modal-add-etudiant'))"><svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></button>
    </div>
    <div class="form-row">
      <div class="form-group"><label class="form-label">Nom</label><input class="form-input" placeholder="Alami"></div>
      <div class="form-group"><label class="form-label">Prénom</label><input class="form-input" placeholder="Yassine"></div>
    </div>
    <div class="form-group"><label class="form-label">Email</label><input class="form-input" type="email" placeholder="yassine@email.com"></div>
    <div class="form-row">
      <div class="form-group"><label class="form-label">Ville</label><select class="form-select"><option>Rabat</option><option>Casablanca</option><option>Fès</option><option>Marrakech</option><option>Agadir</option></select></div>
      <div class="form-group"><label class="form-label">Domaine d'intérêt</label><select class="form-select"><option>Ingénierie</option><option>Santé</option><option>Commerce</option><option>Droit</option><option>Éducation</option></select></div>
    </div>
    <div class="modal-actions">
      <button class="btn btn-outline" onclick="closeModal(null,document.getElementById('modal-add-etudiant'))">Annuler</button>
      <button class="btn btn-primary" onclick="addEtudiant()">
        <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>Ajouter
      </button>
    </div>
  </div>
</div>

<!-- Add Consultant -->
<div class="modal-overlay" id="modal-add-consultant" onclick="closeModal(event,this)">
  <div class="modal" onclick="event.stopPropagation()">
    <div class="modal-hdr">
      <div class="modal-title">Ajouter un consultant</div>
      <button class="modal-close" onclick="closeModal(null,document.getElementById('modal-add-consultant'))"><svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></button>
    </div>
    <div class="form-row">
      <div class="form-group"><label class="form-label">Nom</label><input class="form-input" placeholder="Benali"></div>
      <div class="form-group"><label class="form-label">Prénom</label><input class="form-input" placeholder="Fatima"></div>
    </div>
    <div class="form-group"><label class="form-label">Email</label><input class="form-input" type="email" placeholder="fatima@email.com"></div>
    <div class="form-group"><label class="form-label">Titre / Poste</label><input class="form-input" placeholder="Ingénieur · ENSIAS 2018"></div>
    <div class="form-row">
      <div class="form-group"><label class="form-label">Métier</label><select class="form-select"><option>Ingénieur</option><option>Médecin</option><option>Professeur</option><option>Juriste</option><option>Économiste</option></select></div>
      <div class="form-group"><label class="form-label">École</label><select class="form-select"><option>ENSIAS</option><option>ENSA</option><option>ENCG</option><option>ENS</option><option>Autre</option></select></div>
    </div>
    <div class="modal-actions">
      <button class="btn btn-outline" onclick="closeModal(null,document.getElementById('modal-add-consultant'))">Annuler</button>
      <button class="btn btn-primary" onclick="addConsultant()">
        <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>Ajouter
      </button>
    </div>
  </div>
</div>

<!-- Add École -->
<div class="modal-overlay" id="modal-add-ecole" onclick="closeModal(event,this)">
  <div class="modal" onclick="event.stopPropagation()">
    <div class="modal-hdr">
      <div class="modal-title">Ajouter un établissement</div>
      <button class="modal-close" onclick="closeModal(null,document.getElementById('modal-add-ecole'))"><svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></button>
    </div>
    <div class="form-group"><label class="form-label">Nom de l'école</label><input class="form-input" placeholder="ENSIAS"></div>
    <div class="form-row">
      <div class="form-group"><label class="form-label">Domaine</label><select class="form-select"><option>Ingénierie</option><option>Santé</option><option>Commerce</option><option>Droit</option><option>Éducation</option><option>Militaire</option></select></div>
      <div class="form-group"><label class="form-label">Durée (ans)</label><input class="form-input" type="number" min="1" max="8" value="5"></div>
    </div>
    <div class="form-group"><label class="form-label">Villes</label><input class="form-input" placeholder="Rabat, Casablanca…"></div>
    <div class="form-group"><label class="form-label">Description</label><textarea class="form-input" style="min-height:80px;resize:vertical;" placeholder="Description de l'école…"></textarea></div>
    <div class="modal-actions">
      <button class="btn btn-outline" onclick="closeModal(null,document.getElementById('modal-add-ecole'))">Annuler</button>
      <button class="btn btn-primary" onclick="showToast('École ajoutée avec succès','success');closeModal(null,document.getElementById('modal-add-ecole'))">
        <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>Ajouter
      </button>
    </div>
  </div>
</div>

<!-- Reset DB Confirm -->
<div class="modal-overlay" id="modal-reset-db" onclick="closeModal(event,this)">
  <div class="confirm-modal" onclick="event.stopPropagation()">
    <div class="confirm-icon"><svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/></svg></div>
    <div class="confirm-title">Réinitialiser la base ?</div>
    <div class="confirm-text">Cette action est <strong>irréversible</strong>. Toutes les données seront supprimées définitivement. Assurez-vous d'avoir effectué une sauvegarde.</div>
    <div class="confirm-actions">
      <button class="btn btn-outline" onclick="closeModal(null,document.getElementById('modal-reset-db'))">Annuler</button>
      <button class="btn btn-danger" onclick="resetDB()">Confirmer la suppression</button>
    </div>
  </div>
</div>

<!-- Delete Confirm -->
<div class="modal-overlay" id="modal-delete" onclick="closeModal(event,this)">
  <div class="confirm-modal" onclick="event.stopPropagation()">
    <div class="confirm-icon"><svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/></svg></div>
    <div class="confirm-title">Supprimer cet enregistrement ?</div>
    <div class="confirm-text">Cette action supprimera définitivement cet enregistrement de la base de données.</div>
    <div class="confirm-actions">
      <button class="btn btn-outline" onclick="closeModal(null,document.getElementById('modal-delete'))">Annuler</button>
      <button class="btn btn-danger" onclick="confirmDelete()">Supprimer</button>
    </div>
  </div>
</div>

<div class="toast" id="toast"></div>

<script src="../js/admin.js"></script>
</body>
</html>
