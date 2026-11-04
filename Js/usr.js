const schools = [
  /* ══ INGÉNIERIE ══ */
  {name:"ENSIAS",img:"static/ensias.jpg",type:"ing",desc:"École Nationale Supérieure d'Informatique et d'Analyse des Systèmes — formation d'ingénieurs en informatique de haut niveau.",years:5,cities:["Rabat"],domain:"Ingénierie Informatique",filieres:["Génie Logiciel","Systèmes d'Information","Intelligence Artificielle","Réseaux & Télécoms","Cybersécurité"]},
  {name:"ENSA",img:"static/ensa.jpg",type:"ing",desc:"École Nationale des Sciences Appliquées — génie civil, électrique, informatique et industriel.",years:5,cities:["Kénitra","Agadir","Fès","Marrakech","Oujda","Béni Mellal","Tanger"],domain:"Sciences Appliquées",filieres:["Génie Civil","Génie Électrique","Génie Informatique","Génie Industriel","Génie Mécanique"]},
  {name:"ENSAM",img:"static/ensam.jpg",type:"ing",desc:"École Nationale Supérieure des Arts et Métiers — génie mécanique, productique et systèmes industriels.",years:5,cities:["Meknès","Casablanca"],domain:"Arts et Métiers",filieres:["Génie Mécanique","Productique","Génie des Matériaux","Génie Électromécanique"]},
  {name:"ENSCK",img:"static/ensck.jpg",type:"ing",desc:"École Nationale des Sciences Chimiques de Kénitra — chimie industrielle et génie des procédés.",years:5,cities:["Kénitra"],domain:"Sciences Chimiques",filieres:["Génie Chimique","Chimie Industrielle","Procédés Industriels","Matériaux Avancés"]},
  {name:"FST",img:"static/fst.jpg",type:"tech",extraTypes:["ing"],desc:"Faculté des Sciences et Techniques — formations scientifiques et techniques avec possibilité de poursuivre vers un cycle ingénieur selon le parcours.",years:5,cities:["Béni Mellal","Fès","Marrakech","Mohammedia","Tanger"],domain:"Sciences & Techniques",filieres:["Informatique Appliquée","Physique","Chimie","Biologie","Mathématiques","Cycle Ingénieur"]},
  {name:"ENIAD",img:"static/eniad.jpg",type:"ing",desc:"École Nationale d'Ingénierie Appliquée — ingénierie appliquée et technologies avancées.",years:5,cities:["Béni Mellal"],domain:"Ingénierie Appliquée",filieres:["Génie Civil","Génie Informatique","Génie Électrique","Génie Industriel"]},
  {name:"UIR",img:"static/uir.png",type:"ing",desc:"Université Internationale de Rabat — ingénierie, business, droit et technologies numériques.",years:5,cities:["Rabat"],domain:"Université Privée",filieres:["Ingénierie Informatique","Robotique","Énergies Renouvelables","Aéronautique"]},
  {name:"Classe Préparatoire",img:"static/engineering.png",type:"ing",desc:"Classes Préparatoires aux Grandes Écoles — MPSI, MP, PSI, TSI, BCPST.",years:2,cities:["Rabat","Casablanca","Fès","Marrakech","Meknès","Agadir","Oujda"],domain:"Prépa Grandes Écoles",filieres:["MPSI / MP","PSI","TSI","BCPST","PT"]},

  {name:"ERA",img:"static/era.png",type:"mil",extraTypes:["ing"],desc:"École Royale de l'Air — formation militaire et technique avec cycles ingénieur et sous-officier.",years:4,cities:["Marrakech"],domain:"Forces Aériennes & Ingénierie",filieres:["Cycle Ingénieur","Cycle Sous-Officier","Aéronautique","Systèmes Embarqués","Maintenance Aéronautique"]},

  /* ══ ARCHITECTURE (domaine séparé) ══ */
  {name:"ENA",img:"static/ena.jpg",type:"arch",desc:"École Nationale d'Architecture — formation des architectes, urbanisme, design et patrimoine.",years:6,cities:["Rabat","Casablanca","Marrakech","Fès","Tétouan","Agadir"],domain:"Architecture",filieres:["Architecture","Urbanisme","Design d'Intérieur","Patrimoine Architectural"]},

  /* ══ SANTÉ ══ */
  {name:"Faculté de Médecine",img:"static/facultemedcine.jpg",type:"health",desc:"Formation médicale complète : de la biologie fondamentale aux spécialisations cliniques et résidanat.",years:7,cities:["Rabat","Casablanca","Fès","Marrakech","Oujda","Agadir"],domain:"Médecine",filieres:["Médecine Générale","Chirurgie","Cardiologie","Pédiatrie","Neurologie","Gynécologie","Oncologie"]},
  {name:"Faculté Dentaire",img:"static/facultemedcine.jpg",type:"health",desc:"Chirurgie dentaire — orthodontie, prothèses, implantologie et spécialisations cliniques.",years:6,cities:["Rabat","Casablanca","Fès"],domain:"Chirurgie Dentaire",filieres:["Chirurgie Dentaire","Orthodontie","Prothèses","Implantologie","Pédodontie"]},
  {name:"Pharmacie",img:"static/pharmacier.jpeg",type:"health",desc:"Sciences pharmaceutiques — officine, industrie pharmaceutique et recherche biomédicale.",years:6,cities:["Rabat","Casablanca","Fès"],domain:"Pharmacie",filieres:["Pharmacie Officinale","Industrie Pharmaceutique","Biologie Médicale","Toxicologie","Pharmacologie"]},
  {name:"ISPITS",img:"static/ispits.jpg",type:"health",desc:"Institut Supérieur des Professions Infirmières et Techniques de Santé.",years:3,cities:["Rabat","Casablanca","Fès","Agadir","Marrakech"],domain:"Soins Infirmiers",filieres:["Soins Infirmiers","Sages-Femmes","Kinésithérapie","Imagerie Médicale","Laboratoire"]},
  {name:"IFMEREE",img:"static/ifmeree.png",type:"tech",desc:"Institut de Formation aux Métiers des Énergies Renouvelables et de l'Efficacité Énergétique — réseau d'établissements dédiés à la formation de techniciens et techniciens spécialisés dans l'énergie durable.",years:2,cities:["Oujda","Tanger","Marrakech"],domain:"Énergies Renouvelables",filieres:["Énergies Renouvelables","Efficacité Énergétique","Maintenance Éolienne","Solaire Photovoltaïque","Systèmes Énergétiques"]},
  {name:"ISSS",img:"static/isss.jpg",type:"health",desc:"Institut Supérieur des Sciences de la Santé — formations paramédicales et techniques.",years:4,cities:["Casablanca","Settat"],domain:"Sciences de la Santé",filieres:["Infirmier Polyvalent","Technicien de Laboratoire","Sage-Femme","Anesthésie-Réanimation"]},
  {name:"UEFM",img:"static/uefm.jpg",type:"health",desc:"Union Européenne des Facultés de Médecine — faculté privée de médecine avec accréditation européenne.",years:6,cities:["Casablanca","Rabat"],domain:"Médecine Privée",filieres:["Médecine Générale","Spécialités Médicales","Recherche Biomédicale"]},

  /* ══ ÉDUCATION ══ */
  {name:"ENS",img:"static/ens.png",type:"edu",desc:"École Normale Supérieure — préparation des professeurs de l'enseignement secondaire qualifié.",years:4,cities:["Rabat","Fès","Marrakech","Casablanca"],domain:"Éducation",filieres:["Mathématiques","Physique-Chimie","Sciences de la Vie","Lettres Arabes","Philosophie","Histoire-Géo"]},
  {name:"ENSET",img:"static/enset.png",type:"edu",desc:"École Normale Supérieure de l'Enseignement Technique — formation des enseignants en disciplines techniques.",years:4,cities:["Mohammedia","Rabat"],domain:"Enseignement Technique",filieres:["Génie Électrique","Génie Mécanique","Informatique","Génie Civil","Économie Gestion"]},
  {name:"ISIC",img:"static/isic.png",type:"edu",desc:"Institut Supérieur de l'Information et de la Communication — journalisme et médias.",years:3,cities:["Rabat"],domain:"Communication",filieres:["Journalisme","Communication Institutionnelle","Presse Écrite","Audiovisuel","Communication Digitale"]},
  {name:"Faculté des Lettres",img:"static/facultedelettre.svg",type:"edu",desc:"Faculté des Lettres et Sciences Humaines — langues, philosophie, histoire et géographie.",years:4,cities:["Rabat","Casablanca","Fès","Marrakech","Agadir","Oujda"],domain:"Lettres & Humanités",filieres:["Langue Française","Langue Anglaise","Philosophie","Histoire","Géographie","Langue Arabe"]},
  {name:"Arts & Design",img:"static/facultdart.png",type:"edu",desc:"Design graphique, arts plastiques, UX/UI et architecture d'intérieur.",years:4,cities:["Casablanca","Rabat"],domain:"Arts & Design",filieres:["Design Graphique","UX/UI Design","Arts Plastiques","Architecture d'Intérieur","Animation 3D"]},

  /* ══ DROIT ══ */
  {name:"Faculté de Droit",img:"static/facultedroit.jpg",type:"law",desc:"Droit privé, droit public et sciences politiques — droit des affaires, droit international.",years:4,cities:["Rabat","Casablanca","Fès","Marrakech","Agadir","Oujda"],domain:"Droit",filieres:["Droit Privé","Droit Public","Droit des Affaires","Droit International","Sciences Politiques","Notariat"]},

  /* ══ COMMERCE / ÉCONOMIE ══ */
  {name:"ENCG",img:"static/encg.png",type:"eco",desc:"École Nationale de Commerce et de Gestion — management, finance et commerce international.",years:5,cities:["Casablanca","Agadir","Fès","Tanger","Settat","Oujda","Marrakech"],domain:"Commerce & Gestion",filieres:["Finance","Marketing","Commerce International","Management","Ressources Humaines","Audit"]},
  {name:"ISCAE",img:"static/Iscae.jpg",type:"eco",desc:"Institut Supérieur de Commerce et d'Administration des Entreprises — management, finance, audit et droit des affaires.",years:5,cities:["Casablanca","Rabat"],domain:"Commerce & Administration",filieres:["Management","Finance d'Entreprise","Marketing","Droit des Affaires","Audit & Contrôle"]},
  {name:"BTS",img:"static/bts.png",type:"tech",desc:"Brevet de Technicien Supérieur — formations techniques courtes et professionnalisantes en 2 ans.",years:2,cities:["Toutes villes"],domain:"Techniciens Supérieurs",filieres:["BTS Informatique","BTS Électrotechnique","BTS Maintenance","BTS Systèmes Numériques","BTS Gestion PME"]},
  {name:"EST",img:"static/est.jpg",type:"tech",desc:"École Supérieure de Technologie — formations de techniciens supérieurs et licences professionnelles.",years:2,cities:["Casablanca","Rabat","Béni Mellal","Fès","Meknès"],domain:"Technologie",filieres:["Génie Informatique","Génie Électrique","Génie Mécanique","Gestion Logistique","Techniques de Management"]},
  {name:"ISTA",img:"static/ista.png",type:"tech",desc:"Institut Spécialisé de Technologie Appliquée — formations techniques et professionnelles.",years:2,cities:["Toutes villes"],domain:"Technologie Appliquée",filieres:["Développement Informatique","Administration des Réseaux","Électronique","Maintenance Industrielle","Automatisation"]},

  /* ══ MILITAIRE ══ */
  {name:"Armée Royale",img:"static/arm.jpg",type:"mil",desc:"Forces Armées Royales — formation des officiers et sous-officiers, défense nationale, commandement.",years:4,cities:["Meknès","Rabat","Benguérir"],domain:"Forces Armées",filieres:["Officier d'État-Major","Génie Militaire","Transmissions","Logistique Militaire","Infanterie","Aviation"]},
  /* Marine et Gendarmerie → images statiques uniquement (pas de répétition de vidéo) */
  {name:"Marine Royale",img:"static/lamarineroyale.jpg",type:"mil",desc:"Forces Navales Royales Marocaines — navigation, génie maritime et défense des côtes.",years:4,cities:["Casablanca","Agadir","Dakhla"],domain:"Marine",filieres:["Navigation","Génie Maritime","Mécanique Navale","Électronique Navale","Plongée Combat"]},
  {name:"Gendarmerie Royale",img:"static/gendarme.jpg",type:"mil",desc:"Gendarmerie Royale du Maroc — sécurité, défense et maintien de l'ordre public.",years:3,cities:["Kénitra","Rabat"],domain:"Gendarmerie",filieres:["Police Judiciaire","Sécurité Routière","Cybergendarmerie","Enquête Criminelle","Garde Royale"]},
];

