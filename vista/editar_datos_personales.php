<?php
session_start();
if($_SESSION['us_tipo']==1){// se realiza este if para verificar que el usuario logueado tiene rol de administrador
include_once'layouts/header.php';
?>

  <title>Editar Datos</title>
  <!-- Tell the browser to be responsive to screen width -->
  <?php
    include_once'layouts/nav.php';
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Datos Personales</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../vista/adm_catalogo.php">Home</a></li>
              <li class="breadcrumb-item active">Datos Personales</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section>
        <div class="content">
                <div class="container-fluid"><!-- /.container-fluid ES UNA CLASE DE BOOTSTRAP -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card card-success card-outline"><!-- el card-outline crea una linea. card-success le da el color verde  -->
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img src="../img/avatar01.png"  class="profile-user-img img-fluid img-circle">
                                    </div>
                                    <input id="id_usuario" type="hidden" value=<?php echo $_SESSION['usuario']?>>
                                    <h3 id="nombre_us" class="profile-username text-center text-success">Nombre</h3>
                                    <p  id="apellidos_us"class="text-muted text-center">Apellido</p>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b style="color:#0B7300">Edad</b><a id="edad" class="float-right">12</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b style="color:#0B7300">DNi</b><a id="dni_us" class="float-right">12</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b style="color:#0B7300">Tipo de usuario</b>
                                            <span id="us_tipo" class=" float-right badge badge-primary"> Admistrador</span><!-- El badge es una insignia que resalta. badge-primary le da un color azul -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-tittle">Sobre Mí</h3>
                                </div>
                                <div class="card-body">
                                    <strong style="color:#0B7300">
                                    <i class="fas fa-phone mr-1"></i>Telefono
                                    </strong>
                                    <p id="telefono_us" class="text-muted">9354637</p>

                                    <strong style="color:#0B7300">
                                    <i class="fas fa-map-marker-alt mr-1"></i>Residencia
                                    </strong>
                                    <p ID="residencia_us" class="text-muted">Nueva Deli 324</p>

                                    <strong style="color:#0B7300">
                                    <i class="fas fa-at mr-1"></i>Correo>
                                    </strong>
                                    <p id="correo_us" class="text-muted">abc@gmail.com</p>
                                
                                    <strong style="color:#0B7300">
                                    <i class="fas fa-pencil-alt mr-1"></i>Informacion Adicional
                                    </strong>
                                    <p id="adicional_us" class="text-muted">Nueva Deli 324</p>

                                    <button class=" btn btn-block bg-gradient-danger">Editar</button>
                                </div>
                                <div class="card-footer">
                                    <p class="text-muted"> Click si desea editar</p>

                                </div>

                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class=" card card-success">
                                <div class="card-header">
                                    <h3 class="card-tittle">Editar Datos Personales</h3>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                                            <div class="col-sm-10">
                                                <input type="number" id="telefono" class=" form-control"><!--no usamo name xq vamos usar javaScript, empleamos el Id para poder seleccionarla -->
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="residencia" class="col-sm-2 col-form-label">Residencia</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="residencia" class=" form-control"><!--no usamo name xq vamos usar javaScript, empleamos el Id para poder seleccionarla -->
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="correo" class="col-sm-2 col-form-label">Correo</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="Correo" class=" form-control"><!--no usamo name xq vamos usar javaScript, empleamos el Id para poder seleccionarla -->
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
                                            <div class="col-sm-10">
                                                <input type="number" id="Sexo" class=" form-control"><!--no usamo name xq vamos usar javaScript, empleamos el Id para poder seleccionarla -->
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="adicional" class="col-sm-2 col-form-label">Inf. Adicional</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control row"  id="adicional" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10 float-right">
                                                <button class="btn btn-block btn-outline-success">Guardar</button>
                                            </div>
                                        </div>


                                    </form>
                                </div>
                                <div class="card-footer">
                                    <p class="text-muted">No ingresar Datos Erroneos</p>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
<?php
include_once 'layouts/footer.php';
} // se utilza entre codigo php para poder usar la llave y que afecte al codigo Html el if
else{
    header('Location: ../index.php');
}
?>