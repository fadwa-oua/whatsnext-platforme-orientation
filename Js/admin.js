const DB = {
  etudiants: [
    {id:1,nom:"El Amrani",prenom:"Yassine",email:"yassine@gmail.com",ville:"Rabat",domaine:"Ingénierie",date:"12 Jan 2025",statut:"Actif"},
    {id:2,nom:"Benali",prenom:"Fatima",email:"fatima@gmail.com",ville:"Casablanca",domaine:"Santé",date:"18 Jan 2025",statut:"Actif"},
    {id:3,nom:"Ouazzani",prenom:"Karim",email:"karim@gmail.com",ville:"Fès",domaine:"Droit",date:"22 Jan 2025",statut:"Actif"},
    {id:4,nom:"Tazi",prenom:"Sara",email:"sara@gmail.com",ville:"Marrakech",domaine:"Commerce",date:"03 Fév 2025",statut:"Inactif"},
    {id:5,nom:"Alami",prenom:"Hassan",email:"hassan@gmail.com",ville:"Agadir",domaine:"Éducation",date:"10 Fév 2025",statut:"Actif"},
    {id:6,nom:"Chraibi",prenom:"Imane",email:"imane@gmail.com",ville:"Rabat",domaine:"Ingénierie",date:"14 Fév 2025",statut:"Actif"},
    {id:7,nom:"Berrada",prenom:"Mehdi",email:"mehdi@gmail.com",ville:"Casablanca",domaine:"Commerce",date:"20 Fév 2025",statut:"Suspendu"},
    {id:8,nom:"Filali",prenom:"Nadia",email:"nadia@gmail.com",ville:"Meknès",domaine:"Santé",date:"25 Fév 2025",statut:"Actif"},
    {id:9,nom:"Kettani",prenom:"Omar",email:"omar@gmail.com",ville:"Tanger",domaine:"Ingénierie",date:"02 Mar 2025",statut:"Actif"},
    {id:10,nom:"Mansouri",prenom:"Lina",email:"lina@gmail.com",ville:"Rabat",domaine:"Arts & Design",date:"08 Mar 2025",statut:"Actif"},
  ],
  consultants: [
    {id:1,nom:"Benkirane",prenom:"Amine",email:"amine@gmail.com",metier:"Ingénieur",ecole:"ENSIAS",consultations:42,statut:"En ligne"},
    {id:2,nom:"El Idrissi",prenom:"Zineb",email:"zineb@gmail.com",metier:"Médecin",ecole:"Fac. Médecine",consultations:28,statut:"Hors ligne"},
    {id:3,nom:"Lahlou",prenom:"Tariq",email:"tariq@gmail.com",metier:"Professeur",ecole:"ENS",consultations:35,statut:"En ligne"},
    {id:4,nom:"Moussaoui",prenom:"Rim",email:"rim@gmail.com",metier:"Juriste",ecole:"Fac. Droit",consultations:19,statut:"En ligne"},
    {id:5,nom:"Tahiri",prenom:"Saad",email:"saad@gmail.com",metier:"Économiste",ecole:"ENCG",consultations:24,statut:"Hors ligne"},
    {id:6,nom:"Bouchaib",prenom:"Layla",email:"layla@gmail.com",metier:"Ingénieur",ecole:"ENSA",consultations:31,statut:"En ligne"},
    {id:7,nom:"Ghazali",prenom:"Youssef",email:"youssef@gmail.com",metier:"Médecin",ecole:"Fac. Médecine",consultations:17,statut:"En attente"},
    {id:8,nom:"Rafiq",prenom:"Hana",email:"hana@gmail.com",metier:"Professeur",ecole:"ENSET",consultations:22,statut:"En ligne"},
  ],
  applications: [
    {nom:"Ouardighi Mehdi",domaine:"Ingénierie",ecole:"ENSIAM",date:"10 Mar 2025",statut:"En attente"},
    {nom:"Belkacem Sara",domaine:"Santé",ecole:"Pharmacie",date:"12 Mar 2025",statut:"En attente"},
    {nom:"Rahimi Karim",domaine:"Droit",ecole:"ENA",date:"08 Mar 2025",statut:"Approuvé"},
    {nom:"Idrissi Nour",domaine:"Commerce",ecole:"ENCG",date:"05 Mar 2025",statut:"En attente"},
    {nom:"Ait Baha Yasmine",domaine:"Éducation",ecole:"ENS",date:"03 Mar 2025",statut:"Refusé"},
    {nom:"Bensouda Hamza",domaine:"Ingénierie",ecole:"ENSA",date:"01 Mar 2025",statut:"Approuvé"},
  ],
  ecoles: [
    {nom:"ENSIAS",domaine:"Sciences & Technologie",villes:"Rabat",duree:"5 ans"},
    {nom:"ENSA",domaine:"Sciences & Technologie",villes:"Kénitra, Fès, Agadir, Marrakech, Tanger",duree:"5 ans"},
    {nom:"ENSAM",domaine:"Sciences & Technologie",villes:"Meknès, Casablanca, Rabat",duree:"5 ans"},
    {nom:"FST",domaine:"Sciences & Technologie",villes:"Béni Mellal, Fès, Mohammedia, Settat, Tanger",duree:"3 à 5 ans"},
    {nom:"EST",domaine:"Sciences & Technologie",villes:"Casablanca, Fès, Meknès, Salé, Agadir",duree:"2 à 3 ans"},
    {nom:"BTS",domaine:"Sciences & Technologie",villes:"National",duree:"2 ans"},
    {nom:"ISTA / OFPPT",domaine:"Sciences & Technologie",villes:"National",duree:"1 à 2 ans"},
    {nom:"ENCG",domaine:"Sciences Économiques & Gestion",villes:"Casablanca, Agadir, Fès, Tanger, Settat, Oujda, Marrakech",duree:"5 ans"},
    {nom:"ISCAE",domaine:"Sciences Économiques & Gestion",villes:"Casablanca, Rabat",duree:"5 ans"},
    {nom:"UIR Business School",domaine:"Sciences Économiques & Gestion",villes:"Rabat",duree:"3 à 5 ans"},
    {nom:"Faculté d'Économie",domaine:"Sciences Économiques & Gestion",villes:"National",duree:"3 à 5 ans"},
    {nom:"Faculté de Médecine",domaine:"Médecine & Santé",villes:"Rabat, Casablanca, Fès, Marrakech, Oujda, Agadir",duree:"7 ans"},
    {nom:"Faculté de Pharmacie",domaine:"Médecine & Santé",villes:"Rabat, Casablanca",duree:"6 ans"},
    {nom:"Faculté de Médecine Dentaire",domaine:"Médecine & Santé",villes:"Rabat, Casablanca",duree:"6 ans"},
    {nom:"ISPITS",domaine:"Médecine & Santé",villes:"Rabat, Casablanca, Fès, Marrakech, Oujda",duree:"3 ans"},
    {nom:"ISSS",domaine:"Médecine & Santé",villes:"Settat",duree:"3 à 5 ans"},
    {nom:"Faculté de Droit",domaine:"Droit & Sciences Politiques",villes:"Rabat, Casablanca, Fès, Marrakech, Agadir, Oujda",duree:"3 à 5 ans"},
    {nom:"ENA",domaine:"Droit & Sciences Politiques",villes:"Rabat",duree:"2 ans"},
    {nom:"Sciences Po / Relations internationales",domaine:"Droit & Sciences Politiques",villes:"Rabat, Casablanca",duree:"3 à 5 ans"},
    {nom:"ISIC",domaine:"Communication & Médias",villes:"Rabat",duree:"3 ans"},
    {nom:"Écoles de communication digitale",domaine:"Communication & Médias",villes:"Casablanca, Rabat, Marrakech",duree:"3 à 5 ans"},
    {nom:"Écoles audiovisuelles",domaine:"Communication & Médias",villes:"Casablanca, Rabat",duree:"2 à 3 ans"},
    {nom:"IAV Hassan II",domaine:"Agriculture & Environnement",villes:"Rabat",duree:"5 ans"},
    {nom:"ENFI",domaine:"Agriculture & Environnement",villes:"Salé",duree:"5 ans"},
    {nom:"IFMEREE",domaine:"Agriculture & Environnement",villes:"Oujda, Tanger, Ouarzazate",duree:"2 à 3 ans"},
    {nom:"École Nationale d'Architecture",domaine:"Arts & Créativité",villes:"Rabat, Fès, Marrakech, Tétouan, Agadir, Oujda",duree:"6 ans"},
    {nom:"Faculté des Arts",domaine:"Arts & Créativité",villes:"Tétouan, Marrakech",duree:"3 à 5 ans"},
    {nom:"Écoles de design graphique",domaine:"Arts & Créativité",villes:"Casablanca, Rabat",duree:"3 à 5 ans"},
    {nom:"Faculté des Lettres",domaine:"Lettres, Langues & Sciences Humaines",villes:"National",duree:"3 à 5 ans"},
    {nom:"ENS",domaine:"Lettres, Langues & Sciences Humaines",villes:"Rabat, Fès, Marrakech, Casablanca",duree:"3 à 5 ans"},
    {nom:"Faculté de Psychologie / Sciences humaines",domaine:"Lettres, Langues & Sciences Humaines",villes:"Rabat, Casablanca, Fès",duree:"3 à 5 ans"},
    {nom:"ARM / Forces Armées Royales",domaine:"Militaire & Sécurité",villes:"Meknès, Benguerir, Kénitra",duree:"3 à 5 ans"},
    {nom:"Marine Royale",domaine:"Militaire & Sécurité",villes:"Casablanca",duree:"3 à 5 ans"},
    {nom:"Gendarmerie Royale",domaine:"Militaire & Sécurité",villes:"Marrakech, Rabat",duree:"2 à 4 ans"},
  ],
  tables: [
    {name:"etudiants",entries:248,size:"1.2 MB",lastModif:"Il y a 3 min"},
    {name:"consultants",entries:34,size:"0.4 MB",lastModif:"Il y a 1h"},
    {name:"domaines",entries:8,size:"0.2 MB",lastModif:"Il y a 15 min"},
    {name:"ecoles",entries:34,size:"0.8 MB",lastModif:"Il y a 1 jour"},
    {name:"sessions",entries:1204,size:"1.7 MB",lastModif:"Il y a 8 min"},
  ],
  logs: [
    {ts:"2025-03-15 14:32",user:"Admin",action:"DELETE",entite:"etudiants#47",ip:"196.12.x.x",statut:"OK"},
    {ts:"2025-03-15 14:18",user:"Admin",action:"INSERT",entite:"consultants",ip:"196.12.x.x",statut:"OK"},
    {ts:"2025-03-15 13:55",user:"Admin",action:"UPDATE",entite:"ecoles#12",ip:"196.12.x.x",statut:"OK"},
    {ts:"2025-03-15 13:40",user:"Admin",action:"LOGIN",entite:"admin",ip:"196.12.x.x",statut:"OK"},
    {ts:"2025-03-15 12:11",user:"Admin",action:"EXPORT",entite:"etudiants",ip:"196.12.x.x",statut:"OK"},
    {ts:"2025-03-15 11:44",user:"Admin",action:"UPDATE",entite:"domaines#sante",ip:"196.12.x.x",statut:"OK"},
    {ts:"2025-03-15 10:30",user:"Admin",action:"INSERT",entite:"etudiants",ip:"196.12.x.x",statut:"OK"},
    {ts:"2025-03-15 09:15",user:"Admin",action:"BACKUP",entite:"all",ip:"196.12.x.x",statut:"OK"},
  ],
};

