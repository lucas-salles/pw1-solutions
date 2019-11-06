<?php
    session_start();
    if(!isset($_SESSION['auth']) || $_SESSION['auth'] === false)
        header('Location: index.html');
    require_once('hostcrud.php');

    $nome = $_POST['nome'];
    $address = $_POST['address'];
    $id = $_POST['id'];
    $crud = new HostCrud();
    $crud->update($nome, $address, $id);
    header('location:home.php');
?>