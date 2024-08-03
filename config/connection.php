<?php
    try {
        $conectar = new PDO("mysql:dbname=blog; host=localhost", "root", "");
    //    echo "CONEXAO OK <br>";
    } catch (Exception $e) {
          echo "Erro de conexão: " . $e->getMessage();
    }
?>