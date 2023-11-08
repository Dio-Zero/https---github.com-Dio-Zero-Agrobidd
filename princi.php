<?php
require 'config/conexion.php';
require 'modelo/Modelo_remate.php';
require 'controlador/Controlador_remate.php';
$db = new Database();
$conn = $db->getConnection();

$controller = new RemateController($conn);
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'create':
            $controller->create();
            break;
        case 'store':
            $data = $_POST;
            $controller->store($data);
            break;
        case 'edit':
            $id_remate = $_GET['id_remate'];
            $controller->edit($id_remate);
            break;
        case 'update':
            $data = $_POST;
            $controller->update($data);
            break;
        case 'delete':
            $id_remate = $_GET['id_remate'];
            $controller->delete($id_remate);
            break;
        case 'list':
            $controller->list();
            break;
    }
} else {
    $controller->index();
}
?>
