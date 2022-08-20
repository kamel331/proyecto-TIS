
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
                <h1 class="m-0"> Buscar Registros <small></small></h1>
              </div>
            </div>
          </div>
        </div>

        <div class="content">
          <div class="container">
            <div class="row">

 <div class="row">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Búsqueda por RUT</h3>
                </div>

                <form action="busqueda.php" method="post">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Ingrese el RUT de la persona que desea buscar</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Sin puntos ni guión, con dígito verificador ">
                    </div>
                  </div>

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Buscar!</button>
                  </div>
                </form>
              </div>
        </div>









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