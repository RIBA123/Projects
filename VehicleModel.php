<?php
class VehicleModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllModels() {
        try {
            $stmt = $this->db->prepare("SELECT * FROM vehicle_models");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return [];
        }
    }

    public function addModel($modelName) {
        try {
            $stmt = $this->db->prepare("INSERT INTO vehicle_models (model_name) VALUES (:model_name)");
            $stmt->bindParam(':model_name', $modelName);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>
