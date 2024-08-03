<?php
    include_once ('../config/connection.php');
    $id = $_GET['id'];

/* //Substituindo daqui para por la em baixo
    $stmt = $conectar->prepare("DELETE FROM posts WHERE id=:ID");    
    $stmt->bindParam(':ID', $id);
    $stmt->execute();
    echo "Registro apagado";
    */

    /* Selecionando a informação igual ao viewBlog */
    $stmt = $conectar->prepare("SELECT id, title, description, image FROM posts WHERE id=:id");
    $stmt -> bindParam(':id', $id); // ESTAVA SEM ISSO, PQ?
    $stmt->execute(array('id' => $id));
    $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);

    


    // Concertando o caminho da imagem pondo ../      
    foreach ($results as $indice) {
        $img = '../'.$indice["image"];
    }
   
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar</title>
    <!-- icone da guia -->
	<link rel="icon" href="../images/rocket.png">	
    
    <!-- css -->
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
    <main>
        <section>
                <div class="">
                    <div class="row row-cols-1 row-cols-md-4 g-4">

                        <div class="col gy-5" style="margin-left: 20px;">

                        <?php foreach($results as $post): ?>
                        
                            <div class="card">
                                <!-- Concertando o caminho da imagem com: <¿= $img ¿>  -->
                                <img src="<?= $img ?>" class="card-img-top" alt="<?= $post["title"] ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $post["title"] ?></h5>
                                    <p class="card-text mb-4">Tem certeza que deseja deletar esse Post?</p>

                                    <div class="d-flex justify-content-around">
                                        <form action="" method="POST">
                                            <input type="submit" class="btn btn-primary" value="Sim" name="confirmar"></input>                                
                                            <?php
                                                //isset verifica se a palavra confirmar foi ACIONADA pelo botão
                                                if(isset($_POST['confirmar'])):
                                                    $stmt = $conectar->prepare("DELETE FROM posts WHERE id=:ID");    
                                                    $stmt->bindParam(':ID', $id);
                                                    $stmt->execute();
                                                    session_start();
                                                    $_SESSION['UserInvalid'] = "sim";

                                                    header("Location: view2.php");   
                                                endif;
                                            ?>
                                        </form>                                

                                        <a href="view2.php">
                                            <button type="button" class="btn btn-success">Não</button>
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            
                        <?php endforeach;?>                  

                        </div>   
                        
                        
                    </div>
                </div>
        </section>
    </main>
        
    
</body>
</html>