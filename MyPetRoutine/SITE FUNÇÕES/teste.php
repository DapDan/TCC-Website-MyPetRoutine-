<?php
session_start();

include_once("config.php");
$raca = $_POST['raca'];
$username = $_POST['username'];
$age = $_POST['age'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['endereco'];
$city = $_POST['city'];
$country = $_POST['country'];
$postal_code = $_POST['postal_code'];
$about_me = $_POST['about_me'];

if (!$conn) {
    die('Não foi possível conectar ao Banco de Dados');
}

$sql = "INSERT INTO perfil VALUES ";
$sql .= "('$raca', '$username', '$age', '$first_name', '$last_name', '$address',
        '$city', '$country', '$postal_code', '$about_me')"; 

mysqli_query($conn,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($conn);

echo "Cliente cadastrado!<br>";
echo "<a href='dashboard.php'>Clique aqui para voltar</a>";
?>