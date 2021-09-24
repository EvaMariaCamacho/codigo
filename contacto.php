<?php


include_once 'conexion.php';

include_once 'includes/header.php';

?>


<div class="container">

<?php include_once 'includes/nav.php'; ?>

<div class="jumbotron m-5">
    <div class="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-8">
            <h2 class="mb-5">Contacto</h2>
         </div>
    </div>
   
  <div class="row">
    <div class="col-sm-4">

        <img src="img/ilustracion.png" class="img-fluid" alt="Responsive image">

    </div>
    <div class="col-sm-8 mb-5">
            <form class="row g-3">
                <div class="col-md-12">
                    <label for="inputeEmpresa" class="form-label">Empresa</label>
                    <input type="text" class="form-control" id="inputEmpresa">
                </div>
                <div class="col-md-12">
                    <label for="inputNombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="inputNombre">
                </div>
                <div class="col-md-6">
                    <label for="inputUsername" class="form-label">Apellido1</label>
                    <input type="text" class="form-control" id="inputUsername">
                </div>
                <div class="col-md-6">
                    <label for="inputUsername2" class="form-label">Apellido2</label>
                    <input type="text" class="form-control" id="inputUsername2">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Población</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Provincia</label>
                    <select id="inputState" class="form-select">
                        <option selected>Barcelona</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>

    </div>

  </div>
</div>
       
            
            </div>

        



        </div>
    </div>
</div>

<?php include_once 'includes/footer.php'; ?>

