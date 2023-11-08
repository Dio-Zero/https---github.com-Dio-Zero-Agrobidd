<?php
require '../config/conexion.php';
require_once  ('C:\wamp64\www\CRUD_Remates\modelo/Modelo_remate.php');
$db = new Database();
$remateModel = new RemateModel($db); 
if (isset($_GET['id_remate'])) {
    $id_remate = $_GET['id_remate'];
    $detallesDelRemate = $remateModel->getRemate($id_remate);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
<h1><?php echo $detallesDelRemate['nombre_remate'] ?></h1>



    </div>
</body>
</html>