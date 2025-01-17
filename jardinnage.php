<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entête et Diaporama avec Bootstrap</title>
  <!-- Liens vers Bootstrap et Font Awesome -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
  <style>
    
    body {
      overflow-x: hidden; /* Empêche le débordement horizontal */
    }

    .container {
      max-width: 100%; /* Définit une largeur maximale pour le contenu */
    }

    /* Ajoutez ces styles à votre balise <style> */

    /* Espacement et Marges */
    .container {
      padding: 20px;
    }

    .apropos {
      padding: 50px 0;
    }

    .image-section {
      margin-top: 50px;
    }

    .comment-form {
      margin-top: 50px;
      margin-bottom: 50px;
    }

    .footer {
      margin-top: 50px;
      padding: 30px 0;
    }

    /* Typographie */
    body {
      font-family: Arial, sans-serif;
    }

    h1, h2, h3, h4, h5, h6 {
      font-weight: bold;
    }

    /* Couleurs */
    .menu-section {
      background-color: #333;
    }

    .header {
      background-color: #333 ;
      color: #fff;
    }

    .menu-section .navbar-nav .nav-link {
      color: #fff;
    }

    .menu-section .navbar-nav .nav-link:hover {
      color: #007bff;
    }

    .footer {
      background-color: #333;
      color: #fff;
    }

    .footer a {
      color: #fff;
    }

    .footer a:hover {
      color: #007bff;
    }

    /* Images */
    .img-fluid {
      max-width: 100%;
      height: auto;
    }

    /* Contraste */
    .navbar-brand {
      color: #fff;
    }

    body {
      overflow-x: hidden; /* Empêche le débordement horizontal */
    }

    .container {
      max-width: 100%; /* Définit une largeur maximale pour le contenu */
    }

    /* Styles pour l'en-tête */
    .header {
      padding: 10px;
    }

    .header ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .header ul li {
      display: inline-block;
      margin-right: 20px;
    }

    /* Styles pour le menu */
    .menu-section {
      background-color:  rgb(180, 180, 180);
      padding: 10px;
    }

    .menu-section .navbar-brand {
      margin-right: auto;
    }

    .menu-section .navbar-nav {
      margin-left: auto;
    }

    .nav-item a:hover {
      color: #007bff;
    }

    .navbar-brand span {
      color: #000;
    }

    .navbar-brand {
      font-size: 30px;
      font-weight: 900;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
  </style>
  </head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark menu-section" id="menu">
  <div class="container">
    <a class="navbar-brand" href=""><i class="fas fa-handshake"></i> <span>E</span>sso-plus</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php"><i class="fas fa-home"> L’Accueil</i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="nos_offre.php"><i class="fas fa-shopping-cart"> Nos Offres</i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="formation.php"><i class="fas fa-graduation-cap">Formation</i> </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact.php"><i class="fas fa-envelope">Contact</i> </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Les scripts Bootstrap et Font Awesome -->


<style>
    body, html {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    .bg-image {
      background-image: url('jardin.jpg');
      height: 70vh;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }

    .content {
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
    }

    .content h1 {
      font-size: 3rem;
      font-weight: bold;
    }

    .content p {
      font-size: 1.5rem;
    }

    .fa-star {
      font-size: 3rem;
      margin-top: 20px;
    }
    .custom-text-color {
  color: white;
}
.texte-centre {
  text-align: center;
}



  </style>
</head>
<body>
  <div class="container-fluid px-0">
    <div class="row mx-0">
      <div class="col-12 bg-image">
        <div class="content">
        <h1 class="display-4 text-center custom-text-color">JARDINNAGE</h1>
        <p class="display-4 text-center custom-text-color">Découvrez les plaisirs du jardinage dès aujourd'hui. Cultivez votre savoir-faire vert avec nous</p>
        </div>
      </div>
    </div>
  </div>
  <!-- le role -->
  <div class="container">
  <div class="row">
    <div class="col text-center">
      <h2>Rôles</h2>
      <p>Le jardinage est un art et une science qui consiste à créer, entretenir et embellir des espaces extérieurs. Les jardiniers et paysagistes travaillent avec la nature pour concevoir des paysages harmonieux et esthétiques, tout en répondant aux besoins et aux préférences des clients. Leur rôle ne se limite pas à planter des fleurs et à tondre la pelouse ; ils prennent en charge tous les aspects de la santé végétale, de la taille des arbres à la lutte contre les maladies. En plus de la végétation, ils intègrent des éléments hardscape tels que des chemins, des terrasses et des structures pour compléter le design et ajouter fonctionnalité et caractère. Les jardiniers jouent également un rôle éducatif en conseillant les clients sur l'entretien des plantes, la gestion de l'eau et la conservation des ressources naturelles. En fin de compte, le jardinage transforme les espaces extérieurs en havres de paix et en refuges verts, créant des environnements inspirants et enchanteurs pour tous ceux qui les apprécient.</p>
    </div>
  </div>
</div>


  <div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="texte-centre">
        <h3>Aménagement paysager et design de jardins</h3>
        <p>Création d'espaces extérieurs à la fois esthétiques et fonctionnels, en harmonie avec leur environnement et les besoins des clients. Cela comprend la conception et la mise en œuvre de plans pour des jardins privés, des parcs, des espaces commerciaux et publics, ainsi que des domaines résidentiels</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="texte-centre">
        <h3>L'entretien des pelouses et des espaces verts</h3>
        <p>Pour assurer qu'ils restent sains, luxuriants et attrayants tout au long de l'année. Cela implique un ensemble de tâches régulières et saisonnières visant à promouvoir la croissance des plantes, à contrôler les mauvaises herbes, à prévenir les maladies et à maintenir un aspect général propre et soigné.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="texte-centre">
        <h3>Décoration et aménagement extérieur</h3>
        <p>
        Implique de choisir des mobiliers de jardin, des accessoires décoratifs et des structures pour embellir vos espaces extérieurs. Nous vous conseillons sur les choix de mobilier en fonction du style, de la durabilité et de la fonctionnalité recherchés. Nous aidons également à sélectionner des accessoires décoratifs tels que des coussins, des lanternes et des sculptures pour ajouter de la personnalité à l'espace.
             </p>
     </div>
    </div>
  </div>
</div>

  <!-- Footer -->
<!-- Footer -->
<footer class="footer bg-dark text-white py-4">
  <div class="container">
    <div class="row">
      <!-- Logo et présentation de l'entreprise -->
      <div class="col-md-4">
        <h4><a class="navbar-brand" href=""><i class="fas fa-handshake"></i> <span>E</span>sso-plus</a></h4>
        <p>Présentation de l'entreprise</p>
      </div>
      <!-- Localisation de l'entreprise -->
      <div class="col-md-4">
        <h4>Localisation</h4>
        <p>Adresse de l'entreprise<br>
        Division de l'entreprise</p>
      </div>
      <!-- Liens de raccourci du menu et plus d’information -->
      <div class="col-md-4">
        <h4>Liens rapides</h4>
        <ul class="list-unstyled">
          <li><a href="formation.php" class="text-white">Formation</a></li>
          <li><a href="nos_offre.php" class="text-white">Nos Offres</a></li>
          <li><a href="contact.php" class="text-white">Contact</a></li>
        </ul>
      </div>
    </div>
    <!-- En-tête -->
    <header class="header bg-dark text-white py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <ul>
              <li><i class="fas fa-building"></i>+228 70-44-81-06</li>
              <li><i class="far fa-envelope"></i> gregoire8@gmail.com</li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="social-icons">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
              <li><a href="#"><i class="fas fa-envelope"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
  </div>
  <!-- Copyright -->
  <div class="row mt-3">
    <div class="col-12">
      <p class="text-center m-0 copyright-text">Copyright 2024 <a href="#" class="text-white"> ESSO-PLUS</a> Tous droits réservés.</p>
    </div>
  </div>
</footer>
<!-- Les scripts Bootstrap et Font Awesome -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
.sticky {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1000; /* Assurez-vous que le menu reste au-dessus de tout autre contenu */
  background-color: #333; /* Couleur de fond du menu lorsque fixé */
  box-shadow:0 2px 4px rgba(0,0,0,0.1); /* Ajoutez une ombre pour améliorer la visibilité */
  transition: all 0.3s ease; /* Une transition douce pour une meilleure expérience utilisateur */
}

/* Vous pouvez également ajouter d'autres styles comme la taille du texte, la couleur, etc. */
</style>

<script>
window.addEventListener('scroll', function() {
    const menu = document.getElementById('menu'); // Sélectionnez votre menu par son ID
    menu.classList.toggle("sticky", window.scrollY > 0);
});
</script>

</body>
</html>s