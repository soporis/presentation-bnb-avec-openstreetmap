<?php
require('vendor/autoload.php');
$faker = Faker\Factory::create()
?><!DOCTYPE html>
<html>
<head>
  <title>Title</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
        integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
        crossorigin=""/>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 style="padding-left: 30px;">Où acheter le meilleur <strong>chocopain</strong></h1>

<div class="container">

  <div class="list">
      <?php for ($i = 0; $i < 30; $i++): ?>
        <div class="item js-marker" data-lat="<?= $faker->latitude(43.6009200, 43.6109200) ?>" data-lng="<?= $faker->longitude(3.8772300, 3.90306) ?>" data-price="<?= $faker->numberBetween(0, 100) ?>">
          <img src="https://via.placeholder.com/400x260" alt="">
          <h4>3 barres de chocolat pour le prix de 2 !</h4>
          <p>
            Ici une petite description qui explique pourquoi c'est mieux ici
          </p>
        </div>
      <?php endfor; ?>
  </div>

  <div class="map" id="map"></div>

</div>
<script src="vendor.js"></script>
<script src="app.js"></script>
</body>
</html>
