<?php
require_once 'model/Photoshoot.php';
require_once 'model/Client.php';
require_once 'model/Photographer.php';

class PhotoshootViewModel {
    private $photoshoot;
    private $client;
    private $photographer;
    
    // Data binding properties
    public $id;
    public $client_id;
    public $photographer_id;
    public $date;
    public $location;
    public $status;

    public function __construct() {
        $this->photoshoot = new Photoshoot();
        $this->client = new Client();
        $this->photographer = new Photographer();
    }

    public function bindData($data) {
        if (isset($data['id'])) $this->id = $data['id'];
        if (isset($data['client_id'])) $this->client_id = $data['client_id'];
        if (isset($data['photographer_id'])) $this->photographer_id = $data['photographer_id'];
        if (isset($data['date'])) $this->date = $data['date'];
        if (isset($data['location'])) $this->location = $data['location'];
        if (isset($data['status'])) $this->status = $data['status'];
    }

    public function getPhotoshootList() {
        return $this->photoshoot->getAll();
    }

    public function getPhotoshootById($id) {
        $data = $this->photoshoot->getById($id);
        $this->bindData($data);
        return $data;
    }

    public function getClients() {
        return $this->client->getAll();
    }

    public function getPhotographers() {
        return $this->photographer->getAll();
    }

    public function addPhotoshoot() {
        return $this->photoshoot->create(
            $this->client_id, 
            $this->photographer_id, 
            $this->date, 
            $this->location, 
            $this->status
        );
    }

    public function updatePhotoshoot() {
        return $this->photoshoot->update(
            $this->id,
            $this->client_id, 
            $this->photographer_id, 
            $this->date, 
            $this->location, 
            $this->status
        );
    }

    public function deletePhotoshoot($id) {
        return $this->photoshoot->delete($id);
    }
}
?>