<?php

include_once '../../db.php';

if(isset($_POST['save_postal'])){
   $provincia = $_POST['provincia'];
   $poblacion = $_POST['poblacion'];
   $codigo = $_POST['codigo'];

   $query ="INSERT INTO codigo_postal(provincia, poblacion, codigo) VALUES ('$provincia', '$poblacion', $codigo)";
   $result = mysqli_query($conn, $query);
   if(!$result){
       die("Query Failed");
   }

   $_SESSION['message'] = 'Codigo Postal Saved succesfully';
   $_SESSION['message_type'] = 'success';
   header("Location: codigoPostal.php");
 
}

?>