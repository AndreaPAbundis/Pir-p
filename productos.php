<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>P-Palma</title>
  <link rel="icon" type="image/png" href="https://dummyimage.com/64x64/000/fff" sizes="64x64">
  <link rel="icon" type="image/png" href="https://dummyimage.com/180x180/000/fff" sizes="180x180">
  <!-- [#TODO] Dont forget to update the FAVICON IMAGES in the next route -->
  <!-- <link rel="icon" type="image/png" href="assets/images/favicon-180x180.png" sizes="128x128"> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css" integrity="sha256-K3Njjl2oe0gjRteXwX01fQD5fkk9JFFBdUHy/h28ggY=" crossorigin="anonymous" rel="stylesheet">
  <link href="./assets/styles/main.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/swiper/swiper/dist/css/swiper.min.css">
</head>

<body>
  <!--  Header  -->
<?php include('header.php'); ?>
  <!--  Main content -->
  <main class="j-workspace ">
    <div class="j-wrap">
      <div class="listing-products">
        <h1>Productos</h1>
        <div class="p-Crisantemos">
          <div class="thumbnail-img-content">
            <div class="image-container">
              <img src="https://dummyimage.com/400x250/000/fff" alt="">
            </div>
          </div>
          <div class="description-p">
            <h2>Crisantemos</h2>
            <a href="crisantemos.php">
              <button>Ver más</button>
            </a>
          </div>
        </div>
        <div class="p-minytra">
          <div class="thumbnail-img-content">
            <div class="image-container">
              <img src="https://dummyimage.com/400x250/000/fff" alt="">
            </div>
          </div>
          <div class="description-p">
            <h2>Minas y trazadores</h2>
            <a href="minasyt.php">
              <button>Ver más</button>
            </a>
          </div>
        </div>
        <div class="p-multitiros">
          <div class="thumbnail-img-content">
            <div class="image-container">
              <img src="https://dummyimage.com/400x250/000/fff" alt="">
            </div>
          </div>
          <div class="description-p">
            <h2>Multitiros</h2>
            <a href="multitiros.php">
              <button>Ver más</button>
            </a>
          </div>
        </div>
        <div class="p-logosyl">
          <div class="thumbnail-img-content">
            <div class="image-container">
              <img src="https://dummyimage.com/400x250/000/fff" alt="">
            </div>
          </div>
          <div class="description-p">
            <h2>Logos y leyendas</h2>
            <a href="logosyley.php">
              <button>Ver más</button>
            </a>
          </div>
        </div>
        <div class="p-castillos">
          <div class="thumbnail-img-content">
            <div class="image-container">
              <img src="https://dummyimage.com/400x250/000/fff" alt="">
            </div>
          </div>
          <div class="description-p">
            <h2>Castillos</h2>
            <a href="castillos.php">
              <button>Ver más</button>
            </a>
          </div>
        </div>
        <div class="p-pirfria">
          <div class="thumbnail-img-content">
            <div class="image-container">
              <img src="https://dummyimage.com/400x250/000/fff" alt="">
            </div>
          </div>
          <div class="description-p">
            <h2>Pirotecnia fria</h2>
            <a href="pirofria.php">
              <button>Ver más</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include('footer.php'); ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="assets/scripts/ripple.js"></script>
  <script src="assets/scripts/header.js"></script>
  <script src="assets/swiper/swiper/dist/js/swiper.min.js"></script>
</body>
</html>
