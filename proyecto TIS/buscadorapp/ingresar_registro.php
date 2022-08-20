
<!DOCTYPE html>

<html lang="en">
  <head>
      <?php
      include('componentes/head.php');
      ?>
  </head>

  <body class="hold-transition layout-top-nav">
    <div class="wrapper">

      <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <?php
          include('componentes/header.php');
      ?>
      </nav>
      
      <div class="content-wrapper">
        <div class="content-header">
          <div class="container">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0"> Ingresar Registros <small></small></h1>
              </div>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="container">
            <div class="row">

            <form action="registrar.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span>
                <img src="img/id-card.png" id="user" alt="">
              </span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="apellido_pa" placeholder="Apellido Paterno" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span>
                    <img src="img/id-card.png" id="user" alt="">
                </span>
              </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="apellido_ma" placeholder="Apellido Materno" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span>
                    <img src="img/id-card.png" id="user" alt="">
                </span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="rut" placeholder="RUT" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span>
                    <img src="img/id-card.png" id="user" alt="">
                </span>
              </div>
            </div>
          </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="mail" placeholder="Correo Electrónico" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span>
                <img src="img/message.png" id="user" alt="">
              </span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span>
                <img src="img/key.png" id="user" alt="">
              </span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Repita su contraseña" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span>
                <img src="img/key.png" id="user" alt="">
              </span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
              <label for="agreeTerms">
               Declaro aceptar los <a href="#">Términos y condiciones</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>









            </div>
          </div>
        </div>
      </div>

      <aside class="control-sidebar control-sidebar-dark">
      </aside>

      <?php
      include('componentes/footer.php');
      ?>
  </body>
</html>