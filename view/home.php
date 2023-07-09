<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>SDBM Home</title>
</head>
<body>
  <!--appel de la nav -->
    <?php
    include ("layout_nav.php") 
    ?>
  <!--flavor text présentation du logiciel -->
<div class="mt-5 p-5 container-fluid text-wrap">
  <h1 class="h1 text-center">Gestion de base de données de SDBM</h1>
  <p class="lead">Créé dans le but de permettre aux employés du Distributeur de Bières du Monde d'effectuer des opérations sur la base de données de manière simple et conviviale. Il offre différentes fonctionnalités pour faciliter la gestion des informations sur les bières, les marques et les fabricants, les historique des ventes, et plus encore.</p>
  <br>
  <p>Les principales fonctionnalités de ce site sont :</p>
  <ul class="list-group">
    <li class="list-group-item">Création de nouvelles bières avec leurs caractéristiques (couleur, type, titrage , etc.).</li>
    <li class="list-group-item">La modification des bières avec leurs caractéristiques (couleur, marque, volume, etc.).</li>
    <li class="list-group-item">La suppression des bières </li>
    <li class="list-group-item">Enregistrement de nouvelles marques et leurs fabricants associés. Ainsi que la modification des marques préexistante, ou leurs suppressions</li>
    <li class="list-group-item">La consultation des bières en fonction de leur couleur via une interface graphique intuitive.</li>
  </ul>
  <br>
  <p class="lead">Nous sommes convaincus que cette plateforme facilitera grandement la gestion des informations sur les bières et permettra aux employés de prendre des décisions éclairées concernant les opérations de distribution.</p>
  <p class="lead">Si vous avez des questions ou des suggestions, n'hésitez pas à nous contacter. Nous vous souhaitons une excellente utilisation de ce site !</p>
</div>

  <!--appel du footer-->
    <?php 
    include ("layout_foot.php")
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>