<?php 
    include_once('../config/connection.php');

    $stmt = $conectar->prepare("INSERT INTO posts (title, description, data, image) VALUES(:TITLE, :DESCRIPTION, :DATA, :IMAGE)");

    $title = $_POST['title'];
    $data = $_POST['data'];
    $description = $_POST['description'];
    

    // Preparando para receber a imagem
    $arquivo = $_FILES['image'];
    
    //movendo a imagem (nomeDoarquivo,Destino)
    move_uploaded_file($arquivo['tmp_name'], '../uploads/'.$arquivo['name']);

    //guardando a imagem na variavel (caminho onde a imagem se encontra)
    $image = 'uploads/'.$arquivo['name'];

    // echo "$title $data $description <br>";
    $stmt -> bindParam(':TITLE', $title);
    $stmt -> bindParam(':DESCRIPTION', $description);
    $stmt -> bindParam(':DATA', $data);
    $stmt -> bindParam(':IMAGE', $image);

    $stmt -> execute();


    /* redirecionando o arquivo */    
    header("Location: view2.php"); /* pelo que entendi isso vai fazer voltar a pagina view2.php */

?>