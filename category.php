<?php
    include_once('config/connection.php');

    $cat = $_GET['cat'];

    //echo "$cat";

    $stmt = $conectar -> prepare("SELECT id, title, image, description, data FROM posts WHERE category =:cat");
    
    $stmt -> execute(array('cat' => $cat)); // um array onde cat receber cat
    
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    include "header.php";
?>
    <section>
        <?php foreach($results as $post): ?>
           
            <div class="col-md-2 .text-break" style="margin-left: 20px; word-wrap: break-word;"> <!-- word-wrap: break-word; faz quebrar conforme o texto e a largura da div -->
                <h1><?= $post["title"] ?></h1>
                <p><img src="<?= $post["image"] ?>" alt="imagem" class="card-img-top"></p>
                <p><?= $post["description"] ?></p>
                <p><?= date('d/m/Y', strtotime($post["data"])); ?></p>
            </div>
            
            
        <?php endforeach; ?>
    </section>
    
<?php include "footer.php"; ?>
