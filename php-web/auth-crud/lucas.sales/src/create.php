<?php
    session_start();
    if(!isset($_SESSION['auth']) || $_SESSION['auth'] === false)
        header('Location: index.html');
    require_once('hostcrud.php');

    $nome = $_POST['nome'] ?? null;
    $address = $_POST['address'] ?? null;
    if ($nome != null && $address != null) {
        $crud = new HostCrud();
        $crud->create($nome, $address);
    }
    header('location: home.php');
?>