<?php 
require('conectar.php');
require('cad_control.php');
$senha = $cadastro->getSenha();

if (isset($login)){
    $verify = mysqli_query('SELECT * FROM cadastro(email, senha) WHERE email = "$email" AND senha ="$senha"') 
    or die("Erro ao selecionar");


}

?>