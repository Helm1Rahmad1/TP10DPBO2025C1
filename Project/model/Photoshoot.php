<?php
require_once 'config/Database.php';

class Photoshoot {
    private $conn;
    private $table = 'photoshoot';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $query = "SELECT ps.*, c.name as client_name, p.name as photographer_name 
                 FROM " . $this->table . " ps 
                 JOIN client c ON ps.client_id = c.id 
                 JOIN photographer p ON ps.photographer_id = p.id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT ps.*, c.name as client_name, p.name as photographer_name 
                 FROM " . $this->table . " ps 
                 JOIN client c ON ps.client_id = c.id 
                 JOIN photographer p ON ps.photographer_id = p.id 
                 WHERE ps.id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($client_id, $photographer_id, $date, $location, $status) {
        $query = "INSERT INTO " . $this->table . " (client_id, photographer_id, date, location, status) 
                 VALUES (:client_id, :photographer_id, :date, :location, :status)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':client_id', $client_id);
        $stmt->bindParam(':photographer_id', $photographer_id);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':status', $status);
        return $stmt->execute();
    }

    public function update($id, $client_id, $photographer_id, $date, $location, $status) {
        $query = "UPDATE " . $this->table . " 
                 SET client_id = :client_id, photographer_id = :photographer_id, 
                     date = :date, location = :location, status = :status 
                 WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':client_id', $client_id);
        $stmt->bindParam(':photographer_id', $photographer_id);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}

?>