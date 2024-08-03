<?php

    include_once ('../config/connection.php');

    $stmt = $conectar -> prepare("SELECT * FROM posts ORDER BY id");
    $stmt -> execute();

    $results = $stmt -> fetchALL(PDO::FETCH_ASSOC);

    // foreach (array as indice => essa variavel recebe o valor do indice)
    foreach ($results as $i => $row) {

        echo"$i<br>";
        foreach ($row as $key => $value) {
            echo "<strong>".$key."</strong>: ".$value."<br/>";
        }
        echo "+++++++++++++++++++<br/>";
    }

    /*

    Aprendendo como guardar o caminho da imagem na variavel ja com alteração ../

    $id = 14;
    
    $stmts = $conectar->prepare("SELECT id, image FROM posts WHERE id=:id");
    $stmts->execute(array('id' => $id));
    $resultado = $stmts -> fetchAll(PDO::FETCH_ASSOC);
    
    

   echo "<br> $id <br>";

   foreach ($resultado as $post) {
    $img = '../'.$post["image"];
   }
   echo "$img"
*/

    

?>
