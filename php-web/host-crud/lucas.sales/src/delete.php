<?php
    session_start();
    if(!isset($_SESSION['auth']) || $_SESSION['auth'] === false)
        header('Location: index.html');
    require_once('hostcrud.php');

    $id = $_POST['id'] ?? null;
    if ($id != null) {
        $crud = new HostCrud();
        $crud->delete($id);
    }
    header('location:home.php');
?>