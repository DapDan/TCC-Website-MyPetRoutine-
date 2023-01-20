<?php
  //  define("DB_HOST", "Localhost");
  //  define("DB_USER", "root");
  //  define('DB_PASSWORD', 'hello');
  //  define("DB_DATABASE", "formulario_danilo");

  //  $conexao = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario_danilo';

    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if($conn->connect_errno){
        echo "Erro grave";
        //die("Connection failed: " . $conn->connect_error);
    }
?>