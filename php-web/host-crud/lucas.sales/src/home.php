<?php
    session_start();
    if(!isset($_SESSION['auth']) || $_SESSION['auth'] === false)
        header('Location: index.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Home</h1>

    <h2>Adicionar</h2>
    <form action="create.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" placeholder="nome"><br>
        <label for="address">Address:</label><br>
        <input type="text" name="address" placeholder="address"><br>
        <input type="submit" value="Adicionar">
    </form>

    <h2>Alterar</h2>
    <form action="update.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" placeholder="nome"><br>
        <label for="address">Address:</label><br>
        <input type="text" name="address" placeholder="address"><br>
        <label for="id">id:</label><br>
        <input type="text" name="id" placeholder="id"><br>
        <input type="submit" value="Alterar">
    </form>

    <h2>Deletar</h2>
    <form action="delete.php" method="post">
        <label for="id">id:</label><br>
        <input type="text" name="id" placeholder="id">
        <input type="submit" value="Deletar">
    </form>
    <a href="read.php">Ver todos</a><br>
    <a href="logout.php">logout</a>
</body>
</html>