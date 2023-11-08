<?php

class RemateModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function createRemate($data) {
        $query = "INSERT INTO remates (nombre_remate, fecha, horario,descripcion ,id_lote) VALUES (:nombre_remate, :fecha, :horario,:descripcion ,:id_lote)";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nombre_remate', $data['nombre_remate']);
        $stmt->bindParam(':fecha', $data['fecha']);
        $stmt->bindParam(':horario', $data['horario']);
        $stmt->bindParam(':id_lote', $data['id_lote']);
        $stmt->bindParam(':descripcion', $data['descripcion']);
        return $stmt->execute();
    }
    
    

    public function updateRemate($data) {
        $query = "UPDATE remates SET nombre_remate = :nombre_remate, fecha = :fecha, hora = :horario, id_lote = :id_lote, descripcion = : descripcion WHERE id_remate = :id_remate";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nombre_remate', $data['nombre_remate']);
        $stmt->bindParam(':fecha', $data['fecha']);
        $stmt->bindParam(':horario', $data['hora']);
        $stmt->bindParam(':id_lote', $data['id_lote']);
        $stmt->bindParam(':id_remate', $data['id_remate']);
        $stmt->bindParam(':descripcion', $data['descripcion']);
    
        return $stmt->execute();
    }
    
    
    

    public function deleteRemate($id_remate) {
        $query = "DELETE FROM remates WHERE id_remate = :id_remate";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_remate', $id_remate);

        return $stmt->execute();
    }

    public function getRemates() {
        $query = "SELECT remates.*, lotes.nombre_lote FROM remates LEFT JOIN lotes ON remates.id_lote = lotes.id_lote";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function getLotesDisponibles() {
        $query = "SELECT * FROM lotes";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRemate($id_remate) {
        $query = "SELECT * FROM remates WHERE id_remate = :id_remate";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_remate', $id_remate);
        $stmt->execute();
    
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }



}

?>