const ACTIVITY = [
  {dot:"green",text:"<strong>Yassine El Amrani</strong> vient de s'inscrire",time:"Il y a 5 min"},
  {dot:"blue",text:"<strong>Amine Benkirane</strong> a accepté une consultation",time:"Il y a 12 min"},
  {dot:"orange",text:"Le domaine <strong>Sciences & Technologie</strong> a été enrichi",time:"Il y a 28 min"},
  {dot:"blue",text:"<strong>Zineb El Idrissi</strong> a mis à jour son profil",time:"Il y a 45 min"},
  {dot:"red",text:"Un établissement incomplet a été signalé",time:"Il y a 1h"},
  {dot:"green",text:"<strong>3 nouveaux étudiants</strong> inscrits aujourd'hui",time:"Il y a 2h"},
];

const REGIONS = [
  {name:"Rabat",count:82,max:82},{name:"Casablanca",count:74,max:82},{name:"Fès",count:38,max:82},
  {name:"Marrakech",count:29,max:82},{name:"Agadir",count:18,max:82},{name:"Tanger",count:7,max:82},
];

const DOMAINES_DATA = [
  {name:"Ingénierie",pct:38,color:"#5b7fc5"},
  {name:"Santé",pct:24,color:"#27ae60"},
  {name:"Commerce",pct:18,color:"#f39c12"},
  {name:"Droit",pct:10,color:"#e74c3c"},
  {name:"Éducation",pct:7,color:"#8e44ad"},
  {name:"Autres",pct:3,color:"#95a5a6"},
];

