<?php
 include_once("funcoes.php");
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
        button {
			color: #000000;
			background-color: #ffffff;
			font-size: 15px;
			border: 1px solid #ffffff;
			padding: 5px 30px;
			cursor: pointer
		}
		button:hover {
			color: #ffffff;
			background-color: #000000;
		}
</style>
<body>
        <div class="container">
    <h2> Loja de Quitutes Bom Gosto! </h1> <br>
    <h4> Cardapio de Doces e Salgados: </h4>
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
                </thead>
                </table>
            </div>
        </div>
    </div>
        </div>
</body>
</html>