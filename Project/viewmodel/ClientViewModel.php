<?php
require_once 'model/Client.php';

class ClientViewModel {
    private $client;
    // Data binding properties
    public $id;
    public $name;
    public $contact;

    public function __construct() {
        $this->client = new Client();
    }

    public function bindData($data) {
        if (isset($data['id'])) $this->id = $data['id'];
        if (isset($data['name'])) $this->name = $data['name'];
        if (isset($data['contact'])) $this->contact = $data['contact'];
    }

    public function getClientList() {
        return $this->client->getAll();
    }

    public function getClientById($id) {
        $data = $this->client->getById($id);
        $this->bindData($data);
        return $data;
    }

    public function addClient() {
        return $this->client->create($this->name, $this->contact);
    }

    public function updateClient() {
        return $this->client->update($this->id, $this->name, $this->contact);
    }

    public function deleteClient($id) {
        return $this->client->delete($id);
    }
}
?>