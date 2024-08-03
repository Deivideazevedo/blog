<?php
    include ('config/connection.php');
    include ('header.php');
    /* Sim, ele vai receber id via URL ao clicar no titulo do card no index (olhe o href)*/
    $id=$_GET['id'];

    $stmt = $conectar -> prepare("SELECT * FROM posts WHERE id=:id");
    $stmt -> execute(array('id'=>$id));

    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

    <!-- Viewblog -->
    <!-- <div class="container">
        <?php foreach($results as $post): ?>
            <h1><?=$post['title']?></h1>
            <p><?=date('d/m/Y',strtotime($post['data']));?></p>
            <p><img src="<?=$post['image']?>" alt="<?=$post['title']?>"></p>
            <p><?=$post['description'] ?></p>
        <?php endforeach;?>
    </div> -->

    <section>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">

                <div class="col gy-5" >

                 <?php foreach($results as $post): ?>
                    <div class="card">
                        <h1 class="card-title"><?=$post["title"]?></h1>
                         <p><?=date('d/m/Y',strtotime($post['data']));?></p>
                                                 
                        <img src="<?= $post["image"] ?>" class="card-img-top" alt="<?= $post["title"] ?>">
                        <div class="card-body">                                            
                            <p class="card-text"><?=$post["description"]?></p>
                        </div>
                    </div>
                  <?php endforeach;?>

                </div>        

            </div>
        </div>
    </section>


    <!-- Footer -->
<?php include ('footer.php'); ?>