/* ════════════════════════════════════════════════
   DOMAIN META — inclut "arch" comme domaine séparé
════════════════════════════════════════════════ */
const DOMAIN_META = {
  ing:{label:"Ingénierie & Sciences",sub:"Grandes écoles d'ingénieurs, sciences appliquées et technologies",img:"static/engineering.png",video:null,icon:'<svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>'},
  arch:{label:"Architecture & Urbanisme",sub:"Écoles d'architecture, urbanisme, design et patrimoine",img:null,video:null,icon:'<svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>'},
  health:{label:"Santé & Médecine",sub:"Médecine, dentaire, pharmacie, soins infirmiers et professions de santé",img:"static/facultemedcine.jpg",video:"static/medcine.mp4",icon:'<svg viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>'},
  edu:{label:"Éducation & Communication",sub:"Écoles normales, journalisme, lettres, arts et sciences humaines",img:"static/educationbackground.jpg",video:null,icon:'<svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2zM22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>'},
  law:{label:"Droit & Administration",sub:"Facultés de droit, administration publique et sciences politiques",img:"static/droitbackground.png",video:null,icon:'<svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>'},
  eco:{label:"Commerce & Économie",sub:"Gestion, finance, commerce, audit et management",img:"static/ecommerce.jpg",video:null,icon:'<svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>'},
  tech:{label:"Technique & Technologie",sub:"FST, EST, BTS, ISTA et formations de techniciens dans les secteurs industriels, numériques et énergétiques",img:null,video:null,icon:'<svg viewBox="0 0 24 24"><path d="M14.7 6.3a4 4 0 00-5.66 5.66l-5.66 5.66 2.83 2.83 5.66-5.66a4 4 0 005.66-5.66l-2.12 2.12-2.83-2.83 2.12-2.12z"/></svg>'},
  mil:{label:"Militaire & Sécurité",sub:"Forces Armées Royales, Marine Royale et Gendarmerie Royale",img:"static/arm.jpg",video:"static/militaire.mp4",icon:'<svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>'},
  all:{label:"Tous les domaines",sub:"Explorez l'ensemble des établissements du Maroc",img:null,video:null,icon:'<svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>'}
};