let ADMIN_DATA = null;
let CHARTS = {};
let currentEcoleDomain = 'all';

async function loadAdminData() {
  try {
    const res = await fetch('/api/admin/dashboard');
    if (!res.ok) throw new Error('api unavailable');
    ADMIN_DATA = normalizeAdminData(await res.json());
  } catch {
    ADMIN_DATA = buildAdminData(DB);
  }
}

function normalizeAdminData(data) {
  const fallback = buildAdminData(DB);
  return {
    ...fallback,
    ...data,
    kpis: {...fallback.kpis, ...(data.kpis || {})},
    charts: {...fallback.charts, ...(data.charts || {})}
  };
}

function buildAdminData(db) {
  const months = ['Jan','Fév','Mar','Avr','Mai','Jun','Jul','Aoû','Sep','Oct','Nov','Déc'];
  const domainesCount = countBy(db.etudiants, 'domaine');
  const managedDomains = uniqueDomains();
  const villesCount = countBy(db.etudiants, 'ville');
  const totalDomaines = Math.max(db.etudiants.length, 1);
  const maxVille = Math.max(...Object.values(villesCount), 1);
  const consStatus = countBy(db.consultants, 'statut');
  const totalConsultations = db.consultants.reduce((sum, c) => sum + (c.consultations || 0), 0);
  const domaines = Object.entries(domainesCount).map(([name, count], i) => ({
    name,
    count,
    pct: Math.round(count / totalDomaines * 100),
    color: PALETTE[i % PALETTE.length]
  }));
  const studentsMonthly = monthlySeries(db.etudiants, months, true);
  const consultantsMonthly = monthlySeries(db.consultants, months, true);
  return {
    source: 'local',
    kpis: {
      etudiants: db.etudiants.length,
      consultants: db.consultants.length,
      domaines: managedDomains.length,
      consultations: totalConsultations,
      ecoles: db.ecoles.length
    },
    regions: Object.entries(villesCount).map(([name, count]) => ({name, count, max:maxVille})).sort((a,b)=>b.count-a.count),
    domaines: domaines.length ? domaines : DOMAINES_DATA,
    activity: ACTIVITY,
    charts: {
      months,
      inscriptions: {etudiants: studentsMonthly, consultants: consultantsMonthly},
      activite: buildWeeklyActivity(db),
      consultantStatus: [consStatus['En ligne'] || 0, consStatus['Hors ligne'] || 0, consStatus['En attente'] || 0],
      croissance: studentsMonthly,
      filieres: buildFiliereStats(db),
      entonnoir: [
        Math.max(db.etudiants.length * 7, db.etudiants.length),
        db.etudiants.length,
        totalConsultations,
        Math.max(db.consultants.length * 2, managedDomains.length)
      ]
    }
  };
}

