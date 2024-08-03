<?php

    include('../config/connection.php');

    session_start();
    $login = $_POST['login'];
    $senha = $_POST['senha'];

   
    $stmt = $conectar->prepare("SELECT * FROM users WHERE login = :LOGIN AND senha = :SENHA");
    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":SENHA", $senha);

    //$stmt -> bindValue(":LOGIN", md5($senha));
    


    $stmt->execute();
       
    if($stmt->rowCount() == 1){
        $info = $stmt->fetch();
        /*print_r($info);
        exit();*/
        $_SESSION['logado']=true;
        $_SESSION['id']=$info['id'];
        $_SESSION['nome']=$info['nome'];
        $_SESSION['login']=$info['login'];
        $_SESSION['senha']=$info['senha'];

        header("Location: view2.php");

    }elseif($stmt->rowCount() > 1){
        //Vefificando se a mesma senha e usuario foi cadastrado mais de uma vez

          
        $_SESSION['UserInvalid'] = "duplicado"; // Criando session para verificar - (quem que ter antes o session_start(); para criar)
        header("Location: index.php"); 
    }
    else{
        // não houve usuario e senha cadastrado no banco

        $_SESSION['UserInvalid'] = "sim"; // Criando session para verificar - (quem que ter antes o session_start(); para criar)
        header("Location: index.php");      
    }

?>

 