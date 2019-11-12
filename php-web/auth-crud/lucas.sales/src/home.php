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
            <a class="nav-item nav-link" id="nav-listar-tab" data-toggle="tab" href="#nav-listar" role="tab" aria-controls="nav-listar" aria-selected="false">Listar Todos</a>
            <a class="nav-item nav-link" href="logout.php" role="tab" aria-controls="nav-listar" aria-selected="false">Sair</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-adicionar" role="tabpanel" aria-labelledby="nav-adicionar-tab">          
            <div class="box">
                <form action="create.php" method="post">
                    <h1>Adicionar</h1>
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" name="nome" id="nome" aria-describedby="nomeHelp" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="address" class="form-control" name="address" id="address" placeholder="Address">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Adicionar">
                </form>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-alterar" role="tabpanel" aria-labelledby="nav-alterar-tab">
            <div class="box">
                <form action="update.php" method="post">
                    <h1>Alterar</h1>
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" name="nome" id="nome" aria-describedby="nomeHelp" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="address" class="form-control" name="address" id="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <label for="id">id:</label>
                        <input type="id" class="form-control" name="id" id="id" placeholder="id">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Alterar">
                </form>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-deletar" role="tabpanel" aria-labelledby="nav-deletar-tab">
            <div class="box">
                <form action="delete.php" method="post">
                    <h1>Deletar</h1>
                    <div class="form-group">
                        <label for="id">id:</label>
                        <input type="id" class="form-control" name="id" id="id" placeholder="id">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Deletar">
                </form>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-listar" role="tabpanel" aria-labelledby="nav-listar-tab">
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
                <div class="box">
                    <h2>Lista vazia</h2>
                </div>
            <?php endif ?>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>