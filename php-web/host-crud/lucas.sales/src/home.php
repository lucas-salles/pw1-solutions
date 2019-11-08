<?php
    session_start();
    if(!isset($_SESSION['auth']) || $_SESSION['auth'] === false)
        header('Location: index.html');

    require_once('hostcrud.php');
    $crud = new HostCrud();
    $hosts = $crud->readAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-adicionar-tab" data-toggle="tab" href="#nav-adicionar" role="tab" aria-controls="nav-adicionar" aria-selected="true">Adicionar</a>
            <a class="nav-item nav-link" id="nav-alterar-tab" data-toggle="tab" href="#nav-alterar" role="tab" aria-controls="nav-alterar" aria-selected="false">Alterar</a>
            <a class="nav-item nav-link" id="nav-deletar-tab" data-toggle="tab" href="#nav-deletar" role="tab" aria-controls="nav-deletar" aria-selected="false">Deletar</a>
            <a class="nav-item nav-link" id="nav-ver-tab" data-toggle="tab" href="#nav-ver" role="tab" aria-controls="nav-ver" aria-selected="false">Ver Todos</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-adicionar" role="tabpanel" aria-labelledby="nav-adicionar-tab">
            <h2>Adicionar</h2>
            <form action="create.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" placeholder="nome">
                <label for="address">Address:</label>
                <input type="text" name="address" placeholder="address">
                <input class="btn btn-outline-secondary" class="btn btn-outline-secondary" type="submit" value="Adicionar">
            </form>
        </div>
        <div class="tab-pane fade" id="nav-alterar" role="tabpanel" aria-labelledby="nav-alterar-tab">
            <h2>Alterar</h2>
            <form action="update.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" placeholder="nome">
                <label for="address">Address:</label>
                <input type="text" name="address" placeholder="address">
                <label for="id">id:</label>
                <input type="text" name="id" placeholder="id">
                <input class="btn btn-outline-secondary" type="submit" value="Alterar">
            </form>
        </div>
        <div class="tab-pane fade" id="nav-deletar" role="tabpanel" aria-labelledby="nav-deletar-tab">
            <h2>Deletar</h2>
            <form action="delete.php" method="post">
                <label for="id">id:</label>
                <input type="text" name="id" placeholder="id">
                <input class="btn btn-outline-secondary" type="submit" value="Deletar">
            </form>
        </div>
        <div class="tab-pane fade" id="nav-ver" role="tabpanel" aria-labelledby="nav-ver-tab">
            <?php if (sizeof($hosts) != 0): ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($hosts as $host): ?>
                            <tr>
                                <th scope="row"><?php echo $host['id'] ?></th>
                                <td><?php echo $host['name'] ?></td>
                                <td><?php echo $host['address'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            <?php else: ?>
                <h2>Lista vazia</h2>
            <?php endif ?>
        </div>
    </div>

    
    <a href="logout.php" class="sair btn btn-primary">Sair</a>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>