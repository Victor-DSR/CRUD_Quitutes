<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastrar</title>
</head>
<body>

    <div class="container">
        <h1> Cadastrar Doce </h1>
        <hr>
        <div class="row">

            <form action="processa.php" method="POST">

                <div class="form-group">
                    <label> Nome </label>
                    <input class="form-control" type="text" name="nom" required="required" />
                </div>

                <div class="form-group">
                    <label> Sabor </label>
                    <input class="form-control" type="sab" name="tel"/>
                </div>

                <div class="form-group">
                    <label> Ingredientes </label>
                    <textarea class="form-control" name="ing" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label> Preço </label>
                    <input class="form-control" type="prc" name="tel"/>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="cadastrar"> Cadastrar </button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>