<?php


$usuario = 'root';
$pass = 'root';

try{
    $dsn = 'mysql:host=localhost;dbname=acciones';
    $options = array ( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $dbh = new PDO($dsn,$usuario,$pass);

    //echo 'Conectado';

    // foreach($pdo->query('SELECT * FROM `colores`') as $fila) {
    //     print_r($fila);
    // }

}catch (PDOException $e) {
    echo $e->getMessage();
}
$dsn= null;