function countBy(rows, key) {
  return rows.reduce((acc, row) => {
    const value = row[key] || 'Autres';
    acc[value] = (acc[value] || 0) + 1;
    return acc;
  }, {});
}

function monthIndex(dateText) {
  const map = {'Jan':0,'Fév':1,'Mar':2,'Avr':3,'Mai':4,'Jun':5,'Jul':6,'Aoû':7,'Sep':8,'Oct':9,'Nov':10,'Déc':11};
  const found = Object.keys(map).find(m => (dateText || '').includes(m));
  return found ? map[found] : new Date().getMonth();
}

function monthlySeries(rows, months, cumulative=false) {
  const values = Array(months.length).fill(0);
  rows.forEach(row => values[monthIndex(row.date)]++);
  if (!cumulative) return values;
  let total = 0;
  return values.map(v => total += v);
}

function buildWeeklyActivity(db) {
  const base = Math.max(db.etudiants.length + db.consultants.length, 1);
  return {
    connexions: [0.18,0.23,0.2,0.26,0.19,0.11,0.08].map(x => Math.round(base * x)),
    consultations: [0.08,0.1,0.09,0.13,0.1,0.05,0.04].map(x => Math.round(base * x)),
    publications: [3,4,2,5,4,2,1].map(v => Math.min(v, Math.max(db.consultants.length, 1)))
  };
}

function buildFiliereStats(db) {
  return {
    labels: db.ecoles.slice(0, 8).map(e => e.nom),
    data: db.ecoles.slice(0, 8).map(e => db.etudiants.filter(s => s.domaine === e.domaine).length || 1)
  };
}

function uniqueDomains() {
  return [...new Set(DB.ecoles.map(e => e.domaine))];
}

function domainColor(name, i=0) {
  const idx = uniqueDomains().indexOf(name);
  return PALETTE[(idx >= 0 ? idx : i) % PALETTE.length];
}

/* ══════════════════════════════════
   NAVIGATION
══════════════════════════════════ */
const TITLES = {
  dashboard:"Tableau de bord",stats:"Statistiques",
  etudiants:"Étudiants",consultants:"Consultants",
  ecoles:"Établissements & domaines",
  database:"Base de données",logs:"Journaux d'activité"
};

function showSection(id, el) {
  document.querySelectorAll('.section').forEach(s => s.classList.remove('active'));
  document.querySelectorAll('.sb-item').forEach(s => s.classList.remove('active'));
  document.getElementById('sec-'+id).classList.add('active');
  if(el) el.classList.add('active');
  document.getElementById('tbTitle').textContent = TITLES[id]||id;
  // init charts on first visit
  if(id==='dashboard' && !window._chartsInit) initDashboardCharts();
  if(id==='stats' && !window._statsInit) initStatsCharts();
}

/* ══════════════════════════════════
   RENDER TABLES
══════════════════════════════════ */
function statusBadge(s) {
  const map = {
    "Actif":"badge-success","Inactif":"badge-warn","Suspendu":"badge-danger",
    "En ligne":"badge-success","Hors ligne":"badge-mid","En attente":"badge-warn",
    "Approuvé":"badge-success","Refusé":"badge-danger","OK":"badge-success","ERREUR":"badge-danger",
    "INSERT":"badge-success","DELETE":"badge-danger","UPDATE":"badge-warn","LOGIN":"badge-info","EXPORT":"badge-mid","BACKUP":"badge-info",
  };
  return `<span class="badge ${map[s]||'badge-mid'}">${s}</span>`;
}

function initials(prenom,nom){return((prenom||'')[0]||'').toUpperCase()+((nom||'')[0]||'').toUpperCase();}

function renderEtudiants(){
  const tb = document.getElementById('etud-tbody');
  tb.innerHTML = DB.etudiants.map(e=>`
    <tr>
      <td><div class="td-info"><div class="td-avatar">${initials(e.prenom,e.nom)}</div><div><div class="td-name">${e.prenom} ${e.nom}</div><div class="td-email">${e.email}</div></div></div></td>
      <td>${e.ville}</td><td>${e.domaine}</td><td>${e.date}</td>
      <td>${statusBadge(e.statut)}</td>
      <td><div class="td-actions">
        <button class="act-btn view" title="Voir"><svg viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button>
        <button class="act-btn edit" title="Modifier"><svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></button>
        <button class="act-btn del" title="Supprimer" onclick="openDeleteModal(${e.id},'étudiant')"><svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/></svg></button>
      </div></td>
    </tr>`).join('');
}

function renderConsultants(){
  const tb = document.getElementById('cons-tbody');
  tb.innerHTML = DB.consultants.map(c=>`
    <tr>
      <td><div class="td-info"><div class="td-avatar">${initials(c.prenom,c.nom)}</div><div><div class="td-name">${c.prenom} ${c.nom}</div><div class="td-email">${c.email}</div></div></div></td>
      <td>${c.metier}</td><td>${c.ecole}</td>
      <td><span style="font-family:'DM Mono',monospace;font-size:.82rem;font-weight:500;">${c.consultations}</span></td>
      <td>${statusBadge(c.statut)}</td>
      <td><div class="td-actions">
        <button class="act-btn approve" title="Approuver" onclick="showToast('Profil validé','success')"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></button>
        <button class="act-btn edit" title="Modifier"><svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></button>
        <button class="act-btn del" title="Supprimer" onclick="openDeleteModal(${c.id},'consultant')"><svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/></svg></button>
      </div></td>
    </tr>`).join('');
}

