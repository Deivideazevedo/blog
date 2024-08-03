<?php
    //Iniciando a sessão:
    if (session_status() !== PHP_SESSION_ACTIVE) {
        //Definindo o prazo para a cache expirar em 60 minutos.
        session_cache_expire(60);
        session_start();
        }
    
        if ($_SESSION['logado'] != true) {
            header('Location: index.php');
            die(); //vai encerrar a função;
        }
        if(isset($_GET['sair'])){
            session_destroy(); //ao buscar sair na url, irá destruir a sessao e consequentemente voltar ao index
            header('Location: index.php');
            die(); //vai encerrar a função;
        }
?>