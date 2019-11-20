<?php
    session_start();
    $login = $_POST['login'] ?? null;
    $password = $_POST['password'] ?? null;

    require_once('userdatabase.php');
    if ($login != null && $password != null) {
        $db = new UserDatabase();
        $user = $db->read($login);
        if ($user != null && password_verify($password.$login, $user['password'])) {
            $_SESSION['auth'] = true;
            header('location: home.php');
        } else
            header('location: index.html');
    } else
        header('location: index.html');
?>