function renderApplications(){
  const tb = document.getElementById('app-tbody');
  tb.innerHTML = DB.applications.map((a,i)=>`
    <tr>
      <td><div class="td-info"><div class="td-avatar" style="font-size:.65rem;font-family:'DM Sans',sans-serif;">${a.nom.split(' ').map(w=>w[0]).join('').slice(0,2)}</div><div class="td-name">${a.nom}</div></div></td>
      <td>${a.domaine}</td><td>${a.ecole}</td><td>${a.date}</td>
      <td>${statusBadge(a.statut)}</td>
      <td><div class="td-actions">
        ${a.statut==='En attente'?`
          <button class="act-btn approve" title="Approuver" onclick="approveApp(${i})"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></button>
          <button class="act-btn del" title="Refuser" onclick="rejectApp(${i})"><svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></button>
        `:`<span style="font-size:.72rem;color:var(--muted);">Traité</span>`}
      </div></td>
    </tr>`).join('');
}

function renderEcoles(){
  const tb = document.getElementById('ecole-tbody');
  tb.innerHTML = DB.ecoles.map((e,i)=>`
    <tr>
      <td><div class="td-name">${e.nom}</div></td>
      <td><span class="badge badge-mid">${e.domaine}</span></td>
      <td style="font-size:.78rem;color:var(--muted);">${e.villes}</td>
      <td><span style="font-family:'DM Mono',monospace;font-size:.8rem;">${e.duree}</span></td>
      <td><div class="td-actions">
        <button class="act-btn edit" title="Modifier"><svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></button>
        <button class="act-btn del" title="Supprimer" onclick="openDeleteModal(${i},'école')"><svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/></svg></button>
      </div></td>
    </tr>`).join('');
}

function renderDB(){
  const tb = document.getElementById('db-tbody');
  tb.innerHTML = DB.tables.map((t,i)=>`
    <tr>
      <td><span style="font-family:'DM Mono',monospace;font-size:.83rem;color:var(--navy);">📋 ${t.name}</span></td>
      <td><span style="font-family:'DM Mono',monospace;font-weight:600;">${t.entries}</span></td>
      <td>${t.size}</td><td style="color:var(--muted);font-size:.78rem;">${t.lastModif}</td>
      <td><div class="td-actions">
        <button class="act-btn view" title="Voir" onclick="showToast('Table ${t.name} ouverte','info')"><svg viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button>
        <button class="act-btn warn" style="background:rgba(243,156,18,.1);color:var(--warn);" title="Vider" onclick="openDeleteModal(${i},'table')"><svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/></svg></button>
      </div></td>
    </tr>`).join('');
}

function renderLogs(){
  const actionStyle = a => a==='DELETE'?'badge-danger':a==='INSERT'?'badge-success':a==='UPDATE'?'badge-warn':'badge-info';
  const tb = document.getElementById('logs-tbody');
  tb.innerHTML = DB.logs.map(l=>`
    <tr>
      <td style="font-family:'DM Mono',monospace;font-size:.75rem;color:var(--muted);">${l.ts}</td>
      <td>${l.user}</td>
      <td><span class="badge ${actionStyle(l.action)}">${l.action}</span></td>
      <td style="font-family:'DM Mono',monospace;font-size:.75rem;">${l.entite}</td>
      <td style="font-size:.73rem;color:var(--muted);">${l.ip}</td>
      <td>${statusBadge(l.statut)}</td>
    </tr>`).join('');
}

function renderActivityFeed(){
  const feed = document.getElementById('activityFeed');
  const activity = (ADMIN_DATA && ADMIN_DATA.activity) || ACTIVITY;
  feed.innerHTML = activity.map(a=>`
    <div class="activity-item">
      <div class="activity-dot ${a.dot}"></div>
      <div><div class="activity-text">${a.text}</div><div class="activity-time">${a.time}</div></div>
    </div>`).join('');
}

function renderRegions(){
  const el = document.getElementById('regionsList');
  const regions = (ADMIN_DATA && ADMIN_DATA.regions) || REGIONS;
  el.innerHTML = regions.map(r=>`
    <div class="region-item">
      <div class="region-name">${r.name}</div>
      <div class="region-bar-wrap"><div class="region-bar" style="width:${(r.count/r.max*100).toFixed(0)}%"></div></div>
      <div class="region-count">${r.count}</div>
    </div>`).join('');
}

function renderDomaineProgress(){
  const el = document.getElementById('domaineProgress');
  const domaines = (ADMIN_DATA && ADMIN_DATA.domaines) || DOMAINES_DATA;
  el.innerHTML = domaines.map(d=>`
    <div class="prog-item">
      <div class="prog-hdr"><span>${d.name}</span><span>${d.pct}%</span></div>
      <div class="prog-bar"><div class="prog-fill" style="width:0%;background:${d.color}" data-w="${d.pct}"></div></div>
    </div>`).join('');
  setTimeout(()=>el.querySelectorAll('.prog-fill').forEach(b=>{b.style.width=b.dataset.w+'%';}),100);
}

