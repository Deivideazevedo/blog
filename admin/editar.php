<?php
    include_once('../config/connection.php');
    include('session.php');

    $id = $_GET['id'];
    $stmt = $conectar -> prepare('SELECT id, title, description FROM posts WHERE id=:id');
    $stmt -> execute(array('id' => $id));
    $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);

    include('header-view2.php');
?>

    <main  class="col-md-9 col-lg-10" style="height: 100vh;" id="main">
        <div class="container">
            <h1 id="main-title">Editar Post</h1>
            <form action="editar-fim.php" method="POST" enctype="multipart/form-data">

                <?php foreach ($results as $post): ?>
                    

                    <p><input type="hidden" value="<?=$post['id']?>" name="id"></p>
                    <div class="mb-3" style="width: 500px;">
                        <label for="" class="form-label">Titulo</label>
                        <input type="text" value="<?=$post['title']?>" name="title" class="form-control">
                    </div>
                    <p><textarea type="text" name="description" id="Myeditor" style="width: 500px;"><?=$post['description']?></textarea></p>          
               
                <?php endforeach; ?>
                <input type="submit" value="EDITAR" class="btn btn-primary">

            </form>
        </div>
        
    </main>
    
<?php include('footer-view2.php'); ?>