const METIERS = [
  {id:"ingenieur",label:"Ingénieurs"},
  {id:"professeur",label:"Professeurs"},
  {id:"medecin",label:"Médecins"},
  {id:"infermiere",label:"Infirmiers"},
  {id:"juriste",label:"Juristes"},
  {id:"economiste",label:"Économistes"},
];

/* ════════════════════════════════════════════════
   GESTION ERREURS IMAGE
════════════════════════════════════════════════ */
function onImgError(img) { img.style.display = 'none'; }
function onDpImgError(img) { img.style.display = 'none'; }

function placeholderHtml(name) {
  return `<div class="card-img-placeholder">
    <div class="placeholder-content">
      <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" stroke-linejoin="round"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
      <span>${name}</span>
      <span class="card-img-note">Ajouter une image ou une vidéo</span>
    </div>
  </div>`;
}
function dpPlaceholderHtml(name) {
  return `<div class="dp-card-placeholder">
    <div class="placeholder-content">
      <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" stroke-linejoin="round"/></svg>
      <span>${name}</span>
      <span class="dp-card-note">Sélectionnez une image ou une vidéo stylée</span>
    </div>
  </div>`;
}

/* ── Media cards ── */
function buildCardMedia(s) {
  if (s.video) {
    return `
      ${placeholderHtml(s.name)}
      <video muted autoplay loop playsinline onerror="this.style.display='none'" src="${s.video}"></video>
      <span class="media-credit">Dreamstime</span>
      <div class="video-label">
        <span class="video-label-title">${s.name}</span>
        <span class="video-label-sub">${s.videoLabel || s.domain}</span>
      </div>`;
  }
  if (s.img) {
    return `
      ${placeholderHtml(s.name)}
      <img src="${s.img}" alt="${s.name}" loading="lazy" onerror="onImgError(this)">`;
  }
  return placeholderHtml(s.name);
}

