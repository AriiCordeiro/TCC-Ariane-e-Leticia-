<?php
    $hostname = "localhost";
    $database = "formulario_tcc";
    $usuario = "root";
    $senha = "";    

    $mysqli = new mysqli($hostname, $usuario, $senha, $database);
    // if($mysqli->connect_errno){
    //     echo "Falha ao conectar :(" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
    //  }
    // else
    //     echo "Conectado ao Banco de Dados";
?>
