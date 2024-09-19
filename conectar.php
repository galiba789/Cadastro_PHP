
    <?php 
     $nome = $_POST['name'];
     $email = $_POST['email'];
     $senha = $_POST['password'];
    
     $strcon = mysqli_connect('localhost', 'galiba', '123', 'teste_gabriel');
     if (!$strcon) {
        die('Erro ao conectar no Banco de dados requisitado');
        header('Location: cadastro.php');
        exit;
     }
     
     $sql = "INSERT INTO cadastro(Nome, email, senha) VALUES ('$nome','$email','$senha')";
     $resultado = mysqli_query($strcon,$sql) or die('Erro ao executar a inserção de dados');
     
     mysqli_close($strcon);
     header('Location: index.php');  
     exit;   
    ?>
