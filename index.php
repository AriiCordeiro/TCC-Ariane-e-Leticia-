<?php
    

    if(isset($_POST['submit']));
{
    //print_r('<br>');
   //print_r('Nome:' . $_POST['nome']);
   // print_r('<br>');
   // print_r('Contato: ' . $_POST['contato']);
   // print_r('<br>');
   // print_r('Email:' . $_POST['email']);

   include_once('conexao.php');

   $nome =  $_POST['nome'];
   $contato = $_POST['contato'];
   $email = $_POST['email'];

   $result = mysqli_query($mysqli, "INSERT INTO tcc (nome, contato, email) VALUES ('$nome', '$contato', '$email')");
}
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do usuário</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <hr></hr>
        <label><h1>Cadastramento de usuário</h1></label> 
        <br></br>
        <center><h2>Informações do usuário:</h2></center> 
    </header>
    <section>
        <form action="index.php" method="POST">
        <label form="nome">Nome completo</label>
        <input type="text" name="nome" id="idnome">
        
        <label form="contato">Contato pessoal</label>
        <input type="number" name="contato" id="idcontato">

        <label form="email">E-mail institucional</label>
        <input type="text" name="email" id="idemail">
        
       <center> <input type="submit" name = "submit" id="submit"></center>
    </form>
    </section>
</body>
</html>
