

<?php

// Procediemento do Cadastro
$user = "root";
$pass = "";
$bdcon = new PDO('mysql:host=localhost;dbname=bancocadastro', $user, $pass);

$_usuario = $_POST["etdusuario"];
//Verificar se tem usuário iguais

$sqlSelect = " SELECT usuario, nome, data, email, senha ";
$sqlSelect .= " FROM cadastro ";
$sqlSelect .= " WHERE usuario = :usuario ";
$stmtSelect = $bdcon->prepare($sqlSelect);
$stmtSelect->bindValue(':usuario', $_usuario);
$stmtSelect->execute();
if ($stmtSelect->rowCount() > 0) {

    echo "O usuário já se encontra cadastrado";
} else {
    $_nome = $_POST["etdnome"];
    $_data = $_POST["etddata"];
    $_email = $_POST["etdemail"];
    $_senha = $_POST["etdsenha"];
    $sql = " INSERT INTO cadastro(usuario, nome, data, email, senha)";
    $sql .= " VALUES (:usuario, :nome, :data, :email, :senha) ";

    $stmt = $bdcon->prepare($sql);
    $stmt->bindValue(':usuario', $_usuario);
    $stmt->bindValue(':nome', $_nome);
    $stmt->bindValue(':data', $_data);
    $stmt->bindValue(':email', $_email);
    $stmt->bindValue(':senha', $_senha);
    $stmt->execute();
    echo "com sucesso";
}
$bdcon = null;
?>
