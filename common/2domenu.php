<nav class="navbar navbar-expand-lg navbar-light bg-white pt-0 navbar_fixed" id="navbar2">
  <div class="container my-0">
      <a class="navbar-brand py-0" href="../index.php">
        <img src="/imagen/logo-conquimica.png" class="d-inline-block align-top" alt="">
      </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-3">
      <li class="nav-item pt-2">
        <a class="nav-link text_menu_2 <?php if($section=="home"){echo "active";} ?> py-4" href="/index.php">Inicio</a>
      </li>
      <li class="nav-item ml-3 pt-2">
        <div class="dropdown">
          <a class="nav-link dropbtn text_menu_2 py-4 <?php if($section=="divisiones"){echo "active";} ?>" href="#">Divisiones</a>
          <div class="dropdown-content">
            <?php $sql="SELECT * FROM DIVISIONES;";
            $result=$conn->query($sql);
            if($result->num_rows>0){
              while($row=$result->fetch_assoc()){
                $id_division=$row['ID'];
                $division=ucwords($row['DIVISION']);
                ?>
                <a class="text_menu_2" href="#"><?php echo $division;?></a>
                <?php
              }
            }
             ?>
          </div>
        </div>
      </li>
      <li class="nav-item ml-3 pt-2">
        <div class="dropdown">
          <a class="nav-link dropbtn text_menu_2 py-4 <?php if($section=="industrias"){echo "active";} ?>" href="#">Industrias</a>
          <div class="dropdown-content2">
            <ul class="col3">
              <?php $sql="SELECT * FROM INDUSTRIAS;";
              $result=$conn->query($sql);
              if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                  $id_industria=$row['ID'];
                  $industria=$row['INDUSTRIA'];
                  ?>
                  <li><a class="text_menu_2" href="#"><?php echo $industria;?></a></li>
                  <?php
                }
              }
               ?>
            </ul>
          </div>
        </div>
      </li>
      <li class="nav-item ml-3 pt-2">
        <a class="nav-link text_menu_2 py-4 <?php if($section=="nuestra_company"){echo "active";} ?>" href="/nuestra_compania/index.php">Nuestra compañía</a>
      </li>
      <li class="nav-item ml-3 pt-2">
        <a class="nav-link text_menu_2 py-4 <?php if($section=="pagos"){echo "active";} ?>" href="/pagos/index.php">Pagos en línea</a>
      </li>
      <li class="nav-item ml-3 pt-2">
        <a class="nav-link text_menu_2 py-4 <?php if($section=="contacto"){echo "active";} ?>" href="/contacto/index.php">Contáctenos</a>
      </li>
      <li class="nav-item ml-5 pt-2">
        <a class="nav-link text_menu_2 py-4 <?php if($section==""){echo "active";} ?>" href="/index.php">
          <img src="/imagen/usa.png" alt="" width="18px">
        </a>
      </li>
      <li class="nav-item ml-3 pt-2">
        <a class="nav-link text_menu_2 py-4 <?php if($section==""){echo "active";} ?>" href="/index.php">
          <img src="/imagen/vzla.png" alt="" width="18px">
        </a>
      </li>
    </ul>
  </div>
  </div>
</nav>
