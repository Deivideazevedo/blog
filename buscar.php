<?php
    include_once('config/connection.php');      

    // $buscar = $_POST['buscar'];
    
    // $stmt = $conectar->prepare("SELECT * FROM posts WHERE title LIKE '%$buscar%'"); // o % antes e depois da palavra permite que a palavra procurada esteja em qualquer posição do título
    // $stmt->execute();
    // $search = $stmt->fetchAll();

    $buscar = $_POST['buscar'];
    $stmt = $conectar->prepare("SELECT * FROM posts WHERE title LIKE '%$buscar%'"); // o % antes e depois da palavra permite que a palavra procurada esteja em qualquer posição do título
    $stmt->execute();
    $search = $stmt->fetchAll();

    include('header.php'); 
?>

    <div class="container">
        <h2>Resultado da busca</h2>
        <?php foreach($search as $key => $value): ?>

            <h5 class="card-title"> 
                <a href="viewPost.php?id=<?= $value["id"] ?>">	<?= $value["title"] ?></a>
            </h5>
            
        <?php endforeach; ?>
    </div>

<?php include "footer.php"; ?>