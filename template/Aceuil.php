<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>AbridCarrer</title>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Cormorant+Garamond:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="../Styles/Acceuil.css">
</head>
<body>
<!-- NAVBAR -->
    <nav id="nav">
      <!-- LOGO IMAGE — mix-blend-mode:multiply supprime le fond blanc -->
      <a href="#hero" class="logo-link">
        <img src="../assets/abridc.png" alt="What's Next ?" />
      </a>
      <ul class="nav-links" id="navLinks">
        <li><a href="#hero">Acceuil</a></li>
        <li><a href="#domaines">Domaines</a></li>
        <li><a href="../template/login.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle; margin-right:5px;">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
          </svg>Connexion
        </a></li>
      </ul>
      <div class="burger" onclick="toggleNav()">
        <span></span><span></span><span></span>
      </div>
    </nav>

<!-- HERO -->
<section class="hero" id="hero">
  <div class="hero-img"></div>
  <div class="hero-fade"></div>
  <div class="hero-inner">
    <!-- h1 : glisse de gauche → droite -->
    <h1>Bienvennue sur <span style="color:#90A1B9;font-weight: bold;">What's</span><span style="color: #022F2E;">Next ?</span></h1>
    <!-- p : glisse de droite → gauche -->
    <p>Votre avenir commence ici</p>
    <div class="hero-btns">
      <a href="#domaines" class="hbtn">Explorer les Domaines</a>
    </div>
  </div>
  <div class="scroll-hint">
    <svg viewBox="0 0 24 24"><path d="M12 5v14M5 12l7 7 7-7"/></svg>
  </div>
</section>

