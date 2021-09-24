 <?php if(isset($_SESSION['message'])) { ?>
        
            <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                
                <?= $_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php session_unset(); } ?>
            <div class="card card-body">
               <form action="save_postal.php" method="POST">

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary">
                                 <i class="material-icons">Codigo Postal</i>
                            </span>
                        </div>
                        <input type="text" name="codigo" class="form-control" id="codigo" placeholder="Codigo">
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary">
                                 <i class="material-icons">Poblacion</i>
                            </span>
                        </div>
                        <input type="text" name="poblacion" class="form-control" id="poblacion" placeholder="Poblacion">
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary">
                                 <i class="material-icons">Provincia</i>
                            </span>
                        </div>
                        <input type="text" name="provincia" class="form-control" id="provincia" placeholder="Provincia">
                    </div>

                    <input type="submit" class="btn btn-success btn-block mt-3" name="save_postal" value="Save Postal">
                    </form>