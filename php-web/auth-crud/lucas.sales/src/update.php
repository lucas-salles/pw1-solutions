<?php
    session_start();
    if(!isset($_SESSION['auth']) || $_SESSION['auth'] === false)
        header('Location: index.html');
    require_once('hostcrud.php');

    $nome = $_POST['nome'] ?? null;
    $address = $_POST['address'] ?? null;
    $id = $_POST['id'] ?? null;
    if ($nome != null && $address != null && $id != null) {
        $crud = new HostCrud();
        $crud->update($nome, $address, $id);
    }
    header('location:home.php');
?>