<?php
#Quitar el comentario para entrar en mantenimiento.
#header('Location: mantenimiento/');
session_start();
include '../common/conexion.php';
$section="trabaje";
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
  <link rel="stylesheet" href="../../assets/vendor/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../../assets/vendor/owlcarousel/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="../../css/style.css">
  <link href="../../assets/libs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
  <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/owlcarousel/owl.carousel.min.js"></script>
  <title>Eurochem-Us</title>
</head>
<body style="background-color:#ffffff;">
  <?php include '../common/menu.php'; include '../common/2domenu.php';?>
  <div class="container px-5 pb-4">
    <div class="row px-4 mt-2">
      <!-- Menu lateral -->
      <div class="col-12 col-md-3 mt-3">
        <div class="row">
          <div class="col-12">
            <h2 class="titulos_blog lead">Búsqueda</h2>
          </div>
          <div class="col-12">
            <form action="/es/productos/index.php" method="get">
              <input type="search" name="search" placeholder="Buscar productos...">
              <button type="submit">Buscar</button>
            </form>
          </div>
        </div>
        <div class="row mt-4 pr-4">
          <div class="col-12">
            <h2 class="titulos_blog lead">Divisiones</h2>
          </div>
          <?php
          $sqld="SELECT * FROM DIVISIONES";
          $result=$conn->query($sqld);
          if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
              $id_division=$row['ID'];
              $division=$row['DIVISION'];
              ?>
              <div class="col-12 mt-2 mb-1">
                <a class="enlace_menu_lateral" href="/es/productos/index.php?id_div=<?php echo $id_division;?>"><?php echo $division;?></a>
                <hr class="my-0">
              </div>
              <?php
              }
            }
           ?>
        </div>
      </div>
      <div class="col-12 col-md-9 mt-2">
        <div class="row">
          <div class="col-12 col-md-6">
            <h4 class="text-muted"><strong>Envíanos tu hoja de vida</strong></h4>
            <p class="text-muted">
              Conquimica pone a  disposición este correo para enviar su hoja de vida
               y su información profesional de acuerdo al perfil que más se ajuste a
               su experiencia y conocimientos
            </p>
            <a href="#">Info@eurochem.com</a>
          </div>
          <div class="col-12 col-md-6">
            <img src="/imagen/trabaja_nosotros.jpg" alt="" width="100%">
          </div>
        </div>
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
  <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
