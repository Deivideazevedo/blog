<?php
    include_once('../config/connection.php');

    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = md5($_POST['senha']); //criptografia md5 - necessário também na pag do login
    //echo "$nome $login $senha";

    //preparar
    $stmt = $conectar -> prepare("INSERT INTO users(nome,login,senha) VALUES(:nome, :login, :senha)");
    
    //tratar
    $stmt -> bindParam(":nome", $nome);
    $stmt -> bindParam(":login", $login);
    $stmt -> bindParam(":senha", $senha);

    //executar
    $stmt -> execute();

    header("Location: index.php");

?>