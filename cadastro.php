<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
   
    <main>
        <form action="cad_control.php" method="post">
            <label for="name">Nome:</label><br>
            <input type="text" name="name" id="name" require><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" require><br>
            <label for="password">Senha</label><br>
            <input type="password" name="password" id="password" require> <br>
            <br><input type="submit" name='enviar' value="Cadastrar-se">
        </form>
        <a href = 'index.php'>Voltar a pagina inicial</a>
    </main>
    
</body>

</html>