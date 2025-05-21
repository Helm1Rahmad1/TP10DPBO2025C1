<?php
require_once 'viewmodel/PhotographerViewModel.php';
require_once 'viewmodel/ClientViewModel.php';
require_once 'viewmodel/PhotoshootViewModel.php';

$entity = isset($_GET['entity']) ? $_GET['entity'] : 'photoshoot';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

if ($entity == 'photographer') {
    $viewModel = new PhotographerViewModel();
    
    if ($action == 'list') {
        $photographerList = $viewModel->getPhotographerList();
        require_once 'views/photographer_list.php';
    } 
    elseif ($action == 'add') {
        require_once 'views/photographer_form.php';
    } 
    elseif ($action == 'edit') {
        $viewModel->getPhotographerById($_GET['id']);
        require_once 'views/photographer_form.php';
    } 
    elseif ($action == 'save') {
        $viewModel->bindData($_POST);
        $viewModel->addPhotographer();
        header('Location: index.php?entity=photographer');
        exit;
    } 
    elseif ($action == 'update') {
        $viewModel->bindData(['id' => $_GET['id']] + $_POST);
        $viewModel->updatePhotographer();
        header('Location: index.php?entity=photographer');
        exit;
    } 
    elseif ($action == 'delete') {
        $viewModel->deletePhotographer($_GET['id']);
        header('Location: index.php?entity=photographer');
        exit;
    }
}

elseif ($entity == 'client') {
    $viewModel = new ClientViewModel();
    
    if ($action == 'list') {
        $clientList = $viewModel->getClientList();
        require_once 'views/client_list.php';
    } 
    elseif ($action == 'add') {
        require_once 'views/client_form.php';
    } 
    elseif ($action == 'edit') {
        $viewModel->getClientById($_GET['id']);
        require_once 'views/client_form.php';
    } 
    elseif ($action == 'save') {
        $viewModel->bindData($_POST);
        $viewModel->addClient();
        header('Location: index.php?entity=client');
        exit;
    } 
    elseif ($action == 'update') {
        $viewModel->bindData(['id' => $_GET['id']] + $_POST);
        $viewModel->updateClient();
        header('Location: index.php?entity=client');
        exit;
    } 
    elseif ($action == 'delete') {
        $viewModel->deleteClient($_GET['id']);
        header('Location: index.php?entity=client');
        exit;
    }
}

else {
    $viewModel = new PhotoshootViewModel();
    
    if ($action == 'list') {
        $photoshootList = $viewModel->getPhotoshootList();
        require_once 'views/photoshoot_list.php';
    } 
    elseif ($action == 'add') {
        $clients = $viewModel->getClients();
        $photographers = $viewModel->getPhotographers();
        require_once 'views/photoshoot_form.php';
    } 
    elseif ($action == 'edit') {
        $viewModel->getPhotoshootById($_GET['id']);
        $clients = $viewModel->getClients();
        $photographers = $viewModel->getPhotographers();
        require_once 'views/photoshoot_form.php';
    } 
    elseif ($action == 'save') {
        $viewModel->bindData($_POST);
        $viewModel->addPhotoshoot();
        header('Location: index.php');
        exit;
    } 
    elseif ($action == 'update') {
        $viewModel->bindData(['id' => $_GET['id']] + $_POST);
        $viewModel->updatePhotoshoot();
        header('Location: index.php');
        exit;
    } 
    elseif ($action == 'delete') {
        $viewModel->deletePhotoshoot($_GET['id']);
        header('Location: index.php');
        exit;
    }
}
?>