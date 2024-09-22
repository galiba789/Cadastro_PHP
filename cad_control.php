<?php 
require('conectar.php');

class Cadastro {
    private $nome;
    private $senha;
    private $email;

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setSenha($senha) {
        $this->senha = $senha;
    }   
    public function getSenha() {
        return $this->senha;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getEmail() {
        return $this->email;
    }
}

$cadastro = new Cadastro();
$cadastro->setNome($_POST['name']);
$cadastro->setSenha($_POST['password']);
$cadastro->setEmail($_POST['email']);


if (empty($cadastro->getNome()) || empty($cadastro->getEmail()) || empty($cadastro->getSenha())) {
    header("Location: cadastro.php");
    exit;
}

if (!filter_var($cadastro->getEmail(), FILTER_VALIDATE_EMAIL)) {
    header("Location: cadastro.php?error=invalid_email");
    exit;
}

$stmt = $strcon->prepare("SELECT COUNT(*) FROM cadastro WHERE email = ?");
$email = $cadastro->getEmail();
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();

if ($count > 0) {
    header("Location: cadastro.php?error=email_existente");
    exit;
}

$stmt = $strcon->prepare("INSERT INTO cadastro (Nome, email, senha) VALUES (?, ?, ?)"); 
$stmt->bind_param("sss", $cadastro->getNome(), $cadastro->getEmail(),$cadastro->getSenha());

if ($stmt->execute()) {
    header("Location: index.php");
    exit;
} else {
    die('Erro ao executar a inserção de dados');
}

$stmt->close();
mysqli_close($strcon);

?>