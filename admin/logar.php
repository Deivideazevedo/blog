<?php

    include('../config/connection.php');

    session_start();
    $login = $_POST['login'];

    //$senha = md5($_POST['senha']); // PROFESSOR
    $senha =  Mysenha($_POST['login'], $_POST['senha']); // O MEU (NAO QUERO ME DESFAZER DO ID 1 e nem quero mudar a senha como md5 kkk)

   
    $stmt = $conectar->prepare("SELECT * FROM users WHERE login = :LOGIN AND senha = :SENHA");
    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":SENHA", $senha);

    //$stmt -> bindValue(":LOGIN", md5($senha));
    


    $stmt->execute();
       
    if($stmt->rowCount() == 1){
        $info = $stmt->fetch(); // TESTE ISSO DEPOIS PARA PEGAR UM UNICO VALOR DE UMA ARRAY
        /*print_r($info);
        exit();*/
        $_SESSION['logado']=true;
        $_SESSION['id']=$info['id'];
        $_SESSION['nome']=$info['nome'];
        $_SESSION['login']=$info['login'];
        $_SESSION['senha']=$info['senha'];

        header("Location: view2.php");

    }elseif($stmt->rowCount() >= 1){
        //Vefificando se a mesma senha e usuario foi cadastrado mais de uma vez

          
        $_SESSION['UserInvalid'] = "duplicado"; // Criando session para verificar - (quem que ter antes o session_start(); para criar)
        header("Location: index.php"); 
    }
    else{
        // não houve usuario e senha cadastrado no banco

        $_SESSION['UserInvalid'] = "sim"; // Criando session para verificar - (quem que ter antes o session_start(); para criar)
        header("Location: index.php");      
    }


    //minha função maluca
    function Mysenha($y, $x) {
        if ($y == "deiv" and $x == 123) {
            return $x;
        }else{
            return md5($x);
        }        
    }

?>

 