function buildDpCardMedia(s) {
  if (s.video) {
    return `<div class="dp-card-media">
      ${dpPlaceholderHtml(s.name)}
      <video muted autoplay loop playsinline src="${s.video}" onerror="this.style.display='none'"></video>
      <span class="media-credit">Dreamstime</span>
      <div class="video-label" style="position:absolute;bottom:0;left:0;right:0;z-index:3">
        <span class="video-label-title" style="font-size:1.1rem">${s.name}</span>
        <span class="video-label-sub">${s.videoLabel || s.domain}</span>
      </div>
    </div>`;
  }
  if (s.img) {
    return `<div class="dp-card-media">
      ${dpPlaceholderHtml(s.name)}
      <img src="${s.img}" alt="${s.name}" loading="lazy" onerror="onDpImgError(this)">
    </div>`;
  }
  return `<div class="dp-card-media">${dpPlaceholderHtml(s.name)}</div>`;
}

function filieresTagsHtml(filieres, tagClass='filiere-tag') {
  return (filieres || []).map(f => `<span class="${tagClass}">${f}</span>`).join('');
}

function schoolTypes(s) {
  return [s.type, ...(s.extraTypes || [])].filter(Boolean);
}

function domainForSchool(s) {
  const types = schoolTypes(s);
  return currentFilter !== 'all' && types.includes(currentFilter) ? currentFilter : s.type;
}

