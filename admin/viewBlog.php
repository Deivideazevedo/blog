<?php
    include_once('../config/connection.php');

    $id = $_GET['id']; //uma variável para carregar o id passado pela URL
    
    
    $stmt = $conectar->prepare("SELECT id, title, description, image FROM posts WHERE id=:id");
    $stmt -> bindParam(':id', $id); // ESTAVA SEM ISSO, PQ?
    $stmt->execute(array('id' => $id));
    $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);


    // Concertando o caminho da imagem pondo ../      
    foreach ($results as $indice) {
        $img = '../'.$indice["image"];
    }
    /* isso so é possivel por causa do: SELECT id, image
        e do execute array id => $id , pois ele so vai executar essa parte da id da array
    */ 
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViewBlog</title>
    <link rel="stylesheet" href="../css/style.css">

    <!-- awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Bootstrap -->

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>
 
    <section>
        <div class="">
            <div class="row row-cols-1 row-cols-md-4 g-4">

                <div class="col gy-5" style="margin-left: 20px;">

                 <?php foreach($results as $post): ?>
                    <div class="card">
                        <!-- Concertando o caminho da imagem com: <¿= $img ¿>  -->
                    <img src="<?= $img ?>" class="card-img-top" alt="<?= $post["title"] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?=$post["title"]?></h5>
                            <p class="card-text"><?=$post["description"]?></p>
                            <a href="view2.php">
                                <button type="button" class="btn btn-primary mt-3">Voltar</button>
                            </a>
                        </div>
                    </div>
                    
                  <?php endforeach;?>
                  

                </div>   
                
                
            </div>
        </div>
    </section>

    
</body>
</html>