<?php
#Quitar el comentario para entrar en mantenimiento.
#header('Location: mantenimiento/');
session_start();
include '../common/conexion.php';
include '../common/datosGenerales.php';
$section="contacto";
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
  <link rel="icon" type="image/jpg" sizes="16x16" href="../imagen/">
  <link rel="stylesheet" href="../assets/vendor/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/vendor/owlcarousel/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link href="../assets/libs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/owlcarousel/owl.carousel.min.js"></script>
  <title>Eurochem-Us</title>
</head>
<body style="background-color:#ffffff;">
  <?php include '../common/menu.php'; include '../common/2domenu.php';?>
  <!-- Mapas -->
  <div class="container-fluid mt-4 px-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15708.03522624633!2d-68.005718!3d10.179939!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1d47af71967d9a49!2sSuministros+Mavic%2C+C.A!5e0!3m2!1ses!2sve!4v1562178603833!5m2!1ses!2sve" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <div class="container px-5">
    <div class="row px-4 mt-5">
      <div class="col-12 col-md-6">
        <div class="row">
          <h2 class="titulos">Nuestras sedes</h2>
        </div>
        <div class="row">
          <img src="../imagen/logo-conquimica.png" alt="">
        </div>
        <div class="row mt-4">
          <div class="col-12 col-sm-4">
            <h4 class="text-muted"><strong>Medellín</strong></h4>
          </div>
          <div class="col-12 col-sm-6">
            <p class="text-muted">
              Cra 42 # 53-24. Itagüí <br>
              Teléfono: (4)- 3720733 <br>
              Call center: (4)- 375 00 50 <br>
              ventasmedellin@conquimica.com
            </p>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12 col-sm-4">
            <h4 class="text-muted"><strong>Bogotá</strong></h4>
          </div>
          <div class="col-12 col-sm-6">
            <p class="text-muted">
              Vereda La Punta. Autopista Medellin <br>
              km 6+200 costado sur y km 0+950 <br>
              Entrando por Festo. Tenjo-Cundinamarca <br>
              Teléfono: (1)- 5886170 <br>
              Call center: (1)- 5886600 <br>
              ventasbogota@conquimica.com
            </p>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12 col-sm-4">
            <h4 class="text-muted"><strong>Cali</strong></h4>
          </div>
          <div class="col-12 col-sm-6">
            <p class="text-muted">
              Calle 15 No. 32-571. Acopi Yumbo <br>
              Teléfono: (2)- 6644643 <br>
              Call center: (2)- 6515024 <br>
              ventascali@conquimica.com
            </p>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12 col-sm-4">
            <h4 class="text-muted"><strong>Bucaramanga</strong></h4>
          </div>
          <div class="col-12 col-sm-6">
            <p class="text-muted">
              Cra 16 No. 59-70. km 7 vía Girón <br>
              Teléfono: (7)- 6917380 <br>
              Call center y Televentas: (7)- 6917381 <br>
              ventasbucaramanga@conquimica.com
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <form action="" method="post">
        <div class="row text-muted mb-2">
          Nombre *
        </div>
        <div class="row">
          <input type="text" name="" value="" placeholder="Tu nombre" style="min-width:100%;">
        </div>
        <div class="row text-muted mb-2 mt-4">
          E-Mail *
        </div>
        <div class="row">
          <input type="text" name="" value="" placeholder="Tu correo electrónico" style="min-width:100%;">
        </div>
        <div class="row text-muted mb-2 mt-4">
          Empresa
        </div>
        <div class="row">
          <input type="text" name="" value="" placeholder="El nombre de tu empresa" style="min-width:100%;">
        </div>
        <div class="row text-muted mb-2 mt-4">
          Asunto
        </div>
        <div class="row">
          <input type="text" name="" value="" style="min-width:100%;">
        </div>
        <div class="row text-muted mb-2 mt-4">
          Mensaje
        </div>
        <div class="row">
          <textarea name="name" rows="8" cols="80"></textarea>
        </div>
        <div class="row mt-3">
          <button class="btn btn-primary py-3" type="button" name="button" style="min-width:100%;">Enviar</button>
        </div>
        </form>
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
  <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
