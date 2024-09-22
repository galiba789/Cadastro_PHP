<?php 
require('conectar.php');
require('cad_control.php');
$senha = $cadastro->getSenha();
$email = $cadastro->getEmail();

if(isset($senha) && isset($email)){
    if (empty($email)) {
        echo "Coloque seu email";
    } elseif (empty($senha)) {
        echo "Coloque sua senha";
    } else {
        $email = $mysqli->real_escape_string($email);
        $senha = $mysqli->real_escape_string($senha);

        $sql_code = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die('Falha na execução do codigo SQL: '.$mysqli->error);

        $quantidade = $sql_query->num_rows;
        if ($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['email'] = $usuario['email'];

            header("Location: sucess.php");
            exit;
        } else {
            echo 'Não existe ninguém com este email';
            header("Location: index.php");
            exit;
        }
    }
    mysqli_close($mysqli);
}
?>