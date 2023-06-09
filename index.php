<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do usuário</title>
    <link rel="stylesheet" href="estilo1.css">
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
    <section>
        <form action="cad.php" method="get">
        <label form="nome">Nome </label>
        <input type="text" name="nome" id="idnome">
        
        <label form="contato">Contato</label>
        <input type="number" name="contato" id="idcontato">

        <label form="email">Email</label>
        <input type="text" name="email" id="idemail">
        
        <input type="submit" value="Enviar">
    </form>
    </section>
</body>
</html>
