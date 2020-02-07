<?php
#Quitar el comentario para entrar en mantenimiento.
#header('Location: mantenimiento/');
session_start();
include '../common/conexion.php';
include '../common/datosGenerales.php';
$section="proteccion";
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="desciption" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Eutuxia, C.A.">
  <meta name="application-name" content=""/>
  <link rel="icon" type="image/png" sizes="16x16" href="/imagen/logo.png">
  <link rel="stylesheet" href="/assets/vendor/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="/assets/vendor/owlcarousel/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <link href="/assets/libs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
  <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="/assets/vendor/owlcarousel/owl.carousel.min.js"></script>
  <title>Eurochem-Us</title>
</head>
<body style="background-color:#ffffff;">
  <?php include '../common/menu.php'; include '../common/2domenu.php';?>
  <div class="container px-5">
    <div class="row px-4 mt-3">
      <!-- Menu lateral -->
      <div class="col-12 col-md-3 mt-2">
        <div class="row">
          <div class="col-12">
            <h2 class="titulos_blog lead">Search</h2>
          </div>
          <div class="col-12">
            <form action="/en/products/index.php" method="get">
              <input type="search" name="search" placeholder="Search products...">
              <button type="submit">Search</button>
            </form>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-12">
            <h2 class="titulos_blog lead">Divisions</h2>
          </div>
          <div class="col-12 mt-2 mb-1">
            <a class="enlace_menu_lateral" href="/en/products/index.php?id_prod=1">Food</a>
            <hr class="my-0">
          </div>
          <div class="col-12 my-1">
            <a class="enlace_menu_lateral" href="/en/products/index.php?id_prod=2">Specialty</a>
            <hr class="my-0">
          </div>
          <div class="col-12 my-1">
            <a class="enlace_menu_lateral" href="/en/products/index.php?id_prod=3">Commodities</a>
            <hr class="my-0">
          </div>
          <div class="col-12 my-1">
            <a class="enlace_menu_lateral" href="/en/products/index.php?id_prod=4">Plastics</a>
            <hr class="my-0">
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-9">
      </div>
    </div>
  </div>
  <!-- Footer -->
  <?php include '../common/footer.php';?>
  <script>
    window.onscroll = function() {
      var scroll=window.scrollY;
      var navbar = document.getElementById("navbar2");
      if(scroll>=400){
        navbar.classList.add("fixed-top");
      }else if (scroll<200) {
        var hasClase2 = navbar.classList.contains( 'fixed-top' );
        if (hasClase2) {
          navbar.classList.remove("fixed-top");
        }
      }
    };
  </script>
  <script src="/assets/libs/popper.js/dist/umd/popper.min.js"></script>
  <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
