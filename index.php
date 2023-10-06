<?php
 include_once("funcoes.php");
 $conecta = conectar();
    $sql = "SELECT * FROM doces";
    $resultado = mysqli_query($conecta, $sql);
    $doce = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

    $sql = "SELECT * FROM salgados";
    $resultado = mysqli_query($conecta, $sql);
    $salgado = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Quitutes BG</title>
</head>
<style> 
        body {
            background-image: url('IMGs/fundo.jpg');
        }
        button {
			color: #ffffff;
			background-color: #000000;
			font-size: 15px;
			border: 1px solid #ffffff;
			padding: 5px 30px;
			cursor: pointer
		}
        .container {
            background-color: white;
        } 
</style>
<body>
        <div class="container">
    <h2> Loja de Quitutes Bom Gosto! </h1> <br>
    <h4> Cardapio de Doces e Salgados: </h4>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                <thead>
                    <tr>
                <th>Nome</th>
                <th>Sabor</th>
                <th>Ingredientes</th>
                <th>Preço</th>
                <th colspan="2">Opções</th>
                    </tr>
                    <?php
                     foreach($doce as $doce){
                     echo "<tr>";
                     echo "<td>" . $doce["Nome"] . "</td>";
                     echo "<td>" . $doce["Sabor"] . "</td>";
                     echo "<td>" . $doce["Ingredientes"] . "</td>";
                     echo "<td>R$" . $doce["Preço"] . "</td>";
                     echo "<td><a style='color: black' href='editQuit.php?editDoce=". $doce['id'] ."'> Editar </a></td>";
                     echo "<td><a style='color: black' href='funcoes.php?delDoce=". $doce['id'] ."'> Excluir </a></td>";
                     echo "</tr>"; }
                     ?>
                </thead>
                </table>
            </div>
            <div class="col">
                <table class="table">
                <thead>
                    <tr>
                <th>Nome</th>
                <th>Sabor</th>
                <th>Ingredientes</th>
                <th>Preço</th>
                <th colspan="2">Opções</th>
                    </tr>
                    <?php
                     foreach($salgado as $salgado){
                     echo "<tr>";
                     echo "<td>" . $salgado["Nome"] . "</td>";
                     echo "<td>" . $salgado["Sabor"] . "</td>";
                     echo "<td>" . $salgado["Ingredientes"] . "</td>";
                     echo "<td>R$" . $salgado["Preço"] . "</td>";
                     echo "<td><a style='color: black' href='editQuit.php?editSal=". $salgado['id'] ."'> Editar </a></td>";
                     echo "<td><a style='color: black' href='funcoes.php?delSal=". $salgado['id'] ."'> Excluir </a></td>";
                     echo "</tr>"; }
                     ?>
                </thead>
                </table>
            </div>
        </div>
    </div>
    <hr>
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a style='color: black' href='cadDoce.php'> Cadastrar Doce</a></li>
            <li class="breadcrumb-item"><a style='color: black' href='cadSal.php'> Cadastrar Salgado</a></li>
            </ol>
        </nav>
        <hr>
        </div>
</body>
</html>