function toggleFilieres(btn, id) {
  const panel = document.getElementById(id);
  if (!panel) return;
  const isOpen = panel.classList.toggle('open');
  panel.classList.toggle('collapsed', !isOpen);
  btn.classList.toggle('open', isOpen);
  btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
}

/* ════════════════════════════════════════════════
   RENDER SCHOOL CARDS (clic → page du domaine)
════════════════════════════════════════════════ */
function renderSchools(data) {
  const grid = document.getElementById('schoolsGrid');
  grid.innerHTML = '';
  data.forEach((s, i) => {
    const opts = s.cities.map(c => `<option>${c}</option>`).join('');
    const badgeClass = `badge-${s.type}`;
    const types = schoolTypes(s);
    const filieresId = `filieres-${i}`;
    const filieresHtml = filieresTagsHtml(s.filieres);
    const card = document.createElement('div');
    card.className = 'school-card';
    card.dataset.types = types.join(' ');
    card.dataset.name = (s.name+' '+s.domain+' '+s.desc+' '+(s.filieres||[]).join(' ')).toLowerCase();
    card.style.animationDelay = (i * 0.04) + 's';
    card.innerHTML = `
      <div class="card-media-wrap">
        ${buildCardMedia(s)}
        <span class="card-badge ${badgeClass}">${s.domain}</span>
      </div>
      <div class="card-body">
        <div class="card-school-name">${s.name}</div>
        <div class="card-desc">${s.desc}</div>
        <div class="select-group">
          <span class="select-label">
            <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Ville
          </span>
          <select class="select-control" onclick="event.stopPropagation()">${opts}</select>
        </div>
        <div class="card-footer-row">
          <span class="years-badge"><span class="years-dot"></span>${s.years} an${s.years>1?'s':''} d'études</span>
          <div class="card-actions">
            ${filieresHtml ? `<button class="filiere-toggle" type="button" aria-label="Afficher les filières" aria-expanded="false" onclick="event.stopPropagation();toggleFilieres(this,'${filieresId}')"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button>` : ''}
            <button class="card-cta" type="button">Voir le domaine</button>
          </div>
        </div>
        ${filieresHtml ? `<div class="card-filieres" id="${filieresId}">${filieresHtml}</div>` : ''}
      </div>`;
    card.querySelector('.card-cta').addEventListener('click', event => {
      event.stopPropagation();
      openDomainPage(domainForSchool(s));
    });
    /* Clic sur la carte → ouvre le domaine (toutes les écoles du domaine) */
    card.addEventListener('click', () => openDomainPage(domainForSchool(s)));
    grid.appendChild(card);
  });
}

/* ════════════════════════════════════════════════
   FILTRES
════════════════════════════════════════════════ */
let currentFilter = 'all';
function setFilter(btn, type) {
  document.querySelectorAll('.filter-pill').forEach(p => p.classList.remove('active'));
  btn.classList.add('active');
  currentFilter = type;
  applyFilters(document.querySelector('.search-input').value.toLowerCase());
}
function filterCards(q) { applyFilters(q.toLowerCase()); }
function applyFilters(q='') {
  document.querySelectorAll('.school-card').forEach(c => {
    const mt = currentFilter==='all' || (c.dataset.types || '').split(' ').includes(currentFilter);
    const mq = !q || c.dataset.name.includes(q);
    c.style.display = (mt && mq) ? '' : 'none';
  });
}

