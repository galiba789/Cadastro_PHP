<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once ('conectar.php');
    ?>
    <main>
        <form action=".php" method="post">
            <label for="usu">Usuario:</label>
            <input type="text" name="usu" id="usu"require>
            <label for="sen">Senha</label>
            <input type="password" name="sen" id="sen"require>
            <input type="submit" value="Enviar">
        </form>
       
        <a href="cadastro.php">
            <br><input type="submit" value="Cadastrar-se">
        </a>    
    </main>
</body>
</html>