<?php
require_once 'model/Photographer.php';

class PhotographerViewModel {
    private $photographer;
    // Data binding properties
    public $id;
    public $name;
    public $specialty;

    public function __construct() {
        $this->photographer = new Photographer();
    }

    public function bindData($data) {
        if (isset($data['id'])) $this->id = $data['id'];
        if (isset($data['name'])) $this->name = $data['name'];
        if (isset($data['specialty'])) $this->specialty = $data['specialty'];
    }

    public function getPhotographerList() {
        return $this->photographer->getAll();
    }

    public function getPhotographerById($id) {
        $data = $this->photographer->getById($id);
        $this->bindData($data);
        return $data;
    }

    public function addPhotographer() {
        return $this->photographer->create($this->name, $this->specialty);
    }

    public function updatePhotographer() {
        return $this->photographer->update($this->id, $this->name, $this->specialty);
    }

    public function deletePhotographer($id) {
        return $this->photographer->delete($id);
    }
}
?>