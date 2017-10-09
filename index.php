<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<title>CV</title>
<link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded" rel="stylesheet">
</head>

<body>

  <!-- Main Start -->

  <div class="main">

  <!-- Main Header Start -->
  <?php include "assets/include/header.php" ?>
  <!-- Main Header End -->

  <!-- Main Content Start -->
<div class="blanc">
  <section>
      <h2 id="one" class="a"><br />ETUDES</h2><br /><br />
      <span class="image1"><img src="assets/images/ulbnorm.jpg" width="50" height="50" alt="logo"/></span><h3>Master en Gestion culturelle: </h3><p>Cycle et mémoire réussis avec distinction (mémoire portant sur l’alliance culture-enseignement: « Quelles seraient les implications pour le secteur culturel d’un enseignement basé sur les intelligences multiples ? Observations en FWB »). Université libre de Bruxelles (ULB), Faculté de Philosophie et Sciences sociales.</p><br />
      <span class="image"><img src="assets/images/LogoUsaintlouis.jpg" width="50" height="50" alt="logo"/> </span><h3>Bachelier en Langues et littératures françaises et romanes, mineure en Information et communication: </h3><p>Cycle réussi avec distinction. Université Saint-Louis (Bruxelles), Faculté de Philosophie, Lettres et Sciences humaines.</p><br />
      <span class="image"><img src="assets/images/sc.jpg" width="50" height="50" alt="logo"/></span><h3>Centre scolaire du Sacré-Coeur de Jette.</h3><p>Enseignement secondaire général supérieur: Néerlandais (4), Mathématique (6), Sciences (3), Latin (4).</p>
  </section><br />
</div>

<div class="noir">
  <section class="color">
    <h2 id="two" class="b"><br />EXPERIENCE PROFESSIONNELLE</h2><br /><br />
    <h3>Musée communal Armand Pellegrin (Hélécine)</h3>
    <p>Stage du 02/03/2015 au 20/04/2015. Réalisation d’un cahier pédagogique et aide à la conception d’une nouvelle scénographie muséale. </p><br />
    <h3>Centre Armillaire (Centre culturel de Jette) </h3>
    <p>Stage du 12/10/2015 au 17/02/2016. Assistante de direction dans les fonctions de gestion administrative et culturelle, de production, de rédaction, de graphisme et de communication.
    </p><br />
    <h3>Asbl MusicArt (Tervuren) </h3>
    <p>Bénévolat depuis juin 2016 (gestionnaire web). Infographie et développement web : création du site <a href="http://www.musicartasbl.be">Site MusicArt</a></p>
  </section><br />
</div>

<div class="blanc">
  <section>
    <h2 id="trois" class="c"><br />LANGUES</h2><br /><br />
      <ul>
        <li>Français</li>
        <li>Néerlandais</li>
        <li>Italien</li>
        <li>Anglais</li>
      </ul>
  </section><br />
</div>

<div class="noir">
  <section class="color">
    <h2 id="quatre" class="d"><br />COMPÉTENCES</h2><br /><br />
        <h3>Langues et littératures françaises et romanes</h3><p> (rédaction, orthographe, argumentation, analyse, synthèse, prise de notes, linguistique, littérature...).</p>
        <h3>Gestion </h3><p>(GRH, comptabilité, marketing, politiques culturelles, administration, organisations culturelles…).</p>
        <h3>Communication et infographie</h3><p> (revues de presse, flyers, affiches, sites web...).</p>
        <h3>Pédagogie</h3><p> (formation en cours - DAEFLE)</p>
        <h3>Développement web</h3> <p>(formation en cours - BECODE)</p>
  </section><br />
</div>

<div class="blanc">
  <section>
    <h2 id="cinq" class="e"><br />OUTILS INFORMATIQUES</h2><br /><br />
      <ul>
        <li>Word</li>
        <li>PowerPoint</li>
        <li>Publisher</li>
        <li>Access</li>
        <li>Excel</li>
        <li>Outlook</li>
        <li>Adobe InDesign</li>
        <li>Adobe Illustrator</li>
        <li>Adobe Photoshop</li>
        <li>Adobe Dreamweaver</li>
        <li>NotePad++</li>
        <li>Atom</li>
        <li>Réseaux sociaux</li>
        <li>Html5</li>
        <li>CSS3</li>
      </ul>
  </section><br />
</div>

  <!-- Content Footer Start -->
  <?php include "assets/include/footer.php" ?>
  <!-- Content Footer End -->

<!-- Main Content End -->

</div>
	<!-- Main End -->

  <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>
  <script src='assets/js/jquer.js'></script>
  <script>
      $(document).ready(function(){
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
  
  </script>

</body>

</html>