/* ══════════════════════════════════
   CHART.JS CHARTS
══════════════════════════════════ */
const PALETTE = ['#5b7fc5','#27ae60','#f39c12','#e74c3c','#8e44ad','#2980b9','#16a085','#d35400'];
const gridColor = 'rgba(122,158,192,0.1)';
const textColor = '#5a6a82';
const baseFont = {family:"'DM Sans', sans-serif", size:11};

function initDashboardCharts(){
  window._chartsInit = true;
  const data = ADMIN_DATA || buildAdminData(DB);
  const charts = data.charts;
  ['inscriptions','domaines','activite','consStatus'].forEach(k => { if (CHARTS[k]) CHARTS[k].destroy(); });

  CHARTS.inscriptions = new Chart(document.getElementById('chartInscriptions'),{type:'line',data:{
    labels:charts.months,
    datasets:[
      {label:'Étudiants',data:charts.inscriptions.etudiants,borderColor:'#5b7fc5',backgroundColor:'rgba(91,127,197,0.08)',tension:.4,fill:true,pointRadius:3,pointBackgroundColor:'#5b7fc5'},
      {label:'Consultants',data:charts.inscriptions.consultants,borderColor:'#27ae60',backgroundColor:'rgba(39,174,96,0.08)',tension:.4,fill:true,pointRadius:3,pointBackgroundColor:'#27ae60'},
    ]},options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{position:'bottom',labels:{font:baseFont,color:textColor,boxWidth:10,padding:16}}},scales:{x:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}},y:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}}}}});

  CHARTS.domaines = new Chart(document.getElementById('chartDomaines'),{type:'doughnut',data:{
    labels:data.domaines.map(d=>d.name),
    datasets:[{data:data.domaines.map(d=>d.count || d.pct),backgroundColor:data.domaines.map(d=>d.color),borderWidth:0,hoverOffset:8}]
  },options:{responsive:true,maintainAspectRatio:false,cutout:'68%',plugins:{legend:{position:'bottom',labels:{font:baseFont,color:textColor,boxWidth:10,padding:12}}}}});

  CHARTS.activite = new Chart(document.getElementById('chartActivite'),{type:'bar',data:{
    labels:['Lun','Mar','Mer','Jeu','Ven','Sam','Dim'],
    datasets:[
      {label:'Connexions',data:charts.activite.connexions,backgroundColor:'rgba(91,127,197,0.7)',borderRadius:6,borderSkipped:false},
      {label:'Consultations',data:charts.activite.consultations,backgroundColor:'rgba(39,174,96,0.7)',borderRadius:6,borderSkipped:false},
      {label:'Candidatures',data:charts.activite.candidatures,backgroundColor:'rgba(243,156,18,0.7)',borderRadius:6,borderSkipped:false},
    ]},options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{position:'bottom',labels:{font:baseFont,color:textColor,boxWidth:10,padding:16}}},scales:{x:{grid:{display:false},ticks:{font:baseFont,color:textColor}},y:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}},}}});

  CHARTS.consStatus = new Chart(document.getElementById('chartConsStatus'),{type:'pie',data:{
    labels:['En ligne','Hors ligne','En attente'],
    datasets:[{data:charts.consultantStatus,backgroundColor:['#27ae60','#7a9ec0','#f39c12'],borderWidth:0,hoverOffset:6}]
  },options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{position:'bottom',labels:{font:baseFont,color:textColor,boxWidth:10,padding:12}}}}});
  return;

  // Inscriptions LINE
  new Chart(document.getElementById('chartInscriptions'),{type:'line',data:{
    labels:['Jan','Fév','Mar','Avr','Mai','Jun','Jul','Aoû','Sep','Oct','Nov','Déc'],
    datasets:[
      {label:'Étudiants',data:[18,26,34,42,38,51,47,55,62,70,78,248],borderColor:'#5b7fc5',backgroundColor:'rgba(91,127,197,0.08)',tension:.4,fill:true,pointRadius:3,pointBackgroundColor:'#5b7fc5'},
      {label:'Consultants',data:[2,4,5,7,8,10,12,14,18,22,28,34],borderColor:'#27ae60',backgroundColor:'rgba(39,174,96,0.08)',tension:.4,fill:true,pointRadius:3,pointBackgroundColor:'#27ae60'},
    ]},options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{position:'bottom',labels:{font:baseFont,color:textColor,boxWidth:10,padding:16}}},scales:{x:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}},y:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}}}}});

  // Domaines DOUGHNUT
  new Chart(document.getElementById('chartDomaines'),{type:'doughnut',data:{
    labels:DOMAINES_DATA.map(d=>d.name),
    datasets:[{data:DOMAINES_DATA.map(d=>d.pct),backgroundColor:DOMAINES_DATA.map(d=>d.color),borderWidth:0,hoverOffset:8}]
  },options:{responsive:true,maintainAspectRatio:false,cutout:'68%',plugins:{legend:{position:'bottom',labels:{font:baseFont,color:textColor,boxWidth:10,padding:12}}}}});

  // Activité BAR
  new Chart(document.getElementById('chartActivite'),{type:'bar',data:{
    labels:['Lun','Mar','Mer','Jeu','Ven','Sam','Dim'],
    datasets:[
      {label:'Connexions',data:[42,58,51,67,49,23,18],backgroundColor:'rgba(91,127,197,0.7)',borderRadius:6,borderSkipped:false},
      {label:'Consultations',data:[18,24,20,31,22,10,7],backgroundColor:'rgba(39,174,96,0.7)',borderRadius:6,borderSkipped:false},
      {label:'Candidatures',data:[5,8,6,11,9,3,2],backgroundColor:'rgba(243,156,18,0.7)',borderRadius:6,borderSkipped:false},
    ]},options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{position:'bottom',labels:{font:baseFont,color:textColor,boxWidth:10,padding:16}}},scales:{x:{grid:{display:false},ticks:{font:baseFont,color:textColor}},y:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}},}}});

  // Cons Status
  new Chart(document.getElementById('chartConsStatus'),{type:'pie',data:{
    labels:['En ligne','Hors ligne','En attente'],
    datasets:[{data:[18,11,5],backgroundColor:['#27ae60','#7a9ec0','#f39c12'],borderWidth:0,hoverOffset:6}]
  },options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{position:'bottom',labels:{font:baseFont,color:textColor,boxWidth:10,padding:12}}}}});
}

