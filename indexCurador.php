<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do curador</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    

    <header>
<div></div>
        <hr></hr>

        <label><h1>Cadastramento de curador de coleção</h1></label> 
        <br></br>
        <center><h2>Informações do curador:</h2></center> 
    </header>
    <section>
        <form action="index.php" method="POST">
        <label form="nome">Nome completo</label>
        <input type="text" name="nome" id="idnome">
        
        <label form="contato">Contato de trabalho:</label>
        <input type="number" name="contatoTrabalho" id="idcontatoTrabalho">

        <label form="email">E-mail institucional</label>
        <input type="text" name="email" id="idemail">

        <label form="instituicao">Instituiçõa que atua:</label>
        <input type="text" name="instituicao" id="idinstituicao">
        
       <center> <input type="submit" name = "submit" id="submit"></center>
    </form>
    </section>
</body>
</html>
