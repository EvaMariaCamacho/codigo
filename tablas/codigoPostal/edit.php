<?php

include_once '../../db.php';

$provincia = '';
$poblacion= '';
$codigo= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM codigo_postal WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if($result){
  while(mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $provincia = $row['provincia'];
    $poblacion = $row['poblacion'];
    $codigo = $row['codigo'];
  }}
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $provincia= $_POST['provincia'];
  $poblacion = $_POST['poblacion'];
  $codigo = $_POST['codigo'];

  $query = "UPDATE codigo_postal set provincia = '$provincia', poblacion = '$poblacion', codigo = '$codigo' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Codigo Postal Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: codigoPostal.php');
}

?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="provincia" type="text" class="form-control mb-3" value="<?php echo $provincia; ?>" placeholder="Update provincia">
        </div>
        <div class="form-group">
        <input name="poblacion" class="form-control mb-3" value="<?php echo $poblacion; ?>" placeholder="Update poblacion"></input>
        </div>
        <div class="form-group">
        <input name="codigo" class="form-control mb-3" value="<?php echo $codigo; ?>" placeholder="Update codigo"></input>
        </div>
            <button class="btn-success" name="update">
                 Modificar
            </button>
      </form>
      </div>
    </div>
  </div>
</div>