/* ════════════════════════════════════════════════
   DOMAIN DETAIL PAGE
   Affiche TOUTES les écoles du domaine cliqué
════════════════════════════════════════════════ */
function openDomainPage(type) {
  const meta = DOMAIN_META[type] || DOMAIN_META.all;
  const filtered = type==='all' ? schools : schools.filter(s => schoolTypes(s).includes(type));

  const bannerImg      = document.getElementById('dpBannerImg');
  const bannerVideo    = document.getElementById('dpBannerVideo');
  const bannerFallback = document.getElementById('dpBannerFallback');

  bannerImg.style.display   = 'none';
  bannerVideo.style.display = 'none';
  bannerFallback.style.display = 'flex';

  if (meta.video) {
    bannerVideo.src = meta.video;
    bannerVideo.style.display = 'block';
    bannerFallback.style.display = 'none';
  } else if (meta.img) {
    bannerImg.src = meta.img;
    bannerImg.style.display = 'block';
    bannerFallback.style.display = 'none';
  }

  document.getElementById('dpDomainIcon').innerHTML = meta.icon;
  document.getElementById('dpDomainTitle').textContent = meta.label;
  document.getElementById('dpDomainSub').textContent = meta.sub;

  /* Grouper par sous-domaine */
  const byDomain = {};
  filtered.forEach(s => {
    if (!byDomain[s.domain]) byDomain[s.domain] = [];
    byDomain[s.domain].push(s);
  });

  let html = '';
  Object.entries(byDomain).forEach(([domName, list], gi) => {
    const cards = list.map((s, si) => {
      const filieresId = `dp-filieres-${gi}-${si}`;
      const filieresHtml = filieresTagsHtml(s.filieres, 'dp-filiere-tag');
      return `<div class="dp-school-card" style="animation-delay:${gi*.08+si*.05}s">
        ${buildDpCardMedia(s)}
        <div class="dp-card-body">
          <div class="dp-card-name">${s.name}</div>
          <div class="dp-card-desc">${s.desc}</div>
          ${filieresHtml ? `<button class="dp-filiere-toggle" type="button" aria-expanded="false" onclick="event.stopPropagation();toggleFilieres(this,'${filieresId}')">Filières <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></button><div class="dp-card-filieres collapsed" id="${filieresId}">${filieresHtml}</div>` : ''}
          <div class="dp-card-meta">
            <span class="dp-card-years">${s.years} an${s.years>1?'s':''} d'études</span>
            <span class="dp-card-city">
              <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
              ${s.cities.slice(0,2).join(', ')}${s.cities.length>2?` +${s.cities.length-2}`:''}
            </span>
          </div>
        </div>
      </div>`;
    }).join('');

    html += `<div class="dp-group" style="animation-delay:${gi*.08}s">
      <div class="dp-group-header">
        <div class="dp-group-icon">${meta.icon}</div>
        <div class="dp-group-title">${domName}</div>
        <span class="dp-group-count">${list.length} école${list.length>1?'s':''}</span>
      </div>
      <div class="dp-schools-grid">${cards}</div>
    </div>`;
  });

  document.getElementById('dpContent').innerHTML = html;
  const page = document.getElementById('domainPage');
  page.classList.add('active');
  page.scrollTop = 0;
  document.body.style.overflow = 'hidden';
}

function closeDomainPage() {
  const v = document.getElementById('dpBannerVideo');
  v.pause(); v.src = '';
  document.getElementById('domainPage').classList.remove('active');
  document.body.style.overflow = '';
}

/* ════════════════════════════════════════════════
   CONSULTATION PAGE — LECTURE SEULE
   L'utilisateur ne peut PAS créer de consultant.
   Il voit les consultants depuis /api/specialists
════════════════════════════════════════════════ */
let allSpecialists = [];

function consultantIdFrom(s) {
  return (s.email || s.id || `${s.prenom || ''}_${s.nom || ''}_${s.name || ''}`).toString().toLowerCase().replace(/[^a-z0-9]+/g, '_');
}
function consultantPostsKey(s) { return `wn_posts_${consultantIdFrom(s)}`; }
function consultantViewsKey(s) { return `wn_profile_views_${consultantIdFrom(s)}`; }
function localConsultants() {
  return JSON.parse(localStorage.getItem('wn_consultants') || '[]');
}

async function loadSpecialists() {
  const list = document.getElementById('cpSpecsList');
  list.innerHTML = '<div class="cp-loading"><div class="spinner"></div>Chargement des spécialistes…</div>';
  try {
    const res = await fetch('/api/specialists');
    if (!res.ok) throw new Error();
    allSpecialists = await res.json();
  } catch {
    allSpecialists = [];
  }
  const locals = localConsultants();
  const byId = new Map(allSpecialists.map(s => [consultantIdFrom(s), s]));
  locals.forEach(s => byId.set(consultantIdFrom(s), {...byId.get(consultantIdFrom(s)), ...s}));
  allSpecialists = Array.from(byId.values());
  buildCpMetierTabs();
  renderCpSpecs('all');
}