<!-- DOMAINES -->
<section class="domaines" id="domaines">
  <p class="sec-label">...</p>
  <h2 class="sec-title">Explore les domaines</h2>
  <div class="dom-list">

    <div class="dom-row">
      <div class="dom-img"><img src="../assets/technologie.jpg" alt="Sciences et Technologie"/></div>
      <div class="dom-info">
        <div class="dom-text">
          <h3>Sciences &amp; Technologie</h3>
          <p>Mathématiques, informatique, ingénierie et intelligence artificielle. Ce domaine forme les esprits analytiques et créatifs capables de concevoir les solutions de demain.</p>
        </div>
        <div class="btn-wrapper">
          <button class="btn-plus" onclick="toggleAccord(this)">Savoir plus <span class="arrow">▼</span></button>
          <div class="accord-body">
            <div class="accord-inner">
              <ul><li>Développement logiciel & IA</li><li>Réseaux & cybersécurité</li><li>Génie électrique & mécanique</li><li>Robotique & systèmes</li></ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="dom-row">
      <div class="dom-img"><img src="../assets/ecommerce.jpg" alt="Sciences Économiques et Gestion"/></div>
      <div class="dom-info">
        <div class="dom-text">
          <h3>Sciences Économiques &amp; Gestion</h3>
          <p>Finance, commerce, management et entrepreneuriat. Ce domaine prépare à comprendre les mécanismes économiques, piloter des projets et diriger des équipes.</p>
        </div>
        <div class="btn-wrapper">
          <button class="btn-plus" onclick="toggleAccord(this)">Savoir plus <span class="arrow">▼</span></button>
          <div class="accord-body">
            <div class="accord-inner">
              <ul><li>Finance & comptabilité</li><li>Marketing & commerce</li><li>Management & entrepreneuriat</li><li>Banque & assurance</li></ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="dom-row">
      <div class="dom-img"><img src="../assets/medical.jpg" alt="Médecine et Santé"/></div>
      <div class="dom-info">
        <div class="dom-text">
          <h3>Médecine &amp; Santé</h3>
          <p>Médecine, pharmacie, odontologie et sciences paramédicales. Ce domaine forme des professionnels au service de la vie humaine, capables de diagnostiquer, soigner et accompagner.</p>
        </div>
        <div class="btn-wrapper">
          <button class="btn-plus" onclick="toggleAccord(this)">Savoir plus <span class="arrow">▼</span></button>
          <div class="accord-body">
            <div class="accord-inner">
              <ul><li>Médecine & spécialités</li><li>Pharmacie</li><li>Chirurgie dentaire</li><li>Sciences paramédicales</li></ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="dom-row">
      <div class="dom-img"><img src="../assets/droit.jpg" alt="Droit et Sciences Politiques"/></div>
      <div class="dom-info">
        <div class="dom-text">
          <h3>Droit &amp; Sciences Politiques</h3>
          <p>Droit privé, droit public, sciences politiques et relations internationales. Ce domaine enseigne à analyser les textes juridiques et défendre des droits.</p>
        </div>
        <div class="btn-wrapper">
          <button class="btn-plus" onclick="toggleAccord(this)">Savoir plus <span class="arrow">▼</span></button>
          <div class="accord-body">
            <div class="accord-inner">
              <ul><li>Droit des affaires</li><li>Sciences politiques</li><li>Relations internationales</li><li>Magistrature & notariat</li></ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="dom-row">
      <div class="dom-img"><img src="../assets/commmunication.jpg" alt="Communication et Médias"/></div>
      <div class="dom-info">
        <div class="dom-text">
          <h3>Communication &amp; Médias</h3>
          <p>Journalisme, communication digitale, audiovisuel et relations publiques. Ce domaine forme des professionnels capables de construire des messages clairs et impactants.</p>
        </div>
        <div class="btn-wrapper">
          <button class="btn-plus" onclick="toggleAccord(this)">Savoir plus <span class="arrow">▼</span></button>
          <div class="accord-body">
            <div class="accord-inner">
              <ul><li>Journalisme & presse</li><li>Communication digitale</li><li>Relations publiques</li><li>Production audiovisuelle</li></ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="dom-row">
      <div class="dom-img"><img src="../assets/envirennement.png" alt="Environnement et Agriculture"/></div>
      <div class="dom-info">
        <div class="dom-text">
          <h3>Agriculture &amp; Environnement</h3>
          <p>Agronomie, génie rural, environnement et développement durable. Ce domaine répond aux grands défis de notre époque : sécurité alimentaire et transition écologique.</p>
        </div>
        <div class="btn-wrapper">
          <button class="btn-plus" onclick="toggleAccord(this)">Savoir plus <span class="arrow">▼</span></button>
          <div class="accord-body">
            <div class="accord-inner">
              <ul><li>Agronomie & génie rural</li><li>Gestion des ressources en eau</li><li>Développement durable</li><li>Agro-alimentaire</li></ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="dom-row">
      <div class="dom-img"><img src="../assets/art.jpg" alt="Arts et Créativité"/></div>
      <div class="dom-info">
        <div class="dom-text">
          <h3>Arts &amp; Créativité</h3>
          <p>Design, architecture, arts plastiques et musique. Ce domaine valorise l'expression artistique et la maîtrise technique pour créer des œuvres et des identités visuelles.</p>
        </div>
        <div class="btn-wrapper">
          <button class="btn-plus" onclick="toggleAccord(this)">Savoir plus <span class="arrow">▼</span></button>
          <div class="accord-body">
            <div class="accord-inner">
              <ul><li>Architecture & design</li><li>Arts plastiques</li><li>Design graphique & UX/UI</li><li>Cinéma & animation</li></ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="dom-row">
      <div class="dom-img"><img src="../assets/lettre.jpg" alt="Lettres Langues Sciences Humaines"/></div>
      <div class="dom-info">
        <div class="dom-text">
          <h3>Lettres, Langues &amp; Sciences Humaines</h3>
          <p>Littérature, langues étrangères, philosophie, histoire et psychologie. Ce domaine cultive la réflexion, l'analyse et la compréhension des comportements humains.</p>
        </div>
        <div class="btn-wrapper">
          <button class="btn-plus" onclick="toggleAccord(this)">Savoir plus <span class="arrow">▼</span></button>
          <div class="accord-body">
            <div class="accord-inner">
              <ul><li>Littérature & linguistique</li><li>Traduction & interprétariat</li><li>Psychologie & sociologie</li><li>Histoire & géographie</li></ul>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- OBJECTIF -->
