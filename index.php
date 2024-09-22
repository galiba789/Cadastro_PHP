<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <main>
        <form action="login_control.php" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <label for="sen">Senha:</label>
            <input type="password" name="sen" id="sen" required>
            <input type="submit" value="Enviar">
        </form>

        
        <br>
        <a href="cadastro.php">Cadastrar-se</a>   
    </main>
</body>
</html>