function buildCpMetierTabs() {
  const container = document.getElementById('cpMetierTabs');
  const total = allSpecialists.length;
  let html = `<button class="cp-mtab active" onclick="filterCpMetier(this,'all')">Tous (${total})</button>`;
  METIERS.forEach(m => {
    const c = allSpecialists.filter(s => s.metier_id===m.id).length;
    html += `<button class="cp-mtab" onclick="filterCpMetier(this,'${m.id}')">${m.label} (${c})</button>`;
  });
  container.innerHTML = html;
}
s
function filterCpMetier(btn, metier) {
  document.querySelectorAll('.cp-mtab').forEach(t => t.classList.remove('active'));
  btn.classList.add('active');
  renderCpSpecs(metier);
}

function renderCpSpecs(metier) {
  const list = document.getElementById('cpSpecsList');
  const filtered = metier==='all' ? allSpecialists : allSpecialists.filter(s => s.metier_id===metier);

  if (filtered.length===0) {
    list.innerHTML = `<div class="cp-empty">
      <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
      <p>Aucun consultant enregistré pour ce domaine.</p>
    </div>`;
    return;
  }

  list.innerHTML = `<div class="cp-specs-list">
    ${filtered.map((s, i) => {
      const initials = ((s.prenom||'')[0]||'') + ((s.nom||'')[0]||'');
      const avatar   = s.photo_url ? `<img src="${s.photo_url}" alt="${s.prenom} ${s.nom}">` : initials.toUpperCase();
      const dot      = s.online ? `<span class="spec-online-dot"></span>` : `<span class="spec-offline-dot"></span>`;
      const tags     = (s.tags||[]).map(t => `<span class="spec-tag">${t}</span>`).join('');
      const btnCls   = s.online ? 'is-online' : 'is-offline';
      const btnLbl   = s.online ? '● Contacter maintenant' : '○ Prendre rendez-vous';

      /* Publications */
      const pubsHtml = s.publications && s.publications.length
        ? `<div class="spec-pubs">
            <div class="spec-pubs-label">Publications</div>
            ${s.publications.map(p => `<div class="spec-pub-item">${p}</div>`).join('')}
          </div>` : '';

      /* Infos structurées */
      const infoRows = [
        s.ecole    ? `<div class="spec-info-row"><svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg><strong>${s.ecole}</strong></div>` : '',
        s.niveau   ? `<div class="spec-info-row"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>${s.niveau}</div>` : '',
        s.ville    ? `<div class="spec-info-row"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>${s.ville}</div>` : '',
        s.tel      ? `<div class="spec-info-row"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.5a2 2 0 012-2.18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L9.91 14a16 16 0 006.29 6.29l.44-.44a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>${s.tel}</div>` : '',
      ].filter(Boolean).join('');

      return `<div class="spec-card" style="animation-delay:${i*.05}s">
        <div class="spec-avatar">${avatar}${dot}</div>
        <div class="spec-body">
          <div class="spec-name">${s.prenom||''} ${s.nom||''}</div>
          <div class="spec-title">${s.titre||''}</div>
          ${infoRows ? `<div class="spec-info-grid">${infoRows}</div>` : ''}
          <div class="spec-bio">${s.bio||''}</div>
          ${tags ? `<div class="spec-tags">${tags}</div>` : ''}
          ${pubsHtml}
          <div class="spec-actions-row">
            <button class="spec-profile-btn" onclick="openConsultantProfile('${consultantIdFrom(s)}')">Voir profil</button>
            <button class="spec-contact-btn ${btnCls}"
              onclick="showToast('Message envoyé à ${s.prenom} ${s.nom}','success')">
              ${btnLbl}
            </button>
          </div>
        </div>
      </div>`;
    }).join('')}
  </div>`;
}

function currentStudent() {
  const u = JSON.parse(localStorage.getItem('wn_user') || 'null') || {};
  const name = (u.prenom || u.name || 'Étudiant') + (u.nom ? ` ${u.nom}` : '');
  return {
    id: (u.email || u.id || name).toString().toLowerCase().replace(/[^a-z0-9]+/g, '_'),
    name,
    email: u.email || '',
    domain: u.domaine || u.domain || u.filiere || 'Orientation'
  };
}

