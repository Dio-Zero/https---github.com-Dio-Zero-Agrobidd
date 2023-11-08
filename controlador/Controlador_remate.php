
<?php
require_once 'modelo/Modelo_remate.php';




class RemateController {
 
    private $model;

    public function __construct($db) {
        $this->model = new RemateModel($db);
    }

    public function index() {
        $remates = $this->model->getRemates();
        require 'vista/listar.php';
    }

    public function create() {
        $lotes = $this->model->getLotesDisponibles();
        require 'vista/crear.php'; 
        

 // Verifica si se ha enviado un formulario para crear el remate
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'nombre_remate' => $_POST['nombre_remate'],
        'fecha' => $_POST['fecha'],
        'horario' => $_POST['horario'],
        'id_lote' => $_POST['id_lote'],
        'descripcion' => $_POST['descripcion'],
    ];

    // Crea el remate y obtén su ID
    $newRemateId = $this->model->createRemate($data);

    // Genera una URL única para ese remate
    $detalleRemateURL = "detalle_remate.php?id_remate=$newRemateId";

    // Redirige al usuario a la página de detalles del remate
    header("Location: $detalleRemateURL ");
}
    }

    public function store($data) {

        $data = [
            'nombre_remate' => $_POST['nombre_remate'],
            'fecha' => $_POST['fecha'],
            'horario' => $_POST['horario'],
            'id_lote' => $_POST['id_lote'],
            'descripcion' => $_POST['descripcion'],
        ];
        $remates = $this->model->getRemates();
        $success = $this->model->createRemate($data);
        if ($success) {
            header("Location: index.php");
        } else {
            echo "Error al crear el remate";
        }
    }

    public function edit($id_remate) {
        $remates = $this->model->getRemate($id_remate);
        $lotes = $this->model->getLotesDisponibles();
        require 'vista/editar.php';
    }

    public function update($data) {

        $data = [
            'nombre_remate' => $_POST['nombre_remate'],
            'fecha' => $_POST['fecha'],
            'horario' => $_POST['hora'],
            'id_lote' => $_POST['id_lote'],
            'descripcion' => $_POST['descripcion'],

        ];
        

        $success = $this->model->updateRemate($data);
        if ($success) {
            header("Location: index.php");
        } else {
            echo "Error al actualizar el remate";
        }
    }
    
    public function delete($id_remate) {
        $success = $this->model->deleteRemate($id_remate);
        if ($success) {
            header("Location: index.php");
        } else {
            echo "Error al eliminar el remate";
        }
    }

    public function list() {
        $remates = $this->model->getRemates();
        require 'vista/listar.php';
    }
    
    public function getLotesDisponibles() {
        $lotesDisponibles = $this->model->getLotesDisponibles();
        return $lotesDisponibles;
    }
}
?>
