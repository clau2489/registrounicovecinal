<?php
require_once ("config/db.php");
require_once ("config/conexion.php");

$idpersona = $_POST['documento'];
$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$documento = $_POST['documento'];
$cuil = $_POST['cuil'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$barrio = $_POST['barrio'];
$localidad = $_POST['localidad'];

$numeroderegistro = $_POST['documento'];

$sql = "INSERT INTO vecinos (id_vecino, apellido, nombre, documento, cuil, telefono, email, direccion, barrio, localidad) VALUES ('$documento', '$apellido', '$nombre', '$documento', '$cuil', '$telefono', '$email', '$direccion', '$barrio', '$localidad')";

$confirmado = '
<!DOCTYPE html>
<html lang="en">
<?php $title = "Registro único de vecinos | Municipio de Marcos Paz"; ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="sistemas">
  <!--Titulo del sitio -->
  <title><?php echo $title; ?></title>
  <link rel="icon" type="image/png" href="assets/img/icono.png" sizes="32x32" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/stylish-portfolio.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="assets/hover/css/hover.css" rel="stylesheet" media="all">
</head>
<div class="navbar gradient">    
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12 text-center">
        <img src="assets/img/mmpblanco.png" width="170px">
      </div>
    </div>    
  </div>
</div>
<body id="page-top">
  <section class="content-section" id="services">
    <div class="container">
      <div class="row">
        <div class="offset-md-3 col-md-6">
        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Felicitaciones</h4>
        <p>Sus datos han sido guardados en nuestros registros exitosamente</p>
        <br>
        <p>Su ID de vecino es: </p>
        <h4>'. $numeroderegistro .'</h4>
        <hr>
        <p class="mb-0">Utilice este ID para todas nuestras aplicaciones.</p>
        <hr>
        <a class="btn btn-success btn-block" href="../"">Ir a la página principal</a>
      </div>         
        </div>
      </div>
    </div>
  </section>
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
<div class="container">
  <div class="row p2 text-center">
    <div class="offset-md-3 col-md-6">
      <br>
      <a href="https://www.facebook.com/modernizacionmmp"><img src="assets/img/modernizacion.png" width="70%" class="p1"></a>
    </div>
  </div>  
</div>
<footer class="footer mastheads d-flex gradient text-center">
  <div class="container p2">
    <div class="row">
      <div class="col-md-12">
        <p class="copyright">Modernización e Innovación - &copy;marcospazdigital - Versión 1.0 - Municipio de Marcos Paz</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <a href="https://www.facebook.com/modernizacionmarcospaz"><i class="fa fa-facebook-square icon"></i></a>
        <a href=""><i class="fa fa-twitter-square icon"></i></a>
        <a href="https://www.instagram.com/modernizacionmmp/"><i class="fa fa-instagram icon"></i></a>
        <a href=""><i class="fa fa-youtube-square icon"></i></a>         
      </div>
    </div>  
  </div>
</footer>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="assets/js/stylish-portfolio.min.js"></script>
</body>
</html>
';

$noconfirmado = '
<!DOCTYPE html>
<html lang="en">
<?php $title = "Registro único de vecinos | Municipio de Marcos Paz"; ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="sistemas">
  <!--Titulo del sitio -->
  <title><?php echo $title; ?></title>
  <link rel="icon" type="image/png" href="assets/img/icono.png" sizes="32x32" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/stylish-portfolio.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="assets/hover/css/hover.css" rel="stylesheet" media="all">
</head>
<div class="navbar gradient">    
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12 text-center">
        <img src="assets/img/mmpblanco.png" width="170px">
      </div>
    </div>    
  </div>
</div>
<body id="page-top">
  <section class="content-section" id="services">
    <div class="container">
      <div class="row">
        <div class="offset-md-3 col-md-6">
        <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Felicitaciones</h4>
        <p>Sus datos han sido guardados en nuestros registros exitosamente</p>
        <br>
        <p>Su ID de vecino es: </p>
        <h4>". $numeroderegistro ."</h4>
        <hr>
        <p class="mb-0">Utilice este ID para todas nuestras aplicaciones.</p>
        <hr>
        <a class="btn btn-success btn-block" href="../"">Ir a la página principal</a>
      </div>         
        </div>
      </div>
    </div>
  </section>
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
<div class="container">
  <div class="row p2 text-center">
    <div class="offset-md-3 col-md-6">
      <br>
      <a href="https://www.facebook.com/modernizacionmmp"><img src="assets/img/modernizacion.png" width="70%" class="p1"></a>
    </div>
  </div>  
</div>
<footer class="footer mastheads d-flex gradient text-center">
  <div class="container p2">
    <div class="row">
      <div class="col-md-12">
        <p class="copyright">Modernización e Innovación - &copy;marcospazdigital - Versión 1.0 - Municipio de Marcos Paz</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <a href="https://www.facebook.com/modernizacionmarcospaz"><i class="fa fa-facebook-square icon"></i></a>
        <a href=""><i class="fa fa-twitter-square icon"></i></a>
        <a href="https://www.instagram.com/modernizacionmmp/"><i class="fa fa-instagram icon"></i></a>
        <a href=""><i class="fa fa-youtube-square icon"></i></a>         
      </div>
    </div>  
  </div>
</footer>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="assets/js/stylish-portfolio.min.js"></script>
</body>
</html>
';

if ($con->query($sql) === TRUE) {
  echo $confirmado;
} else {
  echo $noconfirmado;
  //echo "Error: " . $sql . "<br>" . $con->error; //Redireccion de la página

}
?>