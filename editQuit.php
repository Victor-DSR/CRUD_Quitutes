<?php
include_once("funcoes.php");
if(isset($_GET['editDoce']) == TRUE){
    $aux = "editDoce";
    $id = $_GET['editDoce'];
    $sql = "SELECT * FROM doces WHERE id=" . $id;   
        $resultado = mysqli_query(conectar(), $sql);
        $dados = mysqli_fetch_assoc($resultado); 
} else{
    $aux = "editSal";
    $id = $_GET['editSal'];
    $sql = "SELECT * FROM salgados WHERE id=" . $id;   
        $resultado = mysqli_query(conectar(), $sql);
        $dados = mysqli_fetch_assoc($resultado);
}
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
        <h1> Editar Cardapio</h1>
        <hr>
        <div class="row">
            <form action="processa.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>" />

                <div class="form-group">
                    <label> Nome: </label>
                    <input class="form-control" type="text" name="nome" value="<?php echo $dados['Nome']; ?>"/>
                </div>

                <div class="form-group">
                    <label> Sabor: </label>
                    <input class="form-control" type="text" name="nome" value="<?php echo $dados['Sabor']; ?>"/>
                </div>

                <div class="form-group">
                    <label> Ingredientes: </label>
                    <input class="form-control" type="text" name="nome" value="<?php echo $dados['Ingredientes']; ?>"/>
                </div>

                <div class="form-group">
                    <label> Preço: </label>
                    <input class="form-control" type="text" name="nome" value="<?php echo $dados['Preço']; ?>"/>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="<?php echo $aux;?>"> Editar </button>
                </div>

            </form>
        </div>
        <hr>
    </div>
</body>

</html>