<section class="objectif">
  <div class="obj-inner">
    <p class="sec-label">Notre vision</p>
    <h2>Notre objectif :</h2>
    <p>Nous voulons accompagner chaque étudiant marocain dans son choix de filière en lui offrant une information claire, complète et personnalisée.</p>
    <p>Grâce à nos outils d'orientation, nos conseils d'experts et notre base de données des filières au Maroc, tu peux avancer avec confiance vers la carrière qui te correspond vraiment.</p>
    <div class="eval-box">
      <span class="eval-tag">Nouveau</span>
      <h3>Évaluation du platforme</h3>
      <p>Aidez-nous à améliorer votre expérience en partageant votre avis sur notre outil d'orientation.</p>
      <div class="stars">
        <svg viewBox="0 0 24 24" fill="#f5c842"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <svg viewBox="0 0 24 24" fill="#f5c842"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <svg viewBox="0 0 24 24" fill="#f5c842"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <svg viewBox="0 0 24 24" fill="#f5c842"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <svg viewBox="0 0 24 24" fill="#ddd"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
      </div>
      <a href="#" class="btn-eval">Laisser un avis</a>
    </div>
    <div class="form_contact">
      <h3>Contactez-nous</h3>
      <p>Une question, une suggestion ou besoin d'aide ? N'hésitez pas à nous contacter !</p>
      <form id="contactForm" onsubmit="submitContactForm(event)">
        <input type="text" name="name" placeholder="Votre nom" required />
        <input type="email" name="email" placeholder="Votre email" required />
        <textarea name="message" rows="4" placeholder="Votre message" required></textarea>
        <button type="submit">Envoyer</button>
      </form>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="ft-top">
    <div class="ft-social">
      <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="white" style="vertical-align:middle;margin-right:5px"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
        Instagram
      </a>
      <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="white" style="vertical-align:middle;margin-right:5px"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
        Facebook
      </a>
      <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="white" style="vertical-align:middle;margin-right:5px"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
        LinkedIn
      </a>
      <span style="color:#fff;font-size:.74rem;font-weight:600;letter-spacing:.07em;text-transform:uppercase">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:5px"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.81a16 16 0 0 0 6.29 6.29l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        +212 663 175 158
      </span>
    </div>
  </div>
  <div class="ft-cols">
    <div class="ft-col">
      <h4>À propos</h4>
      <ul>
       <!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Menu interactif</title>

<style>
    body {
        font-family: Arial;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    li {
        margin: 10px 0;
    }

    a {
        text-decoration: none;
        color: blue;
        cursor: pointer;
    }

    .content {
        display: none;
        margin-left: 20px;
        color: #180659;
    }
</style>
</head>

<body>

<ul>
    <li>
        <a onclick="toggleContent('q1')">Qui sommes-nous ?</a>
        <div id="q1" class="content">
            Nous sommes des etudiants en 1 ere annees cycle ingenieur ensakh iid1.
        </div>
    </li>

    <li>
        <a onclick="toggleContent('q2')">Notre mission</a>
        <div id="q2" class="content">
            Notre mission est de fournir des solutions innovantes et accessibles.
        </div>
    </li>

    <li>
        <a onclick="toggleContent('q3')">L'équipe</a>
        <div id="q3" class="content">
            Fadwa Ouarchane .
          Mohammed Sadik.
        </div>
    </li>

    <li>
        <a onclick="toggleContent('q4')">Notre histoire</a>
        <div id="q4" class="content">
            nous sommes des bacheliers en 2023 integrants ensakh par un cnc .
        </div>
    </li>
</ul>
</body>
</html>
      </ul>
    </div>
    <div class="ft-col">
      <h4>Explorer</h4>
      <ul>
        <li><a href="#domaines">Découvrir les domaines</a></li>
        <li><a href="#">Voir les filières</a></li>
        <li><a href="#">Nos articles &amp; conseils</a></li>
      </ul>
    </div>
    <div class="ft-col">
      <h4>Liens utiles</h4>
      <ul>
        <li><a href="#" class="ext">Ministère de l'Éducation</a></li>
        <li><a href="#" class="ext">Universités au Maroc</a></li>
        <li><a href="#">Bac Maroc officiel</a></li>
      </ul>
    </div>
    <div class="ft-col">
      <h4>Ressources</h4>
      <ul>
        <li><a href="#">Guide du bachelier</a></li>
        <li><a href="#">Calendrier des inscriptions</a></li>
        <li><a href="#">Offres de bourses</a></li>
        <li><a href="#">Témoignages</a></li>
      </ul>
    </div>
  </div>
  <div class="ft-bottom">
    <p>© 2025 WHAT'S NEXT ? — TOUS DROITS RÉSERVÉS &nbsp;·&nbsp;
      <a href="#">Mentions légales</a> &nbsp;·&nbsp;
      <a href="#">Politique de confidentialité</a> &nbsp;·&nbsp;
      <a href="#">Contact</a>
    </p>
  </div>
</footer>
<span id="username"></span>
<script src="../Js/Aceuil.js"></script>
</body>
</html>
