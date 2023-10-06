<?php

include("autenticar.php");

// faz a conexão com o banco
include_once("conecta.php");

// pega o id vindo via get
$id = $_GET['editar'];

// Seleciona os dados da tabela contatos 
$sql = "SELECT * FROM contatos WHERE id=" . $id;

// Executa o Select
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_assoc($resultado);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Editar</title>
</head>

<body>
    <div class="container">
        <h1> Editar Contato </h1>
        <hr>
        <div class="row">
            <form action="processa.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>" />

                <div class="form-group">
                    <label> Nome </label>
                    <input class="form-control" type="text" name="nome" value="<?php echo $dados['nome']; ?>" required="required" />
                </div>

                <div class="form-group">
                    <label> Telefone </label>
                    <input class="form-control" type="text" name="tel" placeholder="(99)9999-9999" value="<?php echo $dados['telefone']; ?>" pattern="(\([0-9]{2}\))([9]{1})?([0-9]{4})-([0-9]{4})" title="Número de telefone precisa ser no formato (99)9999-9999" required="required" />
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="editar"> Editar </button>
                </div>

            </form>
        </div>

        <hr>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="contatos.php">Agenda de Contatos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar</li>
            </ol>
        </nav>

    </div>
</body>

</html>