function recordProfileView(s) {
  const key = consultantViewsKey(s);
  const student = currentStudent();
  const students = JSON.parse(localStorage.getItem('wn_students') || '[]');
  const existingStudent = students.findIndex(item => item.id === student.id);
  if (existingStudent >= 0) students[existingStudent] = {...students[existingStudent], ...student};
  else students.push(student);
  localStorage.setItem('wn_students', JSON.stringify(students));
  const views = JSON.parse(localStorage.getItem(key) || '[]');
  const filtered = views.filter(v => v.id !== student.id);
  filtered.unshift({...student, time:new Date().toISOString()});
  localStorage.setItem(key, JSON.stringify(filtered.slice(0, 40)));
}

function openConsultantProfile(id) {
  const s = allSpecialists.find(item => consultantIdFrom(item) === id);
  if (!s) return;
  recordProfileView(s);
  const posts = JSON.parse(localStorage.getItem(consultantPostsKey(s)) || '[]');
  const initials = ((s.prenom || s.name || '?')[0] || '?') + ((s.nom || '')[0] || '');
  const avatar = s.photo_url ? `<img src="${s.photo_url}" alt="">` : initials.toUpperCase();
  document.getElementById('consultantProfileHead').innerHTML = `
    <div class="spec-avatar">${avatar}</div>
    <div class="spec-body">
      <div class="spec-name">${s.prenom || ''} ${s.nom || s.name || ''}</div>
      <div class="spec-title">${s.titre || ''}</div>
      <div class="spec-bio">${s.bio || "Consultant What's Next."}</div>
    </div>
    <button class="consultant-profile-close" onclick="closeConsultantProfile()">×</button>`;
  document.getElementById('consultantProfilePosts').innerHTML = posts.length
    ? posts.map(p => consultantPostHtml(s, p)).join('')
    : `<div class="cp-empty"><p>Aucune publication pour ce consultant pour le moment.</p></div>`;
  document.getElementById('consultantProfileModal').classList.add('open');
}

function closeConsultantProfile() {
  document.getElementById('consultantProfileModal').classList.remove('open');
}

function consultantPostHtml(s, p) {
  const media = (p.media || []).slice(0, 3).map(m => m.type === 'video'
    ? `<video src="${m.url}" controls playsinline></video>`
    : `<img src="${m.url}" alt="" loading="lazy">`).join('');
  const comments = (p.comments || []).map(c => `<div class="consultant-comment"><strong>${c.author || 'Étudiant'}:</strong><span>${c.text}</span></div>`).join('');
  return `<div class="consultant-post" id="student-post-${p.id}">
    ${p.text ? `<div class="consultant-post-text">${p.text}</div>` : ''}
    ${media ? `<div class="consultant-post-media">${media}</div>` : ''}
    ${comments}
    <div class="consultant-comment-form">
      <input id="student-comment-${p.id}" placeholder="Ajouter un commentaire…" onkeydown="if(event.key==='Enter')addStudentComment('${consultantIdFrom(s)}',${p.id})">
      <button onclick="addStudentComment('${consultantIdFrom(s)}',${p.id})">Envoyer</button>
    </div>
  </div>`;
}

function addStudentComment(consultantId, postId) {
  const s = allSpecialists.find(item => consultantIdFrom(item) === consultantId);
  if (!s) return;
  const input = document.getElementById(`student-comment-${postId}`);
  const text = input.value.trim();
  if (!text) return;
  const key = consultantPostsKey(s);
  const posts = JSON.parse(localStorage.getItem(key) || '[]');
  const post = posts.find(p => p.id === postId);
  if (!post) return;
  if (!post.comments) post.comments = [];
  post.comments.push({author: currentStudent().name, text, time:new Date().toISOString()});
  localStorage.setItem(key, JSON.stringify(posts));
  input.value = '';
  openConsultantProfile(consultantId);
  showToast('Commentaire ajouté.','success');
}

function openConsultPage() {
  document.getElementById('consultPage').classList.add('active');
  document.getElementById('consultPage').scrollTop = 0;
  document.body.style.overflow = 'hidden';
  loadSpecialists();
}
function closeConsultPage() {
  document.getElementById('consultPage').classList.remove('active');
  document.body.style.overflow = '';
}

/* ════════════════════════════════════════════════
   TOAST
════════════════════════════════════════════════ */
function showToast(msg, type='') {
  const t = document.getElementById('toast');
  t.textContent = msg;
  t.className = 'toast show'+(type==='success'?' success':type==='error'?' error':'');
  clearTimeout(t._tid);
  t._tid = setTimeout(() => t.classList.remove('show'), 3200);
}

/* ════ INIT ════ */
renderSchools(schools);