function initStatsCharts(){
  window._statsInit = true;
  const data = ADMIN_DATA || buildAdminData(DB);
  const charts = data.charts;
  ['croissance','filieres','entonnoir'].forEach(k => { if (CHARTS[k]) CHARTS[k].destroy(); });

  CHARTS.croissance = new Chart(document.getElementById('chartCroissance'),{type:'line',data:{
    labels:charts.months,
    datasets:[{label:'Étudiants cumulés',data:charts.croissance,borderColor:'#5b7fc5',backgroundColor:'rgba(91,127,197,0.12)',tension:.4,fill:true,pointRadius:4,pointBackgroundColor:'#5b7fc5'}]
  },options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{position:'bottom',labels:{font:baseFont,color:textColor}}},scales:{x:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}},y:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}}}}});

  CHARTS.filieres = new Chart(document.getElementById('chartFilieres'),{type:'bar',data:{
    labels:charts.filieres.labels,
    datasets:[{data:charts.filieres.data,backgroundColor:PALETTE,borderRadius:6,borderSkipped:false}]
  },options:{indexAxis:'y',responsive:true,maintainAspectRatio:false,plugins:{legend:{display:false}},scales:{x:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}},y:{grid:{display:false},ticks:{font:baseFont,color:textColor}}}}});

  CHARTS.entonnoir = new Chart(document.getElementById('chartEntonnoir'),{type:'bar',data:{
    labels:['Visiteurs','Inscrits','Ont consulté','Ont candidaté'],
    datasets:[{data:charts.entonnoir,backgroundColor:['rgba(91,127,197,0.6)','rgba(39,174,96,0.7)','rgba(243,156,18,0.7)','rgba(231,76,60,0.7)'],borderRadius:8,borderSkipped:false}]
  },options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{display:false}},scales:{x:{grid:{display:false},ticks:{font:baseFont,color:textColor}},y:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}}}}});

  renderDomaineProgress();
  return;

  // Croissance cumulée
  new Chart(document.getElementById('chartCroissance'),{type:'line',data:{
    labels:['Jan','Fév','Mar','Avr','Mai','Jun','Jul','Aoû','Sep','Oct','Nov','Déc'],
    datasets:[{label:'Étudiants cumulés',data:[18,44,78,120,158,209,256,311,373,443,521,248],borderColor:'#5b7fc5',backgroundColor:'rgba(91,127,197,0.12)',tension:.4,fill:true,pointRadius:4,pointBackgroundColor:'#5b7fc5'}]
  },options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{position:'bottom',labels:{font:baseFont,color:textColor}}},scales:{x:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}},y:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}}}}});

  // Filières bar horizontal
  new Chart(document.getElementById('chartFilieres'),{type:'bar',data:{
    labels:['Génie Logiciel','Médecine Générale','Finance','MPSI/MP','Droit des affaires','Design Graphique','Pharmacie','Commerce Intl.'],
    datasets:[{data:[87,72,65,58,44,38,33,29],backgroundColor:PALETTE,borderRadius:6,borderSkipped:false}]
  },options:{indexAxis:'y',responsive:true,maintainAspectRatio:false,plugins:{legend:{display:false}},scales:{x:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}},y:{grid:{display:false},ticks:{font:baseFont,color:textColor}}}}});

  // Entonnoir
  new Chart(document.getElementById('chartEntonnoir'),{type:'bar',data:{
    labels:['Visiteurs','Inscrits','Ont consulté','Ont candidaté'],
    datasets:[{data:[1800,248,142,87],backgroundColor:['rgba(91,127,197,0.6)','rgba(39,174,96,0.7)','rgba(243,156,18,0.7)','rgba(231,76,60,0.7)'],borderRadius:8,borderSkipped:false}]
  },options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{display:false}},scales:{x:{grid:{display:false},ticks:{font:baseFont,color:textColor}},y:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}}}}});

  renderDomaineProgress();
}

/* ══════════════════════════════════
   ACTIONS
══════════════════════════════════ */
function filterTable(input, tbodyId){
  const q = input.value.toLowerCase();
  document.querySelectorAll(`#${tbodyId} tr`).forEach(row=>{
    row.style.display = row.textContent.toLowerCase().includes(q)?'':'none';
  });
}
function filterByStatus(sel, tbodyId){
  const q = sel.value.toLowerCase();
  document.querySelectorAll(`#${tbodyId} tr`).forEach(row=>{
    row.style.display = !q||row.textContent.toLowerCase().includes(q)?'':'none';
  });
}

