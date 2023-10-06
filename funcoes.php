<?php
function conectar(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $banco = "loja";

    $conect = mysqli_connect($host, $user, $password, $banco);
    if ($conect) {
        return $conect;
    } else {
        die("Problemas ao acessar o banco de dados. Erro: " . mysqli_connect_errno() . "" . mysqli_connect_error());
    }
} 
if (isset($_POST['cadDoce'])) {
    $nome = $_POST['nom'];
    $sabor = $_POST['sab'];
    $ingrediente = $_POST['ing'];
    $preco = $_POST['prc'];

    $sql = "INSERT INTO doces (Nome, Sabor, Ingredientes, Preço) VALUES ('$nome','$sabor','$ingrediente','$preco')";
    mysqli_query(conectar(), $sql);
    header("location:index.php");
}
if (isset($_POST['cadSal'])) {
    $nome = $_POST['nom'];
    $sabor = $_POST['sab'];
    $ingrediente = $_POST['ing'];
    $preco = $_POST['prc'];

    $sql = "INSERT INTO salgados (Nome, Sabor, Ingredientes, Preço) VALUES ('$nome','$sabor','$ingrediente','$preco')";
    mysqli_query(conectar(), $sql);
    header("location:index.php");
}
if (isset($_GET['delDoce'])) {
    $id = $_GET['delDoce'];

    $sql = "DELETE FROM doces WHERE id=$id";
    mysqli_query(conectar(), $sql);
    header("Location:index.php");
}
if (isset($_GET['delSal'])) {
    $id = $_GET['delSal'];

    $sql = "DELETE FROM salgados WHERE id=$id";
    mysqli_query(conectar(), $sql);
    header("Location:index.php");
}
if (isset($_POST['editDoce'])) {
    $id = $_POST['id'];
    $nome = $_POST['nom'];
    $sabor = $_POST['sab'];
    $ingrediente = $_POST['ing'];
    $preco = $_POST['prc'];

    $sql = "UPDATE `doces` SET `Nome` = '$nome', `Sabor` = '$sabor', `Ingredientes` = '$ingrediente', `Preço` = '$preco' WHERE `doces`.`id` = $id;";
    mysqli_query(conectar(), $sql);
    header("Location:index.php");
}
if (isset($_POST['editSal'])) {
    $id = $_POST['id'];
    $nome = $_POST['nom'];
    $sabor = $_POST['sab'];
    $ingrediente = $_POST['ing'];
    $preco = $_POST['prc'];

    $sql = "UPDATE `salgados` SET `Nome` = '$nome', `Sabor` = '$sabor', `Ingredientes` = '$ingrediente', `Preço` = '$preco' WHERE `salgados`.`id` = $id;";
    mysqli_query(conectar(), $sql);
    header("Location:index.php");
}
?>