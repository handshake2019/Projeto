
<?php

// Procediemento do Cadastro
$user = "root";
$pass = "";
$bdcon = new PDO('mysql:host=localhost;dbname=bancocadastro', $user, $pass);

$_email = $_POST["etdemail"];
//Verificar se tem usuário iguais

    $_nome = $_POST["etdnome"];
    $_email = $_POST["etdemail"];
    $_mensagem = $_POST["etdmensagem"];
    
    $sql = " INSERT INTO faleconosco(nome, email, mensagem)";
    $sql .= " VALUES (:nome, :email, :mensagem) ";

    $stmt = $bdcon->prepare($sql);
    $stmt->bindValue(':nome', $_nome);
    $stmt->bindValue(':email', $_email);
    $stmt->bindValue(':mensagem', $_mensagem);
    
    $stmt->execute();
    header("Location: confirma.php");

$bdcon = null;
?>