let _deleteTarget = null;
function openDeleteModal(id, type){ _deleteTarget={id,type}; openModal('modal-delete'); }
function confirmDelete(){
  if(_deleteTarget){
    if(_deleteTarget.type==='étudiant'){
      DB.etudiants = DB.etudiants.filter(e=>e.id!==_deleteTarget.id);
      renderEtudiants();
      updateCounts();
    } else if(_deleteTarget.type==='consultant'){
      DB.consultants = DB.consultants.filter(c=>c.id!==_deleteTarget.id);
      renderConsultants();
      updateCounts();
    } else if(_deleteTarget.type==='école'){
      DB.ecoles.splice(_deleteTarget.id,1);
      renderEcoles();
    }
    showToast(`Suppression effectuée (${_deleteTarget.type})`, 'success');
    closeModal(null,document.getElementById('modal-delete'));
    _deleteTarget = null;
  }
}

function addEtudiant(){
  const newId = DB.etudiants.length + 1;
  DB.etudiants.unshift({id:newId,nom:"Nouveau",prenom:"Étudiant",email:"nouveau@email.com",ville:"Rabat",domaine:"Ingénierie",date:new Date().toLocaleDateString('fr-FR',{day:'2-digit',month:'short',year:'numeric'}),statut:"Actif"});
  renderEtudiants();
  updateCounts();
  showToast('Étudiant ajouté avec succès','success');
  closeModal(null,document.getElementById('modal-add-etudiant'));
}
function addConsultant(){
  DB.consultants.unshift({id:DB.consultants.length+1,nom:"Nouveau",prenom:"Consultant",email:"consultant@email.com",metier:"Ingénieur",ecole:"ENSIAS",consultations:0,statut:"En attente"});
  renderConsultants();
  updateCounts();
  showToast('Consultant ajouté avec succès','success');
  closeModal(null,document.getElementById('modal-add-consultant'));
}

function approveApp(i){
  DB.applications[i].statut='Approuvé';
  renderApplications();
  showToast('Candidature approuvée','success');
}
function rejectApp(i){
  DB.applications[i].statut='Refusé';
  renderApplications();
  showToast('Candidature refusée','error');
}

function resetDB(){
  showToast('Base de données réinitialisée','success');
  closeModal(null,document.getElementById('modal-reset-db'));
}
async function refreshData(){
  await loadAdminData();
  renderActivityFeed();
  renderRegions();
  renderDomaineProgress();
  updateCounts();
  initDashboardCharts();
  if (window._statsInit) initStatsCharts();
  showToast(ADMIN_DATA.source === 'local' ? 'Données locales actualisées' : 'Données base actualisées','success');
}
function exportData(){
  showToast('Export CSV en cours…','info');
  setTimeout(()=>showToast('Fichier téléchargé','success'),1200);
}

function updateCounts(){
  const kpis = (ADMIN_DATA && ADMIN_DATA.kpis) || buildAdminData(DB).kpis;
  const ne = kpis.etudiants, nc = kpis.consultants, na = kpis.applications;
  document.getElementById('kpi-etudiants').textContent = ne;
  document.getElementById('kpi-consultants').textContent = nc;
  document.getElementById('kpi-applications').textContent = na;
  document.getElementById('kpi-pending').textContent = kpis.pending;
  document.getElementById('kpi-ecoles').textContent = kpis.ecoles;
  document.getElementById('sb-etud-count').textContent = ne;
  document.getElementById('sb-cons-count').textContent = nc;
  document.getElementById('sb-app-count').textContent = na;
  document.getElementById('etud-count-label').textContent = ne;
  document.getElementById('cons-count-label').textContent = nc;
  document.getElementById('etud-count-footer').textContent = `Affichage de ${Math.min(ne,10)} sur ${ne}`;
}

/* ══════════════════════════════════
   MODAL HELPERS
══════════════════════════════════ */
function openModal(id){ document.getElementById(id).classList.add('open'); }
function closeModal(e,el){ if(!e||e.target===el) el.classList.remove('open'); }

/* ══════════════════════════════════
   TOAST
══════════════════════════════════ */
function showToast(msg, type=''){
  const t = document.getElementById('toast');
  const icons = {success:'<svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>',error:'<svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>',info:'<svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>'};
  t.innerHTML = (icons[type]||'') + msg;
  t.className = `toast show ${type}`;
  clearTimeout(t._tid);
  t._tid = setTimeout(()=>t.classList.remove('show'),3000);
}

/* ══════════════════════════════════
   DATE TOPBAR
══════════════════════════════════ */
function setDate(){
  const now = new Date();
  document.getElementById('tbDate').textContent = now.toLocaleDateString('fr-FR',{weekday:'short',day:'2-digit',month:'long',year:'numeric'});
}

/* ══════════════════════════════════
   INIT
══════════════════════════════════ */
async function initAdmin(){
  setDate();
  await loadAdminData();
  renderEtudiants();
  renderConsultants();
  renderApplications();
  renderEcoles();
  renderDB();
  renderLogs();
  renderActivityFeed();
  renderRegions();
  updateCounts();
  initDashboardCharts();
}
initAdmin();