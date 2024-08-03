<?php 
    include_once('session.php');
    include_once('header-view2.php');
?>

    <main class="col-md-9 col-lg-10" style="height: 100vh;" id="main">
        <div class="container">
        <h1 id="main-title">Inserir</h1>
        <form action="envia.php" method="POST" enctype="multipart/form-data"> <!-- opção para fazer o upload das imagens no banco: enctype="multipart/form-data" -->
            <div class="mb-3">
                <label for="" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Data</label>
                <input type="date" class="form-control" id="data" name="data" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Texto Descritivo</label>
                <textarea type="text" class="form-control" id="Myeditor" name="description"></textarea>      
            </div>
    
            <div class=" mb-3" style="width: 400px;">
                <label for="inputGroupFile02" class="form-label">Envie a Imagem</label>
                <input type="file" class="form-control" id="inputGroupFile02" name="image" required>
            </div>            
            <button type="submit" class="btn btn-primary">Publicar</button>
            
        </form>
        </div>
    </main>

<?php include_once('footer-view2.php');?>
